<?php

namespace Fobia\Database\SphinxConnection\Test\Eloquent;

use Fobia\Database\SphinxConnection\Test\ModelRt;
use Fobia\Database\SphinxConnection\Test\TestCase;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-10-08 at 13:15:13.
 */
class BuilderTest extends TestCase
{
    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    public function setUp()
    {
        parent::setUp();
        parent::setUpDatabase();
    }

    /**
     * @covers \Fobia\Database\SphinxConnection\Eloquent\Builder::paginate
     * @todo   Implement testPaginate().
     */
    public function testPaginate()
    {
        $r = ModelRt::where('id', '>', 0)->paginate(2);
        /** @var LengthAwarePaginator $r */
        $this->assertCount(2, $r->items());
        $this->assertTrue($r->total() > 2);
    }

    /**
     * @covers \Fobia\Database\SphinxConnection\Eloquent\Builder::getCountForPagination
     * @todo   Implement testGetCountForPagination().
     */
    public function testGetCountForPagination()
    {
        $rt = ModelRt::where('id', '>', 0)->limit(1);
        $rt->get();

        $count = $rt->getCountForPagination();
        $this->assertTrue($count > 1);
    }
}
