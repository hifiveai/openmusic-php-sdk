<?php

/*
 * client接口实现
 */

class DefaultClient implements HFClient {

    public $profile;

    function __construct($profile) {
        $this->profile = $profile;
    }

    public function getResponse($request, $signer = null, $credential = null) {
        $response = $this->doAction($request, $signer, $credential);
        return $this->parseResponse($response, $request->getAcceptFormat());
    }

    public function doAction($request, $signer = null, $credential = null) {
        if (null == $this->profile && (null == $signer || null == $credential)) {
            throw new OpenApiException('No active profile found.', 'InvalidProfile');
        }
        if (null == $signer) {
            $signer = $this->profile->getSigner();
        }
        if (null == $credential) {
            $credential = $this->profile->getCredential();
        }
        return HttpHelper::curl($this->profile->getEndpoint(),
            $request->getMethod(),
            $request->getParam(),
            $this->prepareHeaders($signer, $request, $credential));
    }

    private function prepareHeaders($signer, $request, $credential) {
        $header = array(
            'X-HF-Action' => $request->getActionName(),
            'X-HF-Version' => $request->getVersion(),
            'X-HF-AppId' => $credential->getAppId(),
            'X-HF-Nonce' => Helper::randomTron(),
            'X-HF-ClientId' => $request->getClientId(),
            'Authorization' => 'HF3-HMAC-SHA1',
            'X-HF-Timestamp' => Helper::milliSecond()
        );

        $header['Authorization'] .= ' Signature=' . $signer->signString($header,
                $request->getMethod(),
                $request->getParam(),
                $credential->getAppSecret());
        if ($this->profile->getToken()) {
            $header['X-HF-Token'] = $this->profile->getToken();
        }

        return $header;
    }

    private function parseResponse($body, $format) {
        switch ($format) {
            case 'JSON':
                return json_decode($body);
            case 'XML':
                return simplexml_load_string($body);
            default:
                return $body;
        }
    }
}
