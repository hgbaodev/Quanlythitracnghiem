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

namespace Google\Service\DisplayVideo;

class BulkEditNegativeKeywordsRequest extends \Google\Collection
{
  protected $collection_key = 'deletedNegativeKeywords';
  protected $createdNegativeKeywordsType = NegativeKeyword::class;
  protected $createdNegativeKeywordsDataType = 'array';
  public $createdNegativeKeywords;
  /**
   * @var string[]
   */
  public $deletedNegativeKeywords;

  /**
   * @param NegativeKeyword[]
   */
  public function setCreatedNegativeKeywords($createdNegativeKeywords)
  {
    $this->createdNegativeKeywords = $createdNegativeKeywords;
  }
  /**
   * @return NegativeKeyword[]
   */
  public function getCreatedNegativeKeywords()
  {
    return $this->createdNegativeKeywords;
  }
  /**
   * @param string[]
   */
  public function setDeletedNegativeKeywords($deletedNegativeKeywords)
  {
    $this->deletedNegativeKeywords = $deletedNegativeKeywords;
  }
  /**
   * @return string[]
   */
  public function getDeletedNegativeKeywords()
  {
    return $this->deletedNegativeKeywords;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BulkEditNegativeKeywordsRequest::class, 'Google_Service_DisplayVideo_BulkEditNegativeKeywordsRequest');
