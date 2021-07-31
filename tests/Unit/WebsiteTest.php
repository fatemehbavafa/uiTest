<?php

namespace Tests\Unit;

use App\Models\Website;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;

class WebsiteTest extends TestCase
{
    use RefreshDatabase;
    public function a_website_can_be_added()
    {
        $this->withoutExceptionHandling();
        $response=$this->post('website/store',[
            'name'=>'uiTest',
            'domain'=>'uitest.com',
            'tester_count'=>'10',
            'employer_id'=>'1'
        ]);
        $response->assertOk();
        $this->assertCount(1,Website::all());

    }

    public function ()
    {

    }
}
