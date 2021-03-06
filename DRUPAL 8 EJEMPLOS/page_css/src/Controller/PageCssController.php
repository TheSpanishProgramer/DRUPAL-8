<?php
namespace Drupal\page_css\Controller;

class PageCssController {

  public function simplePage() {
    
    $page = '
            <div class="myBackground">
            
            <img src="modules/custom/page_css/images/motocustom.jpg">
            
            <h2 class="myTitle">Motorbikes Web Resources</h2>
            <ul>
              <li><a href="#magazines">Magazines</a></li>
              <li><a href="#sales">Sales</a></li>
              <li><a href="#social">Social networks</a></li>
            </ul>
            
            <hr>
            
            <div id="magazines">
              <h3>Magazines</h3>
              <table>
                <tr><th>Imagen</th><th>Enlace/contenido</th></tr>
                <tr>
                  <td><img width="150" src="http://cdn.motorbikemag.es/wp-content/uploads/2016/02/portada-2048-1200x900.jpg"></td>
                  <td><a href="http://www.motorbikemag.es/">Motorbike Magazine</a></td>
                </tr>
                <tr>
                  <td><img width="150" src="http://cycleworld.blob.core.windows.net/cycleworld20160301thumbnails/Covers/0x360/20160301.jpg"></td>
                  <td><a href="http://www.cycleworld.com/">CycleWorld</td>
                </tr>
              </table>
            </div>
            
            <hr>
            
            <div id="sales">
              <h3>Sales</h3>
              <table>
                <tr><th>Imagen</th><th>Enlace/contenido</th></tr>
                <tr>
                  <td><img width="150" src="http://www.raptorsandrockets.com/images/Moto_Guzzi/2012/2012_MotoGuzzi_V7Stone_TorSagen%20%2816%29.jpg"></td>
                  <td>Lorem fistrum diodenoo adipisicing ese pedazo de diodeno al ataquerl.</td>
                </tr>
                <tr>
                  <td><img width="150" src="http://www.raptorsandrockets.com/images/Moto_Guzzi/2012/2012_MotoGuzzi_V7Stone_TorSagen%20%2816%29.jpg"></td>
                  <td>Et la caidita ad a peich. Te voy a borrar el cerito ese hombree ahorarr duis.</td>
                </tr>
              </table>
            </div>
            
            <hr>
            
            <div id="social">
              <h3>Social networks</h3>
              <table>
                <tr><th>Imagen</th><th>Enlace/contenido</th></tr>
                <tr>
                  <td><img width="150" src="http://www.raptorsandrockets.com/images/Moto_Guzzi/2012/2012_MotoGuzzi_V7Stone_TorSagen%20%2816%29.jpg"></td>
                  <td>Se calle ust??e qu?? dise usteer consectetur officia aute reprehenderit se calle ust??e qu?? dise usteer al ataquerl irure ahorarr.</td>
                </tr>
                <tr>
                  <td><img width="150" src="http://www.raptorsandrockets.com/images/Moto_Guzzi/2012/2012_MotoGuzzi_V7Stone_TorSagen%20%2816%29.jpg"></td>
                  <td>No puedor tempor al ataquerl occaecat magna cillum est?? la cosa muy malar qui exercitation jarl occaecat. Apetecan labore se calle ust??e elit qui fistro condemor duis. Laboris eiusmod ut no puedor. </td>
                </tr>
              </table>
            </div>
            </div>
            ';
    $content = [
      '#markup' => $page,
    ];
    
    $content['#attached']['library'][] = 'page_css/css/style';
    
    return $content;
  }
  
}
