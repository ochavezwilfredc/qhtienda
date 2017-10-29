<?php

use PHPUnit\Framework\TestCase;

require __DIR__ . "/../catalog/category.php";
//require '../catalog/category.php';
/**
 * Generated by PHPUnit_SkeletonGenerator on 2017-10-25 at 22:14:17.
 */
class ModelCatalogCategoryTest extends TestCase {

    /**
     * @var ModelCatalogCategory
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new ModelCatalogCategory;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers ModelCatalogCategory::addCategory
     * @todo   Implement testAddCategory().
     */
//    public function testAddCategory() {
//        // Remove the following lines when you implement this test.
//        $stub = $this->createMock(ModelCatalogCategory::class);
//        $stub->method('addCategory')
//                ->will($this->returnValue(true));
//        $query = "INSERT INTO `oc_category`(`image`, "
//                                            . "`parent_id`, "
//                                            . "`top`, "
//                                            . "`column`, "
//                                            . "`sort_order`, "
//                                            . "`status`, "
//                                            . "`date_added`,"
//                                            . " `date_modified`) "
//                .                   "VALUES ([value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])";
//        $this->assertTrue($stub->addCategory($query));
//    }
//    /**
//     * @covers ModelCatalogCategory::editCategory
//     * @todo   Implement testEditCategory().
//     */
//    public function testEditCategory() {
//        // Remove the following lines when you implement this test.
//        $this->markTestIncomplete(
//                'This test has not been implemented yet.'
//        );
//    }
//
//    /**
//     * @covers ModelCatalogCategory::deleteCategory
//     * @todo   Implement testDeleteCategory().
//     */
//    public function testDeleteCategory() {
//        // Remove the following lines when you implement this test.
//        $this->markTestIncomplete(
//                'This test has not been implemented yet.'
//        );
//    }
//
//    /**
//     * @covers ModelCatalogCategory::repairCategories
//     * @todo   Implement testRepairCategories().
//     */
//    public function testRepairCategories() {
//        // Remove the following lines when you implement this test.
//        $this->markTestIncomplete(
//                'This test has not been implemented yet.'
//        );
//    }

    /**
     * @covers ModelCatalogCategory::getCategory
     * @todo   Implement testGetCategory().
     */
    public function testGetCategory() {
        $category_id = 25;
        $category = $this->object->getCategory($category_id);
        $this->assertEquals($category['category_id'], 25);
    }

    /**
     * @covers ModelCatalogCategory::getCategories
     * @todo   Implement testGetCategories().
     */
    public function testGetCategories() {
        $categories = $this->object->getCategories(0);
        $this->assertCount(8, $categories);
    }

//    /**
//     * @covers ModelCatalogCategory::getCategoryDescriptions
//     * @todo   Implement testGetCategoryDescriptions().
//     */
//    public function testGetCategoryDescriptions() {
//        // Remove the following lines when you implement this test.
//        $this->markTestIncomplete(
//                'This test has not been implemented yet.'
//        );
//    }
//
//    /**
//     * @covers ModelCatalogCategory::getCategoryPath
//     * @todo   Implement testGetCategoryPath().
//     */
//    public function testGetCategoryPath() {
//        // Remove the following lines when you implement this test.
//        $this->markTestIncomplete(
//                'This test has not been implemented yet.'
//        );
//    }
//
//    /**
//     * @covers ModelCatalogCategory::getCategoryFilters
//     * @todo   Implement testGetCategoryFilters().
//     */
//    public function testGetCategoryFilters() {
//        // Remove the following lines when you implement this test.
//        $this->markTestIncomplete(
//                'This test has not been implemented yet.'
//        );
//    }
//
//    /**
//     * @covers ModelCatalogCategory::getCategoryStores
//     * @todo   Implement testGetCategoryStores().
//     */
//    public function testGetCategoryStores() {
//        // Remove the following lines when you implement this test.
//        $this->markTestIncomplete(
//                'This test has not been implemented yet.'
//        );
//    }
//
//    /**
//     * @covers ModelCatalogCategory::getCategorySeoUrls
//     * @todo   Implement testGetCategorySeoUrls().
//     */
//    public function testGetCategorySeoUrls() {
//        // Remove the following lines when you implement this test.
//        $this->markTestIncomplete(
//                'This test has not been implemented yet.'
//        );
//    }
//
//    /**
//     * @covers ModelCatalogCategory::getCategoryLayouts
//     * @todo   Implement testGetCategoryLayouts().
//     */
//    public function testGetCategoryLayouts() {
//        // Remove the following lines when you implement this test.
//        $this->markTestIncomplete(
//                'This test has not been implemented yet.'
//        );
//    }
//
//    /**
//     * @covers ModelCatalogCategory::getTotalCategories
//     * @todo   Implement testGetTotalCategories().
//     */
//    public function testGetTotalCategories() {
//        // Remove the following lines when you implement this test.
//        $this->markTestIncomplete(
//                'This test has not been implemented yet.'
//        );
//    }
//
//    /**
//     * @covers ModelCatalogCategory::getTotalCategoriesByLayoutId
//     * @todo   Implement testGetTotalCategoriesByLayoutId().
//     */
//    public function testGetTotalCategoriesByLayoutId() {
//        // Remove the following lines when you implement this test.
//        $this->markTestIncomplete(
//                'This test has not been implemented yet.'
//        );
//    }
}
