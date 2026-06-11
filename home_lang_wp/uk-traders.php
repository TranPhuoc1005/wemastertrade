<!-- Traders -->
<section class="traders">
    <p class="traders__dc"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/traders_dc.png" width="792" height="1628" alt="WeMasterTrade Interviews"></p>
    <div class="container">
        <div class="title center">
            <p class="title__sub">
                <?php
                    
                    $texts = [
                        'th' => 'เรื่องราวของเทรดเดอร์',
                        'zh_CN' => '交易者故事',
                        'tr_TR' => 'Trader Hikayeleri',
                        'fr_FR' => 'Histoires de traders',
                        'es_PE' => 'Historias de Traders',
                        'es_ES' => 'Historias de traders',
                        'ru_RU' => 'Истории трейдеров',
                        'ja' => 'トレーダーのストーリー',
                        'ko_KR' => '트레이더 스토리',
                        'km' => 'រឿងរ៉ាវរបស់អ្នកជួញដូរ',
                        'bn_BD' => 'ট্রেডারদের গল্প',
                        'hk' => '交易者故事',
                        'ir' => 'داستان معامله‌گران',
                        'id' => 'Cerita Trader',
                        'pt_BR' => 'Histórias de traders',
                        'ur' => 'ٹریڈرز کی کہانیاں',
                    ];
                    $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Traders Stories';
                ?>
            </p>
            <?php
                
                $texts = [
                    'th' => '<h3>บทสัมภาษณ์ <span>WeMasterTrade</span></h3>',
                    'zh_CN' => '<h3><span>WeMasterTrade</span> 访谈</h3>',
                    'tr_TR' => '<h3><span>WeMasterTrade</span> Röportajları</h3>',
                    'fr_FR' => '<h3>Interviews <span>WeMasterTrade</span></h3>',
                    'es_PE' => '<h2 class="h3"><span>WeMasterTrade</span> Enrtrevistas</span></h2>',
                    'es_ES' => '<h3>Entrevistas de <span>WeMasterTrade</span></h3>',
                    'ru_RU' => '<h3>Интервью <span>WeMasterTrade</span></h3>',
                    'ja' => '<h2><span>WeMasterTrade</span> で成功した日本のプロップトレーダーの声</span></h2><h3><span>WeMasterTrade</span> インタビュー</h3>',
                    'ko_KR' => '<h3><span>WeMasterTrade</span> 인터뷰</h3>',
                    'km' => '<h3>បទសម្ភាសន៍ <span>WeMasterTrade</span></h3>',
                    'bn_BD' => '<h3><span>WeMasterTrade</span> সাক্ষাৎকার</h3>',
                    'hk' => '<h3><span>WeMasterTrade</span> 訪談</h3>',
                    'ir' => '<h3>مصاحبه‌های <span>WeMasterTrade</span></h3>',
                    'id' => '<h3>Wawancara <span>WeMasterTrade</span></h3>',
                    'pt_BR' => '<h3>Entrevistas <span>WeMasterTrade</span></h3>',
                    'ur' => '<h3>WeMasterTrade <span>کے انٹرویوز</span></h3>',
                ];
                $locale = cc_block_locale($texts);echo $texts[$locale] ?? '<h3>WeMasterTrade <span>Interviews</span></h3>';
            ?>
        </div>
        <p class="txt center">
            <?php
                
                $texts = [
                    'th' => 'ทุกเดือน เราจะสัมภาษณ์เทรดเดอร์ที่ประสบความสำเร็จ เพื่อแบ่งปันข้อมูลเชิงลึก แนวโน้ม และกลยุทธ์ล่าสุดในอุตสาหกรรม — ช่วยให้ลูกค้าของเราได้รับประสบการณ์ที่มีคุณค่าและเพิ่มรายได้ของพวกเขา ดูวิดีโอล่าสุดของเราได้ที่นี่!',
                    'zh_CN' => '每个月，我们都会采访成功的交易者，分享行业中的最新洞察、趋势和策略——帮助我们的客户获得宝贵经验并提升收益。点击这里查看我们最新的视频！',
                    'tr_TR' => 'Her ay, başarılı traderlarla röportaj yaparak sektördeki en son içgörüleri, trendleri ve stratejileri paylaşıyoruz — müşterilerimizin değerli deneyimler kazanmasına ve kazançlarını artırmasına yardımcı oluyoruz. En yeni videolarımızı buradan izleyin!',
                    'fr_FR' => 'Chaque mois, nous interviewons des traders à succès pour partager les dernières analyses, tendances et stratégies du secteur — aidant ainsi nos clients à acquérir une expérience précieuse et à améliorer leurs revenus. Découvrez nos dernières vidéos ici !',
                    'es_PE' => 'Cada mes entrevistamos traders exitosos para compartir insights, tendencias y estrategias del mercado. <br>Ayudamos a nuestra comunidad a ganar experiencia práctica y mejorar su desempeño. <br>Mira nuestros últimos videos aquí.',
                    'es_ES' => 'Cada mes entrevistamos a traders exitosos para compartir las últimas perspectivas, tendencias y estrategias del sector — ayudando a nuestros clientes a adquirir experiencia valiosa y mejorar sus ingresos. ¡Mira nuestros últimos videos aquí!',
                    'ru_RU' => 'Каждый месяц мы проводим интервью с успешными трейдерами, чтобы делиться последними инсайтами, трендами и стратегиями индустрии — помогая нашим клиентам получать ценный опыт и увеличивать доход. Смотрите наши последние видео здесь!',
                    'ja' => '毎月、世界中の成功したプロップトレーダーへのインタビューを行い、業界の最新トレンド・戦略・インサイトを共有しています。日本のトレーダーが貴重な経験を積み、収益を向上させるためのサポートを提供します。最新の動画はこちらからご覧ください。',
                    'ko_KR' => '매달 성공적인 트레이더들을 인터뷰하여 업계의 최신 인사이트, 트렌드 및 전략을 공유합니다 — 고객들이 귀중한 경험을 얻고 수익을 향상시킬 수 있도록 돕습니다. 최신 영상을 여기에서 확인하세요!',
                    'km' => 'រៀងរាល់ខែ យើងធ្វើបទសម្ភាសន៍ជាមួយអ្នកជួញដូរដែលជោគជ័យ ដើម្បីចែករំលែកការយល់ដឹងថ្មីៗ និន្នាការ និងយុទ្ធសាស្ត្រនៅក្នុងឧស្សាហកម្ម — ជួយអតិថិជនរបស់យើងទទួលបានបទពិសោធន៍ដ៏មានតម្លៃ និងបង្កើនប្រាក់ចំណូល។ សូមមើលវីដេអូចុងក្រោយរបស់យើងនៅទីនេះ!',
                    'bn_BD' => 'প্রতি মাসে আমরা সফল ট্রেডারদের সাক্ষাৎকার নিই যাতে শিল্পের সর্বশেষ অন্তর্দৃষ্টি, প্রবণতা এবং কৌশল শেয়ার করা যায় — আমাদের ক্লায়েন্টদের মূল্যবান অভিজ্ঞতা অর্জন এবং তাদের আয় বাড়াতে সাহায্য করার জন্য। আমাদের সর্বশেষ ভিডিওগুলো এখানে দেখুন!',
                    'hk' => '每個月我們都會訪問成功的交易者，分享行業中的最新洞察、趨勢和策略——幫助我們的客戶獲得寶貴經驗並提升收益。立即查看我們最新的影片！',
                    'ir' => 'هر ماه با معامله‌گران موفق مصاحبه می‌کنیم تا آخرین بینش‌ها، روندها و استراتژی‌های صنعت را به اشتراک بگذاریم — تا به مشتریان ما کمک کنیم تجربه ارزشمندی کسب کنند و درآمد خود را افزایش دهند. جدیدترین ویدیوهای ما را اینجا ببینید!',
                    'id' => 'Setiap bulan kami mewawancarai trader sukses untuk berbagi wawasan, tren, dan strategi terbaru di industri — membantu klien kami mendapatkan pengalaman berharga dan meningkatkan pendapatan mereka. Lihat video terbaru kami di sini!',
                    'pt_BR' => 'Todos os meses entrevistamos traders de sucesso para compartilhar os insights, tendências e estratégias mais recentes do setor — ajudando nossos clientes a adquirir experiência valiosa e melhorar seus ganhos. Confira nossos vídeos mais recentes aqui!',
                    'ur' => 'اپنی سمولیٹڈ ٹریڈنگ کے انعام کے طور پر بغیر کسی جھنجھٹ کے ادائیگیاں حاصل کریں۔
                     کیونکہ آپ کو اپنے پیسے کا انتظار نہیں کرنا چاہیے۔',
                ];
                $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Every month, we interview successful traders to share the latest insights, trends, and strategies in the industry — helping our clients gain valuable experience and improve their earnings. Check out our latest videos here!';
            ?>
        </p>
        <div class="traders__content">
            <p class="item lightbox-item" data-youtube-id="rRZtlSS2jxg"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/Arabia-po1.png" width="434" height="244" alt="WeMasterTrade Interviews"></p>
            <p class="item lightbox-item" data-youtube-id="XCkI6wOtxu0"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/colom-1.png" width="434" height="244" alt="WeMasterTrade Interviews"></p>
            <p class="item lightbox-item" data-youtube-id="LLKkxlq59Bk"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/po-32k.png" width="434" height="244" alt="WeMasterTrade Interviews"></p>
        </div>
        <div class="btn center">
            <p><a href="https://www.youtube.com/@wemastertrade_official/" target="_blank"><span>
                <?php
                    
                    $texts = [
                        'th' => 'ดูเพิ่มเติม',
                        'zh_CN' => '查看更多',
                        'tr_TR' => 'Daha fazla görüntüle',
                        'fr_FR' => 'Voir plus',
                        'es_PE' => '▶ Suscribirse al canal',
                        'es_ES' => 'Ver más',
                        'ru_RU' => 'Смотреть больше',
                        'ja' => 'もっと見る',
                        'ko_KR' => '더 보기',
                        'km' => 'មើលបន្ថែម',
                        'bn_BD' => 'আরও দেখুন',
                        'hk' => '查看更多',
                        'ir' => 'مشاهده بیشتر',
                        'ur' => 'مزید دیکھیں',
                        'id' => 'Lihat lebih banyak',
                        'pt_BR' => 'Ver mais',
                    ];
                    $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'View more';
                ?>
            </span></a></p>
            <p><a href="<?php echo pll_home_url(); ?>testimonials/" class="btn_w"><span>
                <?php
                    
                    $texts = [
                        'th' => 'รีวิวจากลูกค้า',
                        'zh_CN' => '客户评价',
                        'tr_TR' => 'Kullanıcı Yorumları',
                        'fr_FR' => 'Témoignages',
                        'es_PE' => 'Ver testimonios',
                        'es_ES' => 'Testimonios',
                        'ru_RU' => 'Отзывы',
                        'ja' => 'お客様の声',
                        'ko_KR' => '사용자 후기',
                        'km' => 'សក្ខីកម្ម',
                        'bn_BD' => 'গ্রাহক মতামত',
                        'hk' => '客戶評價',
                        'ir' => 'نظرات کاربران',
                        'ur' => 'آراء',
                        'id' => 'Testimoni',
                        'pt_BR' => 'Depoimentos',
                    ];
                    $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Testimonials';
                ?>
            </span></a></p>
        </div>
    </div>
</section>
<!-- End Traders -->