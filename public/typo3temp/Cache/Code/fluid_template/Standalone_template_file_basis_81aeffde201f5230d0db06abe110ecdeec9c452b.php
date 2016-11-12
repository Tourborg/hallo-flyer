<?php
class FluidCache_Standalone_template_file_basis_81aeffde201f5230d0db06abe110ecdeec9c452b extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  <div class="einleitung">
    <h1>Lorem ipsum dolor</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
      dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
      ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
      fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
      mollit anim id est laborum.</p>
  </div>

  <f:render partial ="videoBox" arguments="';

$output0 .= '{videoURL: \'https://www.youtube-nocookie.com/embed/uwYxOVgX2CA?rel=0&amp;controls=0&amp;showinfo=0\'}';

$output0 .= '" />

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
$arguments1 = array();
$arguments1['partial'] = 'clusterBox';
// Rendering Array
$array2 = array();
$array2['positon'] = 'first';
$array2['backgroundpicture'] = 'flyer-printing.jpg';
$array2['alt'] = 'Flyerverteilung';
$array2['likToPageId'] = '50';
$array2['head'] = 'Flyer';
// Rendering Array
$array3 = array();
$array3['0'] = 'Haushaltswebung';
$array3['1'] = 'Hand zu Hand';
$array3['2'] = 'Auslagestellenverteilung';
$array3['3'] = 'Mailings';
$array2['services'] = $array3;
$arguments1['arguments'] = $array2;
$arguments1['section'] = NULL;
$arguments1['optional'] = false;
$renderChildrenClosure4 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1, $renderChildrenClosure4, $renderingContext);

$output0 .= '
  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments5 = array();
$arguments5['partial'] = 'clusterBox';
// Rendering Array
$array6 = array();
$array6['positon'] = '';
$array6['backgroundpicture'] = 'flyer-printing.jpg';
$array6['alt'] = 'Plakatierung';
$array6['likToPageId'] = '51';
$array6['head'] = 'Plakat';
// Rendering Array
$array7 = array();
$array7['0'] = 'Tafelplakatierung';
$array7['1'] = 'Flächenplakatierung';
$array7['2'] = 'Litfasssäulenplakatierung';
$array7['3'] = 'Großflächenplakatierung';
$array7['4'] = 'Indoorplaktierung';
$array7['5'] = 'Verkehrsmittelwerbung';
$array6['services'] = $array7;
$arguments5['arguments'] = $array6;
$arguments5['section'] = NULL;
$arguments5['optional'] = false;
$renderChildrenClosure8 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments5, $renderChildrenClosure8, $renderingContext);

$output0 .= '
  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments9 = array();
$arguments9['partial'] = 'clusterBox';
// Rendering Array
$array10 = array();
$array10['positon'] = 'last';
$array10['backgroundpicture'] = 'flyer-printing.jpg';
$array10['alt'] = 'Druck';
$array10['likToPageId'] = '52';
$array10['head'] = 'Druck';
// Rendering Array
$array11 = array();
$array11['0'] = 'Grafik und Layout';
$array11['1'] = 'Textgestaltung';
$array11['2'] = 'Lektorat';
$array11['3'] = 'Desktop-Publishing';
$array11['4'] = 'Erstellung von Druckvorlagen';
$array10['services'] = $array11;
$arguments9['arguments'] = $array10;
$arguments9['section'] = NULL;
$arguments9['optional'] = false;
$renderChildrenClosure12 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments9, $renderChildrenClosure12, $renderingContext);

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

$output13 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments14 = array();
$arguments14['name'] = 'Rahmen';
$renderChildrenClosure15 = function() {return NULL;};
$viewHelper16 = $self->getViewHelper('$viewHelper16', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper16->setArguments($arguments14);
$viewHelper16->setRenderingContext($renderingContext);
$viewHelper16->setRenderChildrenClosure($renderChildrenClosure15);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output13 .= $viewHelper16->initializeArgumentsAndRender();

$output13 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments17 = array();
$arguments17['name'] = 'content';
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output19 = '';

$output19 .= '
  <div class="einleitung">
    <h1>Lorem ipsum dolor</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
      dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
      ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
      fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
      mollit anim id est laborum.</p>
  </div>

  <f:render partial ="videoBox" arguments="';

$output19 .= '{videoURL: \'https://www.youtube-nocookie.com/embed/uwYxOVgX2CA?rel=0&amp;controls=0&amp;showinfo=0\'}';

$output19 .= '" />

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
$arguments20 = array();
$arguments20['partial'] = 'clusterBox';
// Rendering Array
$array21 = array();
$array21['positon'] = 'first';
$array21['backgroundpicture'] = 'flyer-printing.jpg';
$array21['alt'] = 'Flyerverteilung';
$array21['likToPageId'] = '50';
$array21['head'] = 'Flyer';
// Rendering Array
$array22 = array();
$array22['0'] = 'Haushaltswebung';
$array22['1'] = 'Hand zu Hand';
$array22['2'] = 'Auslagestellenverteilung';
$array22['3'] = 'Mailings';
$array21['services'] = $array22;
$arguments20['arguments'] = $array21;
$arguments20['section'] = NULL;
$arguments20['optional'] = false;
$renderChildrenClosure23 = function() {return NULL;};

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments20, $renderChildrenClosure23, $renderingContext);

$output19 .= '
  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments24 = array();
$arguments24['partial'] = 'clusterBox';
// Rendering Array
$array25 = array();
$array25['positon'] = '';
$array25['backgroundpicture'] = 'flyer-printing.jpg';
$array25['alt'] = 'Plakatierung';
$array25['likToPageId'] = '51';
$array25['head'] = 'Plakat';
// Rendering Array
$array26 = array();
$array26['0'] = 'Tafelplakatierung';
$array26['1'] = 'Flächenplakatierung';
$array26['2'] = 'Litfasssäulenplakatierung';
$array26['3'] = 'Großflächenplakatierung';
$array26['4'] = 'Indoorplaktierung';
$array26['5'] = 'Verkehrsmittelwerbung';
$array25['services'] = $array26;
$arguments24['arguments'] = $array25;
$arguments24['section'] = NULL;
$arguments24['optional'] = false;
$renderChildrenClosure27 = function() {return NULL;};

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments24, $renderChildrenClosure27, $renderingContext);

$output19 .= '
  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments28 = array();
$arguments28['partial'] = 'clusterBox';
// Rendering Array
$array29 = array();
$array29['positon'] = 'last';
$array29['backgroundpicture'] = 'flyer-printing.jpg';
$array29['alt'] = 'Druck';
$array29['likToPageId'] = '52';
$array29['head'] = 'Druck';
// Rendering Array
$array30 = array();
$array30['0'] = 'Grafik und Layout';
$array30['1'] = 'Textgestaltung';
$array30['2'] = 'Lektorat';
$array30['3'] = 'Desktop-Publishing';
$array30['4'] = 'Erstellung von Druckvorlagen';
$array29['services'] = $array30;
$arguments28['arguments'] = $array29;
$arguments28['section'] = NULL;
$arguments28['optional'] = false;
$renderChildrenClosure31 = function() {return NULL;};

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments28, $renderChildrenClosure31, $renderingContext);

$output19 .= '
';
return $output19;
};

$output13 .= '';

$output13 .= '
';


return $output13;
}


}
#1478884503    9594      