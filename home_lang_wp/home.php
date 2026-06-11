<?php
/**
 * Template Name: UK Challenge
 * Template Post Type: page
 */
get_header();
$partial_path = __DIR__ . '/partials/';
?>
<?php require $partial_path . 'uk-head.php'; ?>
<div id="content">
	<?php 
		require $partial_path . 'uk-certificates.php'; 
		require $partial_path . 'uk-whyus.php'; 
	?>
	<!-- How it work -->
	<section class="hiw">
		<div class="container">
			<div class="hiw__content">
				<div class="title">
					<p class="title__sub">
						<?php
							
							$texts = [
								'th' => 'วิธีการทำงาน',
								'zh_CN' => '运作方式',
								'tr_TR' => 'Nasıl çalışır',
								'fr_FR' => 'Comment ça fonctionne',
								'es_ES' => 'Cómo funciona',
								'ru_RU' => 'Как это работает',
								'ja' => '仕組み',
								'ko_KR' => '작동 방식',
								'km' => 'របៀបដំណើរការ',
								'bn_BD' => 'এটি কীভাবে কাজ করে',
								'hk' => '運作方式',
								'ir' => 'نحوه کارکرد',
								'id' => 'Cara kerja',
								'pt_BR' => 'Como funciona',
								'uz_UZ' => 'Bu qanday ishlaydi',
								'ur' => 'یہ کیسے کام کرتا ہے',
							];
							$locale = cc_block_locale($texts);echo $texts[$locale] ?? 'How it work';
						?>
					</p>
					<?php
						
						$texts = [
							'th' => '<h3>วิธีการทำงานของ <span>แพ็กเกจ <br>Challenge</span></h3>',
							'zh_CN' => '<h3><span>挑战套餐 <br></span>如何运作</h3>',
							'tr_TR' => '<h3><span>Challenge <br>Paketi</span> Nasıl Çalışır</h3>',
							'fr_FR' => '<h3>Comment fonctionne <span>le <br>Challenge Package</span></h3>',
							'es_PE' => '<h2 class="h3">Cómo funcionan nuestras <span>Cuentas Fondeadas Challenge Package</span></h3>',
							'es_ES' => '<h3>Cómo funciona <span>el <br>Challenge Package</span></h3>',
							'ru_RU' => '<h3>Как работает <span>пакет <br>Challenge</span></h3>',
							'ja' => '<h2 class="h3"><span>日本のプロップトレーダーのためのファンデッドアカウント</span>取得方法</h2>',
							'ko_KR' => '<h3><span>챌린지 <br>패키지</span> 작동 방식</h3>',
							'km' => '<h3>របៀបដែល <span>Challenge <br>Package</span> ដំណើរការ</h3>',
							'bn_BD' => '<h3>কিভাবে <span>Challenge <br>Package</span> কাজ করে</h3>',
							'hk' => '<h3><span>挑戰套餐 <br></span>如何運作</h3>',
							'ir' => '<h3>نحوه کارکرد <span>پکیج <br>چلنج</span></h3>',
							'id' => '<h3>Bagaimana <span>Paket <br>Challenge</span> Bekerja</h3>',
							'pt_BR' => '<h3>Como funciona o <span>Pacote <br>Challenge</span></h3>',
							'uz_UZ' => '<h3><span>Challenge paketi</span><br> qanday ishlaydi</h3>',
							'ur' => '<h3><span>Challenge Package</span><br> کیسے کام کرتا ہے</h3>',
						];
						$locale = cc_block_locale($texts);echo $texts[$locale] ?? '<h3>How <span>the Challenge <br>Package </span>Works</h3>';
					?>
				</div>
				<div class="desc">
					<p>
						<?php
							
							$texts = [
								'th' => 'WeMasterTrade แนะนำ Challenge Package ที่ออกแบบมาโดยเฉพาะสำหรับเทรดเดอร์ที่ต้องการวิธีการเข้าสู่โลกของ funded trading อย่างเป็นระบบและเป็นมิตรกับผู้เริ่มต้น นี่คือวิธีการทำงาน:',
								'zh_CN' => 'WeMasterTrade 推出 Challenge Package，专为希望以结构化且适合新手的方式进入资金交易世界的交易者设计。其运作方式如下：',
								'tr_TR' => 'WeMasterTrade, fonlu işlem dünyasına yapılandırılmış ve yeni başlayanlar için uygun bir şekilde girmek isteyen traderlar için özel olarak tasarlanmış Challenge Package’i sunar. İşleyişi şu şekildedir:',
								'fr_FR' => 'WeMasterTrade présente le Challenge Package, spécialement conçu pour les traders souhaitant entrer dans le monde du trading financé de manière structurée et adaptée aux débutants. Voici comment cela fonctionne :',
								'es_PE' => 'WeMasterTrade presenta el Challenge Package, diseñado para traders que buscan una forma estructurada y accesible de ingresar al mundo del Prop Trading con cuentas fondeadas. Así funciona:',
								'es_ES' => 'WeMasterTrade presenta el Challenge Package, diseñado específicamente para traders que buscan una forma estructurada y amigable para principiantes de entrar al mundo del trading con fondos. Así es como funciona:',
								'ru_RU' => 'WeMasterTrade представляет Challenge Package, специально разработанный для трейдеров, которые ищут структурированный и удобный для новичков способ войти в мир проп-трейдинга. Вот как это работает:',
								'ja' => 'WeMasterTradeのChallenge Packageは、プロップトレーディングの世界に体系的かつ初心者にも優しい方法で参入したいトレーダーのために設計されています。',
								'ko_KR' => 'WeMasterTrade는 자금 지원 트레이딩 세계에 구조적이고 초보자 친화적인 방식으로 진입하고자 하는 트레이더를 위해 특별히 설계된 Challenge Package를 소개합니다. 작동 방식은 다음과 같습니다:',
								'km' => 'WeMasterTrade បង្ហាញ Challenge Package ដែលបានរចនាឡើងជាពិសេសសម្រាប់អ្នកជួញដូរ ដែលចង់ចូលទៅក្នុងពិភព funded trading តាមវិធីដែលមានរចនាសម្ព័ន្ធ និងងាយស្រួលសម្រាប់អ្នកចាប់ផ្តើម។ វាដំណើរការដូចខាងក្រោម៖',
								'bn_BD' => 'WeMasterTrade Challenge Package পরিচয় করিয়ে দেয়, যা বিশেষভাবে সেই ট্রেডারদের জন্য ডিজাইন করা হয়েছে যারা একটি কাঠামোবদ্ধ এবং নতুনদের জন্য সহজ উপায়ে funded trading জগতে প্রবেশ করতে চান। এটি যেভাবে কাজ করে:',
								'ph' => "WeMasterTrade has thoughtfully designed a Challenge Package for aspiring traders in the Philippines looking for a structured and accessible path to a funded trading career. It's an excellent opportunity for beginner traders to showcase their skills.",
								'hk' => 'WeMasterTrade 推出 Challenge Package，專為希望以結構化且適合新手的方式進入資金交易世界的交易者設計。運作方式如下：',
								'ir' => 'WeMasterTrade پکیج Challenge را معرفی می‌کند که به‌طور ویژه برای معامله‌گرانی طراحی شده است که به دنبال روشی ساختارمند و مناسب برای مبتدیان جهت ورود به دنیای معاملات تأمین سرمایه هستند. نحوه عملکرد آن به این صورت است:',
								'id' => 'WeMasterTrade memperkenalkan Challenge Package, yang dirancang khusus untuk trader yang mencari cara terstruktur dan ramah pemula untuk memasuki dunia funded trading. Berikut cara kerjanya:',
								'pt_BR' => 'A WeMasterTrade apresenta o Challenge Package, especialmente projetado para traders que buscam uma maneira estruturada e amigável para iniciantes de entrar no mundo do trading com capital financiado. Veja como funciona:',
								'uz_UZ' => 'WeMasterTrade moliyalashtirilgan savdo olamiga kirishning tizimli va yangi boshlovchilar uchun qulay usulini izlayotgan treyderlar uchun maxsus ishlab chiqilgan «Challenge» paketini taqdim etadi. Tizim quyidagicha ishlaydi:',
								'ur' => 'وی ماسٹر ٹریڈ نے چیلنج پیکج متعارف کرایا ہے، جو خاص طور پر اُن تاجروں کے لیے بنایا گیا ہے جو فنڈڈ ٹریڈنگ کی دنیا میں منظم اور ابتدائی دوستانہ طریقے سے داخل ہونا چاہتے ہیں۔',
							];
							$locale = cc_block_locale($texts);echo $texts[$locale] ?? 'WeMasterTrade introduces the Challenge Package, specifically designed for traders seeking a structured and beginner-friendly way to enter the funded trading world. Here\'s how it works:';
						?>
					</p>
					<div class="btn__watch">
						<p class="lightbox-item" data-youtube-id="VF6Oqy7i0PA"><a><span>
							<?php
								
								$texts = [
									'th' => 'ดูวิดีโอ',
									'zh_CN' => '观看视频',
									'tr_TR' => 'Videoyu izle',
									'fr_FR' => 'Regarder la vidéo',
									'es_ES' => 'Ver video',
									'ru_RU' => 'Смотреть видео',
									'ja' => '動画を見る',
									'ko_KR' => '영상 보기',
									'km' => 'មើលវីដេអូ',
									'bn_BD' => 'ভিডিও দেখুন',
									'hk' => '觀看影片',
									'ir' => 'مشاهده ویدیو',
									'ur' => 'یہ اس طرح کام کرتا ہے:',
									'id' => 'Tonton video',
									'pt_BR' => 'Assistir vídeo',
									'uz_UZ' => 'Videoni tomosha qilish',
								];
								$locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Watch video';
							?>
						</span></a></p>
					</div>
				</div>
			</div>
			<div class="hiw__step">
				<div class="item">
					<p class="icon"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/hiw_step_dc.png" width="168" height="194" alt="Step"></p>
					<div class="title">
						<p class="title__sub">
							<?php
								
								$texts = [
									'th' => 'ขั้นตอนที่ 1',
									'zh_CN' => '步骤 1',
									'tr_TR' => 'Adım 1',
									'fr_FR' => 'Étape 1',
									'es_PE' => 'PASO 1',
									'es_ES' => 'Paso 1',
									'ru_RU' => 'Шаг 1',
									'ja' => 'ステップ 1',
									'ko_KR' => '1단계',
									'km' => 'ជំហាន 1',
									'bn_BD' => 'ধাপ ১',
									'hk' => '步驟 1',
									'ir' => 'مرحله 1',
									'id' => 'Langkah 1',
									'pt_BR' => 'Passo 1',
									'uz_UZ' => '1-bosqich',
									'ur' => 'مرحلہ 1',
								];
								$locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Step 1';
							?>
						</p>
					</div>
					<div class="cnt">
						<?php
							$texts = [
								'zh_CN' => '<h4>交易技能评估</h4><ul><li>在此挑战阶段中，您需要在保持合理风险管理的前提下，实现 8% 的绩效收益。</li><li>我们将根据您在真实市场环境中的交易表现以及资金保护能力进行评估。</li><li>通过后，您将进入下一阶段。</li></ul>',
								'tr_TR' => '<h4>İşlem Yeteneği Değerlendirmesi</h4><ul><li>Bu challenge aşamasında, uygun risk yönetimini koruyarak %8 performansa dayalı getiri elde etmeniz gerekir.</li><li>Gerçek piyasa koşullarında işlem performansınız ve sermayeyi koruma yeteneğiniz değerlendirilecektir.</li><li>Başarılı olursanız, bir sonraki aşamaya geçersiniz.</li></ul>',
								'fr_FR' => '<h4>Évaluation des Compétences de Trading</h4><ul><li>Vous devez atteindre une performance de 8 % durant cette phase de challenge tout en maintenant une gestion des risques appropriée.</li><li>Nous évaluerons vos performances de trading et votre capacité à protéger votre capital dans des conditions de marché réelles.</li><li>En cas de réussite, vous passerez à l’étape suivante.</li></ul>',
								'es_ES' => '<h4>Evaluación de Habilidades de Trading</h4><ul><li>Debes alcanzar un rendimiento del 8% durante esta fase de desafío manteniendo una adecuada gestión de riesgos.</li><li>Evaluaremos tu desempeño en trading y tu capacidad para proteger tu capital en un entorno de mercado real.</li><li>Si apruebas, avanzarás a la siguiente etapa.</li></ul>',
								'th'    => '<h4>การประเมินทักษะการเทรด</h4><ul><li>คุณต้องทำผลตอบแทน 8% ในช่วง Challenge นี้ โดยยังคงรักษาการบริหารความเสี่ยงอย่างเหมาะสม</li><li>เราจะประเมินผลการเทรดและความสามารถในการปกป้องเงินทุนของคุณในสภาพตลาดจริง</li><li>หากผ่าน คุณจะเข้าสู่ขั้นตอนถัดไป</li></ul>',
								'ru_RU' => '<h4>Оценка Торговых Навыков</h4><ul><li>На этом этапе Challenge необходимо достичь результата 8% при соблюдении правил управления рисками.</li><li>Мы оценим вашу торговую эффективность и способность защищать капитал в реальных рыночных условиях.</li><li>При успешном прохождении вы перейдёте на следующий этап.</li></ul>',
								'ja'    => '<h3 class="h4">トレーディングスキル評価</h3><ul><li>このチャレンジフェーズでは、適切なリスク管理を維持しながら8%のパフォーマンス達成が必要です。</li><li>実際の市場環境における取引パフォーマンスと資金保護能力を評価します。</li><li>合格した場合、次のステージへ進みます。</li></ul>',
								'ko_KR' => '<h4>트레이딩 역량 평가</h4><ul><li>이 챌린지 단계에서는 적절한 리스크 관리를 유지하면서 8%의 성과를 달성해야 합니다.</li><li>실제 시장 환경에서의 트레이딩 성과와 자본 보호 능력을 평가합니다.</li><li>통과 시 다음 단계로 이동합니다.</li></ul>',
								'km'    => '<h4>ការវាយតម្លៃជំនាញជួញដូរ</h4><ul><li>ក្នុងវគ្គ Challenge នេះ អ្នកត្រូវសម្រេចបានលទ្ធផល 8% ខណៈពេលរក្សាការគ្រប់គ្រងហានិភ័យឲ្យបានសមរម្យ</li><li>យើងនឹងវាយតម្លៃលទ្ធផលជួញដូរ និងសមត្ថភាពការពារទុនរបស់អ្នកក្នុងទីផ្សារពិត</li><li>ប្រសិនបើជោគជ័យ អ្នកនឹងបន្តទៅវគ្គបន្ទាប់</li></ul>',
								'bn_BD' => '<h4>ট্রেডিং দক্ষতা মূল্যায়ন</h4><ul><li>এই চ্যালেঞ্জ পর্যায়ে সঠিক রিস্ক ম্যানেজমেন্ট বজায় রেখে ৮% পারফরম্যান্স অর্জন করতে হবে।</li><li>আমরা বাস্তব মার্কেটে আপনার ট্রেডিং পারফরম্যান্স এবং মূলধন সুরক্ষার ক্ষমতা মূল্যায়ন করব।</li><li>পাস করলে আপনি পরবর্তী ধাপে অগ্রসর হবেন।</li></ul>',
								'ur'    => '<h4>ٹریڈنگ مہارت کا جائزہ</h4><ul><li>اس چیلنج مرحلے میں آپ کو مناسب رسک مینجمنٹ برقرار رکھتے ہوئے 8% کارکردگی حاصل کرنا ہوگی۔</li><li>ہم حقیقی مارکیٹ ماحول میں آپ کی ٹریڈنگ کارکردگی اور سرمایہ محفوظ رکھنے کی صلاحیت کا جائزہ لیں گے۔</li><li>کامیاب ہونے پر آپ اگلے مرحلے میں جائیں گے۔</li></ul>',
								'hk'    => '<h4>交易技能評估</h4><ul><li>在此挑戰階段中，您需要在保持良好風險管理的前提下達成 8% 的表現。</li><li>我們將評估您在真實市場環境中的交易表現及資金保護能力。</li><li>通過後，您將進入下一階段。</li></ul>',
								'ir'    => '<h4>ارزیابی مهارت معاملاتی</h4><ul><li>در این مرحله چالش باید با حفظ مدیریت ریسک مناسب، به عملکرد ۸٪ دست یابید.</li><li>ما عملکرد معاملاتی و توانایی شما در حفظ سرمایه را در شرایط واقعی بازار ارزیابی می‌کنیم.</li><li>در صورت موفقیت، به مرحله بعد منتقل خواهید شد.</li></ul>',
								'pt_BR' => '<h4>Avaliação de Habilidade de Trading</h4><ul><li>Durante esta fase de desafio, você precisa atingir 8% de desempenho mantendo uma gestão de risco adequada.</li><li>Avaliamos seu desempenho de trading e sua capacidade de proteger o capital em condições reais de mercado.</li><li>Se aprovado, você avança para a próxima etapa.</li></ul>',
							];
							$locale = cc_block_locale($texts);
							echo $texts[$locale] ?? '<h4>Trading Skill Assessment</h4><ul><li>You need to achieve a 8% performance-based rewards during this challenge phase while maintaining proper risk management.</li><li>We will evaluate your trading performance and ability to protect your capital in a real market environment.</li><li>If you pass, you\\\'ll move on to the next stage.</li></ul>';
						?>
					</div>
				</div>
				<div class="item">
					<p class="icon"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/hiw_step_dc.png" width="168" height="194" alt="Step"></p>
					<div class="title">
						<p class="title__sub">
							<?php
								
								$texts = [
									'th' => 'ขั้นตอนที่ 2',
									'zh_CN' => '步骤 2',
									'tr_TR' => 'Adım 2',
									'fr_FR' => 'Étape 2',
									'es_PE' => 'PASO 2',
									'es_ES' => 'Paso 2',
									'ru_RU' => 'Шаг 2',
									'ja' => 'ステップ 2',
									'ko_KR' => '2단계',
									'km' => 'ជំហាន 2',
									'bn_BD' => 'ধাপ ২',
									'hk' => '步驟 2',
									'ir' => 'مرحله 2',
									'id' => 'Langkah 2',
									'pt_BR' => 'Passo 2',
									'uz_UZ' => '2-bosqich',
									'ur' => 'مرحلہ 2',
								];
								$locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Step 2';
							?>
						</p>
					</div>
					<div class="cnt">
						<?php
							$texts = [
								'zh_CN' => '<h4>稳定性评估</h4><ul><li>在此阶段，您需要实现 6% 的绩效奖励。</li><li>该阶段将评估您在长期内维持绩效奖励并管理风险的能力。</li><li>在此阶段，您将开始从交易中获得绩效奖励，即使尚未完成全部评估流程。</li></ul>',
								'tr_TR' => '<h4>İstikrar Değerlendirmesi</h4><ul><li>Bu aşamada %6 performansa dayalı ödül elde etmeniz gerekir.</li><li>Bu adım, performansa dayalı ödülleri sürdürebilme ve uzun vadede riski yönetme yeteneğinizi değerlendirir.</li><li>Bu aşamada, tam değerlendirme tamamlanmadan önce bile işlemlerinizden performansa dayalı ödül kazanmaya başlarsınız.</li></ul>',
								'fr_FR' => '<h4>Évaluation de la Stabilité</h4><ul><li>Dans cette phase, vous devez atteindre 6 % de récompenses basées sur la performance.</li><li>Cette étape évalue votre capacité à maintenir des récompenses basées sur la performance et à gérer les risques sur le long terme.</li><li>Vous commencerez à générer des récompenses basées sur la performance à partir de vos trades durant cette phase, même avant la fin complète de l’évaluation.</li></ul>',
								'es_ES' => '<h4>Evaluación de Estabilidad</h4><ul><li>En esta fase, debes alcanzar un 6% de recompensas basadas en el rendimiento.</li><li>Este paso evalúa tu capacidad para mantener recompensas basadas en el rendimiento y gestionar el riesgo a largo plazo.</li><li>Comenzarás a generar recompensas basadas en el rendimiento de tus operaciones durante esta fase, incluso antes de completar la evaluación.</li></ul>',
								'th'    => '<h4>การประเมินความเสถียร</h4><ul><li>ในช่วงนี้ คุณต้องทำผลตอบแทน 6% ตามผลงาน</li><li>ขั้นตอนนี้ประเมินความสามารถในการรักษาผลตอบแทนตามผลงานและบริหารความเสี่ยงในระยะยาว</li><li>คุณจะเริ่มได้รับผลตอบแทนตามผลงานจากการเทรดในช่วงนี้ แม้ยังไม่เสร็จสิ้นการประเมินทั้งหมด</li></ul>',
								'ru_RU' => '<h4>Оценка Стабильности</h4><ul><li>На этом этапе необходимо достичь 6% вознаграждения, основанного на результатах.</li><li>Данный этап оценивает вашу способность поддерживать вознаграждение, основанное на результатах, и управлять рисками в долгосрочной перспективе.</li><li>Вы начнёте получать вознаграждение от торговли уже на этом этапе, даже до завершения полного процесса оценки.</li></ul>',
								'ja'    => '<h3 class="h4">安定性評価</h3><ul><li>このフェーズでは6%のパフォーマンス目標を達成する必要があります。</li><li>長期的な利益の維持とリスク管理能力を評価します。</li><li>この段階から、プロップトレーダーとして取引利益の30%を受け取り始めます。</li></ul>',
								'ko_KR' => '<h4>안정성 평가</h4><ul><li>이 단계에서는 성과 기반 리워드 6%를 달성해야 합니다.</li><li>장기적으로 성과 기반 리워드를 유지하고 리스크를 관리하는 능력을 평가합니다.</li><li>이 단계에서는 전체 평가가 완료되기 전에도 트레이딩을 통해 성과 기반 리워드를 얻기 시작합니다.</li></ul>',
								'km'    => '<h4>ការវាយតម្លៃស្ថេរភាព</h4><ul><li>ក្នុងដំណាក់កាលនេះ អ្នកត្រូវសម្រេចបានរង្វាន់ផ្អែកលើលទ្ធផល 6%</li><li>វាយតម្លៃសមត្ថភាពរក្សារង្វាន់ផ្អែកលើលទ្ធផល និងគ្រប់គ្រងហានិភ័យក្នុងរយៈពេលវែង</li><li>អ្នកនឹងចាប់ផ្តើមទទួលបានរង្វាន់ផ្អែកលើលទ្ធផលពីការជួញដូរ នៅដំណាក់កាលនេះ ទោះមិនទាន់បញ្ចប់ការវាយតម្លៃទាំងស្រុងក៏ដោយ</li></ul>',
								'bn_BD' => '<h4>স্থিতিশীলতা মূল্যায়ন</h4><ul><li>এই পর্যায়ে আপনাকে ৬% পারফরম্যান্স-ভিত্তিক রিওয়ার্ড অর্জন করতে হবে।</li><li>এই ধাপে দীর্ঘমেয়াদে পারফরম্যান্স-ভিত্তিক রিওয়ার্ড ধরে রাখা এবং ঝুঁকি ব্যবস্থাপনার সক্ষমতা মূল্যায়ন করা হয়।</li><li>এই পর্যায়েই আপনি ট্রেড থেকে পারফরম্যান্স-ভিত্তিক রিওয়ার্ড অর্জন শুরু করবেন, সম্পূর্ণ মূল্যায়ন শেষ হওয়ার আগেই।</li></ul>',
								'ur'    => '<h4>استحکام کا جائزہ</h4><ul><li>اس مرحلے میں آپ کو 6% کارکردگی پر مبنی انعام حاصل کرنا ہوگا۔</li><li>یہ مرحلہ طویل مدت میں کارکردگی پر مبنی انعام کو برقرار رکھنے اور رسک مینجمنٹ کی صلاحیت کا جائزہ لیتا ہے۔</li><li>آپ اس مرحلے میں مکمل تشخیص سے پہلے ہی اپنی ٹریڈز سے کارکردگی پر مبنی انعام حاصل کرنا شروع کر دیں گے۔</li></ul>',
								'hk'    => '<h4>穩定性評估</h4><ul><li>在此階段，您需要達成 6% 的績效獎勵。</li><li>此步驟將評估您在長期內維持績效獎勵及管理風險的能力。</li><li>在此階段，即使尚未完成全部評估流程，您也將開始從交易中獲得績效獎勵。</li></ul>',
								'ir'    => '<h4>ارزیابی پایداری</h4><ul><li>در این مرحله باید به ۶٪ پاداش مبتنی بر عملکرد دست یابید.</li><li>این مرحله توانایی شما در حفظ پاداش مبتنی بر عملکرد و مدیریت ریسک در بلندمدت را ارزیابی می‌کند.</li><li>در این مرحله، حتی قبل از تکمیل کامل ارزیابی، از معاملات خود پاداش مبتنی بر عملکرد کسب خواهید کرد.</li></ul>',
								'pt_BR' => '<h4>Avaliação de Estabilidade</h4><ul><li>Nesta fase, você precisa atingir 6% de recompensas baseadas em desempenho.</li><li>Esta etapa avalia sua capacidade de sustentar recompensas baseadas em desempenho e gerenciar riscos no longo prazo.</li><li>Você começará a obter recompensas baseadas em desempenho com suas operações nesta fase, mesmo antes de concluir toda a avaliação.</li></ul>',
							];
							$locale = cc_block_locale($texts);
							echo $texts[$locale] ?? '<h4>Stability Assessment</h4><ul><li>In this phase, you need to achieve a 6% performance-based rewards.</li><li>This step evaluates your ability to sustain performance-based rewards and manage risk over the long term.</li><li>You’ll start earning performance-based rewards from your trades during this phase, even before receiving full evaluation.</li></ul>';
						?>
					</div>
				</div>
				<div class="item">
					<p class="icon"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/hiw_step_dc.png" width="168" height="194" alt="Step"></p>
					<div class="title">
						<p class="title__sub">
							<?php
								
								$texts = [
									'th' => 'ขั้นตอนที่ 3',
									'zh_CN' => '步骤 3',
									'tr_TR' => 'Adım 3',
									'fr_FR' => 'Étape 3',
									'es_PE' => 'PASO 3',
									'es_ES' => 'Paso 3',
									'ru_RU' => 'Шаг 3',
									'ja' => 'ステップ 3',
									'ko_KR' => '3단계',
									'km' => 'ជំហាន 3',
									'bn_BD' => 'ধাপ ৩',
									'hk' => '步驟 3',
									'ir' => 'مرحله 3',
									'id' => 'Langkah 3',
									'pt_BR' => 'Passo 3',
									'uz_UZ' => '3-bosqich',
									'ur' => 'مرحلہ 3',
								];
								$locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Step 3';
							?>
						</p>
					</div>
					<div class="cnt">
						<?php
							$texts = [
								'zh_CN' => '<h4>评估阶段</h4><ul><li>在成功完成所有评估阶段后，您将获得 WeMasterTrade 提供的交易资金。</li><li>平台将根据您的交易活动进行同步执行。</li><li>您最多可获得交易产生的绩效奖励的 90%。</li></ul>',
								'tr_TR' => '<h4>Değerlendirme Aşaması</h4><ul><li>Tüm değerlendirme aşamalarını başarıyla tamamladıktan sonra WeMasterTrade tarafından işlem sermayesi sağlanır.</li><li>Platform, işlem faaliyetlerinizi takip ederek eş zamanlı olarak uygular.</li><li>Gerçekleştirdiğiniz işlemlerden elde edilen performansa dayalı ödüllerin %90\'ına kadar kazanabilirsiniz.</li></ul>',
								'fr_FR' => '<h4>Phase d’Évaluation</h4><ul><li>Une fois toutes les phases d’évaluation complétées avec succès, vous recevrez un capital de trading fourni par WeMasterTrade.</li><li>La plateforme suivra et reproduira vos activités de trading.</li><li>Vous pouvez recevoir jusqu’à 90 % des récompenses basées sur la performance issues de vos trades.</li></ul>',
								'es_ES' => '<h4>Fase de Evaluación</h4><ul><li>Una vez completadas con éxito todas las fases de evaluación, recibirás capital de trading proporcionado por WeMasterTrade.</li><li>La plataforma seguirá y replicará tu actividad de trading.</li><li>Podrás recibir hasta el 90% de las recompensas basadas en el rendimiento de tus operaciones.</li></ul>',
								'th'    => '<h4>ขั้นตอนการประเมิน</h4><ul><li>เมื่อคุณผ่านทุกขั้นตอนการประเมินเรียบร้อยแล้ว คุณจะได้รับเงินทุนสำหรับการเทรดจาก WeMasterTrade</li><li>ระบบจะติดตามและดำเนินการตามกิจกรรมการเทรดของคุณ</li><li>คุณสามารถรับผลตอบแทนตามผลงานได้สูงสุดถึง 90% จากการเทรดของคุณ</li></ul>',
								'ru_RU' => '<h4>Этап Оценки</h4><ul><li>После успешного прохождения всех этапов оценки вы получите торговый капитал от WeMasterTrade.</li><li>Платформа будет отслеживать и повторять вашу торговую активность.</li><li>Вы можете получать до 90% вознаграждения, основанного на результатах ваших сделок.</li></ul>',
								'ja'    => '<h3 class="h4">ファンデッドステージ</h3><ul><li>両フェーズを完了すると、WeMasterTradeからプロップトレーディング資金が提供されます。</li><li>当社があなたの取引を直接コピーします。</li><li>取引から得られる利益の最大90%を受け取ることができます。</li></ul>',
								'ko_KR' => '<h4>평가 단계</h4><ul><li>모든 평가 단계를 성공적으로 완료하면 WeMasterTrade로부터 트레이딩 자금을 받게 됩니다.</li><li>플랫폼은 사용자의 트레이딩 활동을 추적하고 반영합니다.</li><li>트레이딩을 통해 발생한 성과 기반 리워드의 최대 90%까지 받을 수 있습니다.</li></ul>',
								'km'    => '<h4>ដំណាក់កាលវាយតម្លៃ</h4><ul><li>បន្ទាប់ពីបញ្ចប់ដំណាក់កាលវាយតម្លៃទាំងអស់ដោយជោគជ័យ អ្នកនឹងទទួលបានទុនសម្រាប់ជួញដូរពី WeMasterTrade</li><li>ប្រព័ន្ធនឹងតាមដាន និងអនុវត្តសកម្មភាពជួញដូររបស់អ្នក</li><li>អ្នកអាចទទួលបានរង្វាន់ផ្អែកលើលទ្ធផលរហូតដល់ 90% ពីការជួញដូររបស់អ្នក</li></ul>',
								'bn_BD' => '<h4>মূল্যায়ন পর্যায়</h4><ul><li>সব মূল্যায়ন ধাপ সফলভাবে সম্পন্ন করার পর, আপনি WeMasterTrade থেকে ট্রেডিং মূলধন পাবেন।</li><li>প্ল্যাটফর্ম আপনার ট্রেডিং কার্যক্রম অনুসরণ করবে।</li><li>আপনি আপনার ট্রেড থেকে অর্জিত পারফরম্যান্স-ভিত্তিক রিওয়ার্ডের সর্বোচ্চ ৯০% পেতে পারেন।</li></ul>',
								'ur'    => '<h4>تشخیصی مرحلہ</h4><ul><li>جب آپ تمام تشخیصی مراحل کامیابی سے مکمل کر لیتے ہیں تو آپ کو WeMasterTrade کی جانب سے ٹریڈنگ سرمایہ فراہم کیا جائے گا۔</li><li>پلیٹ فارم آپ کی ٹریڈنگ سرگرمی کو فالو کرے گا۔</li><li>آپ اپنی ٹریڈز سے حاصل ہونے والے کارکردگی پر مبنی انعام کا زیادہ سے زیادہ 90% حاصل کر سکتے ہیں۔</li></ul>',
								'hk'    => '<h4>評估階段</h4><ul><li>完成所有評估階段後，您將獲得 WeMasterTrade 提供的交易資金。</li><li>平台將追蹤並反映您的交易活動。</li><li>您最多可獲得交易產生的績效獎勵的 90%。</li></ul>',
								'ir'    => '<h4>مرحله ارزیابی</h4><ul><li>پس از تکمیل موفقیت‌آمیز تمامی مراحل ارزیابی، سرمایه معاملاتی از سوی WeMasterTrade در اختیار شما قرار می‌گیرد.</li><li>پلتفرم فعالیت‌های معاملاتی شما را دنبال می‌کند.</li><li>شما می‌توانید تا ۹۰٪ از پاداش مبتنی بر عملکرد معاملات خود را دریافت کنید.</li></ul>',
								'pt_BR' => '<h4>Fase de Avaliação</h4><ul><li>Após concluir com sucesso todas as etapas de avaliação, você receberá capital de trading da WeMasterTrade.</li><li>A plataforma acompanhará sua atividade de trading.</li><li>Você poderá receber até 90% das recompensas baseadas em desempenho das suas operações.</li></ul>',
							];
							$locale = cc_block_locale($texts);
							echo $texts[$locale] ?? '<h4>Evaluation Stage</h4><ul><li>Once you’ve successfully completed both evaluation stages, you will receive trading capital from WeMasterTrade.</li><li>The company will copy your trades directly.</li><li>You will earn up to 90% of the performance-based rewards from the trades you make.</li></ul>';
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End How it work -->
	<!-- Package -->
	<section id="challenge_package" class="package">
		<p class="package__dc1"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/package_dc1.png" width="792" height="1628" alt="Challenge Package"></p>
		<p class="package__dc2"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/package_dc2.png" width="831" height="1306" alt="Challenge Package"></p>
		<div class="container">
			<div class="title">
				<p class="title__sub">
					<?php
						
						$texts = [
							'th' => 'แพ็กเกจ',
							'zh_CN' => '套餐',
							'tr_TR' => 'Paket',
							'fr_FR' => 'Forfait',
							'es_PE' => 'Paquete',
							'es_ES' => 'Paquete',
							'ru_RU' => 'Пакет',
							'ja' => 'パッケージ',
							'ko_KR' => '패키지',
							'km' => 'កញ្ចប់',
							'bn_BD' => 'প্যাকেজ',
							'hk' => '套餐',
							'ir' => 'پکیج',
							'id' => 'Paket',
							'pt_BR' => 'Pacote',
							'uz_UZ' => 'paketi',
						];
						$locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Package';
					?>
				</p>
				<?php
					
					$texts = [
						'th' => '<h3><span>Challenge</span> แพ็กเกจ</h3>',
						'zh_CN' => '<h3><span>Challenge</span> 套餐</h3>',
						'tr_TR' => '<h3><span>Challenge</span> Paketi</h3>',
						'es_PE' => '<h2 class="h3"><span>Challenge</span> Package</h2>',
						'es_ES' => '<h3><span>Challenge</span> Paquete</h3>',
						'ru_RU' => '<h3><span>Challenge</span> Пакет</h3>',
						'ja' => '<h2><span>Challenge Package</span> <br>あなたに合ったプロップトレーディングアカウントを選択</h2><h3><span>Challenge</span>パッケージ</h3><p>アカウントサイズを選択して、日本のプロップトレーディングチャレンジを始めましょう。</p>',
						'ko_KR' => '<h3><span>Challenge</span> 패키지</h3>',
						'km' => '<h3><span>Challenge</span> កញ្ចប់</h3>',
						'bn_BD' => '<h3><span>Challenge</span> প্যাকেজ</h3>',
						'hk' => '<h3><span>Challenge</span> 套餐</h3>',
						'ir' => '<h3><span>Challenge</span> پکیج</h3>',
						'id' => '<h3><span>Challenge</span> Paket</h3>',
						'pt_BR' => '<h3><span>Challenge</span> Pacote</h3>',
						'uz_UZ' => '<h3><span>Chellenj</span> paketi</h3>',
					];
					$locale = cc_block_locale($texts);echo $texts[$locale] ?? '<h3><span>Challenge</span> Package</h3>';
				?>
			</div>
			<div class="package__tabs">
				<p class="item" data-tab="package1" data-tab-group="1">$10,000</p>
				<p class="item" data-tab="package2" data-tab-group="1">
				    <?php					
        				$texts = [
        					'es_PE' => '$20,000',
        				];
        				$locale = cc_block_locale($texts);echo $texts[$locale] ?? '$25,000';
        			?>    
				</p>
				<p class="item active" data-tab="package3" data-tab-group="1">$50,000</p>
				<p class="item" data-tab="package4" data-tab-group="1">$100,000</p>
				<?php 
					$current_lang = pll_current_language();
					$instant_link = home_url('/' . $current_lang . '/instant');
				?>
				<p class="item"><a href="<?php echo esc_url($instant_link); ?>?from=instantbtn" id="url-instant">
					<?php
						
						$texts = [
							'th' => 'ไม่มีชาเลนจ์',
							'zh_CN' => '无挑战',
							'tr_TR' => 'Challenge yok',
							'fr_FR' => 'Aucun challenge',
							'es_PE' => 'Sin Challenge',
							'es_ES' => 'Sin desafío',
							'ru_RU' => 'Без челленджа',
							'ja' => 'チャレンジなし',
							'ko_KR' => '챌린지 없음',
							'km' => 'គ្មាន Challenge',
							'bn_BD' => 'কোনো চ্যালেঞ্জ নেই',
							'hk' => '無挑戰',
							'ir' => 'بدون چالش',
							'ur' => 'کوئی چیلنج نہیں',
							'pt_BR' => 'Sem Desafio',
							'uz_UZ' => 'Chellenjsiz',
						];
						$locale = cc_block_locale($texts);echo $texts[$locale] ?? 'No challenge';
					?>
				</a></p>
			</div>
			<?php 
				$labels = [
					'phase_1' => [
						'en' => 'Phase 1',
						'ja'    => 'フェーズ1',
						'ar'    => 'المرحلة الأولى',
						'km'    => 'ដំណាក់កាលទី 1',
						'ko_KR'    => '1단계',
						'bn_BD'    => 'ধাপ ১',
						'hk'    => '第一階段',
						'ir'    => 'مرحله ۱',
						'ur' => 'مرحلہ 1',
						'pt_BR'    => 'Fase 1',
						'es_PE'    => 'Fase 1',
						'uz_UZ'    => '1-bosqich',
					],
					'phase_2' => [
						'en' => 'Phase 2',
						'ja'    => 'フェーズ2',
						'ar'    => 'المرحلة الثانية',
						'km'    => 'ដំណាក់កាលទី 2',
						'ko_KR'    => '2단계',
						'bn_BD'    => 'ধাপ ২',
						'hk'    => '第二階段',
						'ir'    => 'مرحله 2',
						'ur' => 'مرحلہ 2',
						'pt_BR'    => 'Fase 2',
						'es_PE'    => 'Fase 2',
						'uz_UZ'    => '2-bosqich',
					],
					'funded' => [
						'en' => 'Funded',
						'ja'    => '資金提供',
						'fr_FR'    => 'Financé',
						'ar'    => 'المرحلة الأولى',
						'km'    => 'ទទួលមូលនិធិ',
						'ko_KR'    => '자금 지원 완료',
						'bn_BD'    => 'অর্থায়িত',
						'hk'    => '已註資',
						'ir'    => 'مرحله تأمین سرمایه',
						'ur' => 'فنڈڈ',
						'pt_BR'    => 'Financiado',
						'es_PE'    => 'Fondeada',
						'uz_UZ'    => 'Moliyalashtirilgan',
					],
					'per_time' => [
						'en' => '/per time',
						'th' => '/ต่อครั้ง',
						'zh_CN' => '/每次',
						'tr_TR' => '/her sefer',
						'fr_FR' => '/par utilisation',
						'es_PE' => '/por vez',
						'es_ES' => '/por vez',
						'ru_RU' => '/за раз',
						'ja' => '/回',
						'ko_KR' => '/회당',
						'km' => '/ក្នុងមួយដង',
						'bn_BD' => '/প্রতি বার',
						'hk' => '/每次',
						'ir' => '/در هر بار',
						'ur' => 'فی وقت',
						'id' => '/per kali',
						'pt_BR' => '/por vez',
						'uz_UZ' => '— Bir martalik to‘lov',
					],
					'one_time_fee_mb' => [
						'en' => 'One-Time <br class="sp">Fee',
						'th' => 'ค่าธรรมเนียม<br class="sp">ครั้งเดียว',
						'zh_CN' => '一次性<br class="sp">费用',
						'tr_TR' => 'Tek Seferlik<br class="sp">Ücret',
						'fr_FR' => 'Frais<br class="sp">uniques',
						'es_PE' => 'Tarifa<br class="sp">única',
						'es_ES' => 'Tarifa<br class="sp">única',
						'ru_RU' => 'Единовременная<br class="sp">плата',
						'ja' => 'ワンタイム<br class="sp">料金',
						'ko_KR' => '1회<br class="sp">수수료',
						'km' => 'ថ្លៃសេវា<br class="sp">ម្តងតែម្ដង',
						'bn_BD' => 'এককালীন<br class="sp">ফি',
						'hk' => '一次性<br class="sp">費用',
						'ir' => 'هزینه<br class="sp">یک‌باره',
						'ur' => 'ایک بار کی <br class="sp">فیس',
						'id' => 'Biaya<br class="sp">Sekali',
						'pt_BR' => 'Taxa<br class="sp">única',
						'uz_UZ' => 'Bir martalik<br class="sp">to‘lov',
					],
					'Maximum_DailyLoss_mb' => [
						'en' => 'Maximum <br class="sp">Daily Loss',
						'th' => 'ขาดทุนสูงสุด<br class="sp">ต่อวัน',
						'zh_CN' => '每日最大<br class="sp">亏损',
						'tr_TR' => 'Maksimum<br class="sp">Günlük Kayıp',
						'fr_FR' => 'Perte maximale<br class="sp">journalière',
						'es_PE' => 'Pérdida Máxima <br class="sp">Diaria',
						'es_ES' => 'Pérdida máxima<br class="sp">diaria',
						'ru_RU' => 'Максимальный<br class="sp">дневной убыток',
						'ja' => '1日の最大<br class="sp">損失',
						'ko_KR' => '일일 최대<br class="sp">손실',
						'km' => 'ការខាតបង់អតិបរមា<br class="sp">ប្រចាំថ្ងៃ',
						'bn_BD' => 'সর্বোচ্চ দৈনিক<br class="sp">ক্ষতি',
						'hk' => '每日最大<br class="sp">虧損',
						'ir' => 'حداکثر ضرر<br class="sp">روزانه',
						'ur' => 'زیادہ سے زیادہ <br class="sp">یومیہ نقصان',
						'id' => 'Kerugian Maksimum<br class="sp">Harian',
						'pt_BR' => 'Perda máxima<br class="sp">diária',
						'uz_UZ' => 'Maksimal kunlik <br class="sp">zarar',
					],
					'Maximum_OverallLoss_mb' => [
						'en' => 'Maximum <br class="sp">Overall Loss',
						'th' => 'ขาดทุนรวม<br class="sp">สูงสุด',
						'zh_CN' => '最大<br class="sp">总亏损',
						'tr_TR' => 'Maksimum<br class="sp">Toplam Kayıp',
						'fr_FR' => 'Perte globale<br class="sp">maximale',
						'es_PE' => 'Pérdida Máxima <br class="sp">Total',
						'es_ES' => 'Pérdida total<br class="sp">máxima',
						'ru_RU' => 'Максимальный<br class="sp">общий убыток',
						'ja' => '最大<br class="sp">総損失',
						'ko_KR' => '최대<br class="sp">총 손실',
						'km' => 'ការខាតបង់សរុប<br class="sp">អតិបរមា',
						'bn_BD' => 'সর্বোচ্চ মোট<br class="sp">ক্ষতি',
						'hk' => '最大<br class="sp">總虧損',
						'ir' => 'حداکثر ضرر<br class="sp">کل',
						'ur' => 'زیادہ سے زیادہ <br class="sp">مجموعی نقصان',
						'id' => 'Kerugian Total<br class="sp">Maksimum',
						'pt_BR' => 'Perda total<br class="sp">máxima',
						'uz_UZ' => 'Maksimal umumiy<br class="sp">zarar',
					],
					'Profit_Target_mb' => [
						'en' => 'Performance-based Rewards Target',
						'zh_CN' => '绩效奖励目标 ',
						'tr_TR' => 'Performansa Dayalı Ödül Hedefi ',
						'fr_FR' => 'Objectif de Récompense basée sur la Performance ',
						'es_ES' => 'Objetivo de Recompensas basadas en el Rendimiento ',
						'th'    => 'เป้าหมายผลตอบแทนตามผลงาน ',
						'ru_RU' => 'Цель вознаграждения на основе результатов ',
						'ja'    => 'パフォーマンス目標',
						'ko_KR' => '성과 기반 리워드 목표 ',
						'km'    => 'គោលដៅរង្វាន់ផ្អែកលើលទ្ធផល ',
						'bn_BD' => 'পারফরম্যান্স-ভিত্তিক রিওয়ার্ড লক্ষ্য ',
						'ur'    => 'کارکردگی پر مبنی انعام کا ہدف ',
						'hk'    => '績效獎勵目標 ',
						'ir'    => 'هدف پاداش مبتنی بر عملکرد ',
						'pt_BR' => 'Meta de Recompensas Baseadas em Desempenho ',
						'uz_UZ' => 'Ishlash asosidagi mukofotlar Nishon',
					],
					'Reward_Share_mb' => [
						'en' => 'Reward <br class="sp">Share',
						'th' => 'ส่วนแบ่ง<br class="sp">รางวัล',
						'zh_CN' => '奖励<br class="sp">分成',
						'tr_TR' => 'Ödül<br class="sp">Payı',
						'fr_FR' => 'Part de<br class="sp">récompense',
						'es_PE' => 'Profit Share',
						'es_ES' => 'Participación<br class="sp">de recompensa',
						'ru_RU' => 'Доля<br class="sp">вознаграждения',
						'ja' => '報酬<br class="sp">シェア',
						'ko_KR' => '보상<br class="sp">분배',
						'km' => 'ចំណែក<br class="sp">រង្វាន់',
						'bn_BD' => 'পুরস্কারের<br class="sp">অংশ',
						'hk' => '獎勵<br class="sp">分成',
						'ir' => 'سهم<br class="sp">پاداش',
						'ur' => 'انعام کی <br class="sp">حصہ داری',
						'id' => 'Pembagian<br class="sp">Reward',
						'pt_BR' => 'Divisão de<br class="sp">Recompensa',
						'uz_UZ' => 'Mukofot <br class="sp">ulushi',
					],
					'Reset_Discount_mb' => [
						'en' => 'Reset <br class="sp">Discount',
						'th' => 'ส่วนลด<br class="sp">รีเซ็ต',
						'zh_CN' => '重置<br class="sp">折扣',
						'tr_TR' => 'Sıfırlama<br class="sp">İndirimi',
						'fr_FR' => 'Remise de<br class="sp">réinitialisation',
						'es_PE' => 'Descuento Reset',
						'es_ES' => 'Descuento de<br class="sp">reinicio',
						'ru_RU' => 'Скидка на<br class="sp">сброс',
						'ja' => 'リセット<br class="sp">割引',
						'ko_KR' => '리셋<br class="sp">할인',
						'km' => 'បញ្ចុះតម្លៃ<br class="sp">កំណត់ឡើងវិញ',
						'bn_BD' => 'রিসেট<br class="sp">ডিসকাউন্ট',
						'hk' => '重置<br class="sp">折扣',
						'ir' => 'تخفیف<br class="sp">ریست',
						'ur' => 'ری سیٹ <br class="sp">ڈسکاؤنٹ',
						'id' => 'Diskon<br class="sp">Reset',
						'pt_BR' => 'Desconto de<br class="sp">Reset',
						'uz_UZ' => 'Qayta tiklash<br class="sp">chegirmasi',
					],
					'Free_Swap_mb' => [
						'en' => 'Free <br class="sp">Swap',
						'th' => 'สวอป<br class="sp">ฟรี',
						'zh_CN' => '免<br class="sp">隔夜费',
						'tr_TR' => 'Swap<br class="sp">Ücretsiz',
						'fr_FR' => 'Swap<br class="sp">gratuit',
						'es_PE' => 'Swap<br class="sp">gratis',
						'es_ES' => 'Swap<br class="sp">gratis',
						'ru_RU' => 'Своп<br class="sp">без комиссии',
						'ja' => 'スワップ<br class="sp">無料',
						'ko_KR' => '스왑<br class="sp">무료',
						'km' => 'ស្វាប់<br class="sp">ឥតគិតថ្លៃ',
						'bn_BD' => 'সোয়াপ<br class="sp">ফ্রি',
						'hk' => '免<br class="sp">隔夜費',
						'ir' => 'سواپ<br class="sp">رایگان',
						'ur' => 'مفت <br class="sp">سواپ',
						'id' => 'Swap<br class="sp">Gratis',
						'uz_UZ' => 'Svapsiz',
					],
					'free_swap' => [
						'en' => 'Free Swap',
						'zh_CN'    => '免费兑换',
						'fr_FR'    => 'Échange Gratuit',
						'es_PE'    => 'Intercambio Gratis',
						'es_ES'    => 'Intercambio Gratis',
						'th'    => 'แลกเปลี่ยนฟรี',
						'ja'    => '無料スワップ',
						'ar'    => 'مبادلة مجانية',
						'ko_KR'    => '무료 스왑',
						'km'    => 'ប្តូរឥតគិតថ្លៃ',
						'bn_BD'    => 'ফ্রি অ্যাকাউন্ট পরিবর্তন',
						'hk'    => '交換費：免費交換',
						'ir'    => 'بدون کارمزد سواپ',
						'ur' => 'مفت سواپ',
						'id'    => 'Ya',
						'uz_UZ'    => 'Svapsiz',
					],
					'check_icon' => [
						'en' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(250,204,21,1)"><path d="M4 12C4 7.58172 7.58172 4 12 4C16.4183 4 20 7.58172 20 12C20 16.4183 16.4183 20 12 20C7.58172 20 4 16.4183 4 12ZM12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM17.4571 9.45711L16.0429 8.04289L11 13.0858L8.20711 10.2929L6.79289 11.7071L11 15.9142L17.4571 9.45711Z"></path></svg>',
					],
					'MaxDailyLoss' => [
						'en' => 'Maximum Daily Loss',
						'ja'    => '最大日次損失',
						'fr_FR'    => 'Perte Quotidienne Maximale',
						'ar'    => 'الخسارة اليومية القصوى',
						'ko_KR'    => '일일 최대 손실',
						'km'    => 'ការបាត់បង់ប្រចាំថ្ងៃអតិបរមា',
						'bn_BD'    => 'সর্বোচ্চ দৈনিক ক্ষতি',
						'hk'    => '單日最大虧損',
						'ir'    => 'حد ضرر روزانه: ۵٪ (۵۰۰ دلار)',
						'ur' => 'زیادہ سے زیادہ یومیہ نقصان',
						'pt_BR'    => 'Perda Máxima Diária',
						'uz_UZ'    => 'Maksimal kunlik zarar',
					],
					'MaxOverallLoss' => [
						'en' => 'Maximum Overall Loss',
						'ja'    => '全体の損失率',
						'fr_FR'    => 'Perte Totale Maximale',
						'ar'    => 'الخسارة الإجمالية القصوى',
						'ko_KR'    => '총 최대 손실',
						'km'    => 'ការបាត់បង់សរុបអតិបរមា',
						'bn_BD'    => 'সর্বোচ্চ মোট ক্ষতি',
						'hk'    => '總虧損限額',
						'ir'    => 'حد ضرر کل',
						'ur' => 'زیادہ سے زیادہ مجموعی نقصان',
						'pt_BR'    => 'Perda Máxima Total',
						'uz_UZ'    => 'Maksimal umumiy zarar',
					],
					'profit_target' => [
						'en' => 'Performance-based Rewards Target',
						'zh_CN' => '收益目标',
						'tr_TR' => 'Kâr Hedefi',
						'fr_FR' => 'Objectif de Profit',
						'es_ES' => 'Objetivo de Ganancia',
						'th'    => 'เป้าหมายกำไร',
						'ru_RU' => 'Цель по прибыли',
						'ja'    => '利益目標',
						'ko_KR' => '수익 목표',
						'km'    => 'គោលដៅប្រាក់ចំណេញ',
						'bn_BD' => 'লাভের লক্ষ্য',
						'ur'    => 'منافع کا ہدف',
						'hk'    => '收益目標',
						'ir'    => 'هدف سود',
						'pt_BR' => 'Meta de Lucro',
						'uz_UZ'    => 'Ishlash asosidagi mukofot maqsadi',
					],
					'profit_share' => [
						'en' => 'Reward Share',
						'ja'    => '報酬分配',
						'fr_FR'    => 'Partage des Récompenses',
						'ar'    => 'مشاركة المكافآت',
						'ko_KR'    => '리워드 공유',
						'km'    => 'ការចែករំលែករង្វាន់',
						'bn_BD'    => 'রিওয়ার্ড শেয়ার',
						'hk'    => '盈利分成',
						'ur' => 'انعام کی حصہ داری',
						'ir'    => 'درصد تقسیم سود',
						'pt_BR'    => 'Partilha',
						'uz_UZ'    => 'Foyda ulushi',
					],
					'na' => [
						'en' => 'N/A',
						'fr_FR'    => 'S.O',
						'bn_BD'    => 'প্রযোজ্য নয়',
						'hk'    => '暫不適用',
						'ur' => 'لاگو نہیں',
						'ir'    => ' ندارد',
						'uz_UZ'    => 'Mavjud emas',
					],
					'leverage' => [
						'en' => 'Leverage',
						'ja'    => 'レバレッジ',
						'fr_FR'    => 'Effet de Levier',
						'ar'    => 'الرافعة المالية',
						'ko_KR'    => '레버리지',
						'km'    => 'អានុភាព',
						'bn_BD'    => 'লেভারেজ',
						'hk'    => '槓桿比例',
						'ur' => 'لیوریج',
						'ir'    => 'اهرم معاملاتی',
						'pt_BR'    => 'Alavancagem',
						'es_PE'    => 'Apalancamiento',
						'uz_UZ'    => 'Leveraj',
					],
					'reset_discount' => [
						'en' => 'Reset Discount',
						'ja'    => 'リセット割引',
						'fr_FR'    => 'Réinitialiser la Remise',
						'ar'    => 'خصم إعادة التعيين',
						'ko_KR'    => '재도전 할인',
						'km'    => 'កំណត់ការបញ្ចុះតម្លៃឡើងវិញ',
						'bn_BD'    => 'রিসেট ডিসকাউন্ট',
						'hk'    => '重置優惠',
						'ir'    => 'کد تخفیف خرید مجدد',
						'ur' => 'ری سیٹ ڈسکاؤنٹ',
						'pt_BR'    => 'Desconto de Reset',
						'uz_UZ'    => 'Qayta tiklash chegirmasi',
					],
					'one_time_fee' => [
						'en' => 'One-Time Fee',
						'ja'    => '一括払い',
						'fr_FR'    => 'Frais Uniques',
						'ar'    => 'رسوم لمرة واحدة',
						'ko_KR'    => '1회성 수수료',
						'km'    => 'ថ្លៃសេវាតែម្តង',
						'bn_BD'    => 'এককালীন ফি',
						'hk'    => '一次性費用',
						'ir'    => 'کارمزد(یکبار)',
						'ur' => 'ایک بار کی فیس',
						'pt_BR'    => 'Taxa Única',
						'uz_UZ'    => 'Bir martalik to‘lov',
					],
					'up_to_100' => [
						'en' => 'Up to 1:100',
						'ja'    => '最大1:100',
						'fr_FR'    => "Jusqu'à 1:100",
						'ko_KR'    => '최대 1:100 레버리지',
						'km'    => 'រហូតដល់ 1:100',
						'bn_BD'    => 'সর্বোচ্চ 1:100 পর্যন্ত',
						'ir'    => 'تا 1:100',
						'ur' => 'زیادہ سے زیادہ 1:100 تک',
						'pt_BR'    => 'Até 1:100',
						'es_PE'    => 'Hasta 1:100',
						'uz_UZ'    => '1:100 gacha',
					],
					'refund' => [
						'en' => 'Refund',
						'ja'    => '返金',
						'fr_FR'    => 'Remboursement',
						'ar'    => 'استرداد الرسوم',
						'ko_KR'    => '환불',
						'km'    => 'ការសងប្រាក់វិញ',
						'bn_BD'    => 'ফেরতযোগ্য',
						'ir'    => 'بازپرداخت',
						'ur' => 'رقم کی واپسی',
						'pt_BR'    => 'Reembolso',
						'es_PE'    => 'Reembolso',
						'uz_UZ'    => 'Qaytarib beriladi',
					],
				];
				function get_label_by_locale($key, $labels) {
					$locale = get_locale();
					return $labels[$key][$locale] ?? $labels[$key]['en'];
				}
			?>
		
			<div class="package__scroll">
				<div class="package__content border__glassed" data-tab-content="package1" data-tab-group="1">
					<div class="package__content--title">
						<div class="item"></div>
						<div class="item">
							<p class="phase"><?php echo get_label_by_locale('phase_1', $labels); ?></p>
							<p class="price"><span>$45</span><?php echo get_label_by_locale('per_time', $labels); ?></p>
						</div>
						<div class="item">
							<p class="phase"><?php echo get_label_by_locale('phase_2', $labels); ?></p>
							<p class="price"><span>N/A</span><?php echo get_label_by_locale('per_time', $labels); ?></p>
						</div>
						<div class="item">
							<p class="phase"><?php echo get_label_by_locale('funded', $labels); ?></p>
							<p class="price"><span><?php echo get_label_by_locale('refund', $labels); ?></span><?php echo get_label_by_locale('per_time', $labels); ?></p>
						</div>
					</div>
					<div class="package__content--option swiper">
						<div class="swiper-button swiper-button-prev"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22.1538 11.9819H1.81972" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M11.9863 22.1535L1.82043 11.9865L11.9863 1.81946" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>
						<div class="swiper-button swiper-button-next"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.81934 11.9819H22.1534" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M11.9863 22.1535L22.1522 11.9865L11.9863 1.81946" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>
						<div class="swiper-wrapper">
							<div class="item swiper-slide sp">
								<p class="row"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/package_ic0.png" width="30" height="30" alt="One-Time Fee"><?php echo get_label_by_locale('one_time_fee_mb', $labels); ?></p>
								<p class="row">$45</p>
								<p class="row">N/A</p>
								<p class="row"><?php echo get_label_by_locale('refund', $labels); ?></p>
							</div>
							<div class="item swiper-slide">
								<p class="row"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/package_ic1.png" width="30" height="30" alt="Time Limit"><?php echo get_label_by_locale('Free_Swap_mb', $labels); ?></p>
								<p class="row"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(250,204,21,1)">
                                    <path d="M4 12C4 7.58172 7.58172 4 12 4C16.4183 4 20 7.58172 20 12C20 16.4183 16.4183 20 12 20C7.58172 20 4 16.4183 4 12ZM12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM17.4571 9.45711L16.0429 8.04289L11 13.0858L8.20711 10.2929L6.79289 11.7071L11 15.9142L17.4571 9.45711Z"></path>
                                </svg></p>
								<p class="row"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(250,204,21,1)">
                                    <path d="M4 12C4 7.58172 7.58172 4 12 4C16.4183 4 20 7.58172 20 12C20 16.4183 16.4183 20 12 20C7.58172 20 4 16.4183 4 12ZM12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM17.4571 9.45711L16.0429 8.04289L11 13.0858L8.20711 10.2929L6.79289 11.7071L11 15.9142L17.4571 9.45711Z"></path>
                                </svg></p>
								<p class="row"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(250,204,21,1)">
                                    <path d="M4 12C4 7.58172 7.58172 4 12 4C16.4183 4 20 7.58172 20 12C20 16.4183 16.4183 20 12 20C7.58172 20 4 16.4183 4 12ZM12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM17.4571 9.45711L16.0429 8.04289L11 13.0858L8.20711 10.2929L6.79289 11.7071L11 15.9142L17.4571 9.45711Z"></path>
                                </svg></p>
							</div>
							<div class="item swiper-slide">
								<p class="row"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/package_ic2.png" width="30" height="30" alt="Maximum Daily Loss"><span><?php echo get_label_by_locale('Maximum_DailyLoss_mb', $labels); ?></span></p>
								<p class="row">5% ($500)</p>
								<p class="row">5% ($500)</p>
								<p class="row">5% ($500)</p>
							</div>
							<div class="item swiper-slide">
								<p class="row"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/package_ic3.png" width="30" height="30" alt="Maximum Overall Loss"><?php echo get_label_by_locale('Maximum_OverallLoss_mb', $labels); ?></p>
								<p class="row">10% ($1,000)</p>
								<p class="row">10% ($1,000)</p>
								<p class="row">10% ($1,000)</p>
							</div>
							<div class="item swiper-slide">
								<p class="row"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/package_ic4.png" width="30" height="30" alt="Performance-based Rewards Target"><span><?php echo get_label_by_locale('Profit_Target_mb', $labels); ?></span></p>
								<p class="row">8% ($800)</p>
								<p class="row">6% ($600)</p>
								<p class="row">N/A</p>
							</div>
							<div class="item swiper-slide">
								<p class="row"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/package_ic5.png" width="30" height="30" alt="Reward Share"><?php echo get_label_by_locale('Reward_Share_mb', $labels); ?></p>
								<p class="row">N/A</p>
								<p class="row">30%</p>
								<p class="row">90%</p>
							</div>
							<div class="item swiper-slide">
								<p class="row"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/package_ic6.png" width="30" height="30" alt="Leverage"><?php echo get_label_by_locale('leverage', $labels); ?></p>
								<p class="row">
					    			<?php
						
                        				$texts = [
                        					'es_PE' => '2:40',
                        				];
                        				$locale = cc_block_locale($texts);echo $texts[$locale] ?? '1:100';
                        			?>
								</p>
								<p class="row">
								    <?php
						
                        				$texts = [
                        					'es_PE' => '2:40',
                        				];
                        				$locale = cc_block_locale($texts);echo $texts[$locale] ?? '1:100';
                        			?>
								</p>
								<p class="row"><?php echo get_label_by_locale('up_to_100', $labels); ?></p>
							</div>
							<div class="item swiper-slide">
								<p class="row"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/package_ic7.png" width="30" height="30" alt="Reset Discount"><?php echo get_label_by_locale('Reset_Discount_mb', $labels); ?></p>
								<p class="row">30%</p>
								<p class="row">30%</p>
								<p class="row">N/A</p>
							</div>
						</div>
					</div>
				</div>
				<div class="package__content border__glassed" data-tab-content="package2" data-tab-group="1">
					<div class="package__content--title">
						<div class="item"></div>
						<div class="item">
							<p class="phase"><?php echo get_label_by_locale('phase_1', $labels); ?></p>
							<p class="price"><span>$100</span><?php echo get_label_by_locale('per_time', $labels); ?></p>
						</div>
						<div class="item">
							<p class="phase"><?php echo get_label_by_locale('phase_2', $labels); ?></p>
							<p class="price"><span>N/A</span><?php echo get_label_by_locale('per_time', $labels); ?></p>
						</div>
						<div class="item">
							<p class="phase"><?php echo get_label_by_locale('funded', $labels); ?></p>
							<p class="price"><span><?php echo get_label_by_locale('refund', $labels); ?></span><?php echo get_label_by_locale('per_time', $labels); ?></p>
						</div>
					</div>
					<div class="package__content--option swiper">
						<div class="swiper-button swiper-button-prev"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22.1538 11.9819H1.81972" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M11.9863 22.1535L1.82043 11.9865L11.9863 1.81946" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>
						<div class="swiper-button swiper-button-next"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.81934 11.9819H22.1534" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M11.9863 22.1535L22.1522 11.9865L11.9863 1.81946" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>
						<div class="swiper-wrapper">
							<div class="item swiper-slide sp">
								<p class="row"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/package_ic0.png" width="30" height="30" alt="One-Time Fee"><?php echo get_label_by_locale('one_time_fee_mb', $labels); ?></p>
								<p class="row">$100</p>
								<p class="row">N/A</p>
								<p class="row"><?php echo get_label_by_locale('refund', $labels); ?></p>
							</div>
							<div class="item swiper-slide">
								<p class="row"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/package_ic1.png" width="30" height="30" alt="Time Limit"><?php echo get_label_by_locale('Free_Swap_mb', $labels); ?></p>
								<p class="row"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(250,204,21,1)">
                                    <path d="M4 12C4 7.58172 7.58172 4 12 4C16.4183 4 20 7.58172 20 12C20 16.4183 16.4183 20 12 20C7.58172 20 4 16.4183 4 12ZM12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM17.4571 9.45711L16.0429 8.04289L11 13.0858L8.20711 10.2929L6.79289 11.7071L11 15.9142L17.4571 9.45711Z"></path>
                                </svg></p>
								<p class="row"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(250,204,21,1)">
                                    <path d="M4 12C4 7.58172 7.58172 4 12 4C16.4183 4 20 7.58172 20 12C20 16.4183 16.4183 20 12 20C7.58172 20 4 16.4183 4 12ZM12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM17.4571 9.45711L16.0429 8.04289L11 13.0858L8.20711 10.2929L6.79289 11.7071L11 15.9142L17.4571 9.45711Z"></path>
                                </svg></p>
								<p class="row"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(250,204,21,1)">
                                    <path d="M4 12C4 7.58172 7.58172 4 12 4C16.4183 4 20 7.58172 20 12C20 16.4183 16.4183 20 12 20C7.58172 20 4 16.4183 4 12ZM12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM17.4571 9.45711L16.0429 8.04289L11 13.0858L8.20711 10.2929L6.79289 11.7071L11 15.9142L17.4571 9.45711Z"></path>
                                </svg></p>
							</div>
							<div class="item swiper-slide">
								<p class="row"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/package_ic2.png" width="30" height="30" alt="Maximum Daily Loss"><span><?php echo get_label_by_locale('Maximum_DailyLoss_mb', $labels); ?></span></p>
								<p class="row">5% ($1,250)</p>
								<p class="row">5% ($1,250)</p>
								<p class="row">5% ($1,250)</p>
							</div>
							<div class="item swiper-slide">
								<p class="row"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/package_ic3.png" width="30" height="30" alt="Maximum Overall Loss"><span><?php echo get_label_by_locale('Maximum_OverallLoss_mb', $labels); ?></span></p>
								<p class="row">10% ($2,500)</p>
								<p class="row">10% ($2,500)</p>
								<p class="row">10% ($2,500)</p>
							</div>
							<div class="item swiper-slide">
								<p class="row"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/package_ic4.png" width="30" height="30" alt="Performance-based Rewards Target"><span><?php echo get_label_by_locale('Profit_Target_mb', $labels); ?></span></p>
								<p class="row">8% ($2,000)</p>
								<p class="row">6% ($1,500)</p>
								<p class="row">N/A</p>
							</div>
							<div class="item swiper-slide">
								<p class="row"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/package_ic5.png" width="30" height="30" alt="Reward Share"><?php echo get_label_by_locale('Reward_Share_mb', $labels); ?></p>
								<p class="row">N/A</p>
								<p class="row">30%</p>
								<p class="row">90%</p>
							</div>
							<div class="item swiper-slide">
								<p class="row"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/package_ic6.png" width="30" height="30" alt="Leverage"><?php echo get_label_by_locale('leverage', $labels); ?></p>
								<p class="row">
								    <?php
						
                        				$texts = [
                        					'es_PE' => '2:40',
                        				];
                        				$locale = cc_block_locale($texts);echo $texts[$locale] ?? '1:100';
                        			?>
								</p>
								<p class="row">
								    <?php
						
                        				$texts = [
                        					'es_PE' => '2:40',
                        				];
                        				$locale = cc_block_locale($texts);echo $texts[$locale] ?? '1:100';
                        			?>
								</p>
								<p class="row"><?php echo get_label_by_locale('up_to_100', $labels); ?></p>
							</div>
							<div class="item swiper-slide">
								<p class="row"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/package_ic7.png" width="30" height="30" alt="Reset Discount"><?php echo get_label_by_locale('Reset_Discount_mb', $labels); ?></p>
								<p class="row">30%</p>
								<p class="row">30%</p>
								<p class="row">N/A</p>
							</div>
						</div>
					</div>
				</div>
				<div class="package__content border__glassed active" data-tab-content="package3" data-tab-group="1">
					<div class="package__content--title">
						<div class="item"></div>
						<div class="item">
							<p class="phase"><?php echo get_label_by_locale('phase_1', $labels); ?></p>
							<p class="price"><span>$175</span><?php echo get_label_by_locale('per_time', $labels); ?></p>
						</div>
						<div class="item">
							<p class="phase"><?php echo get_label_by_locale('phase_2', $labels); ?></p>
							<p class="price"><span>N/A</span><?php echo get_label_by_locale('per_time', $labels); ?></p>
						</div>
						<div class="item">
							<p class="phase"><?php echo get_label_by_locale('funded', $labels); ?></p>
							<p class="price"><span><?php echo get_label_by_locale('refund', $labels); ?></span><?php echo get_label_by_locale('per_time', $labels); ?></p>
						</div>
					</div>
					<div class="package__content--option swiper">
						<div class="swiper-button swiper-button-prev"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22.1538 11.9819H1.81972" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M11.9863 22.1535L1.82043 11.9865L11.9863 1.81946" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>
						<div class="swiper-button swiper-button-next"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.81934 11.9819H22.1534" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M11.9863 22.1535L22.1522 11.9865L11.9863 1.81946" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>
						<div class="swiper-wrapper">
							<div class="item swiper-slide sp">
								<p class="row"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/package_ic0.png" width="30" height="30" alt="One-Time Fee"><?php echo get_label_by_locale('one_time_fee_mb', $labels); ?></p>
								<p class="row">$175</p>
								<p class="row">N/A</p>
								<p class="row"><?php echo get_label_by_locale('refund', $labels); ?></p>
							</div>
							<div class="item swiper-slide">
								<p class="row"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/package_ic1.png" width="30" height="30" alt="Time Limit"><?php echo get_label_by_locale('Free_Swap_mb', $labels); ?></p>
								<p class="row"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(250,204,21,1)">
                                    <path d="M4 12C4 7.58172 7.58172 4 12 4C16.4183 4 20 7.58172 20 12C20 16.4183 16.4183 20 12 20C7.58172 20 4 16.4183 4 12ZM12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM17.4571 9.45711L16.0429 8.04289L11 13.0858L8.20711 10.2929L6.79289 11.7071L11 15.9142L17.4571 9.45711Z"></path>
                                </svg></p>
								<p class="row"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(250,204,21,1)">
                                    <path d="M4 12C4 7.58172 7.58172 4 12 4C16.4183 4 20 7.58172 20 12C20 16.4183 16.4183 20 12 20C7.58172 20 4 16.4183 4 12ZM12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM17.4571 9.45711L16.0429 8.04289L11 13.0858L8.20711 10.2929L6.79289 11.7071L11 15.9142L17.4571 9.45711Z"></path>
                                </svg></p>
								<p class="row"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(250,204,21,1)">
                                    <path d="M4 12C4 7.58172 7.58172 4 12 4C16.4183 4 20 7.58172 20 12C20 16.4183 16.4183 20 12 20C7.58172 20 4 16.4183 4 12ZM12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM17.4571 9.45711L16.0429 8.04289L11 13.0858L8.20711 10.2929L6.79289 11.7071L11 15.9142L17.4571 9.45711Z"></path>
                                </svg></p>
							</div>
							<div class="item swiper-slide">
								<p class="row"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/package_ic2.png" width="30" height="30" alt="Maximum Daily Loss"><span><?php echo get_label_by_locale('Maximum_DailyLoss_mb', $labels); ?></span></p>
								<p class="row">5% ($2,500)</p>
								<p class="row">5% ($2,500)</p>
								<p class="row">5% ($2,500)</p>
							</div>
							<div class="item swiper-slide">
								<p class="row"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/package_ic3.png" width="30" height="30" alt="Maximum Overall Loss"><span><?php echo get_label_by_locale('Maximum_OverallLoss_mb', $labels); ?></span></p>
								<p class="row">10% ($5,000)</p>
								<p class="row">10% ($5,000)</p>
								<p class="row">10% ($5,000)</p>
							</div>
							<div class="item swiper-slide">
								<p class="row"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/package_ic4.png" width="30" height="30" alt="Performance-based Rewards Target"><span><?php echo get_label_by_locale('Profit_Target_mb', $labels); ?></span></p>
								<p class="row">8% ($4,000)</p>
								<p class="row">6% ($3,000)</p>
								<p class="row"><span class="clr">N/A</span></p>
							</div>
							<div class="item swiper-slide">
								<p class="row"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/package_ic5.png" width="30" height="30" alt="Reward Share"><?php echo get_label_by_locale('Reward_Share_mb', $labels); ?></p>
								<p class="row">N/A</p>
								<p class="row"><span class="clr">30%</span></p>
								<p class="row"><span class="clr">90%</span></p>
							</div>
							<div class="item swiper-slide">
								<p class="row"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/package_ic6.png" width="30" height="30" alt="Leverage"><?php echo get_label_by_locale('leverage', $labels); ?></p>
								<p class="row">
								    <?php
						
                        				$texts = [
                        					'es_PE' => '2:40',
                        				];
                        				$locale = cc_block_locale($texts);echo $texts[$locale] ?? '1:100';
                        			?>
								</p>
								<p class="row">
								    <?php
						
                        				$texts = [
                        					'es_PE' => '2:40',
                        				];
                        				$locale = cc_block_locale($texts);echo $texts[$locale] ?? '1:100';
                        			?>
								</p>
								<p class="row"><?php echo get_label_by_locale('up_to_100', $labels); ?></p>
							</div>
							<div class="item swiper-slide">
								<p class="row"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/package_ic7.png" width="30" height="30" alt="Reset Discount"><?php echo get_label_by_locale('Reset_Discount_mb', $labels); ?></p>
								<p class="row">30%</p>
								<p class="row">30%</p>
								<p class="row">N/A</p>
							</div>
						</div>
					</div>
				</div>
				<div class="package__content border__glassed" data-tab-content="package4" data-tab-group="1">
					<div class="package__content--title">
						<div class="item"></div>
						<div class="item">
							<p class="phase"><?php echo get_label_by_locale('phase_1', $labels); ?></p>
							<p class="price"><span>$320</span><?php echo get_label_by_locale('per_time', $labels); ?></p>
						</div>
						<div class="item">
							<p class="phase"><?php echo get_label_by_locale('phase_2', $labels); ?></p>
							<p class="price"><span>N/A</span><?php echo get_label_by_locale('per_time', $labels); ?></p>
						</div>
						<div class="item">
							<p class="phase"><?php echo get_label_by_locale('funded', $labels); ?></p>
							<p class="price"><span><?php echo get_label_by_locale('refund', $labels); ?></span><?php echo get_label_by_locale('per_time', $labels); ?></p>
						</div>
					</div>
					<div class="package__content--option swiper">
						<div class="swiper-button swiper-button-prev"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22.1538 11.9819H1.81972" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M11.9863 22.1535L1.82043 11.9865L11.9863 1.81946" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>
						<div class="swiper-button swiper-button-next"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.81934 11.9819H22.1534" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M11.9863 22.1535L22.1522 11.9865L11.9863 1.81946" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>
						<div class="swiper-wrapper">
							<div class="item swiper-slide sp">
								<p class="row"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/package_ic0.png" width="30" height="30" alt="One-Time Fee"><?php echo get_label_by_locale('one_time_fee_mb', $labels); ?></p>
								<p class="row">$320</p>
								<p class="row">N/A</p>
								<p class="row"><?php echo get_label_by_locale('refund', $labels); ?></p>
							</div>
							<div class="item swiper-slide">
								<p class="row"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/package_ic1.png" width="30" height="30" alt="Time Limit"><?php echo get_label_by_locale('Free_Swap_mb', $labels); ?></p>
								<p class="row"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(250,204,21,1)">
                                    <path d="M4 12C4 7.58172 7.58172 4 12 4C16.4183 4 20 7.58172 20 12C20 16.4183 16.4183 20 12 20C7.58172 20 4 16.4183 4 12ZM12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM17.4571 9.45711L16.0429 8.04289L11 13.0858L8.20711 10.2929L6.79289 11.7071L11 15.9142L17.4571 9.45711Z"></path>
                                </svg></p>
								<p class="row"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(250,204,21,1)">
                                    <path d="M4 12C4 7.58172 7.58172 4 12 4C16.4183 4 20 7.58172 20 12C20 16.4183 16.4183 20 12 20C7.58172 20 4 16.4183 4 12ZM12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM17.4571 9.45711L16.0429 8.04289L11 13.0858L8.20711 10.2929L6.79289 11.7071L11 15.9142L17.4571 9.45711Z"></path>
                                </svg></p>
								<p class="row"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(250,204,21,1)">
                                    <path d="M4 12C4 7.58172 7.58172 4 12 4C16.4183 4 20 7.58172 20 12C20 16.4183 16.4183 20 12 20C7.58172 20 4 16.4183 4 12ZM12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM17.4571 9.45711L16.0429 8.04289L11 13.0858L8.20711 10.2929L6.79289 11.7071L11 15.9142L17.4571 9.45711Z"></path>
                                </svg></p>
							</div>
							<div class="item swiper-slide">
								<p class="row"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/package_ic2.png" width="30" height="30" alt="Maximum Daily Loss"><span><?php echo get_label_by_locale('Maximum_DailyLoss_mb', $labels); ?></span></p>
								<p class="row">5% ($5,000)</p>
								<p class="row">5% ($5,000)</p>
								<p class="row">5% ($5,000)</p>
							</div>
							<div class="item swiper-slide">
								<p class="row"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/package_ic3.png" width="30" height="30" alt="Maximum Overall Loss"><span><?php echo get_label_by_locale('Maximum_OverallLoss_mb', $labels); ?></span></p>
								<p class="row">10% ($10,000)</p>
								<p class="row">10% ($10,000)</p>
								<p class="row">10% ($10,000)</p>
							</div>
							<div class="item swiper-slide">
								<p class="row"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/package_ic4.png" width="30" height="30" alt="Performance-based Rewards Target"><span><?php echo get_label_by_locale('Profit_Target_mb', $labels); ?></span></p>
								<p class="row">8% ($8,000)</p>
								<p class="row">6% ($6,000)</p>
								<p class="row">N/A</p>
							</div>
							<div class="item swiper-slide">
								<p class="row"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/package_ic5.png" width="30" height="30" alt="Reward Share"><?php echo get_label_by_locale('Reward_Share_mb', $labels); ?></p>
								<p class="row">N/A</p>
								<p class="row">30%</p>
								<p class="row">90%</p>
							</div>
							<div class="item swiper-slide">
								<p class="row"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/package_ic6.png" width="30" height="30" alt="Leverage"><?php echo get_label_by_locale('leverage', $labels); ?></p>
								<p class="row">
								    <?php
						
                        				$texts = [
                        					'es_PE' => '2:40',
                        				];
                        				$locale = cc_block_locale($texts);echo $texts[$locale] ?? '1:100';
                        			?>
								</p>
								<p class="row">
								    <?php
						
                        				$texts = [
                        					'es_PE' => '2:40',
                        				];
                        				$locale = cc_block_locale($texts);echo $texts[$locale] ?? '1:100';
                        			?>
								</p>
								<p class="row"><?php echo get_label_by_locale('up_to_100', $labels); ?></p>
							</div>
							<div class="item swiper-slide">
								<p class="row"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/package_ic7.png" width="30" height="30" alt="Reset Discount"><?php echo get_label_by_locale('Reset_Discount_mb', $labels); ?></p>
								<p class="row">30%</p>
								<p class="row">30%</p>
								<p class="row">N/A</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="btn center">
				<p><a href="https://my.wemastertrade.com/" target="_blank"><span>
					<?php
						
						$texts = [
							'th' => 'เริ่มชาเลนจ์',
							'zh_CN' => '开始挑战',
							'tr_TR' => 'Challenge başlat',
							'fr_FR' => 'Commencer le challenge',
							'es_PE' => 'Empieza tu desafío ahora',
							'es_ES' => 'Iniciar desafío',
							'ru_RU' => 'Начать челлендж',
							'ja' => 'チャレンジ開始',
							'ko_KR' => '챌린지 시작',
							'km' => 'ចាប់ផ្តើម Challenge',
							'bn_BD' => 'চ্যালেঞ্জ শুরু করুন',
							'hk' => '開始挑戰',
							'ir' => 'شروع چالش',
							'ur' => 'چیلنج شروع کریں',
							'id' => 'Mulai challenge',
							'pt_BR' => 'Iniciar Desafio',
							'uz_UZ' => 'Chellenjni boshlash',
						];
						$locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Start challenge';
					?>
				</span></a></p>
			</div>
		</div>
	</section>
	<!-- End Package -->
	<?php 
		require $partial_path . 'uk-wchoose.php';
		require $partial_path . 'uk-features.php';
		require $partial_path . 'uk-traders.php';
		require $partial_path . 'uk-subscribe.php';
		require $partial_path . 'uk-payouts.php';
	?>
</div>
<?php get_footer(); ?>