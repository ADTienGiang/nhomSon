<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Integrations;

class EnterpriseCrmFrontendsEventbusProtoParameterMapEntry extends \Google\Model
{
  protected $keyType = EnterpriseCrmFrontendsEventbusProtoParameterMapField::class;
  protected $keyDataType = '';
  public $key;
  protected $valueType = EnterpriseCrmFrontendsEventbusProtoParameterMapField::class;
  protected $valueDataType = '';
  public $value;

  /**
   * @param EnterpriseCrmFrontendsEventbusProtoParameterMapField
   */
  public function setKey(EnterpriseCrmFrontendsEventbusProtoParameterMapField $key)
  {
    $this->key = $key;
  }
  /**
   * @return EnterpriseCrmFrontendsEventbusProtoParameterMapField
   */
  public function getKey()
  {
    return $this->key;
  }
  /**
   * @param EnterpriseCrmFrontendsEventbusProtoParameterMapField
   */
  public function setValue(EnterpriseCrmFrontendsEventbusProtoParameterMapField $value)
  {
    $this->value = $value;
  }
  /**
   * @return EnterpriseCrmFrontendsEventbusProtoParameterMapField
   */
  public function getValue()
  {
    return $this->value;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EnterpriseCrmFrontendsEventbusProtoParameterMapEntry::class, 'Google_Service_Integrations_EnterpriseCrmFrontendsEventbusProtoParameterMapEntry');
