<?php
class FluidCache_Standalone_template_file_basis_d7a35670daccf98222f998ba6b1101af930f1963 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

return 'Rahmen';
}
public function hasLayout() {
return TRUE;
}

/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '

  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments1 = array();
$arguments1['partial'] = 'textBox';
// Rendering Array
$array2 = array();
$array2['header'] = 'Willkommen';
$array2['text'] = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                          veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                          dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                          sunt in culpa qui officia deserunt mollit anim id est laborum.';
$arguments1['arguments'] = $array2;
$arguments1['section'] = NULL;
$arguments1['optional'] = false;
$renderChildrenClosure3 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1, $renderChildrenClosure3, $renderingContext);

$output0 .= '

  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments4 = array();
$arguments4['partial'] = 'videoBox';
// Rendering Array
$array5 = array();
$array5['videoURL'] = 'https://www.youtube-nocookie.com/embed/uwYxOVgX2CA?rel=0&amp;controls=0&amp;showinfo=0';
$arguments4['arguments'] = $array5;
$arguments4['section'] = NULL;
$arguments4['optional'] = false;
$renderChildrenClosure6 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments4, $renderChildrenClosure6, $renderingContext);

$output0 .= '

  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments7 = array();
$arguments7['partial'] = 'clusterBox';
// Rendering Array
$array8 = array();
$array8['positon'] = 'first';
$array8['backgroundpicture'] = 'flyer-printing.jpg';
$array8['alt'] = 'Flyerverteilung';
$array8['likToPageId'] = '50';
$array8['head'] = 'Flyer';
// Rendering Array
$array9 = array();
$array9['0'] = 'Haushaltswebung';
$array9['1'] = 'Hand zu Hand';
$array9['2'] = 'Auslagestellenverteilung';
$array9['3'] = 'Mailings';
$array8['services'] = $array9;
$arguments7['arguments'] = $array8;
$arguments7['section'] = NULL;
$arguments7['optional'] = false;
$renderChildrenClosure10 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments7, $renderChildrenClosure10, $renderingContext);

$output0 .= '
  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments11 = array();
$arguments11['partial'] = 'clusterBox';
// Rendering Array
$array12 = array();
$array12['positon'] = '';
$array12['backgroundpicture'] = 'flyer-printing.jpg';
$array12['alt'] = 'Plakatierung';
$array12['likToPageId'] = '51';
$array12['head'] = 'Plakat';
// Rendering Array
$array13 = array();
$array13['0'] = 'Tafelplakatierung';
$array13['1'] = 'Flächenplakatierung';
$array13['2'] = 'Litfasssäulenplakatierung';
$array13['3'] = 'Großflächenplakatierung';
$array13['4'] = 'Indoorplaktierung';
$array13['5'] = 'Verkehrsmittelwerbung';
$array12['services'] = $array13;
$arguments11['arguments'] = $array12;
$arguments11['section'] = NULL;
$arguments11['optional'] = false;
$renderChildrenClosure14 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments11, $renderChildrenClosure14, $renderingContext);

$output0 .= '
  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments15 = array();
$arguments15['partial'] = 'clusterBox';
// Rendering Array
$array16 = array();
$array16['positon'] = 'last';
$array16['backgroundpicture'] = 'flyer-printing.jpg';
$array16['alt'] = 'Druck';
$array16['likToPageId'] = '52';
$array16['head'] = 'Druck';
// Rendering Array
$array17 = array();
$array17['0'] = 'Grafik und Layout';
$array17['1'] = 'Textgestaltung';
$array17['2'] = 'Lektorat';
$array17['3'] = 'Desktop-Publishing';
$array17['4'] = 'Erstellung von Druckvorlagen';
$array16['services'] = $array17;
$arguments15['arguments'] = $array16;
$arguments15['section'] = NULL;
$arguments15['optional'] = false;
$renderChildrenClosure18 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments15, $renderChildrenClosure18, $renderingContext);

$output0 .= '
';


return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output19 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments20 = array();
$arguments20['name'] = 'Rahmen';
$renderChildrenClosure21 = function() {return NULL;};
$viewHelper22 = $self->getViewHelper('$viewHelper22', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper22->setArguments($arguments20);
$viewHelper22->setRenderingContext($renderingContext);
$viewHelper22->setRenderChildrenClosure($renderChildrenClosure21);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output19 .= $viewHelper22->initializeArgumentsAndRender();

$output19 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments23 = array();
$arguments23['name'] = 'content';
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output25 = '';

$output25 .= '

  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments26 = array();
$arguments26['partial'] = 'textBox';
// Rendering Array
$array27 = array();
$array27['header'] = 'Willkommen';
$array27['text'] = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                          veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                          dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                          sunt in culpa qui officia deserunt mollit anim id est laborum.';
$arguments26['arguments'] = $array27;
$arguments26['section'] = NULL;
$arguments26['optional'] = false;
$renderChildrenClosure28 = function() {return NULL;};

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments26, $renderChildrenClosure28, $renderingContext);

$output25 .= '

  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments29 = array();
$arguments29['partial'] = 'videoBox';
// Rendering Array
$array30 = array();
$array30['videoURL'] = 'https://www.youtube-nocookie.com/embed/uwYxOVgX2CA?rel=0&amp;controls=0&amp;showinfo=0';
$arguments29['arguments'] = $array30;
$arguments29['section'] = NULL;
$arguments29['optional'] = false;
$renderChildrenClosure31 = function() {return NULL;};

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments29, $renderChildrenClosure31, $renderingContext);

$output25 .= '

  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments32 = array();
$arguments32['partial'] = 'clusterBox';
// Rendering Array
$array33 = array();
$array33['positon'] = 'first';
$array33['backgroundpicture'] = 'flyer-printing.jpg';
$array33['alt'] = 'Flyerverteilung';
$array33['likToPageId'] = '50';
$array33['head'] = 'Flyer';
// Rendering Array
$array34 = array();
$array34['0'] = 'Haushaltswebung';
$array34['1'] = 'Hand zu Hand';
$array34['2'] = 'Auslagestellenverteilung';
$array34['3'] = 'Mailings';
$array33['services'] = $array34;
$arguments32['arguments'] = $array33;
$arguments32['section'] = NULL;
$arguments32['optional'] = false;
$renderChildrenClosure35 = function() {return NULL;};

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments32, $renderChildrenClosure35, $renderingContext);

$output25 .= '
  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments36 = array();
$arguments36['partial'] = 'clusterBox';
// Rendering Array
$array37 = array();
$array37['positon'] = '';
$array37['backgroundpicture'] = 'flyer-printing.jpg';
$array37['alt'] = 'Plakatierung';
$array37['likToPageId'] = '51';
$array37['head'] = 'Plakat';
// Rendering Array
$array38 = array();
$array38['0'] = 'Tafelplakatierung';
$array38['1'] = 'Flächenplakatierung';
$array38['2'] = 'Litfasssäulenplakatierung';
$array38['3'] = 'Großflächenplakatierung';
$array38['4'] = 'Indoorplaktierung';
$array38['5'] = 'Verkehrsmittelwerbung';
$array37['services'] = $array38;
$arguments36['arguments'] = $array37;
$arguments36['section'] = NULL;
$arguments36['optional'] = false;
$renderChildrenClosure39 = function() {return NULL;};

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments36, $renderChildrenClosure39, $renderingContext);

$output25 .= '
  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments40 = array();
$arguments40['partial'] = 'clusterBox';
// Rendering Array
$array41 = array();
$array41['positon'] = 'last';
$array41['backgroundpicture'] = 'flyer-printing.jpg';
$array41['alt'] = 'Druck';
$array41['likToPageId'] = '52';
$array41['head'] = 'Druck';
// Rendering Array
$array42 = array();
$array42['0'] = 'Grafik und Layout';
$array42['1'] = 'Textgestaltung';
$array42['2'] = 'Lektorat';
$array42['3'] = 'Desktop-Publishing';
$array42['4'] = 'Erstellung von Druckvorlagen';
$array41['services'] = $array42;
$arguments40['arguments'] = $array41;
$arguments40['section'] = NULL;
$arguments40['optional'] = false;
$renderChildrenClosure43 = function() {return NULL;};

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments40, $renderChildrenClosure43, $renderingContext);

$output25 .= '
';
return $output25;
};

$output19 .= '';

$output19 .= '
';


return $output19;
}


}
#1478887371    11185     