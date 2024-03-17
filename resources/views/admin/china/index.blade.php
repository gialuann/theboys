@extends('admin.blog.master')
@section('title' ,'Viet Nam')
@section('action', 'List Mountains')

<link rel="stylesheet" href="{{ asset('admin/mountrains/style.css')}}">

@section('content')

<section class="package" id="package">
    <div class="package-title">
        <h2>Mountains China</h2>
    </div>

    <div class="package-content">
        
        <div class="box">
            <div class="image">
                <img src="{{asset('blog/files/thaison.jpg')}}" alt="">
                <h3>Tàishān</h3>
            </div>
            <div class="stars">
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star-half'></i></a>
            </div>
            <div class="dest-content">
                <div class="location">
                    <li><h4>Tóng yǎ: tài shān</h4></li>
                <ul class="pac-details">
                    <li>height 1.533m</li>
                    <li>Mount Tai is located in Shandong province - China with a total area of ​​426 km². Ancient people called this mountain the pillar supporting the sky. It is called Dong Nhac - the holy land of Taoism and the place of worship of Chinese imperial dynasties. Thai Son is associated with dawn - rebirth and to the ancient Chinese, this was the most sacred mountain, ranked 1 of the 5 mountains.</li>
                </ul>
                </div>
            </div>
        </div>
        
        <div class="box">
            <div class="image">
                <img src="{{asset('blog/files/hoason.jpg')}}" alt="">
                <h3>hé shān</h3>
            </div>

            <div class="stars">
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star-half'></i></a>
            </div>
        
            <div class="dest-content">
                <div class="location">
                    <h4>Xī yǎ: hé shān</h4>
                    <ul class="pac-details">
                        <li>height 2.083mm</li>
                        <li>Huashan is a mountain in the eastern section of the Qinling range in southern Shaanxi province, about 100 km east of Xi'an city - the ancient capital. Hoa Son is famous for its majestic beauty and the most dangerous roads in the world that many people want to try to conquer. This landscape was recognized by UNESCO as a World Natural Heritage in 1990.<br>
                        To reach the top of Hoa Son, you have to cross roads running along the 1,800 m high mountain slope. After climbing the steep stone steps, visitors still have to cling to the cliff to follow the wooden boardwalk system to reach the top of the mountain.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="{{asset('blog/files/hanhson.jpg')}}" alt="">
                <h3>Hán shān</h3>
            </div>

            <div class="stars">
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star-half'></i></a>
            </div>

            <div class="dest-content">
                <div class="location">
                    <h4>Nán yǎ: Hán shān</h4>
                    <ul class="pac-details">
                        <li>height 1300m</li>
                        <li>Located in the Nam Nhac area of ​​Ngu Nhac, 50 km from the center of Hengyang city, Hunan province - China, Hengshan is made up of granite, steep cliffs with a height of 1,290 m, has a strange shape and includes 72 large and small mountain peaks.  <br>
                        The pronunciation of the two mountains Hengshan and Hengshan are identical, they are both Heng Shan. To distinguish them, people sometimes call Hengshan Nan Heng Shan (Southern Heng Shan), Hengshan Bei Heng Shan (Northern Hengshan). At the foot of Hengshan, we can admire the largest temple in Southern China.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="{{asset('blog/files/hangson.jpg')}}" alt="">
                <h3>háng shān</h3>
            </div>

            <div class="stars">
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
            </div>
        
            <div class="dest-content">
                <div class="location">
                    <h4>Běi yá: háng shān</h4>
                    <ul class="pac-details">
                        <li>height 2.016,1m</li>
                        <li>Hang Son, also known as Nguyen Nhac or Thuong Son, is located in Hon Nguyen district, Son Tay province - China, bordering Inner Mongolia, in the dry highlands, year-round with sunshine, wind, and dust. Legend has it that when King Shun came here to patrol his animals, he named Hang Son the Northern Swallow. <br>
                        Son Linh mountain is 2,016 m high and is the highest mountain in Hang Son. On Thien Son Linh mountain, there is the main temple, Bac Nhan temple, worshiping the god Hang Son. Since the beginning of the New Han period, Hang Son has had temples and pagodas; By the Ming and Qing dynasties, pagodas and temples were quite crowded, with "three temples, four temples, nine palaces, seven palaces, eight temples, twelve temples".</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="{{asset('blog/files/nui-Langbiang.jpg')}}" alt="">
                <h3>dōngshān</h3>
            </div>

            <div class="stars">
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star-half'></i></a>
            </div>
        
            <div class="dest-content">
                <div class="location">
                    <h4>Zhōng yǎ: dōngshān</h4>
                    <ul class="pac-details">
                        <li>height 1.512m</li>
                        <li>Tung Son is located in Dang Phong, Zhengzhou, Henan province, China, to the north overlooking the Yellow River, to the south Lac Thuy overlooking Dinh Thuy, to the east Co Son is connected to the capital of Bien Luong of the 5 dynasties, to the west adjacent to the ancient capital Luoyang of 9 dynasties. That's why it is called "Bien Lac Bi Kinh, Ky Noi Nam Mountain", the number one famous mountain in the Central Plains.<br>
                        Tung Son is located in Trung Nguyen, in the past it was called Trung Nhac. The peak of the mountain is Tuan Cuc peak, 1,491.7 m above sea level. <br>
                        Coming to Tung Son, you will not only visit ancient relics such as Trung Nhac Temple built during the Qin Dynasty - one of the most ancient architectural works in China, but also learn about the cradle of martial arts. Extremely famous in China is the Shaolin Temple.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

</section>

@endsection