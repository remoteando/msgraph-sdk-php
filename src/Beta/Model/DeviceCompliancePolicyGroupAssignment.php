<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceCompliancePolicyGroupAssignment File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* DeviceCompliancePolicyGroupAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class DeviceCompliancePolicyGroupAssignment extends Entity
{
    /**
    * Gets the targetGroupId
    *
    * @return string The targetGroupId
    */
    public function getTargetGroupId()
    {
        if (array_key_exists("targetGroupId", $this->_propDict)) {
            return $this->_propDict["targetGroupId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetGroupId
    *
    * @param string $val The targetGroupId
    *
    * @return DeviceCompliancePolicyGroupAssignment
    */
    public function setTargetGroupId($val)
    {
        $this->_propDict["targetGroupId"] = $val;
        return $this;
    }
    
    /**
    * Gets the excludeGroup
    *
    * @return bool The excludeGroup
    */
    public function getExcludeGroup()
    {
        if (array_key_exists("excludeGroup", $this->_propDict)) {
            return $this->_propDict["excludeGroup"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the excludeGroup
    *
    * @param bool $val The excludeGroup
    *
    * @return DeviceCompliancePolicyGroupAssignment
    */
    public function setExcludeGroup($val)
    {
        $this->_propDict["excludeGroup"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the deviceCompliancePolicy
    *
    * @return DeviceCompliancePolicy The deviceCompliancePolicy
    */
    public function getDeviceCompliancePolicy()
    {
        if (array_key_exists("deviceCompliancePolicy", $this->_propDict)) {
            if (is_a($this->_propDict["deviceCompliancePolicy"], "Microsoft\Graph\Beta\Model\DeviceCompliancePolicy")) {
                return $this->_propDict["deviceCompliancePolicy"];
            } else {
                $this->_propDict["deviceCompliancePolicy"] = new DeviceCompliancePolicy($this->_propDict["deviceCompliancePolicy"]);
                return $this->_propDict["deviceCompliancePolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceCompliancePolicy
    *
    * @param DeviceCompliancePolicy $val The deviceCompliancePolicy
    *
    * @return DeviceCompliancePolicyGroupAssignment
    */
    public function setDeviceCompliancePolicy($val)
    {
        $this->_propDict["deviceCompliancePolicy"] = $val;
        return $this;
    }
    
}