<!-- Unique -->
<section class="unique">
        <div class="container">
            <div class="unique__title">
                <div class="title">
                    <p class="title__sub">
                        <?php
                            $locale = get_locale();
                            if (function_exists('cc_locale_raw') && cc_locale_raw() === 'es_MX') {
                                $locale = 'es_MX';
                            }
                            $texts = [
                                'th' => 'ทำไมต้องเลือก?',
                                'zh_CN' => '为什么选择？',
                                'tr_TR' => 'Neden seçmelisiniz?',
                                'fr_FR' => 'Pourquoi choisir ?',
                                'es_PE' => '¿Por qué elegir?',
                                'es_ES' => '¿Por qué elegir?',
                                'ru_RU' => 'Почему выбрать?',
                                'ja' => 'なぜ選ぶ？',
                                'ko_KR' => '왜 선택해야 할까요?',
                                'km' => 'ហេតុអ្វីជ្រើសរើស?',
                                'bn_BD' => 'কেন নির্বাচন করবেন?',
                                'hk' => '為什麼選擇？',
                                'ir' => 'چرا انتخاب کنیم؟',
                                'ur' => 'کیوں منتخب کریں؟',
                                'id' => 'Mengapa memilih?',
                                'pt_BR' => 'Por que escolher?',
                            ];
                            $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Why choose?';
                        ?>
                    </p>
                    <?php
                        $locale = get_locale();
                        if (function_exists('cc_locale_raw') && cc_locale_raw() === 'es_MX') {
                            $locale = 'es_MX';
                        }
                        $texts = [
                            'th' => '<h3>ทำไมเราถึง<span>โดดเด่น</span></h3>',
                            'zh_CN' => '<h3>为什么我们<span>与众不同</span></h3>',
                            'tr_TR' => '<h3>Neden <span>Benzersiziz</span></h3>',
                            'fr_FR' => '<h3>Pourquoi nous sommes <span>uniques</span></h3>',
                            'es_PE' => '<h3>Por qué nuestras Cuentas Fondeadas Instantáneas son únicas</h3>',
                            'es_ES' => '<h3>Por qué somos <span>únicos</span></h3>',
                            'es_MX' => '<h3>Por qué somos <span>únicos</span></h3>',
                            'ru_RU' => '<h3>Почему мы <span>уникальны</span></h3>',
                            'ja' => '<h3>私たちが<span>ユニーク</span>な理由</h3>',
                            'ko_KR' => '<h3>왜 우리가 <span>특별한지</span></h3>',
                            'km' => '<h3>ហេតុអ្វីបានជា​យើង <span>ពិសេស</span></h3>',
                            'bn_BD' => '<h3>কেন আমরা <span>অনন্য</span></h3>',
                            'hk' => '<h3>為什麼我們<span>與眾不同</span></h3>',
                            'ir' => '<h3>چرا ما <span>منحصربه‌فرد</span> هستیم</h3>',
                            'ur' => '<h3>ہم کیوں <span>منفرد ہیں</span></h3>',
                            'id' => '<h3>Mengapa kami <span>unik</span></h3>',
                            'pt_BR' => '<h3>Por que somos <span>únicos</span></h3>',
                        ];
                        $locale = cc_block_locale($texts);echo $texts[$locale] ?? '<h3>Why we are <span>Unique</span></h3>';
                    ?>
                </div>
                <div class="desc">
                    <p>
                        <?php
                            $locale = get_locale();
                            if (function_exists('cc_locale_raw') && cc_locale_raw() === 'es_MX') {
                                $locale = 'es_MX';
                            }
                            $texts = [
                                'th' => 'เรามุ่งเน้นการสร้างความสัมพันธ์ระยะยาวกับเทรดเดอร์ของเรา โดยมอบสภาพแวดล้อมที่ดีที่สุดเพื่อให้พวกเขาเติบโตและแสดงศักยภาพได้อย่างเต็มที่',
                                'zh_CN' => '我们专注于与交易者建立长期关系，为他们提供最佳环境，使其能够成长并发挥出色表现。',
                                'tr_TR' => 'Traderlarımızla uzun vadeli bir ilişki kurmaya odaklanıyoruz ve onların gelişip en iyi performansı gösterebilmeleri için en iyi ortamı sağlıyoruz.',
                                'fr_FR' => 'Nous nous concentrons sur le développement d’une relation à long terme avec nos traders en leur offrant le meilleur environnement pour prospérer et performer.',
                                'es_PE' => 'Nos enfocamos en construir una relación a largo plazo con nuestros traders, brindándoles un entorno óptimo para operar y desarrollarse.',
                                'es_ES' => 'Nos enfocamos en desarrollar una relación a largo plazo con nuestros traders, brindándoles el mejor entorno para prosperar y rendir.',
                                'es_MX' => 'Nos enfocamos en desarrollar una relación a largo plazo con nuestros traders, brindándoles el mejor entorno para prosperar y rendir.',
                                'ru_RU' => 'Мы стремимся выстраивать долгосрочные отношения с нашими трейдерами, предоставляя им наилучшую среду для развития и достижения результатов.',
                                'ja' => '私たちはトレーダーとの長期的な関係構築に重点を置き、成長し最高のパフォーマンスを発揮できる環境を提供しています。',
                                'ko_KR' => '우리는 트레이더들과 장기적인 관계를 구축하는 데 집중하며, 그들이 성장하고 최고의 성과를 낼 수 있는 최적의 환경을 제공합니다.',
                                'km' => 'យើងផ្តោតលើការអភិវឌ្ឍទំនាក់ទំនងរយៈពេលវែងជាមួយអ្នកជួញដូរ ដោយផ្តល់បរិយាកាសល្អបំផុតដើម្បីឲ្យពួកគេរីកចម្រើន និងបង្ហាញសមត្ថភាពបានល្អបំផុត។',
                                'bn_BD' => 'আমরা আমাদের ট্রেডারদের সাথে দীর্ঘমেয়াদী সম্পর্ক গড়ে তোলার উপর গুরুত্ব দিই এবং তাদের উন্নতি ও সর্বোচ্চ পারফরম্যান্সের জন্য সেরা পরিবেশ প্রদান করি।',
                                'hk' => '我們專注於與交易者建立長期關係，為他們提供最佳環境，使其能夠成長並發揮最佳表現。',
                                'ir' => 'ما بر ایجاد یک رابطه بلندمدت با معامله‌گران خود تمرکز داریم و بهترین محیط را برای رشد و عملکرد بهتر آن‌ها فراهم می‌کنیم.',
                                'ur' => 'ہم اپنے تاجروں کے ساتھ طویل مدتی تعلقات قائم کرنے کے لیے پرعزم ہیں، اور انہیں ترقی کرنے اور بہترین نتائج حاصل کرنے کے لیے بہترین ماحول فراہم کرتے ہیں۔',
                                'id' => 'Kami berfokus pada pengembangan hubungan jangka panjang dengan para trader kami dengan menyediakan lingkungan terbaik agar mereka dapat berkembang dan memberikan performa terbaik.',
                                'pt_BR' => 'Estamos focados em desenvolver um relacionamento de longo prazo com nossos traders, oferecendo o melhor ambiente para que possam prosperar e ter um excelente desempenho.',
                            ];
                            $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'We are focused on developing a long-term relationship with our traders by providing them with the best environment to prosper and perform.';
                        ?>
                    </p>
                </div>
            </div>

            <div class="unique__content">
                <div class="container">
                    <div class="unique__frame">
                        <div class="unique__list ancordion__content">
                            <div class="item active">
                                <h4 id="unique1" class="accordion-button">
                                    <?php
                                        $locale = get_locale();
                                        if (function_exists('cc_locale_raw') && cc_locale_raw() === 'es_MX') {
                                            $locale = 'es_MX';
                                        }
                                        $texts = [
                                            'th' => 'เงินทุนทันที',
                                            'zh_CN' => '即时资金',
                                            'tr_TR' => 'Anında Fonlama',
                                            'fr_FR' => 'Financement instantané',
                                            'es_PE' => 'Financiación Instantánea',
                                            'es_ES' => 'Financiación instantánea',
                                            'es_MX' => 'Financiación instantánea',
                                            'ru_RU' => 'Мгновенное финансирование',
                                            'ja' => '即時資金提供',
                                            'ko_KR' => '즉시 자금 제공',
                                            'km' => 'មូលធនភ្លាមៗ',
                                            'bn_BD' => 'তাৎক্ষণিক ফান্ডিং',
                                            'hk' => '即時資金',
                                            'ir' => 'تأمین سرمایه فوری',
                                            'ur' => 'فوری فنڈنگ',
                                            'id' => 'Pendanaan Instan',
                                            'pt_BR' => 'Financiamento instantâneo',
                                        ];
                                        $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Instant Funding';
                                    ?>
                                </h4>
                                <div class="desc" data-accordion-for="unique1">
                                    <p>
                                        <?php
                                            $locale = get_locale();
                                            if (function_exists('cc_locale_raw') && cc_locale_raw() === 'es_MX') {
                                                $locale = 'es_MX';
                                            }
                                            $texts = [
                                                'th' => 'ไม่มีขั้นตอนการประเมินหรือความท้าทายอีกต่อไป เพียงชำระค่าธรรมเนียมเล็กน้อย คุณก็สามารถเข้าถึงเงินทุนของเราได้ทันที',
                                                'zh_CN' => '无需任何评估流程或挑战，只需支付少量费用，即可立即获得我们的资金。',
                                                'tr_TR' => 'Artık değerlendirme süreçleri veya zorluklar yok, yalnızca küçük bir ücret ödeyerek sermayemize anında erişim elde edebilirsiniz.',
                                                'fr_FR' => 'Plus de processus d’évaluation ni de défis. Il vous suffit de payer de petits frais pour obtenir un accès instantané à notre capital.',
                                                'es_PE' => 'Sin procesos de evaluación ni desafíos.<br>Solo pagas una pequeña Fee y obtienes acceso inmediato a nuestro capital virtual.',
                                                'es_ES' => 'Ya no hay procesos de evaluación ni desafíos. Solo necesitas pagar una pequeña tarifa para obtener acceso instantáneo a nuestro capital.',
                                                'es_MX' => 'Ya no hay procesos de evaluación ni desafíos. Solo necesitas pagar una pequeña tarifa para obtener acceso instantáneo a nuestro capital.',
                                                'ru_RU' => 'Больше никаких этапов оценки или испытаний. Вам нужно лишь оплатить небольшую комиссию, чтобы мгновенно получить доступ к нашему капиталу.',
                                                'ja' => '評価プロセスやチャレンジはもう必要ありません。少額の手数料を支払うだけで、すぐに当社の資金へアクセスできます。',
                                                'ko_KR' => '더 이상 평가 과정이나 챌린지가 없습니다. 소정의 수수료만 지불하면 즉시 우리의 자본에 접근할 수 있습니다.',
                                                'km' => 'មិនមានដំណាក់កាលវាយតម្លៃ ឬការប្រកួតប្រជែងទៀតទេ។ អ្នកគ្រាន់តែបង់ថ្លៃតិចតួច ហើយអាចចូលប្រើមូលធនរបស់យើងបានភ្លាមៗ។',
                                                'bn_BD' => 'আর কোনো মূল্যায়ন প্রক্রিয়া বা চ্যালেঞ্জ নেই। শুধু একটি ছোট ফি প্রদান করলেই আপনি আমাদের মূলধনে তাৎক্ষণিক প্রবেশাধিকার পাবেন।',
                                                'hk' => '不再有評估流程或挑戰。您只需支付少量費用，即可立即獲得我們資金的使用權。',
                                                'ir' => 'دیگر هیچ فرآیند ارزیابی یا چالشی وجود ندارد. فقط با پرداخت یک کارمزد کوچک می‌توانید فوراً به سرمایه ما دسترسی پیدا کنید.',
                                                'ur' => 'اب کسی بھی ایویلیوایشن مرحلے یا چیلنج کی ضرورت نہیں۔ صرف ایک معمولی فیس ادا کریں اور فوری طور پر ہمارے سرمائے تک رسائی حاصل کریں۔',
                                                'id' => 'Tidak ada lagi proses evaluasi atau tantangan. Anda hanya perlu membayar biaya kecil untuk mendapatkan akses instan ke modal kami.',
                                                'pt_BR' => 'Não há mais processos de avaliação ou desafios. Você só precisa pagar uma pequena taxa para obter acesso instantâneo ao nosso capital.',
                                            ];
                                            $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'No more evaluation processes or challenges, you only need to pay a small fee and then get instant access to our capital.';
                                        ?>
                                    </p>
                                    <div class="link">
                                        <p class="lightbox-item" data-youtube-id="o9pXnQ210KI"><a>
                                            <?php
                                                $locale = get_locale();
                                                if (function_exists('cc_locale_raw') && cc_locale_raw() === 'es_MX') {
                                                    $locale = 'es_MX';
                                                }
                                                $texts = [
                                                    'th' => 'ดูวิดีโอ',
                                                    'zh_CN' => '观看视频',
                                                    'tr_TR' => 'Videoyu izle',
                                                    'fr_FR' => 'Regarder la vidéo',
                                                    'es_PE' => 'Ver video',
                                                    'ru_RU' => 'Смотреть видео',
                                                    'ja' => '動画を見る',
                                                    'ko_KR' => '영상 보기',
                                                    'km' => 'មើលវីដេអូ',
                                                    'bn_BD' => 'ভিডিও দেখুন',
                                                    'hk' => '觀看影片',
                                                    'ir' => 'مشاهده ویدیو',
                                                    'ur' => 'ویڈیو دیکھیں',
                                                    'id' => 'Tonton video',
                                                    'pt_BR' => 'Assistir vídeo',
                                                ];
                                                $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Watch video';
                                            ?>
                                        </a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <h4 id="unique2" class="accordion-button">
                                    <?php
                                        $locale = get_locale();
                                        if (function_exists('cc_locale_raw') && cc_locale_raw() === 'es_MX') {
                                            $locale = 'es_MX';
                                        }
                                        $texts = [
                                            'th' => 'ผู้ติดตามสัญญาณ',
                                            'zh_CN' => '信号跟随者',
                                            'tr_TR' => 'Sinyal Takipçileri',
                                            'fr_FR' => 'Abonnés aux signaux',
                                            'es_PE' => 'Seguidores de Señales',
                                            'es_ES' => 'Seguidores de señales',
                                            'es_MX' => 'Seguidores de señales',
                                            'ru_RU' => 'Подписчики сигналов',
                                            'ja' => 'シグナルフォロワー',
                                            'ko_KR' => '시그널 팔로워',
                                            'km' => 'អ្នកតាមដានសញ្ញា',
                                            'bn_BD' => 'সিগন্যাল অনুসরণকারী',
                                            'hk' => '信號跟隨者',
                                            'ir' => 'دنبال‌کنندگان سیگنال',
                                            'ur' => 'سگنل فالوورز',
                                            'id' => 'Pengikut Sinyal',
                                            'pt_BR' => 'Seguidores de sinais',
                                        ];
                                        $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Signal Followers';
                                    ?>
                                </h4>
                                <div class="desc" data-accordion-for="unique2">
                                    <p>
                                        <?php
                                            $texts = [
                                                'th' => 'ใช้บัญชีกองทุน WMT เพื่อติดตามและคัดลอกการเทรดจากเทรดเดอร์ชั้นนำ โดยมีเป้าหมายเพื่อยกระดับกลยุทธ์การเทรดของคุณ',
                                                'zh_CN' => '使用 WMT 资金账户跟随并复制顶级交易者的交易，旨在提升您的交易策略。',
                                                'tr_TR' => 'WMT fon hesabını kullanarak üst düzey yatırımcıları takip edin ve işlemlerini kopyalayın; böylece işlem stratejinizi geliştirmeyi hedefleyin.',
                                                'fr_FR' => 'Utilisez le compte de fonds WMT pour suivre et répliquer les transactions des meilleurs traders, afin d’améliorer votre stratégie de trading.',
                                                'es_ES' => 'Utiliza la cuenta de fondos WMT para seguir y replicar las operaciones de los mejores traders, con el objetivo de mejorar tu estrategia de trading.',
                                                'ru_RU' => 'Используйте фондовый аккаунт WMT, чтобы следить за ведущими трейдерами и копировать их сделки, стремясь улучшить свою торговую стратегию.',
                                                'ja' => 'WMTファンドアカウントを活用してトップトレーダーをフォローし、その取引を複製することで、取引戦略の向上を目指します。',
                                                'ko_KR' => 'WMT 펀드 계정을 활용해 상위 트레이더를 팔로우하고 거래를 복제하여 거래 전략 향상을 목표로 합니다.',
                                                'km' => 'ប្រើប្រាស់គណនីមូលនិធិ WMT ដើម្បីតាមដាន និងចម្លងការជួញដូរពីអ្នកជួញដូរឈានមុខ ដោយមានគោលបំណងលើកកម្ពស់យុទ្ធសាស្ត្រជួញដូររបស់អ្នក។',
                                                'bn_BD' => 'শীর্ষ ট্রেডারদের অনুসরণ ও তাদের ট্রেড অনুকরণ করতে WMT ফান্ড অ্যাকাউন্ট ব্যবহার করুন, যাতে আপনার ট্রেডিং কৌশল উন্নত করা যায়।',
                                                'ir' => 'از حساب صندوق WMT برای دنبال‌کردن و کپی معاملات معامله‌گران برتر استفاده کنید تا استراتژی معاملاتی خود را بهبود دهید.',
                                                'id' => 'Gunakan akun dana WMT untuk mengikuti dan menyalin transaksi dari trader terbaik, dengan tujuan meningkatkan strategi trading Anda.',
                                                'ur' => 'WMT فنڈ اکاؤنٹ استعمال کریں تاکہ اعلیٰ ٹریڈرز کو فالو کر کے ان کی ٹریڈز کو نقل کیا جا سکے، جس کا مقصد آپ کی ٹریڈنگ حکمتِ عملی کو بہتر بنانا ہے۔',
                                                'pt_BR' => 'Utilize a conta de fundos WMT para seguir e replicar operações dos principais traders, com o objetivo de aprimorar sua estratégia de trading.',
                                            ];
                                            $locale = cc_block_locale($texts);
                                            echo $texts[$locale] ?? 'Utilize the WMT fund account to follow and replicate trades from top traders, aiming to enhance your trading strategy.';
                                        ?>
                                    </p>
                                    <div class="link">
                                        <p class="lightbox-item" data-youtube-id="Yb5SnhJ3OnU"><a>
                                            <?php
                                                $locale = get_locale();
                                                if (function_exists('cc_locale_raw') && cc_locale_raw() === 'es_MX') {
                                                    $locale = 'es_MX';
                                                }
                                                $texts = [
                                                    'th' => 'ดูวิดีโอ',
                                                    'zh_CN' => '观看视频',
                                                    'tr_TR' => 'Videoyu izle',
                                                    'fr_FR' => 'Regarder la vidéo',
                                                    'es_PE' => 'Ver video',
                                                    'ru_RU' => 'Смотреть видео',
                                                    'ja' => '動画を見る',
                                                    'ko_KR' => '영상 보기',
                                                    'km' => 'មើលវីដេអូ',
                                                    'bn_BD' => 'ভিডিও দেখুন',
                                                    'hk' => '觀看影片',
                                                    'ir' => 'مشاهده ویدیو',
                                                    'ur' => 'ویڈیو دیکھیں',
                                                    'id' => 'Tonton video',
                                                    'pt_BR' => 'Assistir vídeo',
                                                ];
                                                $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Watch video';
                                            ?>
                                        </a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <h4 id="unique3" class="accordion-button">
                                    <?php
                                        $locale = get_locale();
                                        if (function_exists('cc_locale_raw') && cc_locale_raw() === 'es_MX') {
                                            $locale = 'es_MX';
                                        }
                                        $texts = [
                                            'th' => 'ผู้ให้สัญญาณ',
                                            'zh_CN' => '信号提供者',
                                            'tr_TR' => 'Sinyal Sağlayıcıları',
                                            'fr_FR' => 'Fournisseurs de signaux',
                                            'es_PE' => 'Proveedores de Señales',
                                            'es_ES' => 'Proveedores de señales',
                                            'es_MX' => 'Proveedores de señales',
                                            'ru_RU' => 'Поставщики сигналов',
                                            'ja' => 'シグナルプロバイダー',
                                            'ko_KR' => '시그널 제공자',
                                            'km' => 'អ្នកផ្តល់សញ្ញា',
                                            'bn_BD' => 'সিগন্যাল প্রদানকারী',
                                            'hk' => '信號提供者',
                                            'ir' => 'ارائه‌دهندگان سیگنال',
                                            'ur' => 'سگنل فراہم کنندگان',
                                            'id' => 'Penyedia Sinyal',
                                            'pt_BR' => 'Provedores de sinais',
                                        ];
                                        $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Signal Providers';
                                    ?>
                                </h4>
                                <div class="desc" data-accordion-for="unique3">
                                    <p>
                                        <?php
                                            $texts = [
                                                'th' => 'เป็นผู้ให้สัญญาณผ่านบัญชีกองทุน WMT และแบ่งปันกลยุทธ์การเทรดของคุณกับผู้อื่น',
                                                'zh_CN' => '通过 WMT 资金账户成为信号提供者，并与他人分享您的交易策略。',
                                                'tr_TR' => 'WMT fon hesabı üzerinden sinyal sağlayıcı olun ve işlem stratejilerinizi başkalarıyla paylaşın.',
                                                'fr_FR' => 'Devenez fournisseur de signaux via le compte de fonds WMT et partagez vos stratégies de trading avec les autres.',
                                                'es_ES' => 'Conviértete en proveedor de señales a través de la cuenta de fondos WMT y comparte tus estrategias de trading con otros.',
                                                'ru_RU' => 'Станьте поставщиком сигналов через фондовый аккаунт WMT и делитесь своими торговыми стратегиями с другими.',
                                                'ja' => 'WMTファンドアカウントを通じてシグナルプロバイダーとなり、あなたの取引戦略を他の人と共有しましょう。',
                                                'ko_KR' => 'WMT 펀드 계정을 통해 시그널 제공자가 되어 다른 사람들과 거래 전략을 공유하세요.',
                                                'km' => 'ក្លាយជាអ្នកផ្តល់សញ្ញាតាមរយៈគណនីមូលនិធិ WMT ហើយចែករំលែកយុទ្ធសាស្ត្រជួញដូររបស់អ្នកជាមួយអ្នកដទៃ។',
                                                'bn_BD' => 'WMT ফান্ড অ্যাকাউন্টের মাধ্যমে একজন সিগন্যাল প্রদানকারী হন এবং আপনার ট্রেডিং কৌশল অন্যদের সঙ্গে শেয়ার করুন।',
                                                'ir' => 'از طریق حساب صندوق WMT به ارائه‌دهنده سیگنال تبدیل شوید و استراتژی‌های معاملاتی خود را با دیگران به اشتراک بگذارید.',
                                                'id' => 'Jadilah penyedia sinyal melalui akun dana WMT dan bagikan strategi trading Anda kepada orang lain.',
                                                'ur' => 'WMT فنڈ اکاؤنٹ کے ذریعے سگنل فراہم کنندہ بنیں اور اپنی ٹریڈنگ حکمتِ عملی دوسروں کے ساتھ شیئر کریں۔',
                                                'pt_BR' => 'Torne-se um provedor de sinais por meio da conta de fundos WMT e compartilhe suas estratégias de trading com outras pessoas.',
                                            ];
                                            $locale = cc_block_locale($texts);
                                            echo $texts[$locale] ?? 'Become a signal provider through the WMT fund account and share your trading strategies with others.';
                                        ?>
                                    </p>
                                    <div class="link">
                                        <p class="lightbox-item" data-youtube-id="baNaZ4pQBfw"><a>
                                            <?php
                                                $locale = get_locale();
                                                if (function_exists('cc_locale_raw') && cc_locale_raw() === 'es_MX') {
                                                    $locale = 'es_MX';
                                                }
                                                $texts = [
                                                    'th' => 'ดูวิดีโอ',
                                                    'zh_CN' => '观看视频',
                                                    'tr_TR' => 'Videoyu izle',
                                                    'fr_FR' => 'Regarder la vidéo',
                                                    'es_PE' => 'Ver video',
                                                    'ru_RU' => 'Смотреть видео',
                                                    'ja' => '動画を見る',
                                                    'ko_KR' => '영상 보기',
                                                    'km' => 'មើលវីដេអូ',
                                                    'bn_BD' => 'ভিডিও দেখুন',
                                                    'hk' => '觀看影片',
                                                    'ir' => 'مشاهده ویدیو',
                                                    'ur' => 'ویڈیو دیکھیں',
                                                    'id' => 'Tonton video',
                                                    'pt_BR' => 'Assistir vídeo',
                                                ];
                                                $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Watch video';
                                            ?>
                                        </a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <h4 id="unique4" class="accordion-button">
                                    <?php
                                        $locale = get_locale();
                                        if (function_exists('cc_locale_raw') && cc_locale_raw() === 'es_MX') {
                                            $locale = 'es_MX';
                                        }
                                        $texts = [
                                            'th' => 'ทดลอง',
                                            'zh_CN' => '试用',
                                            'tr_TR' => 'Deneme',
                                            'fr_FR' => 'Essai',
                                            'es_PE' => 'Cuenta Demo (Trial)',
                                            'es_ES' => 'Prueba',
                                            'ru_RU' => 'Пробная версия',
                                            'ja' => 'トライアル',
                                            'ko_KR' => '체험',
                                            'km' => 'សាកល្បង',
                                            'bn_BD' => 'ট্রায়াল',
                                            'hk' => '試用',
                                            'ir' => 'آزمایشی',
                                            'ur' => 'آزمائش',
                                            'id' => 'Uji coba',
                                            'pt_BR' => 'Teste',
                                        ];
                                        $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Trial';
                                    ?>
                                </h4>
                                <div class="desc" data-accordion-for="unique4">
                                    <p>
                                        <?php
                                            $locale = get_locale();
                                            if (function_exists('cc_locale_raw') && cc_locale_raw() === 'es_MX') {
                                                $locale = 'es_MX';
                                            }
                                            $texts = [
                                                'th' => 'การทดลองของเรามีวัตถุประสงค์เพื่อช่วยให้ลูกค้าที่สนใจเข้าใจวิธีการทำงาน และประเมินความสามารถในการเทรดของตนเอง เพื่อดูว่าพวกเขามีศักยภาพที่จะกลายเป็นเทรดเดอร์ผู้เชี่ยวชาญที่ WeMasterTrade หรือไม่',
                                                'zh_CN' => '我们的试用旨在帮助潜在客户了解其运作方式，并评估他们的交易能力，以判断他们是否具备成为 WeMasterTrade 专业交易员的条件。',
                                                'tr_TR' => 'Deneme sürümümüz, potansiyel müşterilerin sistemin nasıl çalıştığını anlamalarına ve işlem yeteneklerini değerlendirerek WeMasterTrade’de uzman trader olup olamayacaklarını belirlemelerine yardımcı olmak için tasarlanmıştır.',
                                                'fr_FR' => 'Notre essai vise à aider les clients potentiels à comprendre son fonctionnement et à évaluer leurs capacités de trading afin de déterminer s’ils ont ce qu’il faut pour devenir des traders experts chez WeMasterTrade.',
                                                'es_PE' => 'Nuestro Trial permite a nuevos usuarios entender el funcionamiento del programa y evaluar sus habilidades antes de operar con una cuenta financiada.',
                                                'es_ES' => 'Nuestro periodo de prueba tiene como objetivo ayudar a los clientes potenciales a comprender cómo funciona y evaluar sus habilidades de trading para determinar si tienen lo necesario para convertirse en traders expertos en WeMasterTrade.',
                                                'ru_RU' => 'Наша пробная версия предназначена для того, чтобы помочь потенциальным клиентам понять, как работает система, и оценить свои торговые способности, чтобы определить, способны ли они стать экспертными трейдерами в WeMasterTrade.',
                                                'ja' => '当社のトライアルは、見込み顧客がその仕組みを理解し、自身の取引能力を評価して、WeMasterTradeでエキスパートトレーダーになれるかどうかを判断するためのものです。',
                                                'ko_KR' => '우리의 트라이얼은 잠재 고객이 시스템의 작동 방식을 이해하고 자신의 트레이딩 능력을 평가하여 WeMasterTrade에서 전문 트레이더가 될 수 있는지 판단할 수 있도록 돕기 위한 것입니다.',
                                                'km' => 'ការសាកល្បងរបស់យើងមានគោលបំណងជួយអតិថិជនដែលមានចំណាប់អារម្មណ៍យល់ពីរបៀបដំណើរការ និងវាយតម្លៃសមត្ថភាពជួញដូររបស់ពួកគេ ដើម្បីកំណត់ថាពួកគេអាចក្លាយជាអ្នកជួញដូរជំនាញនៅ WeMasterTrade បានឬអត់។',
                                                'bn_BD' => 'আমাদের ট্রায়াল সম্ভাব্য গ্রাহকদের এটি কীভাবে কাজ করে তা বোঝাতে এবং তাদের ট্রেডিং দক্ষতা মূল্যায়ন করতে সাহায্য করার জন্য তৈরি করা হয়েছে, যাতে নির্ধারণ করা যায় তারা WeMasterTrade-এ বিশেষজ্ঞ ট্রেডার হওয়ার যোগ্য কিনা।',
                                                'hk' => '我們的試用旨在幫助潛在客戶了解其運作方式，並評估他們的交易能力，以判斷他們是否具備成為 WeMasterTrade 專業交易員的條件。',
                                                'ir' => 'نسخه آزمایشی ما برای کمک به مشتریان بالقوه طراحی شده است تا نحوه عملکرد آن را درک کنند و توانایی‌های معاملاتی خود را ارزیابی کنند تا مشخص شود آیا می‌توانند به معامله‌گران حرفه‌ای در WeMasterTrade تبدیل شوند یا خیر.',
                                                'ur' => 'ہماری آزمائش کا مقصد ممکنہ صارفین کو یہ سمجھنے میں مدد دینا ہے کہ یہ کیسے کام کرتی ہے اور ان کی ٹریڈنگ صلاحیتوں کا جائزہ لینا ہے تاکہ یہ معلوم کیا جا سکے کہ آیا وہ WeMasterTrade پر ماہر ٹریڈر بننے کی اہلیت رکھتے ہیں یا نہیں۔',
                                                'id' => 'Trial kami bertujuan membantu calon pelanggan memahami cara kerjanya serta mengevaluasi kemampuan trading mereka untuk menentukan apakah mereka memiliki potensi menjadi trader ahli di WeMasterTrade.',
                                                'pt_BR' => 'Nosso Trial foi criado para ajudar potenciais clientes a entender como ele funciona e avaliar suas habilidades de trading para determinar se eles têm o que é necessário para se tornarem traders especialistas na WeMasterTrade.',
                                            ];
                                            $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Our Trial is intended to help prospective customers understand how it operates and evaluate their trading abilities to determine whether they have what it takes to become expert traders at WeMasterTrade.';
                                        ?>
                                    </p>
                                    <div class="link">
                                        <p class="lightbox-item" data-youtube-id="G_Nzfp8H6fE"><a>
                                            <?php
                                                $locale = get_locale();
                                                if (function_exists('cc_locale_raw') && cc_locale_raw() === 'es_MX') {
                                                    $locale = 'es_MX';
                                                }
                                                $texts = [
                                                    'th' => 'ดูวิดีโอ',
                                                    'zh_CN' => '观看视频',
                                                    'tr_TR' => 'Videoyu izle',
                                                    'fr_FR' => 'Regarder la vidéo',
                                                    'es_PE' => 'Ver video',
                                                    'ru_RU' => 'Смотреть видео',
                                                    'ja' => '動画を見る',
                                                    'ko_KR' => '영상 보기',
                                                    'km' => 'មើលវីដេអូ',
                                                    'bn_BD' => 'ভিডিও দেখুন',
                                                    'hk' => '觀看影片',
                                                    'ir' => 'مشاهده ویدیو',
                                                    'ur' => 'ویڈیو دیکھیں',
                                                    'id' => 'Tonton video',
                                                    'pt_BR' => 'Assistir vídeo',
                                                ];
                                                $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Watch video';
                                            ?>
                                        </a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <h4 id="unique5" class="accordion-button">
                                    <?php
                                        $locale = get_locale();
                                        if (function_exists('cc_locale_raw') && cc_locale_raw() === 'es_MX') {
                                            $locale = 'es_MX';
                                        }
                                        $texts = [
                                            'th' => 'สถาบัน',
                                            'zh_CN' => '学院',
                                            'tr_TR' => 'Akademi',
                                            'fr_FR' => 'Académie',
                                            'es_PE' => 'Academia',
                                            'es_ES' => 'Academia',
                                            'ru_RU' => 'Академия',
                                            'ja' => 'アカデミー',
                                            'ko_KR' => '아카데미',
                                            'km' => 'សាលាបណ្ដុះបណ្ដាល',
                                            'bn_BD' => 'একাডেমি',
                                            'hk' => '學院',
                                            'ir' => 'آکادمی',
                                            'ur' => 'اکیڈمی',
                                            'id' => 'Akademi',
                                            'pt_BR' => 'Academia',
                                        ];
                                        $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Academy';
                                    ?>
                                </h4>
                                <div class="desc" data-accordion-for="unique5">
                                    <p>
                                        <?php
                                            $locale = get_locale();
                                            if (function_exists('cc_locale_raw') && cc_locale_raw() === 'es_MX') {
                                                $locale = 'es_MX';
                                            }
                                            $texts = [
                                                'th' => 'หลักสูตรของเราได้รับการออกแบบเพื่อมอบความรู้พื้นฐานและทักษะทางเทคนิคที่จำเป็นในการทำความเข้าใจตลาดการเงินและเครื่องมือที่ทำการซื้อขาย ให้กับเทรดเดอร์ทุกคนที่ต้องการเพิ่มประสบการณ์และพัฒนาความเชี่ยวชาญในการเทรดของตน',
                                                'zh_CN' => '我们的课程旨在为所有希望获得更多经验并精通交易的交易者提供理解金融市场和交易工具所需的基础知识和技术技能。',
                                                'tr_TR' => 'Kurslarımız, daha fazla deneyim kazanmak ve işlemlerinde ustalaşmak isteyen tüm traderlara finansal piyasaları ve işlem gören araçları anlamak için gerekli temel bilgi ve teknik becerileri sağlamak üzere tasarlanmıştır.',
                                                'fr_FR' => 'Nos cours sont conçus pour fournir les connaissances fondamentales et les compétences techniques nécessaires à la compréhension des marchés financiers et des instruments négociés à tous les traders souhaitant acquérir plus d’expérience et maîtriser leurs trades.',
                                                'es_PE' => 'Nuestros cursos brindan conocimientos fundamentales y habilidades técnicas para comprender los mercados financieros y los instrumentos operados, ayudando a mejorar el desempeño.',
                                                'es_ES' => 'Nuestros cursos están diseñados para proporcionar el conocimiento fundamental y las habilidades técnicas necesarias para comprender los mercados financieros y los instrumentos negociados a todos los traders interesados en adquirir más experiencia y perfeccionar sus operaciones.',
                                                'ru_RU' => 'Наши курсы разработаны для того, чтобы предоставить базовые знания и технические навыки, необходимые для понимания финансовых рынков и торгуемых инструментов всем трейдерам, которые хотят получить больше опыта и совершенствовать свою торговлю.',
                                                'ja' => '当社のコースは、より多くの経験を積み、取引スキルを習得したいすべてのトレーダーに対して、金融市場と取引される金融商品を理解するために必要な基礎知識と技術的スキルを提供することを目的としています。',
                                                'ko_KR' => '우리의 강의는 더 많은 경험을 얻고 거래를 숙달하고자 하는 모든 트레이더에게 금융 시장과 거래되는 금융 상품을 이해하는 데 필요한 기초 지식과 기술적 역량을 제공하도록 설계되었습니다.',
                                                'km' => 'វគ្គសិក្សារបស់យើងត្រូវបានរចនាឡើងដើម្បីផ្តល់ចំណេះដឹងមូលដ្ឋាន និងជំនាញបច្ចេកទេសដែលចាំបាច់សម្រាប់ការយល់ដឹងអំពីទីផ្សារហិរញ្ញវត្ថុ និងឧបករណ៍ជួញដូរ ដល់អ្នកជួញដូរទាំងអស់ដែលចង់ទទួលបានបទពិសោធន៍បន្ថែម និងពង្រឹងជំនាញជួញដូររបស់ពួកគេ។',
                                                'bn_BD' => 'আমাদের কোর্সগুলো এমনভাবে তৈরি করা হয়েছে যাতে সকল ট্রেডার যারা আরও অভিজ্ঞতা অর্জন করতে এবং তাদের ট্রেডিং দক্ষতা উন্নত করতে চান, তারা আর্থিক বাজার এবং ট্রেডকৃত ইনস্ট্রুমেন্ট সম্পর্কে মৌলিক জ্ঞান ও প্রযুক্তিগত দক্ষতা অর্জন করতে পারেন।',
                                                'hk' => '我們的課程旨在為所有希望獲得更多經驗並精進交易技巧的交易者提供理解金融市場及交易工具所需的基礎知識與技術技能。',
                                                'ir' => 'دوره‌های ما برای ارائه دانش پایه و مهارت‌های فنی لازم جهت درک بازارهای مالی و ابزارهای معاملاتی طراحی شده‌اند و به تمام معامله‌گرانی که مایل به کسب تجربه بیشتر و تسلط بر معاملات خود هستند کمک می‌کنند.',
                                                'ur' => 'ہمارے کورسز اس طرح تیار کیے گئے ہیں کہ وہ ان تمام ٹریڈرز کو بنیادی علم اور تکنیکی مہارتیں فراہم کریں جو مالیاتی مارکیٹس اور ٹریڈ کیے جانے والے انسٹرومنٹس کو سمجھنا چاہتے ہیں اور اپنے تجربے کو بڑھا کر اپنی ٹریڈنگ میں مہارت حاصل کرنا چاہتے ہیں۔',
                                                'id' => 'Kursus kami dirancang untuk memberikan pengetahuan dasar dan keterampilan teknis yang diperlukan untuk memahami pasar keuangan dan instrumen yang diperdagangkan kepada semua trader yang ingin memperoleh lebih banyak pengalaman dan menguasai trading mereka.',
                                                'pt_BR' => 'Nossos cursos são projetados para fornecer o conhecimento fundamental e as habilidades técnicas necessárias para compreender os mercados financeiros e os instrumentos negociados a todos os traders interessados em ganhar mais experiência e dominar suas operações.',
                                            ];
                                            $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Our courses are designed to give the fundamental knowledge and technical skills required to comprehend the financial markets and the traded instruments to all traders who are interested in gaining more experience and mastering their trades.';
                                        ?>
                                    </p>
                                    <div class="link">
                                        <p class="lightbox-item" data-youtube-id="n11cIqVws88"><a>
                                            <?php
                                                $locale = get_locale();
                                                if (function_exists('cc_locale_raw') && cc_locale_raw() === 'es_MX') {
                                                    $locale = 'es_MX';
                                                }
                                                $texts = [
                                                    'th' => 'ดูวิดีโอ',
                                                    'zh_CN' => '观看视频',
                                                    'tr_TR' => 'Videoyu izle',
                                                    'fr_FR' => 'Regarder la vidéo',
                                                    'es_PE' => 'Ver video',
                                                    'ru_RU' => 'Смотреть видео',
                                                    'ja' => '動画を見る',
                                                    'ko_KR' => '영상 보기',
                                                    'km' => 'មើលវីដេអូ',
                                                    'bn_BD' => 'ভিডিও দেখুন',
                                                    'hk' => '觀看影片',
                                                    'ir' => 'مشاهده ویدیو',
                                                    'ur' => 'ویڈیو دیکھیں',
                                                    'id' => 'Tonton video',
                                                    'pt_BR' => 'Assistir vídeo',
                                                ];
                                                $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Watch video';
                                            ?>
                                        </a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <h4 id="unique6" class="accordion-button">
                                    <?php
                                        $locale = get_locale();
                                        if (function_exists('cc_locale_raw') && cc_locale_raw() === 'es_MX') {
                                            $locale = 'es_MX';
                                        }
                                        $texts = [
                                            'th' => 'สัญลักษณ์',
                                            'zh_CN' => '交易品种',
                                            'tr_TR' => 'Semboller',
                                            'fr_FR' => 'Symboles',
                                            'es_PE' => 'Símbolos Simulados',
                                            'es_ES' => 'Símbolos',
                                            'ru_RU' => 'Символы',
                                            'ja' => 'シンボル',
                                            'ko_KR' => '심볼',
                                            'km' => 'និមិត្តសញ្ញា',
                                            'bn_BD' => 'সিম্বল',
                                            'hk' => '交易品種',
                                            'ir' => 'نمادها',
                                            'ur' => 'سمبلز',
                                            'id' => 'Simbol',
                                            'pt_BR' => 'Símbolos',
                                        ];
                                        $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Symbols';
                                    ?>
                                </h4>
                                <div class="desc" data-accordion-for="unique6">
                                    <p>
                                        <?php
                                            $locale = get_locale();
                                            if (function_exists('cc_locale_raw') && cc_locale_raw() === 'es_MX') {
                                                $locale = 'es_MX';
                                            }
                                            $texts = [
                                                'th' => 'Direct Market Access (DMA) มอบสัญลักษณ์การเทรดหลายพันรายการ พร้อมสเปรดต่ำและค่าคอมมิชชั่นที่ต่ำ',
                                                'zh_CN' => 'Direct Market Access (DMA) 提供数千种交易品种，点差低且佣金费用低。',
                                                'tr_TR' => 'Direct Market Access (DMA), düşük spread ve komisyon ücretleriyle binlerce sembol sunar.',
                                                'fr_FR' => 'Direct Market Access (DMA) offre des milliers de symboles avec des spreads et des commissions faibles.',
                                                'es_PE' => 'Acceso Directo a Mercado (DMA) con miles de símbolos simulados, spreads bajos y comisiones competitivas.',
                                                'es_ES' => 'Direct Market Access (DMA) ofrece miles de símbolos con spreads y comisiones bajas.',
                                                'ru_RU' => 'Direct Market Access (DMA) предлагает тысячи торговых символов с низкими спредами и комиссионными.',
                                                'ja' => 'Direct Market Access（DMA）は、低スプレッドと低い手数料で数千のシンボルを提供します。',
                                                'ko_KR' => 'Direct Market Access (DMA)는 낮은 스프레드와 수수료로 수천 개의 심볼을 제공합니다.',
                                                'km' => 'Direct Market Access (DMA) ផ្តល់ជូននិមិត្តសញ្ញាជួញដូរជាច្រើនពាន់ ជាមួយនឹងស្ព្រេដទាប និងកម្រៃជើងសារទាប។',
                                                'bn_BD' => 'Direct Market Access (DMA) কম স্প্রেড এবং কমিশন ফি সহ হাজার হাজার সিম্বল প্রদান করে।',
                                                'hk' => 'Direct Market Access (DMA) 提供數千種交易品種，點差低且佣金費用低。',
                                                'ir' => 'دسترسی مستقیم به بازار (DMA) هزاران نماد معاملاتی با اسپرد و کارمزد پایین ارائه می‌دهد.',
                                                'ur' => 'Direct Market Access (DMA) کم اسپریڈز اور کم کمیشن فیس کے ساتھ ہزاروں سمبلز فراہم کرتا ہے۔',
                                                'id' => 'Direct Market Access (DMA) menawarkan ribuan simbol dengan spread dan biaya komisi yang rendah.',
                                                'pt_BR' => 'Direct Market Access (DMA) oferece milhares de símbolos com spreads e comissões baixas.',
                                            ];
                                            $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Direct Market Access (DMA) offers thousands of symbols with low spreads and commission fees.';
                                        ?>
                                    </p>
                                    <div class="link">
                                        <p class="lightbox-item" data-youtube-id="eWtn8s4WnZ8"><a>
                                            <?php
                                                $locale = get_locale();
                                                if (function_exists('cc_locale_raw') && cc_locale_raw() === 'es_MX') {
                                                    $locale = 'es_MX';
                                                }
                                                $texts = [
                                                    'th' => 'ดูวิดีโอ',
                                                    'zh_CN' => '观看视频',
                                                    'tr_TR' => 'Videoyu izle',
                                                    'fr_FR' => 'Regarder la vidéo',
                                                    'es_PE' => 'Ver video',
                                                    'ru_RU' => 'Смотреть видео',
                                                    'ja' => '動画を見る',
                                                    'ko_KR' => '영상 보기',
                                                    'km' => 'មើលវីដេអូ',
                                                    'bn_BD' => 'ভিডিও দেখুন',
                                                    'hk' => '觀看影片',
                                                    'ir' => 'مشاهده ویدیو',
                                                    'ur' => 'ویڈیو دیکھیں',
                                                    'id' => 'Tonton video',
                                                    'pt_BR' => 'Assistir vídeo',
                                                ];
                                                $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Watch video';
                                            ?>
                                        </a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="unique__img none992"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/unique_img.png" width="1149" height="1012" alt="Why we are Unique">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Unique -->