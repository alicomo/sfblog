  public function executeExport(sfWebRequest $request)
  {
    // sorting
    if ($request->getParameter('sort') && $this->isValidSortColumn($request->getParameter('sort')))
    {
      $this->setSort(array($request->getParameter('sort'), $request->getParameter('sort_type')));
    }

    // pager
    if ($request->getParameter('page'))
    {
      $this->setPage($request->getParameter('page'));
    }

    $this->pager = $this->getPager();
    $this->sort = $this->getSort();
    
    $this->getResponse()->setContentType('application/x-csv');
    $this->getResponse()->setHttpHeader('Content-Disposition', 'attachment; filename=export.csv');
    $this->setLayout('export');
  }
