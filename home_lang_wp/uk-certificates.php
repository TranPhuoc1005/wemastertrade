<!-- Certificates -->
<section class="certificates">
    <div class="container">
        <div class="certificates__frame">
            <div class="title">
                <p class="title__sub">
                    <?php
                        $texts = [
                            'th' => 'การรับรอง',
                            'zh_CN' => '认证',
                            'tr_TR' => 'Sertifikasyon',
                            'fr_FR' => 'Attestation',
                            'es_ES' => 'Certificación',
                            'ru_RU' => 'Сертификация',
                            'ja' => '認証',
                            'ko_KR' => '인증',
                            'km' => 'វិញ្ញាបនបត្រ',
                            'bn_BD' => 'সনদপত্র',
                            'hk' => '認證',
                            'ir' => 'گواهینامه',
                            'pt_BR' => 'Certificação',
                            'uz_UZ' => 'Sertifikatlash',
                            'ur' => 'سرٹیفیکیٹس',
                        ];
                        $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Certification';
                    ?>
                </p>
                <h2 class="h3">
                    <?php
                        $texts = [
                            'th' => 'รางวัล & <br><span>การยอมรับ</span>',
                            'zh_CN' => '奖项与<br><span>认可</span>',
                            'tr_TR' => 'Ödüller & <br><span>Tanınırlık</span>',
                            'fr_FR' => 'Prix & <br><span>Reconnaissance</span>',
                            'es_PE' => 'Premios & <br><span>Reconocimiento</span>',
                            'es_ES' => 'Premios & <br><span>Reconocimiento</span>',
                            'ru_RU' => 'Награды & <br><span>Признание</span>',
                            'ja' => '受賞歴 & <br><span>評価</span>',
                            'ko_KR' => '수상 & <br><span>인정</span>',
                            'km' => 'ពានរង្វាន់ & <br><span>ការទទួលស្គាល់</span>',
                            'bn_BD' => 'পুরস্কার & <br><span>স্বীকৃতি</span>',
                            'ph' => 'Mga Parangal & <br><span>Pagkilala</span>',
                            'hk' => '獎項與<br><span>認可</span>',
                            'ir' => 'جوایز و <br><span>قدردانی</span>',
                            'id' => 'Penghargaan & <br><span>Pengakuan</span>',
                            'pt_BR' => 'Prêmios & <br><span>Reconhecimento</span>',
                            'uz_UZ' => 'Mukofotlar va <br><span>e’tirof</span>',
                            'ur' => 'ایوارڈز اور<br> <span>تسلیمات</span>',
                        ];
                        $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Awards & <br><span>Recognition</span>';
                    ?>
                </h2>
                <div class="btn"><p><a href="<?php echo pll_home_url(); ?>certification/"><span>
                    <?php
                        $texts = [
                            'th' => 'เรียนรู้เพิ่มเติม',
                            'zh_CN' => '查看更多',
                            'tr_TR' => 'Daha fazla öğren',
                            'fr_FR' => 'En savoir plus',
                            'es_PE' => 'Aprender más',
                            'es_ES' => 'Aprender más',
                            'ru_RU' => 'Узнать больше',
                            'ja' => '詳細を見る',
                            'ko_KR' => '자세히 보기',
                            'km' => 'ស្វែងយល់បន្ថែម',
                            'bn_BD' => 'আরও জানুন',
                            'ph' => 'Matuto pa',
                            'hk' => '查看更多',
                            'ir' => 'بیشتر بدانید',
                            'id' => 'Pelajari lebih lanjut',
                            'pt_BR' => 'Saiba mais',
                            'uz_UZ' => 'Batafsil ma’lumot',
                            'ur' => 'مزید جانیں',
                        ];
                        $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Learn more';
                    ?>
                </span></a></p></div>
            </div>
            <p class="certificates__line"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/certificates_line.png" width="1" height="258" alt="Awards & Recognition"></p>
            <ul class="certificates__bnr">
                <li><p><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/certificates_bnr1.png" width="197" height="166" alt="Best Instant Funding Prop Firm 2025"></p></li>
                <li><p><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/certificates_bnr2.png" width="197" height="186" alt="Smart Financial Education Platform 2025"></p></li>
                <li><p><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/certificates_bnr3.png" width="197" height="166" alt="International Accreditation Council"></p></li>
                <li><p><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/certificates_bnr4.png" width="197" height="186" alt="The Financial Crimes Enforcement Network"></p></li>
            </ul>
        </div>

        <div class="certificates__info">
            <div class="certificates__content">
                <div class="frame">
                    <div class="desc">
                        <p class="symb top"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/symb_top.svg" width="28" height="18" alt="Awards & Recognition"></p>
                        <p class="txt">
                            <?php
                                $texts = [
                                    'zh_CN' => '用户将获得一个模拟账户。该账户上的交易活动会通过我们的专有算法在实时环境中映射至公司的交易系统，并可能产生实际资金流动。',
                                    'tr_TR' => 'Kullanıcılara simüle edilmiş bir hesap sağlanır. Bu hesap üzerindeki işlem faaliyetleri, özel algoritmalarımız aracılığıyla gerçek zamanlı olarak şirketin işlem sistemine yansıtılır ve fiili nakit akışı oluşabilir.',
                                    'fr_FR' => 'Les clients disposent d’un compte simulé. L’activité de trading sur ce compte est reflétée en temps réel via nos algorithmes propriétaires dans le système de trading de la société, pouvant générer des flux de trésorerie réels.',
                                    'es_ES' => 'Los clientes reciben una cuenta simulada. La actividad de trading en esta cuenta se refleja en tiempo real mediante nuestros algoritmos en el sistema de trading de la empresa, pudiendo generar flujo de efectivo real.',
                                    'th'    => 'ผู้ใช้งานจะได้รับบัญชีจำลอง โดยกิจกรรมการเทรดจะถูกสะท้อนแบบเรียลไทม์ผ่านอัลกอริทึมของเราไปยังระบบของบริษัท และอาจก่อให้เกิดกระแสเงินสดจริง',
                                    'ru_RU' => 'Пользователям предоставляется симулированный счёт. Торговая активность на этом счёте отражается в режиме реального времени с использованием наших алгоритмов в системе компании и может приводить к фактическому денежному потоку.',
                                    'ja'    => 'クライアントにはシミュレーション口座が提供されます。この口座での取引活動は当社の独自アルゴリズムによりリアルタイムで反映され、実際のキャッシュフローが発生します。',
                                    'ko_KR' => '사용자에게는 시뮬레이션 계정이 제공됩니다. 해당 계정의 거래 활동은 당사의 알고리즘을 통해 실시간으로 시스템에 반영되며, 실제 현금 흐름이 발생할 수 있습니다.',
                                    'km'    => 'អ្នកប្រើប្រាស់នឹងទទួលបានគណនីស្មាន។ សកម្មភាពជួញដូរនៅលើគណនីនេះនឹងត្រូវបានបញ្ជូនតាមអាល់ហ្គូរីធម៍របស់យើងទៅកាន់ប្រព័ន្ធរបស់ក្រុមហ៊ុនក្នុងពេលវេលាពិត ហើយអាចបង្កើតលំហូរប្រាក់ពិត។',
                                    'bn_BD' => 'ব্যবহারকারীদের একটি সিমুলেটেড অ্যাকাউন্ট প্রদান করা হয়। এই অ্যাকাউন্টের ট্রেডিং কার্যক্রম আমাদের অ্যালগরিদমের মাধ্যমে রিয়েল-টাইমে কোম্পানির সিস্টেমে প্রতিফলিত হয় এবং বাস্তব নগদ প্রবাহ তৈরি করতে পারে।',
                                    'ur'    => 'صارفین کو ایک سمیولیٹڈ اکاؤنٹ فراہم کیا جاتا ہے۔ اس اکاؤنٹ کی ٹریڈنگ سرگرمی ہمارے الگورتھمز کے ذریعے حقیقی وقت میں کمپنی کے سسٹم میں ظاہر ہوتی ہے اور حقیقی کیش فلو پیدا ہو سکتا ہے۔',
                                    'hk'    => '用戶將獲得一個模擬帳戶。該帳戶上的交易活動會透過我們的專有演算法即時映射至公司的系統，並可能產生實際資金流動。',
                                    'ir'    => 'به کاربران یک حساب شبیه‌سازی‌شده ارائه می‌شود. فعالیت‌های معاملاتی این حساب از طریق الگوریتم‌های ما به‌صورت لحظه‌ای در سیستم شرکت منعکس شده و ممکن است منجر به جریان نقدی واقعی شود.',
                                    'pt_BR' => 'Os usuários recebem uma conta simulada. A atividade de trading nessa conta é refletida em tempo real por meio de nossos algoritmos no sistema da empresa, podendo gerar fluxo de caixa real.',
                                ];
                                $locale = cc_block_locale($texts);
                                echo $texts[$locale] ?? 'Clients are provided with a simulated account. Their trading activity on this account is replicated in real-time by our exclusive algorithms to our live firm trading account, generating actual cash flow.';
                            ?>
                        </p>
                        <p class="symb bottom"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/symb_bottom.svg" width="28" height="18" alt="Awards & Recognition"></p>
                    </div>
                    <p class="certificates__ceo"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/icon_line_ceo.svg" width="36" height="2" alt="Andrew Anth - WeMasterTrade CEO">Andrew Anth – WeMasterTrade CEO</p>
                </div>
                <div class="btn btn__download center">
                    <p><a href="<?php echo pll_home_url(); ?>handbook-page/"><span>
                        <?php
                            $texts = [
                                'th' => 'ดาวน์โหลดคู่มือ',
                                'zh_CN' => '下载手册',
                                'tr_TR' => 'El Kitabını İndir',
                                'fr_FR' => 'Télécharger le guide',
                                'es_PE' => 'Manual',
                                'es_ES' => 'Descargar manual',
                                'ru_RU' => 'Скачать руководство',
                                'ja' => 'ハンドブックをダウンロード',
                                'ko_KR' => '핸드북 다운로드',
                                'km' => 'ទាញយកសៀវភៅណែនាំ',
                                'bn_BD' => 'হ্যান্ডবুক ডাউনলোড করুন',
                                'ph' => 'I-download ang Handbook',
                                'hk' => '下載手冊',
                                'ir' => 'دانلود راهنما',
                                'id' => 'Unduh Buku Panduan',
                                'pt_BR' => 'Baixar Manual',
                                'uz_UZ' => 'Qo‘llanma',
                                'ur' => 'ہینڈ بک ڈاؤن لوڈ کریں',
                            ];
                            $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Download Handbook';
                        ?>
                    </span></a></p>
                </div>
            </div>
            <p class="certificates__video lightbox-item" data-youtube-id="hMIrZSsSAag"><img style="border-radius:15px" loading="lazy" src="/wp-content/uploads/2026/04/hMIrZSsSAag-HD.jpg" width="1398" height="787" alt="WeMasterTrade CEO"></p>
        </div>
    </div>
</section>
<!-- End Certificates -->