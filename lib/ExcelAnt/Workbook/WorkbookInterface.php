<?php

namespace ExcelAnt\Workbook;

use ExcelAnt\Sheet\SheetInterface,
    ExcelAnt\Collections\StyleCollection,
    ExcelAnt\Adapter\PhpExcel\Sheet\Sheet;

use \InvalidArgumentException;
use \PHPExcel;
use \RuntimeException;

interface WorkbookInterface
{
    /**
     * Create Sheet
     *
     * @return Sheet
     */
    public function createSheet();

    /**
     * Get Sheet
     *
     * @throws InvalidArgumentException If the index isn't numeric
     * @throws RuntimeException         If the index doesn't exist
     *
     * @return Sheet
     */
    public function getSheet();

    /**
     * @return PHPExcel
     */
    public function getRawClass();

    /**
     * Get sheetCollection
     *
     * @return array
     */
    public function getAllSheets();

    /**
     * Count sheetCollection
     *
     * @return integer
     */
    public function countSheets();

    /**
     * Add Sheet in sheetCollection
     *
     * You can give an index if you want insert the sheet somewhere. In which case the previous data at this index will be erased.
     *
     * If you give an index and set true the insert parameter, you will insert Sheet in sheetCollection.
     *
     * @param SheetInterface $sheet  The Sheet will be added
     * @param integer        $index  Numeric index of the sheetCollection
     * @param boolean        $insert If you want insert the Sheet or not
     *
     * @throws InvalidArgumentException If the index isn't numeric
     *
     * @return WorkbookInterface
     */
    public function addSheet(SheetInterface $sheet, $index = null, $insert = false);

    /**
     * Remove a sheet
     *
     * @param  integer $index Numeric index of the sheetCollection
     *
     * @throws InvalidArgumentException If the index isn't numeric
     * @throws RuntimeException         If the index doesn't exist
     *
     * @return WorkbookInterface
     */
    public function removeSheet($index);

    /**
     * Set the title of the Workbook
     *
     * @param mixed $title The title
     *
     * @return WorkbookInterface
     */
    public function setTitle($title);

    /**
     * Return the title of the workbook
     *
     * @return mixed
     */
    public function getTitle();

    /**
     * Set the creator of the workbook
     *
     * @param mixed $creator
     *
     * @return WorkbookInterface
     */
    public function setCreator($creator);

    /**
     * Get the creator of the Workbook
     *
     * @return mixed
     */
    public function getCreator();

    /**
     * Set the description of the workbook
     *
     * @param mixed $description
     *
     * @return WorkbookInterface
     */
    public function setDescription($description);

    /**
     * Get the description of the Workbook
     *
     * @return mixed
     */
    public function getDescription();

    /**
     * Set the company of the workbook
     *
     * @param mixed $company
     *
     * @return WorkbookInterface
     */
    public function setCompany($company);

    /**
     * Get the company of the Workbook
     *
     * @return mixed
     */
    public function getCompany();

    /**
     * Set the subject of the workbook
     *
     * @param mixed $subject
     *
     * @return WorkbookInterface
     */
    public function setSubject($subject);

    /**
     * Get the subject of the Workbook
     *
     * @return mixed
     */
    public function getSubject();

    /**
     * Set the keywords of the workbook
     *
     * @param mixed $keywords
     *
     * @return WorkbookInterface
     */
    public function setKeywords($keywords);

    /**
     * Get the keywords of the Workbook
     *
     * @return mixed
     */
    public function getKeywords();

    /**
     * Add style
     *
     * @param StyleCollection $styles
     */
    public function addStyles(StyleCollection $styles);

    /**
     * Get styleCollection
     *
     * @return StyleCollection
     */
    public function getStyles();

    /**
     * Has styles
     *
     * @return boolean true if there are styles, else false
     */
    public function hasStyles();
}
