<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GraphList File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* GraphList class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class GraphList extends BaseItem
{
    /**
    * Gets the displayName
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    *
    * @param string $val The displayName
    *
    * @return List
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the list
    *
    * @return ListInfo The list
    */
    public function getList()
    {
        if (array_key_exists("list", $this->_propDict)) {
            if (is_a($this->_propDict["list"], "Microsoft\Graph\Model\ListInfo")) {
                return $this->_propDict["list"];
            } else {
                $this->_propDict["list"] = new ListInfo($this->_propDict["list"]);
                return $this->_propDict["list"];
            }
        }
        return null;
    }
    
    /**
    * Sets the list
    *
    * @param ListInfo $val The list
    *
    * @return List
    */
    public function setList($val)
    {
        $this->_propDict["list"] = $val;
        return $this;
    }
    
    /**
    * Gets the sharepointIds
    *
    * @return SharepointIds The sharepointIds
    */
    public function getSharepointIds()
    {
        if (array_key_exists("sharepointIds", $this->_propDict)) {
            if (is_a($this->_propDict["sharepointIds"], "Microsoft\Graph\Model\SharepointIds")) {
                return $this->_propDict["sharepointIds"];
            } else {
                $this->_propDict["sharepointIds"] = new SharepointIds($this->_propDict["sharepointIds"]);
                return $this->_propDict["sharepointIds"];
            }
        }
        return null;
    }
    
    /**
    * Sets the sharepointIds
    *
    * @param SharepointIds $val The sharepointIds
    *
    * @return List
    */
    public function setSharepointIds($val)
    {
        $this->_propDict["sharepointIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the system
    *
    * @return SystemFacet The system
    */
    public function getSystem()
    {
        if (array_key_exists("system", $this->_propDict)) {
            if (is_a($this->_propDict["system"], "Microsoft\Graph\Model\SystemFacet")) {
                return $this->_propDict["system"];
            } else {
                $this->_propDict["system"] = new SystemFacet($this->_propDict["system"]);
                return $this->_propDict["system"];
            }
        }
        return null;
    }
    
    /**
    * Sets the system
    *
    * @param SystemFacet $val The system
    *
    * @return List
    */
    public function setSystem($val)
    {
        $this->_propDict["system"] = $val;
        return $this;
    }
    

     /** 
     * Gets the columns
     *
     * @return array The columns
     */
    public function getColumns()
    {
        if (array_key_exists("columns", $this->_propDict)) {
           return $this->_propDict["columns"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the columns
    *
    * @param ColumnDefinition $val The columns
    *
    * @return List
    */
    public function setColumns($val)
    {
		$this->_propDict["columns"] = $val;
        return $this;
    }
    

     /** 
     * Gets the contentTypes
     *
     * @return array The contentTypes
     */
    public function getContentTypes()
    {
        if (array_key_exists("contentTypes", $this->_propDict)) {
           return $this->_propDict["contentTypes"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the contentTypes
    *
    * @param ContentType $val The contentTypes
    *
    * @return List
    */
    public function setContentTypes($val)
    {
		$this->_propDict["contentTypes"] = $val;
        return $this;
    }
    
    /**
    * Gets the drive
    *
    * @return Drive The drive
    */
    public function getDrive()
    {
        if (array_key_exists("drive", $this->_propDict)) {
            if (is_a($this->_propDict["drive"], "Microsoft\Graph\Model\Drive")) {
                return $this->_propDict["drive"];
            } else {
                $this->_propDict["drive"] = new Drive($this->_propDict["drive"]);
                return $this->_propDict["drive"];
            }
        }
        return null;
    }
    
    /**
    * Sets the drive
    *
    * @param Drive $val The drive
    *
    * @return List
    */
    public function setDrive($val)
    {
        $this->_propDict["drive"] = $val;
        return $this;
    }
    

     /** 
     * Gets the items
     *
     * @return array The items
     */
    public function getItems()
    {
        if (array_key_exists("items", $this->_propDict)) {
           return $this->_propDict["items"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the items
    *
    * @param ListItem $val The items
    *
    * @return List
    */
    public function setItems($val)
    {
		$this->_propDict["items"] = $val;
        return $this;
    }
    
}