<?php
/**
 * User: Umutcan Onal
 * Date: 22.05.2014
 * Time: 17:22
 */

namespace Sherlock\requests;

use \Elasticsearch\Client;

class UpdateDocumentRequest {
    /**
     * @var \Elasticsearch\Client
     */
    protected $esClient;

    /**
     * @var array
     */
    protected $params;

    public function __construct($esClient)
    {

        $this->esClient = $esClient;

        $this->params['index'] = null;
        $this->params['type']  = null;
        $this->params['id']  = null;
        $this->params['updateScript'] = null;
        $this->params['updateParams'] = null;
        $this->params['updateUpsert'] = null;
        $this->params['doc']          = null;

    }

    /**
     * @param $name
     * @param $args
     *
     * @return UpdateDocumentRequest
     */
    public function __call($name, $args)
    {
        $this->params[$name] = $args[0];

        return $this;
    }

    /**
     * @param $id
     *
     * @return UpdateDocumentRequest
     */
    public function document($id)
    {
        $this->params['id'] = $id;
        return $this;
    }

    /**
     * Set the index to add documents to
     *
     * @param  string               $index     indices to query
     * @param  string               $index,... indices to query
     *
     * @return UpdateDocumentRequest
     */
    public function index($index)
    {
//        $this->params['index'] = array();
//        $args                  = func_get_args();
//        foreach ($args as $arg) {
//            $this->params['index'][] = $arg;
//        }
        $this->params['index'] = $index;
        return $this;
    }

    public function type($type)
    {
//        $this->params['type'] = array();
//        $args                 = func_get_args();
//        foreach ($args as $arg) {
//            $this->params['type'][] = $arg;
//        }
        $this->params['type'] = $type;
        return $this;
    }

    public function execute()
    {
        $body = array();
        if ($this->params['updateScript'] !== null) {
            $body['script'] = $this->params['updateScript'];
        }

        if ($this->params['doc'] !== null) {
            $body['body']['doc'] = $this->params['doc'];
        }

        if ($this->params['updateParams'] !== null) {
            $body['body']["params"] = $this->params['updateParams'];
        }

        if ($this->params['updateUpsert'] !== null) {
            $body['body']["upsert"] = $this->params['updateUpsert'];
        }

        $params['index']=$this->params['index'];
        $params['type']=$this->params['type'];
        $params['id']=$this->params['id'];
        $params['body']=$body;

        return $this->esClient->update($params);
    }
} 