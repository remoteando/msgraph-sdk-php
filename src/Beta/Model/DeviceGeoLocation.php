<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceGeoLocation File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* DeviceGeoLocation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DeviceGeoLocation extends Entity
{

    /**
    * Gets the lastCollectedDateTimeUtc
    *
    * @return \DateTime The lastCollectedDateTimeUtc
    */
    public function getLastCollectedDateTimeUtc()
    {
        if (array_key_exists("lastCollectedDateTimeUtc", $this->_propDict)) {
            if (is_a($this->_propDict["lastCollectedDateTimeUtc"], "Microsoft\Graph\Beta\Model\\DateTime")) {
                return $this->_propDict["lastCollectedDateTimeUtc"];
            } else {
                $this->_propDict["lastCollectedDateTimeUtc"] = new \DateTime($this->_propDict["lastCollectedDateTimeUtc"]);
                return $this->_propDict["lastCollectedDateTimeUtc"];
            }
        }
        return null;
    }

    /**
    * Sets the lastCollectedDateTimeUtc
    *
    * @param \DateTime $val The value to assign to the lastCollectedDateTimeUtc
    *
    * @return DeviceGeoLocation The DeviceGeoLocation
    */
    public function setLastCollectedDateTimeUtc($val)
    {
        $this->_propDict["lastCollectedDateTimeUtc"] = $val;
         return $this;
    }

    /**
    * Gets the lastCollectedDateTime
    *
    * @return \DateTime The lastCollectedDateTime
    */
    public function getLastCollectedDateTime()
    {
        if (array_key_exists("lastCollectedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastCollectedDateTime"], "Microsoft\Graph\Beta\Model\\DateTime")) {
                return $this->_propDict["lastCollectedDateTime"];
            } else {
                $this->_propDict["lastCollectedDateTime"] = new \DateTime($this->_propDict["lastCollectedDateTime"]);
                return $this->_propDict["lastCollectedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastCollectedDateTime
    *
    * @param \DateTime $val The value to assign to the lastCollectedDateTime
    *
    * @return DeviceGeoLocation The DeviceGeoLocation
    */
    public function setLastCollectedDateTime($val)
    {
        $this->_propDict["lastCollectedDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the longitude
    *
    * @return float The longitude
    */
    public function getLongitude()
    {
        if (array_key_exists("longitude", $this->_propDict)) {
            return $this->_propDict["longitude"];
        } else {
            return null;
        }
    }

    /**
    * Sets the longitude
    *
    * @param float $val The value of the longitude
    *
    * @return DeviceGeoLocation
    */
    public function setLongitude($val)
    {
        $this->_propDict["longitude"] = $val;
        return $this;
    }
    /**
    * Gets the latitude
    *
    * @return float The latitude
    */
    public function getLatitude()
    {
        if (array_key_exists("latitude", $this->_propDict)) {
            return $this->_propDict["latitude"];
        } else {
            return null;
        }
    }

    /**
    * Sets the latitude
    *
    * @param float $val The value of the latitude
    *
    * @return DeviceGeoLocation
    */
    public function setLatitude($val)
    {
        $this->_propDict["latitude"] = $val;
        return $this;
    }
    /**
    * Gets the altitude
    *
    * @return float The altitude
    */
    public function getAltitude()
    {
        if (array_key_exists("altitude", $this->_propDict)) {
            return $this->_propDict["altitude"];
        } else {
            return null;
        }
    }

    /**
    * Sets the altitude
    *
    * @param float $val The value of the altitude
    *
    * @return DeviceGeoLocation
    */
    public function setAltitude($val)
    {
        $this->_propDict["altitude"] = $val;
        return $this;
    }
    /**
    * Gets the horizontalAccuracy
    *
    * @return float The horizontalAccuracy
    */
    public function getHorizontalAccuracy()
    {
        if (array_key_exists("horizontalAccuracy", $this->_propDict)) {
            return $this->_propDict["horizontalAccuracy"];
        } else {
            return null;
        }
    }

    /**
    * Sets the horizontalAccuracy
    *
    * @param float $val The value of the horizontalAccuracy
    *
    * @return DeviceGeoLocation
    */
    public function setHorizontalAccuracy($val)
    {
        $this->_propDict["horizontalAccuracy"] = $val;
        return $this;
    }
    /**
    * Gets the verticalAccuracy
    *
    * @return float The verticalAccuracy
    */
    public function getVerticalAccuracy()
    {
        if (array_key_exists("verticalAccuracy", $this->_propDict)) {
            return $this->_propDict["verticalAccuracy"];
        } else {
            return null;
        }
    }

    /**
    * Sets the verticalAccuracy
    *
    * @param float $val The value of the verticalAccuracy
    *
    * @return DeviceGeoLocation
    */
    public function setVerticalAccuracy($val)
    {
        $this->_propDict["verticalAccuracy"] = $val;
        return $this;
    }
    /**
    * Gets the heading
    *
    * @return float The heading
    */
    public function getHeading()
    {
        if (array_key_exists("heading", $this->_propDict)) {
            return $this->_propDict["heading"];
        } else {
            return null;
        }
    }

    /**
    * Sets the heading
    *
    * @param float $val The value of the heading
    *
    * @return DeviceGeoLocation
    */
    public function setHeading($val)
    {
        $this->_propDict["heading"] = $val;
        return $this;
    }
    /**
    * Gets the speed
    *
    * @return float The speed
    */
    public function getSpeed()
    {
        if (array_key_exists("speed", $this->_propDict)) {
            return $this->_propDict["speed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the speed
    *
    * @param float $val The value of the speed
    *
    * @return DeviceGeoLocation
    */
    public function setSpeed($val)
    {
        $this->_propDict["speed"] = $val;
        return $this;
    }
}