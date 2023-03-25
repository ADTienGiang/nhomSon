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

namespace Google\Service\Dialogflow;

class GoogleCloudDialogflowCxV3EntityType extends \Google\Collection
{
  protected $collection_key = 'excludedPhrases';
  /**
   * @var string
   */
  public $autoExpansionMode;
  /**
   * @var string
   */
  public $displayName;
  /**
   * @var bool
   */
  public $enableFuzzyExtraction;
  protected $entitiesType = GoogleCloudDialogflowCxV3EntityTypeEntity::class;
  protected $entitiesDataType = 'array';
  public $entities = [];
  protected $excludedPhrasesType = GoogleCloudDialogflowCxV3EntityTypeExcludedPhrase::class;
  protected $excludedPhrasesDataType = 'array';
  public $excludedPhrases = [];
  /**
   * @var string
   */
  public $kind;
  /**
   * @var string
   */
  public $name;
  /**
   * @var bool
   */
  public $redact;

  /**
   * @param string
   */
  public function setAutoExpansionMode($autoExpansionMode)
  {
    $this->autoExpansionMode = $autoExpansionMode;
  }
  /**
   * @return string
   */
  public function getAutoExpansionMode()
  {
    return $this->autoExpansionMode;
  }
  /**
   * @param string
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * @param bool
   */
  public function setEnableFuzzyExtraction($enableFuzzyExtraction)
  {
    $this->enableFuzzyExtraction = $enableFuzzyExtraction;
  }
  /**
   * @return bool
   */
  public function getEnableFuzzyExtraction()
  {
    return $this->enableFuzzyExtraction;
  }
  /**
   * @param GoogleCloudDialogflowCxV3EntityTypeEntity[]
   */
  public function setEntities($entities)
  {
    $this->entities = $entities;
  }
  /**
   * @return GoogleCloudDialogflowCxV3EntityTypeEntity[]
   */
  public function getEntities()
  {
    return $this->entities;
  }
  /**
   * @param GoogleCloudDialogflowCxV3EntityTypeExcludedPhrase[]
   */
  public function setExcludedPhrases($excludedPhrases)
  {
    $this->excludedPhrases = $excludedPhrases;
  }
  /**
   * @return GoogleCloudDialogflowCxV3EntityTypeExcludedPhrase[]
   */
  public function getExcludedPhrases()
  {
    return $this->excludedPhrases;
  }
  /**
   * @param string
   */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /**
   * @return string
   */
  public function getKind()
  {
    return $this->kind;
  }
  /**
   * @param string
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param bool
   */
  public function setRedact($redact)
  {
    $this->redact = $redact;
  }
  /**
   * @return bool
   */
  public function getRedact()
  {
    return $this->redact;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDialogflowCxV3EntityType::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3EntityType');