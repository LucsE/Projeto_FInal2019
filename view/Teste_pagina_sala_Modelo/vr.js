/**
 * API do google para carregamneto de imagem 360
*/
window.addEventListener('load', onVrViewLoad);

function onVrViewLoad() {
  // Selector '#vrview' finds element with id 'vrview'.
  var vrView = new VRView.Player('#vrview', {
    image: 'http://localhost/pjfinal_05_11_2019/view/img360_Sinfo.jpeg',
  });
}