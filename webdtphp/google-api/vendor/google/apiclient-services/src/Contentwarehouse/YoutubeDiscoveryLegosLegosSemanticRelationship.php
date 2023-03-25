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

namespace Google\Service\Contentwarehouse;

class YoutubeDiscoveryLegosLegosSemanticRelationship extends \Google\Collection
{
  protected $collection_key = 'contexts';
  /**
   * @var float
   */
  public $confidence;
  protected $contextsType = YoutubeDiscoveryLegosLegosSemanticRelationshipContext::class;
  protected $contextsDataType = 'array';
  public $contexts = [];
  public $topicalityScore;

  /**
   * @param float
   */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /**
   * @return float
   */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /**
   * @param YoutubeDiscoveryLegosLegosSemanticRelationshipContext[]
   */
  public function setContexts($contexts)
  {
    $this->contexts = $contexts;
  }
  /**
   * @return YoutubeDiscoveryLegosLegosSemanticRelationshipContext[]
   */
  public function getContexts()
  {
    return $this->contexts;
  }
  public function setTopicalityScore($topicalityScore)
  {
    $this->topicalityScore = $topicalityScore;
  }
  public function getTopicalityScore()
  {
    return $this->topicalityScore;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(YoutubeDiscoveryLegosLegosSemanticRelationship::class, 'Google_Service_Contentwarehouse_YoutubeDiscoveryLegosLegosSemanticRelationship');
