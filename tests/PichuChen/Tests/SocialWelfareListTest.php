<?php 
/*
 * Copyright 2015 Pichu Chen, TIH
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace PichuChen\Tests\einvoice;

use PichuChen\einvoice\SocialWelfareList;
//use PichuChen\einvoice\InvoiceDateItem;

class SocialWelfareListTest extends \PHPUnit\Framework\TestCase {

  var $mockFile = 'tests/mock/SocialWelfareList_response';

  function testGetResponseStatus(){
    $response = new SocialWelfareList(
      json_decode(file_get_contents($this->mockFile),true)
    );
    $actual = $response->getResponseStatus();
    $this->assertInstanceOf('PichuChen\\einvoice\\ResponseStatus',$actual);
  }

  function testGetDetails(){
    $response = new SocialWelfareList(
      json_decode(file_get_contents($this->mockFile),true)
    );
    $actual = $response->getDetails();
    $this->assertIsArray($actual); 
  }

}



