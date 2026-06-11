<!-- Benefit -->
<section class="benefit">
        <div class="container">
            <div class="title center">
                <p class="title__sub">
                    <?php
                        $locale = get_locale();
                        if (function_exists('cc_locale_raw') && cc_locale_raw() === 'es_MX') {
                            $locale = 'es_MX';
                        }
                        $texts = [
                            'th' => 'ประโยชน์',
                            'zh_CN' => '优势',
                            'tr_TR' => 'Avantaj',
                            'fr_FR' => 'Avantage',
                            'es_PE' => 'Beneficio',
                            'es_ES' => 'Beneficio',
                            'ru_RU' => 'Преимущество',
                            'ja' => 'メリット',
                            'ko_KR' => '혜택',
                            'km' => 'អត្ថប្រយោជន៍',
                            'bn_BD' => 'সুবিধা',
                            'hk' => '優勢',
                            'ir' => 'مزایا',
                            'ur' => 'فائدہ',
                            'id' => 'Manfaat',
                            'pt_BR' => 'Benefício',
                        ];
                        $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Benefit';
                    ?>
                </p>
                <?php
                    $locale = get_locale();
                    if (function_exists('cc_locale_raw') && cc_locale_raw() === 'es_MX') {
                        $locale = 'es_MX';
                    }
                    $texts = [
                        'th' => '<h3><span>ประโยชน์ของโครงการของเรา</span><br>WeMasterTrade</h3>',
                        'zh_CN' => '<h3><span>我们项目的优势</span><br>WeMasterTrade</h3>',
                        'tr_TR' => '<h3><span>Projemizin avantajları</span><br>WeMasterTrade</h3>',
                        'fr_FR' => '<h3><span>Les avantages de notre projet</span><br>WeMasterTrade</h3>',
                        'es_PE' => '<h2 class="h3">El beneficio de nuestro modelo de cuentas instantáneas</h3>',
                        'es_ES' => '<h3><span>Los beneficios de nuestro proyecto</span><br>WeMasterTrade</h3>',
                        'ru_RU' => '<h3><span>Преимущества нашего проекта</span><br>WeMasterTrade</h3>',
                        'ja' => '<h3><span>私たちのプロジェクトのメリット</span><br>WeMasterTrade</h3>',
                        'ko_KR' => '<h3><span>우리 프로젝트의 혜택</span><br>WeMasterTrade</h3>',
                        'km' => '<h3><span>អត្ថប្រយោជន៍នៃគម្រោងរបស់យើង</span><br>WeMasterTrade</h3>',
                        'bn_BD' => '<h3><span>আমাদের প্রকল্পের সুবিধা</span><br>WeMasterTrade</h3>',
                        'hk' => '<h3><span>我們項目的優勢</span><br>WeMasterTrade</h3>',
                        'ir' => '<h3><span>مزایای پروژه ما</span><br>WeMasterTrade</h3>',
                        'ur' => '<h3>ہمارے پروجیکٹ <span>WeMasterTrade</span> کے فوائد</h3>',
                        'id' => '<h3><span>Manfaat dari proyek kami</span><br>WeMasterTrade</h3>',
                        'pt_BR' => '<h3><span>Os benefícios do nosso projeto</span><br>WeMasterTrade</h3>',
                    ];
                    $locale = cc_block_locale($texts);echo $texts[$locale] ?? '<h3><span>The benefit of our project</span><br>WeMasterTrade</h3>';
                ?>
            </div>
            <ul class="benefit__list">
                <li><span class="ic"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/benefit_ic1.png" width="71" height="70" alt="Zero phase"></span><span>
                    <?php
                        $locale = get_locale();
                        if (function_exists('cc_locale_raw') && cc_locale_raw() === 'es_MX') {
                            $locale = 'es_MX';
                        }
                        $texts = [
                            'th' => 'ระยะที่ศูนย์',
                            'zh_CN' => '零阶段',
                            'tr_TR' => 'Sıfır Aşaması',
                            'fr_FR' => 'Phase zéro',
                            'es_PE' => 'Fase cero',
                            'es_ES' => 'Fase cero',
                            'ru_RU' => 'Нулевая фаза',
                            'ja' => 'ゼロフェーズ',
                            'ko_KR' => '제로 단계',
                            'km' => 'ដំណាក់កាលសូន្យ',
                            'bn_BD' => 'শূন্য ধাপ',
                            'hk' => '零階段',
                            'ir' => 'مرحله صفر',
                            'ur' => 'کوئی فیز نہیں',
                            'id' => 'Fase Nol',
                            'pt_BR' => 'Fase Zero',
                        ];
                        $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Zero phase';
                    ?>
                </span></li>
                <li><span class="ic"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/benefit_ic1.png" width="71" height="70" alt="We all share profits together"></span><span>
                    <?php
                        $locale = get_locale();
                        if (function_exists('cc_locale_raw') && cc_locale_raw() === 'es_MX') {
                            $locale = 'es_MX';
                        }
                        $texts = [
                            'th' => 'เราทุกคนแบ่งปันผลกำไรร่วมกัน',
                            'zh_CN' => '我们一起共享利润',
                            'tr_TR' => 'Hep birlikte kârı paylaşıyoruz',
                            'fr_FR' => 'Nous partageons tous les profits ensemble',
                            'es_PE' => 'Todos compartimos las ganancias juntos',
                            'es_ES' => 'Todos compartimos las ganancias juntos',
                            'ru_RU' => 'Мы все делим прибыль вместе',
                            'ja' => '私たちは皆で利益を共有します',
                            'ko_KR' => '우리 모두 함께 수익을 공유합니다',
                            'km' => 'យើងទាំងអស់គ្នាចែករំលែកប្រាក់ចំណេញជាមួយគ្នា',
                            'bn_BD' => 'আমরা সবাই একসাথে লাভ ভাগ করি',
                            'hk' => '我們一起共享利潤',
                            'ir' => 'همه ما سود را با هم به اشتراک می‌گذاریم',
                            'id' => 'Kita semua berbagi keuntungan bersama',
                            'ur' => 'ہم سب مل کر منافع شیئر کرتے ہیں',
                            'pt_BR' => 'Todos nós compartilhamos os lucros juntos',
                        ];
                        $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'We all share profits together';
                    ?>
                </span></li>
                <li><span class="ic"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/benefit_ic1.png" width="71" height="70" alt="No challenges"></span><span>
                    <?php
						$locale = get_locale();
						if (function_exists('cc_locale_raw') && cc_locale_raw() === 'es_MX') {
							$locale = 'es_MX';
						}
						$texts = [
							'th' => 'ไม่มีชาเลนจ์',
							'zh_CN' => '无挑战',
							'tr_TR' => 'Challenge yok',
							'fr_FR' => 'Aucun challenge',
							'es_PE' => 'Sin desafío',
							'es_ES' => 'Sin desafío',
							'ru_RU' => 'Без челленджа',
							'ja' => 'チャレンジなし',
							'ko_KR' => '챌린지 없음',
							'km' => 'គ្មាន Challenge',
							'bn_BD' => 'কোনো চ্যালেঞ্জ নেই',
							'hk' => '無挑戰',
							'ir' => 'بدون چالش',
							'ur' => 'کوئی چیلنج نہیں',
							'id' => 'Tanpa challenge',
							'pt_BR' => 'Sem desafio',
						];
						$locale = cc_block_locale($texts);echo $texts[$locale] ?? 'No challenges';
					?>
                </span></li>
            </ul>
            <div class="benefit__content">
                <div class="benefit__boxs">
                    <div class="item">
                        <div class="item__dc"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/benefit_dc1.png" width="88" height="6" alt="For Newcomers">
                        </div>
                        <div class="border__glassed">
                            <?php
                                $locale = get_locale();
                                if (function_exists('cc_locale_raw') && cc_locale_raw() === 'es_MX') {
                                    $locale = 'es_MX';
                                }
                                $texts = [
                                    'th' => '<h4>สำหรับผู้เริ่มต้น</h4>
                                                        <div class="cnt">
                                                            <p>นี่คือโมเดลการลงทุนแบบ Angel Venture คุณจะได้รับเงินทุนเสมือนตั้งแต่ $25,000 USD ถึง $1,000,000 USD พร้อมกำลังซื้อสูงสุดถึง $100 ล้าน USD กิจกรรมการเทรดของคุณในบัญชีเสมือนนี้จะถูกจำลองแบบแบบเรียลไทม์โดยอัลกอริทึมเฉพาะของเราไปยังบัญชีเทรดจริงของบริษัท ซึ่งสร้างกระแสเงินสดจริง นั่นคือเหตุผลที่เราครอบคลุมการขาดทุนของคุณและแบ่งปันกำไรกับคุณ</p>
                                                        </div>',
                                    'zh_CN' => '<h4>适合新手</h4>
                                                        <div class="cnt">
                                                            <p>这是一个天使投资模式。您将获得从 $25,000 USD 到 $1,000,000 USD 的虚拟资金，购买力最高可达 $100,000,000 USD。您在该虚拟账户中的交易活动会通过我们的专属算法实时复制到公司的真实交易账户，从而产生真实现金流。因此我们承担您的亏损，并与您分享利润。</p>
                                                        </div>',
                                    'tr_TR' => '<h4>Yeni Başlayanlar İçin</h4>
                                                        <div class="cnt">
                                                            <p>Bu bir melek yatırım modelidir. Size $25,000 USD ile $1,000,000 USD arasında sanal fon sağlanır. Alım gücü $100 milyon USD’ye kadar çıkabilir. Bu sanal hesaptaki işlem faaliyetleriniz, özel algoritmalarımız tarafından gerçek firma işlem hesabımıza gerçek zamanlı olarak kopyalanır ve gerçek nakit akışı oluşturur. Bu nedenle zararlarınızı biz karşılar ve kârı sizinle paylaşırız.</p>
                                                        </div>',
                                    'fr_FR' => '<h4>Pour les débutants</h4>
                                                        <div class="cnt">
                                                            <p>Il s’agit d’un modèle de capital-risque de type angel. Vous recevez des fonds virtuels allant de $25,000 USD à $1,000,000 USD, avec un pouvoir d’achat pouvant atteindre $100 millions USD. Votre activité de trading sur ce compte virtuel est répliquée en temps réel par nos algorithmes exclusifs sur le compte de trading réel de notre société, générant un flux de trésorerie réel. C’est pourquoi nous couvrons vos pertes et partageons les profits avec vous.</p>
                                                        </div>',
                                    'es_PE' => '<h3 class="h4">Para los recién llegados</h3>
                                                        <div class="cnt">
                                                            <p>Este es un modelo de empresa ángel que proporciona capital virtual desde $25,000 USD hasta $1,000,000 USD, con posibilidad de escalar hasta $100 millones USD según desempeño.</p>
                                                            <p>La actividad de trading en la cuenta virtual se replica en tiempo real mediante nuestros algoritmos exclusivos en una cuenta comercial real, generando flujo de caja real.</p>
                                                            <p>Bajo este modelo:</p>
                                                            <ul>
                                                                <li>Cubrimos las pérdidas operativas.</li>
                                                                <li>Compartimos los beneficios generados.</li>
                                                            </ul>
                                                        </div>',
                                    'es_ES' => '<h4>Para principiantes</h4>
                                                        <div class="cnt">
                                                            <p>Este es un modelo de inversión tipo angel venture. Se le otorgan fondos virtuales desde $25,000 USD hasta $1,000,000 USD, con un poder de compra de hasta $100 millones USD. Su actividad de trading en esta cuenta virtual se replica en tiempo real mediante nuestros algoritmos exclusivos en la cuenta real de trading de la empresa, generando flujo de efectivo real. Por eso cubrimos sus pérdidas y compartimos las ganancias con usted.</p>
                                                        </div>',
                                    'ru_RU' => '<h4>Для новичков</h4>
                                                        <div class="cnt">
                                                            <p>Это модель венчурных инвестиций типа angel venture. Вам предоставляются виртуальные средства от $25,000 USD до $1,000,000 USD с покупательной способностью до $100 миллионов USD. Ваша торговая активность на этом виртуальном счёте в реальном времени копируется нашими эксклюзивными алгоритмами на реальный торговый счёт компании, создавая реальный денежный поток. Поэтому мы покрываем ваши убытки и делимся прибылью с вами.</p>
                                                        </div>',
                                    'ja' => '<h4>初心者向け</h4>
                                                        <div class="cnt">
                                                            <p>これはエンジェルベンチャー型のモデルです。$25,000 USD から $1,000,000 USD までの仮想資金が提供され、最大 $100 million USD の購買力を持ちます。この仮想口座でのあなたの取引活動は、当社の独自アルゴリズムによってリアルタイムで会社の実際の取引口座に複製され、実際のキャッシュフローを生み出します。そのため、私たちはあなたの損失をカバーし、利益をあなたと共有します。</p>
                                                        </div>',
                                    'ko_KR' => '<h4>초보자를 위한</h4>
                                                        <div class="cnt">
                                                            <p>이것은 엔젤 벤처 모델입니다. $25,000 USD에서 $1,000,000 USD까지의 가상 자금이 제공되며 최대 $100 million USD의 매수력을 제공합니다. 이 가상 계정에서의 거래 활동은 당사의 독점 알고리즘에 의해 실시간으로 회사의 실제 트레이딩 계정에 복제되어 실제 현금 흐름을 생성합니다. 그래서 우리는 귀하의 손실을 보전하고 이익을 함께 공유합니다.</p>
                                                        </div>',
                                    'km' => '<h4>សម្រាប់អ្នកចាប់ផ្តើម</h4>
                                                        <div class="cnt">
                                                            <p>នេះគឺជាម៉ូឌែលវិនិយោគ Angel Venture។ អ្នកនឹងទទួលបានមូលនិធិវីរុយចាប់ពី $25,000 USD ដល់ $1,000,000 USD និងអំណាចទិញរហូតដល់ $100 million USD។ សកម្មភាពជួញដូររបស់អ្នកលើគណនីវីរុយនេះ នឹងត្រូវបានចម្លងជាបន្ទាន់ដោយអាល់ហ្គរីធម៍ពិសេសរបស់យើងទៅគណនីជួញដូរពិតរបស់ក្រុមហ៊ុន បង្កើតប្រាក់ចំណូលពិត។ ដូច្នេះយើងគ្របដណ្តប់ការខាតបង់របស់អ្នក និងចែករំលែកប្រាក់ចំណេញជាមួយអ្នក។</p>
                                                        </div>',
                                    'bn_BD' => '<h4>নতুনদের জন্য</h4>
                                                        <div class="cnt">
                                                            <p>এটি একটি অ্যাঞ্জেল ভেঞ্চার মডেল। আপনাকে $25,000 USD থেকে $1,000,000 USD পর্যন্ত ভার্চুয়াল ফান্ড দেওয়া হয়, যার ক্রয় ক্ষমতা $100 মিলিয়ন USD পর্যন্ত হতে পারে। এই ভার্চুয়াল অ্যাকাউন্টে আপনার ট্রেডিং কার্যক্রম আমাদের এক্সক্লুসিভ অ্যালগরিদমের মাধ্যমে রিয়েল-টাইমে আমাদের কোম্পানির লাইভ ট্রেডিং অ্যাকাউন্টে প্রতিলিপি করা হয়, যা বাস্তব নগদ প্রবাহ তৈরি করে। তাই আমরা আপনার ক্ষতি কভার করি এবং লাভ আপনার সাথে ভাগ করি।</p>
                                                        </div>',
                                    'hk' => '<h4>適合新手</h4>
                                                        <div class="cnt">
                                                            <p>這是一種天使投資模式。您將獲得從 $25,000 USD 到 $1,000,000 USD 的虛擬資金，購買力最高可達 $100 million USD。您在此虛擬帳戶上的交易活動會由我們的專屬演算法即時複製到公司的真實交易帳戶，產生真實的現金流。因此我們承擔您的損失並與您分享利潤。</p>
                                                        </div>',
                                    'ir' => '<h4>برای تازه‌واردان</h4>
                                                        <div class="cnt">
                                                            <p>این یک مدل سرمایه‌گذاری فرشته‌ای است. به شما سرمایه مجازی از $25,000 USD تا $1,000,000 USD داده می‌شود با قدرت خرید تا $100 میلیون USD. فعالیت معاملاتی شما در این حساب مجازی توسط الگوریتم‌های اختصاصی ما در زمان واقعی به حساب معاملاتی واقعی شرکت کپی می‌شود و جریان نقدی واقعی ایجاد می‌کند. به همین دلیل ما ضررهای شما را پوشش می‌دهیم و سود را با شما به اشتراک می‌گذاریم.</p>
                                                        </div>',
                                    'ur' => '<h4>نئے آنے والوں کے لیے</h4>
                                                        <div class="cnt">
                                                            <p>یہ ایک اینجل وینچر ماڈل ہے جس میں آپ کو $25,000 امریکی ڈالر سے لے کر $1,000,000 امریکی ڈالر تک کے ورچوئل فنڈز فراہم کیے جاتے ہیں۔
                                                            آپ کی Buying Power $100 ملین امریکی ڈالر تک ہو سکتی ہے۔
                                                            اس ورچوئل اکاؤنٹ پر آپ کی ٹریڈنگ سرگرمی کو ہمارے خصوصی الگورتھمز کے ذریعے حقیقی وقت (Real-Time) میں ہماری کمپنی کے لائیو ٹریڈنگ اکاؤنٹ پر نقل کیا جاتا ہے، جس سے حقیقی کیش فلو پیدا ہوتا ہے۔
                                                            اسی وجہ سے ہم آپ کے نقصانات کو کور کرتے ہیں اور آپ کے ساتھ منافع شیئر کرتے ہیں۔</p>
                                                        </div>',
                                    'id' => '<h4>Untuk Pemula</h4>
                                                        <div class="cnt">
                                                            <p>Ini adalah model angel venture. Anda diberikan dana virtual mulai dari $25,000 USD hingga $1,000,000 USD dengan daya beli hingga $100 juta USD. Aktivitas trading Anda pada akun virtual ini direplikasi secara real-time oleh algoritma eksklusif kami ke akun trading nyata perusahaan, menghasilkan arus kas nyata. Oleh karena itu kami menanggung kerugian Anda dan berbagi keuntungan dengan Anda.</p>
                                                        </div>',
                                    'pt_BR' => '<h4>Para iniciantes</h4>
                                                        <div class="cnt">
                                                            <p>Este é um modelo de investimento do tipo angel venture. Você recebe fundos virtuais de $25,000 USD até $1,000,000 USD, com poder de compra de até $100 milhões USD. Sua atividade de trading nesta conta virtual é replicada em tempo real por nossos algoritmos exclusivos para a conta real de trading da empresa, gerando fluxo de caixa real. Por isso cobrimos suas perdas e compartilhamos os lucros com você.</p>
                                                        </div>',
                                ];
                                $locale = cc_block_locale($texts);echo $texts[$locale] ?? '<h4>For Newcomers</h4>
                                                        <div class="cnt">
                                                            <p>This is an angel venture model, you are given virtual funds starting from $25,000 USD up to $1,000,000 USD. Buying Power up to $ 100 million USD. Your trading activity on this virtual account is replicated in real-time by our exclusive algorithms to our live firm trading account, generating actual cash flow. That\'s why we cover your losses and share profits with you.</p>
                                                        </div>';
                            ?>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item__dc"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/benefit_dc2.png" width="182" height="6">
                        </div>
                        <div class="border__glassed">
                            <?php
                                $texts = [
                                    'zh_CN' => '<h4>用于评估交易者</h4><div class="cnt"><p>我们认为我们提供了优秀的评估环境，因为我们不限制交易方式。</p><ul><li>零阶段 — 无需挑战。</li><li>允许新闻交易及无限合约规模。</li><li>支持所有交易方式：EA交易、跟单交易、剥头皮交易和日内交易。</li></ul></div>',
                                    'tr_TR' => '<h4>Trader Değerlendirmesi İçin</h4><div class="cnt"><p>İşlem tarzlarını sınırlamadığımız için en iyi değerlendirme ortamını sunduğumuza inanıyoruz.</p><ul><li>Sıfır aşama — challenge yok.</li><li>Haber tradingine ve sınırsız kontrat büyüklüğüne izin verilir.</li><li>Tüm trading stillerine izin verilir: EA trading, copy trading, scalp trading ve day trading.</li></ul></div>',
                                    'fr_FR' => '<h4>Pour l’évaluation des traders</h4><div class="cnt"><p>Nous pensons offrir un environnement d’évaluation optimal car nous ne limitons pas les styles de trading.</p><ul><li>Zéro phase — aucun challenge.</li><li>Autorise le trading sur actualités et une taille de contrat illimitée.</li><li>Tous les styles sont autorisés : trading EA, copy trading, scalping et day trading.</li></ul></div>',
                                    'es_ES' => '<h4>Para evaluar traders</h4><div class="cnt"><p>Creemos que ofrecemos un entorno de evaluación óptimo porque no limitamos los estilos de trading.</p><ul><li>Fase cero — sin desafíos.</li><li>Permite trading de noticias y tamaño de contrato ilimitado.</li><li>Se permiten todos los estilos: EA trading, copy trading, scalping y day trading.</li></ul></div>',
                                    'th'    => '<h4>สำหรับการประเมินเทรดเดอร์</h4><div class="cnt"><p>เราเชื่อว่าเรามีสภาพแวดล้อมการประเมินที่ดี เพราะเราไม่จำกัดสไตล์การเทรด</p><ul><li>ไม่มีเฟส — ไม่ต้องมี Challenge</li><li>อนุญาตให้เทรดข่าวและขนาดสัญญาไม่จำกัด</li><li>รองรับทุกสไตล์: EA, copy trading, scalp และ day trading</li></ul></div>',
                                    'ru_RU' => '<h4>Для оценки трейдеров</h4><div class="cnt"><p>Мы считаем, что предоставляем оптимальную среду для оценки, так как не ограничиваем стили торговли.</p><ul><li>Нулевая фаза — без этапа Challenge.</li><li>Разрешена торговля на новостях и неограниченный размер контрактов.</li><li>Поддерживаются все стили: EA, копи-трейдинг, скальпинг и дейтрейдинг.</li></ul></div>',
                                    'ja'    => '<h4>トレーダー評価向け</h4><div class="cnt"><p>当社は取引スタイルに制限を設けていないため、優れた評価環境を提供していると考えています。</p><ul><li>ゼロフェーズ — チャレンジ不要。</li><li>ニューストレードおよび無制限の契約サイズに対応。</li><li>すべての取引スタイルに対応：EA、コピートレード、スキャルピング、デイトレード。</li></ul></div>',
                                    'ko_KR' => '<h4>트레이더 평가용</h4><div class="cnt"><p>트레이딩 스타일을 제한하지 않기 때문에 최적의 평가 환경을 제공한다고 생각합니다.</p><ul><li>제로 단계 — 챌린지 없음.</li><li>뉴스 트레이딩 및 무제한 계약 규모 허용.</li><li>모든 스타일 허용: EA 트레이딩, 카피 트레이딩, 스캘핑, 데이 트레이딩.</li></ul></div>',
                                    'km'    => '<h4>សម្រាប់វាយតម្លៃអ្នកជួញដូរ</h4><div class="cnt"><p>យើងជឿថាយើងផ្តល់បរិយាកាសវាយតម្លៃល្អ ព្រោះមិនកំណត់ស្ទាយល៍ជួញដូរ</p><ul><li>Zero Phase — មិនមាន Challenge</li><li>អនុញ្ញាតឱ្យជួញដូរព័ត៌មាន និងទំហំកុងត្រាមិនកំណត់</li><li>អនុញ្ញាតគ្រប់ស្ទាយល៍: EA, copy trading, scalp និង day trading</li></ul></div>',
                                    'bn_BD' => '<h4>ট্রেডার মূল্যায়নের জন্য</h4><div class="cnt"><p>আমরা বিশ্বাস করি আমরা সেরা মূল্যায়ন পরিবেশ প্রদান করি কারণ আমরা ট্রেডিং স্টাইল সীমাবদ্ধ করি না</p><ul><li>জিরো ফেজ — কোনো চ্যালেঞ্জ নেই</li><li>নিউজ ট্রেডিং এবং আনলিমিটেড কনট্রাক্ট সাইজ অনুমোদিত</li><li>সব স্টাইল অনুমোদিত: EA, কপি ট্রেডিং, স্ক্যাল্পিং এবং ডে ট্রেডিং</li></ul></div>',
                                    'ur'    => '<h4>ٹریڈرز کی جانچ کے لیے</h4><div class="cnt"><p>ہم سمجھتے ہیں کہ ہم بہترین تشخیصی ماحول فراہم کرتے ہیں کیونکہ ہم ٹریڈنگ اسٹائل کو محدود نہیں کرتے</p><ul><li>زیرو فیز — کوئی چیلنج نہیں</li><li>نیوز ٹریڈنگ اور لامحدود کنٹریکٹ سائز کی اجازت</li><li>تمام اسٹائلز کی اجازت: EA، کاپی ٹریڈنگ، اسکیلپ اور ڈے ٹریڈنگ</li></ul></div>',
                                    'hk'    => '<h4>用於評估交易者</h4><div class="cnt"><p>我們認為我們提供優質的評估環境，因為我們不限制交易方式。</p><ul><li>零階段 — 無需挑戰</li><li>允許新聞交易及無限合約規模</li><li>支援所有交易方式：EA、跟單、剝頭皮及日內交易</li></ul></div>',
                                    'ir'    => '<h4>برای ارزیابی معامله‌گران</h4><div class="cnt"><p>ما معتقدیم محیط ارزیابی مناسبی ارائه می‌دهیم زیرا سبک‌های معاملاتی را محدود نمی‌کنیم.</p><ul><li>مرحله صفر — بدون چالش</li><li>امکان معامله در زمان اخبار و اندازه قرارداد نامحدود</li><li>تمام سبک‌ها مجاز هستند: EA، کپی تریدینگ، اسکالپ و معاملات روزانه</li></ul></div>',
                                    'pt_BR' => '<h4>Para avaliação de traders</h4><div class="cnt"><p>Acreditamos que oferecemos um ambiente de avaliação ideal, pois não limitamos os estilos de trading.</p><ul><li>Fase zero — sem desafios</li><li>Permite trading de notícias e tamanho de contrato ilimitado</li><li>Todos os estilos são permitidos: EA, copy trading, scalping e day trading</li></ul></div>',
                                ];
                                $locale = cc_block_locale($texts);
                                echo $texts[$locale] ?? '<h4>For Evaluating traders</h4><div class="cnt"><p>We believe we provide the best evaluation environment because we don\'t limit trading styles.</p><ul><li>Zero Phase - No Challenges.</li><li>Allows news trading and unlimited <br>contract size.</li><li>We allow all trading styles: EA trading, copy trading, scalp trading and day trading.</li></ul></div>';
                            ?>
                        </div>
                    </div>
                </div>
                <p class="benefit__img lightbox-item" data-video="/wp-content/themes/flatsome/uk-template/video/video_instant.mp4">
                    <img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/benefit_img.png" width="635" height="740" alt="The benefit of our project WeMasterTrade">
                </p>
            </div>
        </div>
    </section>
    <!-- End Benefit -->