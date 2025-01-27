<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmmigration/v1/vmmigration.proto

namespace Google\Cloud\VMMigration\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for 'GetUtilizationReport' request.
 *
 * Generated from protobuf message <code>google.cloud.vmmigration.v1.GetUtilizationReportRequest</code>
 */
class GetUtilizationReportRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Utilization Report name.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Optional. The level of details of the report.
     * Defaults to FULL
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.UtilizationReportView view = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $view = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The Utilization Report name.
     *     @type int $view
     *           Optional. The level of details of the report.
     *           Defaults to FULL
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmmigration\V1\Vmmigration::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Utilization Report name.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The Utilization Report name.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Optional. The level of details of the report.
     * Defaults to FULL
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.UtilizationReportView view = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * Optional. The level of details of the report.
     * Defaults to FULL
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.UtilizationReportView view = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setView($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\VMMigration\V1\UtilizationReportView::class);
        $this->view = $var;

        return $this;
    }

}

