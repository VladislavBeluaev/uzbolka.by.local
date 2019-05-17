/**
 * Created by isida on 16.05.2019.
 */
class AsynchronousLoaderImg{
    constructor(preloadImgObject){
        this._preloadImgCollection =Object.entries(preloadImgObject.preloadImgCollection);
    }

    load(){
        this._preloadImgCollection.forEach(array=>{
            let [container,src] = array;
            if(container==='banner'){
              this._bannerPreloadCallback(container,src);
            }
        });
    }

    _bannerPreloadCallback(container,src){
        let imgWithReplacingSrc$ = $(`.${container}`).find('img').first();
        if(!imgWithReplacingSrc$.length) return;
        let loadingImage = new Image();
        $('#preload')
        loadingImage.onload = function(){
            let replaceSrc = this.src;
            imgWithReplacingSrc$.animate({opacity: 0.0}, 150, function () {
                $(this).attr('src',replaceSrc);
                $('#preload').removeClass('display-none').css({
                    position:'absolute',
                    top:'50%',
                    left:'50%',
                    'z-index':10000
                });
            });
            imgWithReplacingSrc$.animate({opacity: 1.0},{duration:300,specialEasing: {
                opacity: 'easeOutQuint',
            }});
        };
        setTimeout(function () {
            $('#preload').addClass('display-none');
        },1500);
        loadingImage.src = src;
    }
}
export {AsynchronousLoaderImg}