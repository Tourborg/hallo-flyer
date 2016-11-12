<?php
class FluidCache_Standalone_template_file_basis_27ea5d3751df9ffcd045fb3692372d0ab0edbdf8 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

  <!--

    Text-Element

    Parameter:
    header: Überschrift
    text: Inhaltlicher Text

  -->
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

  <!--

    Video Element

    Parameter:
    videoURL: URL zum Video

  -->

  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments4 = array();
$arguments4['partial'] = 'videoBox';
$arguments4['section'] = NULL;
$arguments4['arguments'] = array (
);
$arguments4['optional'] = false;
$renderChildrenClosure5 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '

  <!--

    Cluster-Elemente

    Parameter:
    positon: left, right
    backgroundpicture: Dateinamen + Endung
    alt: Alternativtext für das Bild
    likToPageId: Seiten ID auf die gelinkt wird
    head: Überschrift/Kategorie
    services: Dienstleistungen der Kategorie

   -->

  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments6 = array();
$arguments6['partial'] = 'clusterBox';
// Rendering Array
$array7 = array();
$array7['positon'] = 'first';
$array7['backgroundpicture'] = 'flyer-printing.jpg';
$array7['alt'] = 'Flyerverteilung';
$array7['likToPageId'] = '50';
$array7['head'] = 'Flyer';
// Rendering Array
$array8 = array();
$array8['0'] = 'Haushaltswebung';
$array8['1'] = 'Hand zu Hand';
$array8['2'] = 'Auslagestellenverteilung';
$array8['3'] = 'Mailings';
$array7['services'] = $array8;
$arguments6['arguments'] = $array7;
$arguments6['section'] = NULL;
$arguments6['optional'] = false;
$renderChildrenClosure9 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments6, $renderChildrenClosure9, $renderingContext);

$output0 .= '
  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments10 = array();
$arguments10['partial'] = 'clusterBox';
// Rendering Array
$array11 = array();
$array11['positon'] = '';
$array11['backgroundpicture'] = 'flyer-printing.jpg';
$array11['alt'] = 'Plakatierung';
$array11['likToPageId'] = '51';
$array11['head'] = 'Plakat';
// Rendering Array
$array12 = array();
$array12['0'] = 'Tafelplakatierung';
$array12['1'] = 'Flächenplakatierung';
$array12['2'] = 'Litfasssäulenplakatierung';
$array12['3'] = 'Großflächenplakatierung';
$array12['4'] = 'Indoorplaktierung';
$array12['5'] = 'Verkehrsmittelwerbung';
$array11['services'] = $array12;
$arguments10['arguments'] = $array11;
$arguments10['section'] = NULL;
$arguments10['optional'] = false;
$renderChildrenClosure13 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments10, $renderChildrenClosure13, $renderingContext);

$output0 .= '
  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments14 = array();
$arguments14['partial'] = 'clusterBox';
// Rendering Array
$array15 = array();
$array15['positon'] = 'last';
$array15['backgroundpicture'] = 'flyer-printing.jpg';
$array15['alt'] = 'Druck';
$array15['likToPageId'] = '52';
$array15['head'] = 'Druck';
// Rendering Array
$array16 = array();
$array16['0'] = 'Grafik und Layout';
$array16['1'] = 'Textgestaltung';
$array16['2'] = 'Lektorat';
$array16['3'] = 'Desktop-Publishing';
$array16['4'] = 'Erstellung von Druckvorlagen';
$array15['services'] = $array16;
$arguments14['arguments'] = $array15;
$arguments14['section'] = NULL;
$arguments14['optional'] = false;
$renderChildrenClosure17 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments14, $renderChildrenClosure17, $renderingContext);

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

$output18 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments19 = array();
$arguments19['name'] = 'Rahmen';
$renderChildrenClosure20 = function() {return NULL;};
$viewHelper21 = $self->getViewHelper('$viewHelper21', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper21->setArguments($arguments19);
$viewHelper21->setRenderingContext($renderingContext);
$viewHelper21->setRenderChildrenClosure($renderChildrenClosure20);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output18 .= $viewHelper21->initializeArgumentsAndRender();

$output18 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments22 = array();
$arguments22['name'] = 'content';
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output24 = '';

$output24 .= '

  <!--

    Text-Element

    Parameter:
    header: Überschrift
    text: Inhaltlicher Text

  -->
  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments25 = array();
$arguments25['partial'] = 'textBox';
// Rendering Array
$array26 = array();
$array26['header'] = 'Willkommen';
$array26['text'] = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                          veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                          dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                          sunt in culpa qui officia deserunt mollit anim id est laborum.';
$arguments25['arguments'] = $array26;
$arguments25['section'] = NULL;
$arguments25['optional'] = false;
$renderChildrenClosure27 = function() {return NULL;};

$output24 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments25, $renderChildrenClosure27, $renderingContext);

$output24 .= '

  <!--

    Video Element

    Parameter:
    videoURL: URL zum Video

  -->

  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments28 = array();
$arguments28['partial'] = 'videoBox';
$arguments28['section'] = NULL;
$arguments28['arguments'] = array (
);
$arguments28['optional'] = false;
$renderChildrenClosure29 = function() {return NULL;};

$output24 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output24 .= '

  <!--

    Cluster-Elemente

    Parameter:
    positon: left, right
    backgroundpicture: Dateinamen + Endung
    alt: Alternativtext für das Bild
    likToPageId: Seiten ID auf die gelinkt wird
    head: Überschrift/Kategorie
    services: Dienstleistungen der Kategorie

   -->

  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments30 = array();
$arguments30['partial'] = 'clusterBox';
// Rendering Array
$array31 = array();
$array31['positon'] = 'first';
$array31['backgroundpicture'] = 'flyer-printing.jpg';
$array31['alt'] = 'Flyerverteilung';
$array31['likToPageId'] = '50';
$array31['head'] = 'Flyer';
// Rendering Array
$array32 = array();
$array32['0'] = 'Haushaltswebung';
$array32['1'] = 'Hand zu Hand';
$array32['2'] = 'Auslagestellenverteilung';
$array32['3'] = 'Mailings';
$array31['services'] = $array32;
$arguments30['arguments'] = $array31;
$arguments30['section'] = NULL;
$arguments30['optional'] = false;
$renderChildrenClosure33 = function() {return NULL;};

$output24 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments30, $renderChildrenClosure33, $renderingContext);

$output24 .= '
  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments34 = array();
$arguments34['partial'] = 'clusterBox';
// Rendering Array
$array35 = array();
$array35['positon'] = '';
$array35['backgroundpicture'] = 'flyer-printing.jpg';
$array35['alt'] = 'Plakatierung';
$array35['likToPageId'] = '51';
$array35['head'] = 'Plakat';
// Rendering Array
$array36 = array();
$array36['0'] = 'Tafelplakatierung';
$array36['1'] = 'Flächenplakatierung';
$array36['2'] = 'Litfasssäulenplakatierung';
$array36['3'] = 'Großflächenplakatierung';
$array36['4'] = 'Indoorplaktierung';
$array36['5'] = 'Verkehrsmittelwerbung';
$array35['services'] = $array36;
$arguments34['arguments'] = $array35;
$arguments34['section'] = NULL;
$arguments34['optional'] = false;
$renderChildrenClosure37 = function() {return NULL;};

$output24 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments34, $renderChildrenClosure37, $renderingContext);

$output24 .= '
  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments38 = array();
$arguments38['partial'] = 'clusterBox';
// Rendering Array
$array39 = array();
$array39['positon'] = 'last';
$array39['backgroundpicture'] = 'flyer-printing.jpg';
$array39['alt'] = 'Druck';
$array39['likToPageId'] = '52';
$array39['head'] = 'Druck';
// Rendering Array
$array40 = array();
$array40['0'] = 'Grafik und Layout';
$array40['1'] = 'Textgestaltung';
$array40['2'] = 'Lektorat';
$array40['3'] = 'Desktop-Publishing';
$array40['4'] = 'Erstellung von Druckvorlagen';
$array39['services'] = $array40;
$arguments38['arguments'] = $array39;
$arguments38['section'] = NULL;
$arguments38['optional'] = false;
$renderChildrenClosure41 = function() {return NULL;};

$output24 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments38, $renderChildrenClosure41, $renderingContext);

$output24 .= '
';
return $output24;
};

$output18 .= '';

$output18 .= '
';


return $output18;
}


}
#1478885188    11814     