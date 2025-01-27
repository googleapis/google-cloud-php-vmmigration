<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmmigration/v1/vmmigration.proto

namespace Google\Cloud\VMMigration\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for 'CreateDatacenterConnector' request.
 *
 * Generated from protobuf message <code>google.cloud.vmmigration.v1.CreateDatacenterConnectorRequest</code>
 */
class CreateDatacenterConnectorRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The DatacenterConnector's parent.
     * Required. The Source in where the new DatacenterConnector will be created.
     * For example:
     * `projects/my-project/locations/us-central1/sources/my-source`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The datacenterConnector identifier.
     *
     * Generated from protobuf field <code>string datacenter_connector_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $datacenter_connector_id = '';
    /**
     * Required. The create request body.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.DatacenterConnector datacenter_connector = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $datacenter_connector = null;
    /**
     * A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server will guarantee
     * that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and t
     * he request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4;</code>
     */
    protected $request_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The DatacenterConnector's parent.
     *           Required. The Source in where the new DatacenterConnector will be created.
     *           For example:
     *           `projects/my-project/locations/us-central1/sources/my-source`
     *     @type string $datacenter_connector_id
     *           Required. The datacenterConnector identifier.
     *     @type \Google\Cloud\VMMigration\V1\DatacenterConnector $datacenter_connector
     *           Required. The create request body.
     *     @type string $request_id
     *           A request ID to identify requests. Specify a unique request ID
     *           so that if you must retry your request, the server will know to ignore
     *           the request if it has already been completed. The server will guarantee
     *           that for at least 60 minutes since the first request.
     *           For example, consider a situation where you make an initial request and t
     *           he request times out. If you make the request again with the same request
     *           ID, the server can check if original operation with the same request ID
     *           was received, and if so, will ignore the second request. This prevents
     *           clients from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmmigration\V1\Vmmigration::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The DatacenterConnector's parent.
     * Required. The Source in where the new DatacenterConnector will be created.
     * For example:
     * `projects/my-project/locations/us-central1/sources/my-source`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The DatacenterConnector's parent.
     * Required. The Source in where the new DatacenterConnector will be created.
     * For example:
     * `projects/my-project/locations/us-central1/sources/my-source`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The datacenterConnector identifier.
     *
     * Generated from protobuf field <code>string datacenter_connector_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDatacenterConnectorId()
    {
        return $this->datacenter_connector_id;
    }

    /**
     * Required. The datacenterConnector identifier.
     *
     * Generated from protobuf field <code>string datacenter_connector_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDatacenterConnectorId($var)
    {
        GPBUtil::checkString($var, True);
        $this->datacenter_connector_id = $var;

        return $this;
    }

    /**
     * Required. The create request body.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.DatacenterConnector datacenter_connector = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\VMMigration\V1\DatacenterConnector|null
     */
    public function getDatacenterConnector()
    {
        return $this->datacenter_connector;
    }

    public function hasDatacenterConnector()
    {
        return isset($this->datacenter_connector);
    }

    public function clearDatacenterConnector()
    {
        unset($this->datacenter_connector);
    }

    /**
     * Required. The create request body.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.DatacenterConnector datacenter_connector = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\VMMigration\V1\DatacenterConnector $var
     * @return $this
     */
    public function setDatacenterConnector($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VMMigration\V1\DatacenterConnector::class);
        $this->datacenter_connector = $var;

        return $this;
    }

    /**
     * A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server will guarantee
     * that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and t
     * he request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4;</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server will guarantee
     * that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and t
     * he request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

