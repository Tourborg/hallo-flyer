<?php
class FluidCache_Standalone_template_file_basis_43cc2a77455944614c4a23c40b574807b8c39273 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

  <!--

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
$arguments4 = array();
$arguments4['partial'] = 'clusterBox';
// Rendering Array
$array5 = array();
$array5['positon'] = 'first';
$array5['backgroundpicture'] = 'flyer-printing.jpg';
$array5['alt'] = 'Flyerverteilung';
$array5['likToPageId'] = '50';
$array5['head'] = 'Flyer';
// Rendering Array
$array6 = array();
$array6['0'] = 'Haushaltswebung';
$array6['1'] = 'Hand zu Hand';
$array6['2'] = 'Auslagestellenverteilung';
$array6['3'] = 'Mailings';
$array5['services'] = $array6;
$arguments4['arguments'] = $array5;
$arguments4['section'] = NULL;
$arguments4['optional'] = false;
$renderChildrenClosure7 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments4, $renderChildrenClosure7, $renderingContext);

$output0 .= '
  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments8 = array();
$arguments8['partial'] = 'clusterBox';
// Rendering Array
$array9 = array();
$array9['positon'] = '';
$array9['backgroundpicture'] = 'flyer-printing.jpg';
$array9['alt'] = 'Plakatierung';
$array9['likToPageId'] = '51';
$array9['head'] = 'Plakat';
// Rendering Array
$array10 = array();
$array10['0'] = 'Tafelplakatierung';
$array10['1'] = 'Flächenplakatierung';
$array10['2'] = 'Litfasssäulenplakatierung';
$array10['3'] = 'Großflächenplakatierung';
$array10['4'] = 'Indoorplaktierung';
$array10['5'] = 'Verkehrsmittelwerbung';
$array9['services'] = $array10;
$arguments8['arguments'] = $array9;
$arguments8['section'] = NULL;
$arguments8['optional'] = false;
$renderChildrenClosure11 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments8, $renderChildrenClosure11, $renderingContext);

$output0 .= '
  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments12 = array();
$arguments12['partial'] = 'clusterBox';
// Rendering Array
$array13 = array();
$array13['positon'] = 'last';
$array13['backgroundpicture'] = 'flyer-printing.jpg';
$array13['alt'] = 'Druck';
$array13['likToPageId'] = '52';
$array13['head'] = 'Druck';
// Rendering Array
$array14 = array();
$array14['0'] = 'Grafik und Layout';
$array14['1'] = 'Textgestaltung';
$array14['2'] = 'Lektorat';
$array14['3'] = 'Desktop-Publishing';
$array14['4'] = 'Erstellung von Druckvorlagen';
$array13['services'] = $array14;
$arguments12['arguments'] = $array13;
$arguments12['section'] = NULL;
$arguments12['optional'] = false;
$renderChildrenClosure15 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments12, $renderChildrenClosure15, $renderingContext);

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

$output16 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments17 = array();
$arguments17['name'] = 'Rahmen';
$renderChildrenClosure18 = function() {return NULL;};
$viewHelper19 = $self->getViewHelper('$viewHelper19', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper19->setArguments($arguments17);
$viewHelper19->setRenderingContext($renderingContext);
$viewHelper19->setRenderChildrenClosure($renderChildrenClosure18);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output16 .= $viewHelper19->initializeArgumentsAndRender();

$output16 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments20 = array();
$arguments20['name'] = 'content';
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output22 = '';

$output22 .= '
  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments23 = array();
$arguments23['partial'] = 'textBox';
// Rendering Array
$array24 = array();
$array24['header'] = 'Willkommen';
$array24['text'] = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                          veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                          dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                          sunt in culpa qui officia deserunt mollit anim id est laborum.';
$arguments23['arguments'] = $array24;
$arguments23['section'] = NULL;
$arguments23['optional'] = false;
$renderChildrenClosure25 = function() {return NULL;};

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments23, $renderChildrenClosure25, $renderingContext);

$output22 .= '

  <!--

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
$arguments26 = array();
$arguments26['partial'] = 'clusterBox';
// Rendering Array
$array27 = array();
$array27['positon'] = 'first';
$array27['backgroundpicture'] = 'flyer-printing.jpg';
$array27['alt'] = 'Flyerverteilung';
$array27['likToPageId'] = '50';
$array27['head'] = 'Flyer';
// Rendering Array
$array28 = array();
$array28['0'] = 'Haushaltswebung';
$array28['1'] = 'Hand zu Hand';
$array28['2'] = 'Auslagestellenverteilung';
$array28['3'] = 'Mailings';
$array27['services'] = $array28;
$arguments26['arguments'] = $array27;
$arguments26['section'] = NULL;
$arguments26['optional'] = false;
$renderChildrenClosure29 = function() {return NULL;};

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments26, $renderChildrenClosure29, $renderingContext);

$output22 .= '
  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments30 = array();
$arguments30['partial'] = 'clusterBox';
// Rendering Array
$array31 = array();
$array31['positon'] = '';
$array31['backgroundpicture'] = 'flyer-printing.jpg';
$array31['alt'] = 'Plakatierung';
$array31['likToPageId'] = '51';
$array31['head'] = 'Plakat';
// Rendering Array
$array32 = array();
$array32['0'] = 'Tafelplakatierung';
$array32['1'] = 'Flächenplakatierung';
$array32['2'] = 'Litfasssäulenplakatierung';
$array32['3'] = 'Großflächenplakatierung';
$array32['4'] = 'Indoorplaktierung';
$array32['5'] = 'Verkehrsmittelwerbung';
$array31['services'] = $array32;
$arguments30['arguments'] = $array31;
$arguments30['section'] = NULL;
$arguments30['optional'] = false;
$renderChildrenClosure33 = function() {return NULL;};

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments30, $renderChildrenClosure33, $renderingContext);

$output22 .= '
  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments34 = array();
$arguments34['partial'] = 'clusterBox';
// Rendering Array
$array35 = array();
$array35['positon'] = 'last';
$array35['backgroundpicture'] = 'flyer-printing.jpg';
$array35['alt'] = 'Druck';
$array35['likToPageId'] = '52';
$array35['head'] = 'Druck';
// Rendering Array
$array36 = array();
$array36['0'] = 'Grafik und Layout';
$array36['1'] = 'Textgestaltung';
$array36['2'] = 'Lektorat';
$array36['3'] = 'Desktop-Publishing';
$array36['4'] = 'Erstellung von Druckvorlagen';
$array35['services'] = $array36;
$arguments34['arguments'] = $array35;
$arguments34['section'] = NULL;
$arguments34['optional'] = false;
$renderChildrenClosure37 = function() {return NULL;};

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments34, $renderChildrenClosure37, $renderingContext);

$output22 .= '
';
return $output22;
};

$output16 .= '';

$output16 .= '
';


return $output16;
}


}
#1478884986    10516     