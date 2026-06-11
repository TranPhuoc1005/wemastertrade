<!-- Features -->
<section class="features">
		<div class="container">
			<div class="title center">
				<p class="title__sub">
					<?php
						
						$texts = [
							'th' => 'คุณสมบัติ',
							'zh_CN' => '功能特点',
							'tr_TR' => 'Özellikler',
							'fr_FR' => 'Fonctionnalités',
							'es_PE' => 'Características',
							'es_ES' => 'Características',
							'ru_RU' => 'Особенности',
							'ja' => '特徴',
							'ko_KR' => '기능',
							'km' => 'មុខងារ',
							'bn_BD' => 'বৈশিষ্ট্য',
							'hk' => '功能特點',
							'ir' => 'ویژگی‌ها',
							'id' => 'Fitur',
							'pt_BR' => 'Recursos',
							'ur' => 'فیچرز',
						];
						$locale = cc_block_locale($texts);echo $texts[$locale] ?? 'The Features';
					?>
				</p>
				<?php
					
					$texts = [
						'th' => '<h3>ทำไมต้องเลือก <span>WeMasterTrade</span></h3>',
						'zh_CN' => '<h3>为什么选择 <span>WeMasterTrade</span></h3>',
						'tr_TR' => '<h3>Neden <span>WeMasterTrade</span> seçmelisiniz</h3>',
						'fr_FR' => '<h3>Pourquoi choisir <span>WeMasterTrade</span></h3>',
						'es_PE' => '<h2 class="h3">¿Por qué elegir <span>WeMasterTrade ?</span></h2>',
						'es_ES' => '<h3>¿Por qué elegir <span>WeMasterTrade</span>?</h3>',
						'ru_RU' => '<h3>Почему стоит выбрать <span>WeMasterTrade</span></h3>',
						'ja' => '<h2 class="h3">なぜ <span>WeMasterTrade</span> が日本で最高のプロップファームなのか</h2>',
						'ko_KR' => '<h3>왜 <span>WeMasterTrade</span>를 선택해야 할까요</h3>',
						'km' => '<h3>ហេតុអ្វីជ្រើសរើស <span>WeMasterTrade</span></h3>',
						'bn_BD' => '<h3>কেন <span>WeMasterTrade</span> নির্বাচন করবেন</h3>',
						'hk' => '<h3>為什麼選擇 <span>WeMasterTrade</span></h3>',
						'ir' => '<h3>چرا <span>WeMasterTrade</span> را انتخاب کنیم</h3>',
						'id' => '<h3>Mengapa memilih <span>WeMasterTrade</span></h3>',
						'pt_BR' => '<h3>Por que escolher <span>WeMasterTrade</span></h3>',
						'ur' => '<h3><span>WeMasterTrade</span> کو کیوں منتخب کریں؟</h3>',
					];
					$locale = cc_block_locale($texts);echo $texts[$locale] ?? '<h3>Why choose <span>WeMasterTrade</span></h3>';
				?>
			</div>
			<p class="txt center">
			    <?php
					
					$texts = [
						'ja' => 'WeMasterTrade を際立たせる機能をご覧ください',
					];
					$locale = cc_block_locale($texts);echo $texts[$locale] ?? '';
				?><br>
				<?php
					$texts = [
						'th' => 'สำรวจคุณสมบัติที่ทำให้ WeMasterTrade โดดเด่น',
						'zh_CN' => '探索使 WeMasterTrade 脱颖而出的功能',
						'tr_TR' => 'WeMasterTrade’i öne çıkaran özellikleri keşfedin',
						'fr_FR' => 'Découvrez les fonctionnalités qui distinguent WeMasterTrade',
						'es_PE' => 'Descubre las características que diferencian nuestras Cuentas Fondeadas.',
						'es_ES' => 'Explora las características que hacen destacar a WeMasterTrade',
						'ru_RU' => 'Изучите функции, которые выделяют WeMasterTrade',
						'ja' => 'WeMasterTradeを際立たせる機能をご確認ください。日本のプロップトレーダーに最適なプランをお選びください。',
						'ko_KR' => 'WeMasterTrade를 돋보이게 하는 기능을 확인해 보세요',
						'km' => 'ស្វែងយល់ពីមុខងារដែលធ្វើឲ្យ WeMasterTrade លេចធ្លោ',
						'bn_BD' => 'যে বৈশিষ্ট্যগুলো WeMasterTrade-কে আলাদা করে তোলে সেগুলো অন্বেষণ করুন',
						'hk' => '探索使 WeMasterTrade 脫穎而出的功能',
						'ir' => 'ویژگی‌هایی را که WeMasterTrade را متمایز می‌کند بررسی کنید',
						'id' => 'Jelajahi fitur yang membuat WeMasterTrade menonjol',
						'pt_BR' => 'Explore os recursos que fazem a WeMasterTrade se destacar',
						'ur' => 'ان خصوصیات کو دریافت کریں جو WeMasterTrade کو نمایاں بناتی ہیں۔',
					];
					$locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Explore the features that make WeMasterTrade stand out.';
				?>
			</p>

			<div class="features__content">
				<div class="features__pc pc">
					<table>
						<thead>
							<tr>
								<?php
									
									$texts = [
										'th' => '<th><p>เกณฑ์</p></th>
																<th><p class="clr">แพ็กเกจ Challenge</p></th>
																<th><p class="clr">แพ็กเกจ Instant</p></th>',
										'zh_CN' => '<th><p>标准</p></th>
																<th><p class="clr">Challenge 套餐</p></th>
																<th><p class="clr">Instant 套餐</p></th>',
										'tr_TR' => '<th><p>Kriterler</p></th>
																<th><p class="clr">Challenge Paketi</p></th>
																<th><p class="clr">Instant Paketi</p></th>',
										'fr_FR' => '<th><p>Critères</p></th>
																<th><p class="clr">Challenge Package</p></th>
																<th><p class="clr">Instant Package</p></th>',
										'es_PE' => '<th><p>Criterio</p></th>
																<th><p class="clr">Challenge Package</p></th>
																<th><p class="clr">Instant Package</p></th>',
										'es_ES' => '<th><p>Criterios</p></th>
																<th><p class="clr">Paquete Challenge</p></th>
																<th><p class="clr">Paquete Instant</p></th>',
										'ru_RU' => '<th><p>Критерии</p></th>
																<th><p class="clr">Пакет Challenge</p></th>
																<th><p class="clr">Пакет Instant</p></th>',
										'ja' => '<th><p>基準</p></th>
																<th><p class="clr">Challenge Package</p></th>
																<th><p class="clr">Instant Package</p></th>',
										'ko_KR' => '<th><p>기준</p></th>
																<th><p class="clr">Challenge 패키지</p></th>
																<th><p class="clr">Instant 패키지</p></th>',
										'km' => '<th><p>លក្ខណៈវិនិច្ឆ័យ</p></th>
																<th><p class="clr">Challenge Package</p></th>
																<th><p class="clr">Instant Package</p></th>',
										'bn_BD' => '<th><p>মানদণ্ড</p></th>
																<th><p class="clr">Challenge প্যাকেজ</p></th>
																<th><p class="clr">Instant প্যাকেজ</p></th>',
										'hk' => '<th><p>標準</p></th>
																<th><p class="clr">Challenge 套餐</p></th>
																<th><p class="clr">Instant 套餐</p></th>',
										'ir' => '<th><p>معیارها</p></th>
																<th><p class="clr">پکیج Challenge</p></th>
																<th><p class="clr">پکیج Instant</p></th>',
										'id' => '<th><p>Kriteria</p></th>
																<th><p class="clr">Paket Challenge</p></th>
																<th><p class="clr">Paket Instant</p></th>',
										'pt_BR' => '<th><p>Critérios</p></th>
																<th><p class="clr">Pacote Challenge</p></th>
																<th><p class="clr">Pacote Instant</p></th>',
										'ur' => '<th><p>معیار</p></th>
																<th><p class="clr">چلنج پکیج</p></th>
																<th><p class="clr">انسٹنٹ پکیج</p></th>',
									];
									$locale = cc_block_locale($texts);echo $texts[$locale] ?? '<th><p>Criteria</p></th>
																<th><p class="clr">Challenge Package</p></th>
																<th><p class="clr">Instant Package</p></th>';
								?>
							</tr>
						</thead>
						<tbody>
							<tr>
								
							</tr>
							<tr>
								<?php
									$texts = [
										'zh_CN' => '<td>目标用户</td><td>进入自营交易环境或衍生品市场的新用户</td><td>寻求快速解决方案的资深交易者</td>',
										'tr_TR' => '<td>Hedef Kitle</td><td>Proprietary trading ortamlarına veya türev piyasalara yeni giren kullanıcılar</td><td>Hızlı çözüm arayan deneyimli traderlar</td>',
										'fr_FR' => '<td>Public Cible</td><td>Nouveaux utilisateurs entrant dans des environnements de trading propriétaire ou des marchés dérivés</td><td>Traders expérimentés à la recherche d’une solution rapide</td>',
										'es_ES' => '<td>Público Objetivo</td><td>Nuevos usuarios que ingresan a entornos de trading propietario o mercados de derivados</td><td>Traders experimentados que buscan una solución rápida</td>',
										'th'    => '<td>กลุ่มเป้าหมาย</td><td>ผู้ใช้งานใหม่ที่เข้าสู่สภาพแวดล้อมการเทรดแบบ proprietary หรือ ตลาดอนุพันธ์</td><td>เทรดเดอร์ที่มีประสบการณ์และต้องการโซลูชันที่รวดเร็ว</td>',
										'ru_RU' => '<td>Целевая аудитория</td><td>Новые пользователи, входящие в проп-трейдинг среды или рынки деривативов</td><td>Опытные трейдеры, ищущие быстрое решение</td>',
										'ja'    => '<td>対象ユーザー</td><td>プロップトレーディング環境やデリバティブ市場に新規参入するユーザー</td><td>迅速なソリューションを求める経験豊富なトレーダー</td>',
										'ko_KR' => '<td>대상 사용자</td><td>프랍 트레이딩 환경 또는 파생상품 시장에 처음 진입하는 사용자</td><td>빠른 솔루션을 찾는 경험 많은 트레이더</td>',
										'km'    => '<td>ក្រុមអ្នកប្រើប្រាស់គោលដៅ</td><td>អ្នកប្រើថ្មីដែលចូលទៅក្នុងបរិស្ថាន trading ប្រភេទ proprietary ឬទីផ្សារ derivatives</td><td>អ្នកជួញដូរដែលមានបទពិសោធន៍ និងស្វែងរកដំណោះស្រាយរហ័ស</td>',
										'bn_BD' => '<td>লক্ষ্য ব্যবহারকারী</td><td>নতুন ব্যবহারকারী যারা প্রোপ্রাইটারি ট্রেডিং পরিবেশ বা ডেরিভেটিভ মার্কেটে প্রবেশ করছে</td><td>অভিজ্ঞ ট্রেডার যারা দ্রুত সমাধান খুঁজছেন</td>',
										'ur'    => '<td>ہدف صارفین</td><td>نئے صارفین جو proprietary trading ماحول یا derivatives مارکیٹ میں داخل ہو رہے ہیں</td><td>تجربہ کار ٹریڈرز جو فوری حل تلاش کر رہے ہیں</td>',
										'hk'    => '<td>目標用戶</td><td>進入自營交易環境或衍生品市場的新用戶</td><td>尋求快速解決方案的資深交易者</td>',
										'ir'    => '<td>کاربران هدف</td><td>کاربران جدیدی که وارد محیط‌های معاملات proprietary یا بازارهای مشتقه می‌شوند</td><td>معامله‌گران باتجربه که به دنبال راه‌حل سریع هستند</td>',
										'pt_BR' => '<td>Público-Alvo</td><td>Novos usuários entrando em ambientes de trading proprietário ou mercados de derivativos</td><td>Traders experientes que buscam uma solução rápida</td>',
									];
									$locale = cc_block_locale($texts);
									echo $texts[$locale] ?? '<td>Target Audience</td><td>New clients entering proprietary trading environments or derivative markets</td><td>Experienced traders looking for a quick solution</td>';
								?>
							</tr>
							<tr>
								<?php
									$texts = [
										'zh_CN' => '<td>流程</td><td>简单的两阶段流程，便于用户快速熟悉</td><td>即时评估，无需挑战阶段</td>',
										'tr_TR' => '<td>Süreç</td><td>Basit 2 aşamalı süreç, kullanıcıların kolayca alışmasını sağlar</td><td>Anında değerlendirme, challenge aşamasına gerek yok</td>',
										'fr_FR' => '<td>Processus</td><td>Processus simple en 2 phases, facile pour se familiariser</td><td>Évaluation immédiate, sans phase de challenge</td>',
										'es_ES' => '<td>Proceso</td><td>Proceso simple de 2 fases, fácil para familiarizarse</td><td>Evaluación inmediata, sin fase de desafío</td>',
										'th'    => '<td>กระบวนการ</td><td>กระบวนการ 2 ขั้นตอนที่เรียบง่าย ช่วยให้ผู้ใช้คุ้นเคยได้ง่าย</td><td>ประเมินทันที ไม่ต้องมีช่วง Challenge</td>',
										'ru_RU' => '<td>Процесс</td><td>Простой 2-этапный процесс, удобный для ознакомления</td><td>Мгновенная оценка, без этапа Challenge</td>',
										'ja'    => '<td>料金体系</td><td>低料金で初心者・全レベルのトレーダーに最適</td><td>合理的な料金で、プロのプロップトレーダー向け</td>',
										'ko_KR' => '<td>프로세스</td><td>간단한 2단계 구조로 쉽게 적응 가능</td><td>즉시 평가, 챌린지 단계 없음</td>',
										'km'    => '<td>ដំណើរការ</td><td>ដំណើរការ 2 ជំហានសាមញ្ញ ងាយស្រួលសម្រាប់ស្គាល់ប្រព័ន្ធ</td><td>វាយតម្លៃភ្លាមៗ មិនចាំបាច់មានវគ្គ Challenge</td>',
										'bn_BD' => '<td>প্রক্রিয়া</td><td>সহজ ২ ধাপের প্রক্রিয়া, সহজে শেখা ও মানিয়ে নেওয়া যায়</td><td>তাৎক্ষণিক মূল্যায়ন, কোনো চ্যালেঞ্জ ধাপ নেই</td>',
										'ur'    => '<td>عملی طریقہ</td><td>سادہ 2 مرحلہ عمل، صارفین کے لیے آسان سمجھنے کے لیے</td><td>فوری جانچ، چیلنج مرحلے کی ضرورت نہیں</td>',
										'hk'    => '<td>流程</td><td>簡單兩階段流程，方便用戶快速熟悉</td><td>即時評估，無需挑戰階段</td>',
										'ir'    => '<td>فرآیند</td><td>فرآیند ساده دو مرحله‌ای، مناسب برای آشنایی سریع کاربران</td><td>ارزیابی فوری، بدون نیاز به مرحله چالش</td>',
										'pt_BR' => '<td>Processo</td><td>Processo simples em 2 fases, fácil para se familiarizar</td><td>Avaliação imediata, sem necessidade de fase de desafio</td>',
									];
									$locale = cc_block_locale($texts);
									echo $texts[$locale] ?? '<td>Process</td><td>Simple 2-phase process, easy for customers to get familiar</td><td>Immediate evaluating, no need for challenge phase</td>';
								?>
							</tr>
							<tr>
								<?php
									
									$texts = [
										'th' => '<td>ประเภทบัญชี</td>
																<td>บัญชีสำหรับสินทรัพย์ทุกประเภท</td>
																<td>มุ่งเน้นสินทรัพย์เฉพาะประเภทเดียวเพื่อเพิ่มประสิทธิภาพกำไร</td>',
										'zh_CN' => '<td>账户类型</td>
																<td>适用于所有资产类型的账户</td>
																<td>专注于一种特定资产类型以优化利润</td>',
										'tr_TR' => '<td>Hesap Türü</td>
																<td>Tüm varlık türleri için hesaplar</td>
																<td>Kârı optimize etmek için tek bir varlık türüne odaklanır</td>',
										'fr_FR' => '<td>Type de compte</td>
																<td>Comptes pour tous les types d’actifs</td>
																<td>Axé sur un type d’actif spécifique pour optimiser le profit</td>',
										'es_PE' => '<td>Tipo de Cuenta</td>
																<td>Cuentas para múltiples tipos de activos</td>
																<td>Enfocado en un tipo específico de activo para optimizar resultados</td>',
										'es_ES' => '<td>Tipo de cuenta</td>
																<td>Cuentas para todo tipo de activos</td>
																<td>Enfocado en un tipo específico de activo para optimizar el beneficio</td>',
										'ru_RU' => '<td>Тип счета</td>
																<td>Счета для всех типов активов</td>
																<td>Ориентирован на один конкретный тип актива для оптимизации прибыли</td>',
										'ja' => '<td>プロセス</td>
																<td>シンプルな2フェーズ評価、プロップトレーディングに慣れやすい</td>
																<td>チャレンジフェーズ不要、即時ファンデッドアカウント</td>',
										'ko_KR' => '<td>계정 유형</td>
																<td>모든 자산 유형을 위한 계정</td>
																<td>수익 최적화를 위해 특정 자산 유형에 집중</td>',
										'km' => '<td>ប្រភេទគណនី</td>
																<td>គណនីសម្រាប់ប្រភេទទ្រព្យសម្បត្តិទាំងអស់</td>
																<td>ផ្តោតលើប្រភេទទ្រព្យសម្បត្តិជាក់លាក់មួយ ដើម្បីបង្កើនប្រសិទ្ធភាពប្រាក់ចំណេញ</td>',
										'bn_BD' => '<td>অ্যাকাউন্টের ধরন</td>
																<td>সব ধরনের সম্পদের জন্য অ্যাকাউন্ট</td>
																<td>লাভ অপ্টিমাইজ করতে একটি নির্দিষ্ট সম্পদ ধরনের উপর ফোকাস</td>',
										'hk' => '<td>帳戶類型</td>
																<td>適用於所有資產類型的帳戶</td>
																<td>專注於單一資產類型以優化利潤</td>',
										'ir' => '<td>نوع حساب</td>
																<td>حساب برای همه انواع دارایی‌ها</td>
																<td>متمرکز بر یک نوع دارایی خاص برای بهینه‌سازی سود</td>',
										'id' => '<td>Jenis Akun</td>
																<td>Akun untuk semua jenis aset</td>
																<td>Fokus pada satu jenis aset tertentu untuk mengoptimalkan profit</td>',
										'pt_BR' => '<td>Tipo de conta</td>
																<td>Contas para todos os tipos de ativos</td>
																<td>Focado em um tipo específico de ativo para otimizar o lucro</td>',
										'ur' => '<td>اکاؤنٹ کی قسم</td><td>تمام اثاثہ اقسام کے لیے اکاؤنٹس</td><td>خصوصی اثاثہ پر فوکس – منافع کو زیادہ سے زیادہ کرنے کے لیے</td>',
									];
									$locale = cc_block_locale($texts);echo $texts[$locale] ?? '<td>Account Type</td>
																<td>Accounts for all asset types</td>
																<td>Focused on one specific asset type to optimize profit</td>';
								?>
							</tr>
							<tr>
								<?php
									
									$texts = [
										'th' => '<td>ความยืดหยุ่นในการเทรด</td>
																<td>ไม่มีข้อจำกัดสำหรับการเทรดข่าว สวิง หรือสแคลป์ และไม่มีข้อจำกัดขนาดสัญญา</td>
																<td>ไม่มีข้อจำกัดสำหรับการเทรดข่าว สวิง หรือสแคลป์ และไม่มีข้อจำกัดขนาดสัญญา</td>',
										'zh_CN' => '<td>交易灵活性</td>
																<td>新闻交易、波段交易或剥头皮交易均无限制，也没有合约规模限制</td>
																<td>新闻交易、波段交易或剥头皮交易均无限制，也没有合约规模限制</td>',
										'tr_TR' => '<td>İşlem Esnekliği</td>
																<td>Haber, swing veya scalp işlemlerinde sınır yok, kontrat büyüklüğü limiti yok</td>
																<td>Haber, swing veya scalp işlemlerinde sınır yok, kontrat büyüklüğü limiti yok</td>',
										'fr_FR' => '<td>Flexibilité de trading</td>
																<td>Aucune limite pour le trading sur news, swing ou scalp, aucune limite de taille de contrat</td>
																<td>Aucune limite pour le trading sur news, swing ou scalp, aucune limite de taille de contrat</td>',
										'es_PE' => '<td>Flexibilidad de Trading</td>
																<td>Sin límites en news, swing o scalp trading, sin restricciones de tamaño de contrato</td>
																<td>Sin límites en news, swing o scalp trading, sin restricciones de tamaño de contrato</td>',
										'es_ES' => '<td>Flexibilidad de trading</td>
																<td>Sin límites para trading de noticias, swing o scalp, sin límite de tamaño de contrato</td>
																<td>Sin límites para trading de noticias, swing o scalp, sin límite de tamaño de contrato</td>',
										'ru_RU' => '<td>Гибкость торговли</td>
																<td>Без ограничений на торговлю по новостям, свинг или скальпинг, без ограничений размера контракта</td>
																<td>Без ограничений на торговлю по новостям, свинг или скальпинг, без ограничений размера контракта</td>',
										'ja' => '<td>アカウントタイプ</td>
																<td>全資産タイプ対応のマルチアセットアカウント</td>
																<td>チャレンジフェーズ不要、即時ファンデッドアカウント</td>',
										'ko_KR' => '<td>거래 유연성</td>
																<td>뉴스, 스윙, 스캘핑 거래에 제한 없음, 계약 규모 제한 없음</td>
																<td>뉴스, 스윙, 스캘핑 거래에 제한 없음, 계약 규모 제한 없음</td>',
										'km' => '<td>ភាពបត់បែនក្នុងការជួញដូរ</td>
																<td>គ្មានដែនកំណត់សម្រាប់ការជួញដូរព័ត៌មាន Swing ឬ Scalp និងគ្មានដែនកំណត់ទំហំកុងត្រា</td>
																<td>គ្មានដែនកំណត់សម្រាប់ការជួញដូរព័ត៌មាន Swing ឬ Scalp និងគ្មានដែនកំណត់ទំហំកុងត្រា</td>',
										'bn_BD' => '<td>ট্রেডিং নমনীয়তা</td>
																<td>নিউজ, সুইং বা স্ক্যাল্প ট্রেডিংয়ে কোনো সীমা নেই, কন্ট্রাক্ট সাইজেরও সীমা নেই</td>
																<td>নিউজ, সুইং বা স্ক্যাল্প ট্রেডিংয়ে কোনো সীমা নেই, কন্ট্রাক্ট সাইজেরও সীমা নেই</td>',
										'hk' => '<td>交易靈活性</td>
																<td>新聞交易、波段或剝頭皮交易均無限制，也沒有合約規模限制</td>
																<td>新聞交易、波段或剝頭皮交易均無限制，也沒有合約規模限制</td>',
										'ir' => '<td>انعطاف‌پذیری در معامله</td>
																<td>بدون محدودیت برای معامله در اخبار، سوئینگ یا اسکالپ و بدون محدودیت اندازه قرارداد</td>
																<td>بدون محدودیت برای معامله در اخبار، سوئینگ یا اسکالپ و بدون محدودیت اندازه قرارداد</td>',
										'id' => '<td>Fleksibilitas Trading</td>
																<td>Tidak ada batasan untuk trading news, swing, atau scalp, tanpa batas ukuran kontrak</td>
																<td>Tidak ada batasan untuk trading news, swing, atau scalp, tanpa batas ukuran kontrak</td>',
										'pt_BR' => '<td>Flexibilidade de trading</td>
																<td>Sem limite para trading de notícias, swing ou scalp, sem limite de tamanho de contrato</td>
																<td>Sem limite para trading de notícias, swing ou scalp, sem limite de tamanho de contrato</td>',
										'ur' => '<td>ٹریڈنگ میں لچک</td><td>ٹریڈنگ کی لچک – نیوز، سوینگ یا اسکالپ ٹریڈنگ پر کوئی پابندی نہیں، اور کانٹریکٹ سائز کی حد نہیں</td><td>ٹریڈنگ کی لچک – نیوز، سوینگ یا اسکالپ ٹریڈنگ پر کوئی پابندی نہیں، اور کانٹریکٹ سائز کی حد نہیں</td>',
									];
									$locale = cc_block_locale($texts);echo $texts[$locale] ?? '<td>Trading Flexibility</td>
																<td>No limit on news, swing, or scalp trading, no contract size limits</td>
																<td>No limit on news, swing, or scalp trading, no contract size limits</td>';
								?>
							</tr>
							<tr>
								<?php
									$texts = [
										'zh_CN' => '<td>绩效奖励分成</td><td>从挑战阶段开始分成，评估完成后最高可达 90%</td><td>满足条件后即可获得最高 90% 的奖励分成</td>',
										'tr_TR' => '<td>Performansa Dayalı Ödül Paylaşımı</td><td>Challenge aşamasından itibaren ödül paylaşımı, değerlendirme sonrası %90\'a kadar</td><td>Koşullar sağlandığında hemen %90\'a kadar ödül paylaşımı</td>',
										'fr_FR' => '<td>Partage de Récompenses Basées sur la Performance</td><td>Partage dès la phase de challenge et jusqu’à 90 % après évaluation</td><td>Jusqu’à 90 % de partage dès que les conditions sont remplies</td>',
										'es_ES' => '<td>Reparto de Recompensas basadas en el Rendimiento</td><td>Reparto desde la fase de desafío y hasta el 90% después de la evaluación</td><td>Hasta un 90% de reparto en cuanto se cumplan las condiciones</td>',
										'th'    => '<td>การแบ่งผลตอบแทนตามผลงาน</td><td>เริ่มแบ่งผลตอบแทนตั้งแต่ช่วง Challenge และสูงสุดถึง 90% หลังผ่านการประเมิน</td><td>สามารถรับผลตอบแทนสูงสุดถึง 90% ทันทีเมื่อครบเงื่อนไข</td>',
										'ru_RU' => '<td>Распределение вознаграждений по результатам</td><td>Распределение с этапа Challenge и до 90% после оценки</td><td>До 90% распределения сразу после выполнения условий</td>',
										'ja'    => '<td>取引の柔軟性</td><td>ニュース・スイング・スキャルプ取引無制限、ロットサイズ制限なし</td><td>ニュース・スイング・スキャルプ取引無制限、ロットサイズ制限なし</td>',
										'ko_KR' => '<td>성과 기반 리워드 분배</td><td>챌린지 단계부터 분배되며, 평가 이후 최대 90%</td><td>조건 충족 시 즉시 최대 90%까지 분배</td>',
										'km'    => '<td>ការចែករំលែករង្វាន់ផ្អែកលើលទ្ធផល</td><td>ចាប់ផ្តើមចែករំលែកនៅវគ្គ Challenge ហើយអាចដល់ 90% បន្ទាប់ពីការវាយតម្លៃ</td><td>អាចទទួលបានរហូតដល់ 90% ភ្លាមៗនៅពេលបំពេញលក្ខខណ្ឌ</td>',
										'bn_BD' => '<td>পারফরম্যান্স-ভিত্তিক রিওয়ার্ড শেয়ারিং</td><td>চ্যালেঞ্জ পর্যায় থেকেই রিওয়ার্ড শেয়ারিং এবং মূল্যায়নের পর সর্বোচ্চ ৯০%</td><td>শর্ত পূরণ হলেই সর্বোচ্চ ৯০% রিওয়ার্ড শেয়ারিং</td>',
										'ur'    => '<td>کارکردگی پر مبنی انعام کی تقسیم</td><td>چیلنج مرحلے سے انعام کی تقسیم، اور جانچ کے بعد زیادہ سے زیادہ 90%</td><td>شرائط پوری ہوتے ہی فوری طور پر 90% تک انعام کی تقسیم</td>',
										'hk'    => '<td>績效獎勵分成</td><td>從挑戰階段開始分成，評估完成後最高可達90%</td><td>達成條件後即可獲得最高90%的獎勵分成</td>',
										'ir'    => '<td>تقسیم پاداش مبتنی بر عملکرد</td><td>از مرحله چالش آغاز شده و پس از ارزیابی تا ۹۰٪ می‌رسد</td><td>با تحقق شرایط، تا ۹۰٪ پاداش قابل دریافت است</td>',
										'pt_BR' => '<td>Compartilhamento de Recompensas Baseadas em Desempenho</td><td>Compartilhamento desde a fase de desafio e até 90% após a avaliação</td><td>Até 90% de compartilhamento assim que as condições forem atendidas</td>',
									];
									$locale = cc_block_locale($texts);
									echo $texts[$locale] ?? '<td>Performance-based Rewards Sharing</td><td>Reward sharing from the challenge phase and 90% rate after evaluating</td><td>Reward sharing up to 90% as soon as the account meets conditions</td>';
								?>
							</tr>
							<tr>
								<?php
									
									$texts = [
										'th' => '<td>ตัวเลือกการลองใหม่</td>
																<td>โปรแกรมส่วนลดรีเซ็ตเพื่อเข้าร่วม Challenge ใหม่ในต้นทุนที่ต่ำกว่า</td>
																<td>N/A</td>',
										'zh_CN' => '<td>重试选项</td>
																<td>提供重置折扣计划，以更低成本重新参加挑战阶段</td>
																<td>N/A</td>',
										'tr_TR' => '<td>Tekrar Deneme Seçeneği</td>
																<td>Challenge aşamasını daha düşük maliyetle tekrar almak için reset indirim programı</td>
																<td>N/A</td>',
										'fr_FR' => '<td>Option de nouvelle tentative</td>
																<td>Programme de remise pour réinitialiser et reprendre la phase Challenge à moindre coût</td>
																<td>N/A</td>',
										'es_PE' => '<td>Opción de Reintento</td>
																<td>Programa de descuento Reset para repetir la fase challenge a menor costo</td>
																<td>N/A</td>',
										'es_ES' => '<td>Opción de reintento</td>
																<td>Programa de descuento para reiniciar y repetir la fase Challenge a menor costo</td>
																<td>N/A</td>',
										'ru_RU' => '<td>Опция повторной попытки</td>
																<td>Программа скидки для сброса и повторного прохождения этапа Challenge по более низкой стоимости</td>
																<td>N/A</td>',
										'ja' => '<td>報酬シェア</td>
																<td>チャレンジフェーズから30%＋ファンデッド後最大90%</td>
																<td>条件達成後すぐに最大90%の報酬シェア</td>',
										'ko_KR' => '<td>재도전 옵션</td>
																<td>더 낮은 비용으로 챌린지 단계를 다시 시도할 수 있는 리셋 할인 프로그램</td>
																<td>N/A</td>',
										'km' => '<td>ជម្រើសសាកល្បងម្ដងទៀត</td>
																<td>កម្មវិធីបញ្ចុះតម្លៃសម្រាប់កំណត់ឡើងវិញ ដើម្បីចូលរួម Challenge ម្ដងទៀតក្នុងតម្លៃទាប</td>
																<td>N/A</td>',
										'bn_BD' => '<td>পুনরায় চেষ্টা করার অপশন</td>
																<td>কম খরচে Challenge পর্যায় পুনরায় নেওয়ার জন্য রিসেট ডিসকাউন্ট প্রোগ্রাম</td>
																<td>N/A</td>',
										'hk' => '<td>重試選項</td>
																<td>提供重置折扣計劃，以更低成本重新參加挑戰階段</td>
																<td>N/A</td>',
										'ir' => '<td>گزینه تلاش مجدد</td>
																<td>برنامه تخفیف برای ریست و شرکت مجدد در مرحله چالش با هزینه کمتر</td>
																<td>N/A</td>',
										'id' => '<td>Opsi Coba Lagi</td>
																<td>Program diskon reset untuk mengikuti kembali fase challenge dengan biaya lebih rendah</td>
																<td>N/A</td>',
										'pt_BR' => '<td>Opção de nova tentativa</td>
																<td>Programa de desconto para reiniciar e refazer a fase Challenge com menor custo</td>
																<td>N/A</td>',
										'ur' => '<td>دوبارہ کوشش کا آپشن</td><td>دوبارہ کوشش کا آپشن – چیلنج فیز دوبارہ کرنے کے لیے رعایتی پروگرام</td><td>دوبارہ کوشش کا آپشن – لاگو نہیں</td>',
									];
									$locale = cc_block_locale($texts);echo $texts[$locale] ?? '<td>Retry Option</td>
																<td>Reset discount program for retake the challenge phase at a lower cost</td>
																<td>N/A</td>';
								?>
							</tr>
							<tr>
								<?php
									$texts = [
										'zh_CN' => '<td>适合人群</td><td>初学者，以最低成本熟悉并提升交易技能</td><td>寻求灵活性和绩效奖励的资深交易者</td>',
										'tr_TR' => '<td>En Uygun Seçenek</td><td>Yeni başlayanlar için, en düşük maliyetle alışmak ve işlem becerilerini geliştirmek</td><td>Esneklik ve performansa dayalı ödüller arayan deneyimli traderlar</td>',
										'fr_FR' => '<td>Idéal Pour</td><td>Débutants souhaitant se familiariser et développer leurs compétences de trading à moindre coût</td><td>Traders expérimentés recherchant flexibilité et récompenses basées sur la performance</td>',
										'es_ES' => '<td>Mejor Opción Para</td><td>Principiantes que desean familiarizarse y desarrollar habilidades de trading al menor costo</td><td>Traders experimentados que buscan flexibilidad y recompensas basadas en el rendimiento</td>',
										'th'    => '<td>เหมาะสำหรับ</td><td>ผู้เริ่มต้น เพื่อเรียนรู้และพัฒนาทักษะการเทรดด้วยต้นทุนต่ำที่สุด</td><td>เทรดเดอร์ที่มีประสบการณ์ที่ต้องการความยืดหยุ่นและผลตอบแทนตามผลงาน</td>',
										'ru_RU' => '<td>Лучший вариант для</td><td>Новичков — для знакомства и развития торговых навыков с минимальными затратами</td><td>Опытных трейдеров, ищущих гибкость и вознаграждение на основе результатов</td>',
										'ja'    => '<td>再挑戦オプション</td><td>30%割引でチャレンジフェーズを再受験可能</td><td>N/A</td>',
										'ko_KR' => '<td>추천 대상</td><td>초보자: 낮은 비용으로 트레이딩에 익숙해지고 실력을 키우려는 사용자</td><td>유연성과 성과 기반 리워드를 원하는 경험 많은 트레이더</td>',
										'km'    => '<td>ជម្រើសល្អបំផុតសម្រាប់</td><td>អ្នកចាប់ផ្តើម ដើម្បីស្គាល់ និងអភិវឌ្ឍជំនាញជួញដូរជាមួយចំណាយទាបបំផុត</td><td>អ្នកជួញដូរដែលមានបទពិសោធន៍ ស្វែងរកភាពបត់បែន និងរង្វាន់ផ្អែកលើលទ្ធផល</td>',
										'bn_BD' => '<td>সর্বোত্তম জন্য</td><td>শিক্ষানবিসদের জন্য, কম খরচে ট্রেডিং শেখা এবং দক্ষতা উন্নয়ন</td><td>অভিজ্ঞ ট্রেডার যারা নমনীয়তা এবং পারফরম্যান্স-ভিত্তিক রিওয়ার্ড খুঁজছেন</td>',
										'ur'    => '<td>بہترین انتخاب برائے</td><td>ابتدائی صارفین کے لیے، کم لاگت میں سیکھنے اور ٹریڈنگ مہارت بڑھانے کے لیے</td><td>تجربہ کار ٹریڈرز جو لچک اور کارکردگی پر مبنی انعام چاہتے ہیں</td>',
										'hk'    => '<td>最適合</td><td>初學者：以最低成本熟悉並提升交易技能</td><td>尋求靈活性和績效獎勵的資深交易者</td>',
										'ir'    => '<td>بهترین گزینه برای</td><td>مبتدیان، برای آشنایی و توسعه مهارت‌های معاملاتی با کمترین هزینه</td><td>معامله‌گران باتجربه که به دنبال انعطاف‌پذیری و پاداش مبتنی بر عملکرد هستند</td>',
										'pt_BR' => '<td>Melhor Para</td><td>Iniciantes, para se familiarizar e desenvolver habilidades de trading com o menor custo</td><td>Traders experientes que buscam flexibilidade e recompensas baseadas em desempenho</td>',
									];
									$locale = cc_block_locale($texts);
									echo $texts[$locale] ?? '<td>Best Option For</td><td>Beginners, to get familiar and develop trading skills at the lowest cost</td><td>Experienced traders seeking flexibility and performance-based rewards</td>';
								?>
							</tr>
							<?php
								$texts = [
									'ja'    => '
									    <tr>
									        <td>おすすめ対象</td>
									        <td>最低コストでスキルを磨きたい初心者のプロップトレーダー</td>
									        <td>即時資金提供と柔軟性を求める経験豊富なトレーダー</td>
									    </tr>
									',
									
								];
								$locale = cc_block_locale($texts);
								echo $texts[$locale] ?? '';
							?>
						</tbody>
					</table>
				</div>
				<div class="features__sp sp">
					<div class="features__sp--tabs">
						<p class="item active" data-tab="features1" data-tab-group="2">
							<?php
								
								$texts = [
									'zh_CN' => '挑战',
									'ja' => 'チャレンジ',
									'ko_KR' => '챌린지',
									'bn_BD' => 'চ্যালেঞ্জ',
									'hk' => '挑戰',
									'ir' => 'چالش',
									'ur' => 'چیلنج',
								];
								$locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Challenge';
							?>
						</p>
						<p class="item" data-tab="features2" data-tab-group="2">
							<?php
								
								$texts = [
									'zh_CN' => '即时',
									'ru_RU' => 'Мгновенно',
									'ja' => 'インスタント',
									'ko_KR' => '인스턴트',
									'bn_BD' => 'ইনস্ট্যান্ট',
									'hk' => '即時',
									'ir' => 'فوری',
									'ur' => 'انسٹنٹ',
								];
								$locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Instant';
							?>
						</p>
					</div>
					<div class="features__sp--contents">
						<div class="item active" data-tab-content="features1" data-tab-group="2">
							<div class="row">
								<dl>
									<?php
										
										$texts = [
											'th' => '<dt>กลุ่มเป้าหมาย</dt>
																		<dd>ลูกค้าที่เพิ่งเริ่มต้นกับ Prop Firm หรือ ตลาดอนุพันธ์</dd>',
											'zh_CN' => '<dt>目标受众</dt>
																		<dd>刚接触 Prop Firm 或衍生品市场的客户</dd>',
											'tr_TR' => '<dt>Hedef Kitle</dt>
																		<dd>Prop firm veya türev piyasalarına yeni giren müşteriler</dd>',
											'fr_FR' => '<dt>Public cible</dt>
																		<dd>Clients nouveaux dans les prop firms ou les marchés dérivés</dd>',
											'es_PE' => '<dt>Público Objetivo</dt>
																		<dd>Clientes nuevos en Prop Trading o mercados de derivados</dd>',
											'es_ES' => '<dt>Público objetivo</dt>
																		<dd>Traders experimentados que buscan una solución rápida</dd>',
											'es_ES' => '<dt>Público objetivo</dt>
																		<dd>Clientes nuevos en Prop Firms o en los mercados de derivados</dd>',
											'ru_RU' => '<dt>Целевая аудитория</dt>
																		<dd>Клиенты, новые в Prop Firm или на рынках деривативов</dd>',
											'ja' => '<dt>対象ユーザー</dt>
																		<dd>プロップトレーディングやデリバティブ市場に初めて参加する日本のトレーダー</dd>',
											'ko_KR' => '<dt>대상 사용자</dt>
																		<dd>Prop Firm 또는 파생상품 시장에 처음 참여하는 고객</dd>',
											'km' => '<dt>ក្រុមគោលដៅ</dt>
																		<dd>អតិថិជនថ្មីក្នុង Prop Firm ឬទីផ្សារដេរីវេ</dd>',
											'bn_BD' => '<dt>লক্ষ্য গ্রাহক</dt>
																		<dd>Prop Firm বা ডেরিভেটিভ মার্কেটে নতুন গ্রাহক</dd>',
											'hk' => '<dt>目標受眾</dt>
																		<dd>剛接觸 Prop Firm 或衍生品市場的客戶</dd>',
											'ir' => '<dt>گروه هدف</dt>
																		<dd>مشتریانی که تازه وارد Prop Firm یا بازارهای مشتقه شده‌اند</dd>',
																		'ur' => '<dt>ہدفی صارفین</dt><dd>وہ صارفین جو پراپ فرمز یا ڈیریویٹو مارکیٹس میں نئے ہیں</dd>',
											'id' => '<dt>Target Audiens</dt>
																		<dd>Pelanggan baru di Prop Firm atau pasar derivatif</dd>',
											'pt_BR' => '<dt>Público-alvo</dt>
																		<dd>Clientes novos em Prop Firms ou mercados de derivativos</dd>',
										];
										$locale = cc_block_locale($texts);echo $texts[$locale] ?? '<dt>Target Audience</dt>
																		<dd>Customers new to Prop Firms or Derivatives Markets</dd>';
									?>
								</dl>
								<dl>
									<?php
										
										$texts = [
											'th' => '<dt>โครงสร้างค่าธรรมเนียม</dt>
																		<dd>ค่าธรรมเนียมต่ำ เหมาะสำหรับผู้เริ่มต้นและเหมาะกับทุกระดับ</dd>',
											'zh_CN' => '<dt>费用结构</dt>
																		<dd>低费用，非常适合初学者并适用于所有水平</dd>',
											'tr_TR' => '<dt>Ücret Yapısı</dt>
																		<dd>Düşük ücretler, yeni başlayanlar için ideal ve tüm seviyelere uygun</dd>',
											'fr_FR' => '<dt>Structure des frais</dt>
																		<dd>Frais faibles, parfaits pour les débutants et adaptés à tous les niveaux</dd>',
											'es_PE' => '<dt>Estructura de Fees</dt>
																		<dd>Fees bajos, ideal para principiantes y adecuado para todos los niveles</dd>',
											'es_ES' => '<dt>Estructura de tarifas</dt>
																		<dd>Tarifas razonables, adecuadas para traders profesionales</dd>',
											'es_ES' => '<dt>Estructura de tarifas</dt>
																		<dd>Tarifas bajas, perfectas para principiantes y adecuadas para todos los niveles</dd>',
											'ru_RU' => '<dt>Структура комиссий</dt>
																		<dd>Низкие комиссии, идеально для новичков и подходит для всех уровней</dd>',
											'ja' => '<dt>料金体系</dt>
																		<dd>低料金で初心者・全レベルのトレーダーに最適</dd>',
											'ko_KR' => '<dt>수수료 구조</dt>
																		<dd>낮은 수수료로 초보자에게 적합하며 모든 수준에 적합</dd>',
											'km' => '<dt>រចនាសម្ព័ន្ធថ្លៃសេវា</dt>
																		<dd>ថ្លៃសេវាទាប សាកសមសម្រាប់អ្នកចាប់ផ្តើម និងគ្រប់កម្រិត</dd>',
											'bn_BD' => '<dt>ফি কাঠামো</dt>
																		<dd>কম ফি, নতুনদের জন্য উপযুক্ত এবং সব স্তরের জন্য মানানসই</dd>',
											'hk' => '<dt>費用結構</dt>
																		<dd>低費用，非常適合初學者並適用於所有水平</dd>',
											'ir' => '<dt>ساختار کارمزد</dt>
																		<dd>کارمزد پایین، مناسب برای مبتدیان و تمام سطوح</dd>',
																		'ur' => '<dt>فیس کا ڈھانچہ</dt><dd>کم فیس، ابتدائی افراد کے لیے بہترین اور تمام سطحوں کے لیے موزوں</dd>',
											'id' => '<dt>Struktur Biaya</dt>
																		<dd>Biaya rendah, cocok untuk pemula dan semua tingkat trader</dd>',
											'pt_BR' => '<dt>Estrutura de taxas</dt>
																		<dd>Taxas baixas, perfeitas para iniciantes e adequadas para todos os níveis</dd>',
										];
										$locale = cc_block_locale($texts);echo $texts[$locale] ?? '<dt>Fee Structure</dt>
																		<dd>Low fees, perfect for beginners and suitable for all levels</dd>';
									?>
								</dl>
								<dl>
									<?php
										
										$texts = [
											'th' => '<dt>กระบวนการ</dt>
																		<dd>กระบวนการ 2 ขั้นตอนที่เรียบง่าย ลูกค้าสามารถทำความคุ้นเคยได้ง่าย</dd>',
											'zh_CN' => '<dt>流程</dt>
																		<dd>简单的两阶段流程，方便客户快速熟悉</dd>',
											'tr_TR' => '<dt>Süreç</dt>
																		<dd>Müşterilerin kolayca alışabileceği basit 2 aşamalı süreç</dd>',
											'fr_FR' => '<dt>Processus</dt>
																		<dd>Processus simple en 2 phases, facile à prendre en main pour les clients</dd>',
											'es_PE' => '<dt>Proceso</dt>
																		<dd>Proceso simple en 2 fases, fácil de entender</dd>',
											'es_ES' => '<dt>Proceso</dt>
																		<dd>Financiación inmediata, sin necesidad de fase de challenge</dd>',
											'es_ES' => '<dt>Proceso</dt>
																		<dd>Proceso simple de 2 fases, fácil para que los clientes se familiaricen</dd>',
											'ru_RU' => '<dt>Процесс</dt>
																		<dd>Простой двухэтапный процесс, легко освоить клиентам</dd>',
											'ja' => '<dt>プロセス</dt>
																		<dd>シンプルな2フェーズ評価、プロップトレーディングに慣れやすい</dd>',
											'ko_KR' => '<dt>프로세스</dt>
																		<dd>고객이 쉽게 익숙해질 수 있는 간단한 2단계 과정</dd>',
											'km' => '<dt>ដំណើរការ</dt>
																		<dd>ដំណើរការ 2 ដំណាក់កាលសាមញ្ញ ងាយស្រួលសម្រាប់អតិថិជនក្នុងការស្គាល់</dd>',
											'bn_BD' => '<dt>প্রক্রিয়া</dt>
																		<dd>সহজ ২-ধাপের প্রক্রিয়া, গ্রাহকদের জন্য সহজে পরিচিত হওয়া যায়</dd>',
											'hk' => '<dt>流程</dt>
																		<dd>簡單的兩階段流程，方便客戶快速熟悉</dd>',
											'ir' => '<dt>فرآیند</dt>
																		<dd>فرآیند ساده دو مرحله‌ای که مشتریان به راحتی با آن آشنا می‌شوند</dd>',
																		'ur' => '<dt>عمل</dt><dd>سادہ 2 مرحلوں پر مشتمل عمل، صارفین کے لیے آسانی سے سیکھنے کے قابل</dd>',
											'id' => '<dt>Proses</dt>
																		<dd>Proses sederhana 2 tahap, mudah dipahami oleh pelanggan</dd>',
											'pt_BR' => '<dt>Processo</dt>
																		<dd>Processo simples de 2 fases, fácil para os clientes se familiarizarem</dd>',
										];
										$locale = cc_block_locale($texts);echo $texts[$locale] ?? '<dt>Process</dt>
																		<dd>Simple 2-phase process, easy for customers to get familiar</dd>';
									?>
								</dl>
								<dl>
									<?php
										
										$texts = [
											'th' => '<dt>ประเภทบัญชี</dt>
																		<dd>บัญชีสำหรับสินทรัพย์ทุกประเภท</dd>',
											'zh_CN' => '<dt>账户类型</dt>
																		<dd>适用于所有资产类型的账户</dd>',
											'tr_TR' => '<dt>Hesap Türü</dt>
																		<dd>Tüm varlık türleri için hesaplar</dd>',
											'fr_FR' => '<dt>Type de compte</dt>
																		<dd>Comptes pour tous les types d’actifs</dd>',
											'es_PE' => '<dt>Tipo de Cuenta</dt>
																		<dd>Cuentas para múltiples tipos de activos</dd>',
											'es_ES' => '<dt>Tipo de cuenta</dt>
																		<dd>Enfocado en un tipo específico de activo para optimizar el beneficio</dd>',
											'es_ES' => '<dt>Tipo de cuenta</dt>
																		<dd>Cuentas para todo tipo de activos</dd>',
											'ru_RU' => '<dt>Тип счета</dt>
																		<dd>Счета для всех типов активов</dd>',
											'ja' => '<dt>アカウントタイプ</dt>
																		<dd>全資産タイプ対応のマルチアセットアカウント</dd>',
											'ko_KR' => '<dt>계정 유형</dt>
																		<dd>모든 자산 유형을 위한 계정</dd>',
											'km' => '<dt>ប្រភេទគណនី</dt>
																		<dd>គណនីសម្រាប់ប្រភេទទ្រព្យសម្បត្តិទាំងអស់</dd>',
											'bn_BD' => '<dt>অ্যাকাউন্টের ধরন</dt>
																		<dd>সব ধরনের সম্পদের জন্য অ্যাকাউন্ট</dd>',
											'hk' => '<dt>帳戶類型</dt>
																		<dd>適用於所有資產類型的帳戶</dd>',
											'ir' => '<dt>نوع حساب</dt>
																		<dd>حساب برای همه انواع دارایی‌ها</dd>',
																		'ur' => '<dt>اکاؤنٹ کی قسم</dt><dd>تمام اثاثہ جات کی اقسام کے لیے اکاؤنٹس</dd>',
											'id' => '<dt>Jenis Akun</dt>
																		<dd>Akun untuk semua jenis aset</dd>',
											'pt_BR' => '<dt>Tipo de conta</dt>
																		<dd>Contas para todos os tipos de ativos</dd>',
										];
										$locale = cc_block_locale($texts);echo $texts[$locale] ?? '<dt>Account Type</dt>
																		<dd>Accounts for all asset types</dd>';
									?>
								</dl>
								<dl>
									<?php
										
										$texts = [
											'th' => '<dt>ความยืดหยุ่นในการเทรด</dt>
																		<dd>ไม่มีข้อจำกัดสำหรับการเทรดข่าว สวิง หรือสแคลป์ และไม่มีข้อจำกัดขนาดสัญญา</dd>',
											'zh_CN' => '<dt>交易灵活性</dt>
																		<dd>新闻交易、波段交易或剥头皮交易均无限制，也没有合约规模限制</dd>',
											'tr_TR' => '<dt>İşlem Esnekliği</dt>
																		<dd>Haber, swing veya scalp işlemlerinde sınır yok, kontrat büyüklüğü limiti yok</dd>',
											'fr_FR' => '<dt>Flexibilité de trading</dt>
																		<dd>Aucune limite pour le trading sur news, swing ou scalp, aucune limite de taille de contrat</dd>',
											'es_PE' => '<dt>Flexibilidad de Trading</dt>
																		<dd>Sin límites en news, swing o scalp trading, sin restricciones de tamaño de contrato</dd>',
											'es_ES' => '<dt>Flexibilidad de trading</dt>
																		<dd>Sin límites para trading de noticias, swing o scalp, sin límite de tamaño de contrato</dd>',
											'es_ES' => '<dt>Flexibilidad de trading</dt>
																		<dd>Sin límites para trading de noticias, swing o scalp, sin límite de tamaño de contrato</dd>',
											'ru_RU' => '<dt>Гибкость торговли</dt>
																		<dd>Без ограничений на торговлю по новостям, свинг или скальпинг, без ограничений размера контракта</dd>',
											'ja' => '<dt>取引の柔軟性</dt>
																		<dd>ニュース・スイング・スキャルプ取引無制限、ロットサイズ制限なし</dd>',
											'ko_KR' => '<dt>거래 유연성</dt>
																		<dd>뉴스, 스윙, 스캘핑 거래에 제한 없음, 계약 규모 제한 없음</dd>',
											'km' => '<dt>ភាពបត់បែនក្នុងការជួញដូរ</dt>
																		<dd>គ្មានដែនកំណត់សម្រាប់ការជួញដូរព័ត៌មាន Swing ឬ Scalp និងគ្មានដែនកំណត់ទំហំកុងត្រា</dd>',
											'bn_BD' => '<dt>ট্রেডিং নমনীয়তা</dt>
																		<dd>নিউজ, সুইং বা স্ক্যাল্প ট্রেডিংয়ে কোনো সীমা নেই, কন্ট্রাক্ট সাইজেরও সীমা নেই</dd>',
											'hk' => '<dt>交易靈活性</dt>
																		<dd>新聞交易、波段或剝頭皮交易均無限制，也沒有合約規模限制</dd>',
											'ir' => '<dt>انعطاف‌پذیری در معامله</dt>
																		<dd>بدون محدودیت برای معامله در اخبار، سوئینگ یا اسکالپ و بدون محدودیت اندازه قرارداد</dd>',
																		'ur' => '<dt>ٹریڈنگ میں لچک</dt><dd>نیوز، سوئنگ یا اسکیلپ ٹریڈنگ پر کوئی پابندی نہیں، کنٹریکٹ سائز کی کوئی حد نہیں</dd>',
											'id' => '<dt>Fleksibilitas Trading</dt>
																		<dd>Tidak ada batasan untuk trading news, swing, atau scalp, tanpa batas ukuran kontrak</dd>',
											'pt_BR' => '<dt>Flexibilidade de trading</dt>
																		<dd>Sem limite para trading de notícias, swing ou scalp, sem limite de tamanho de contrato</dd>',
										];
										$locale = cc_block_locale($texts);echo $texts[$locale] ?? '<dt>Trading Flexibility</dt>
																		<dd>No limit on news, swing, or scalp trading, no contract size limits</dd>';
									?>
								</dl>
								<dl>
									<?php
										$texts = [
											'zh_CN' => '<dt>绩效奖励分成</dt><dd>从挑战阶段开始分成，资金阶段后最高可达 90%</dd>',
											'tr_TR' => '<dt>Performansa Dayalı Ödül Paylaşımı</dt><dd>Challenge aşamasından itibaren ödül paylaşımı, fonlama sonrası %90\'a kadar</dd>',
											'fr_FR' => '<dt>Partage de Récompenses Basées sur la Performance</dt><dd>Partage dès la phase de challenge et jusqu’à 90 % après financement</dd>',
											'es_ES' => '<dt>Reparto de Recompensas basadas en el Rendimiento</dt><dd>Reparto desde la fase de desafío y hasta el 90% después de financiación</dd>',
											'th'    => '<dt>การแบ่งผลตอบแทนตามผลงาน</dt><dd>เริ่มแบ่งผลตอบแทนตั้งแต่ช่วง Challenge และสูงสุดถึง 90% หลังได้รับเงินทุน</dd>',
											'ru_RU' => '<dt>Распределение вознаграждений по результатам</dt><dd>Распределение с этапа Challenge и до 90% после финансирования</dd>',
											'ja'    => '<dt>報酬シェア</dt><dd>チャレンジフェーズから30%＋ファンデッド後最大90%</dd>',
											'ko_KR' => '<dt>성과 기반 리워드 분배</dt><dd>챌린지 단계부터 분배되며, 펀딩 이후 최대 90%</dd>',
											'km'    => '<dt>ការចែករំលែករង្វាន់ផ្អែកលើលទ្ធផល</dt><dd>ចាប់ផ្តើមចែករំលែកនៅវគ្គ Challenge ហើយអាចដល់ 90% បន្ទាប់ពីទទួលទុន</dd>',
											'bn_BD' => '<dt>পারফরম্যান্স-ভিত্তিক রিওয়ার্ড শেয়ারিং</dt><dd>চ্যালেঞ্জ পর্যায় থেকেই রিওয়ার্ড শেয়ারিং এবং ফান্ডিং-এর পর সর্বোচ্চ ৯০%</dd>',
											'ur'    => '<dt>کارکردگی پر مبنی انعام کی تقسیم</dt><dd>چیلنج مرحلے سے انعام کی تقسیم، اور فنڈنگ کے بعد زیادہ سے زیادہ 90%</dd>',
											'hk'    => '<dt>績效獎勵分成</dt><dd>從挑戰階段開始分成，資金階段後最高可達90%</dd>',
											'ir'    => '<dt>تقسیم پاداش مبتنی بر عملکرد</dt><dd>از مرحله چالش آغاز شده و پس از تأمین سرمایه تا ۹۰٪ می‌رسد</dd>',
											'pt_BR' => '<dt>Compartilhamento de Recompensas Baseadas em Desempenho</dt><dd>Compartilhamento desde a fase de desafio e até 90% após o financiamento</dd>',
										];
										$locale = cc_block_locale($texts);
										echo $texts[$locale] ?? '<dt>Performance-based Rewards Sharing</dt><dd>Reward sharing from the challenge phase and 90% rate after funding</dd>';
									?>
								</dl>
								<dl>
									<?php
										
										$texts = [
											'th' => '<dt>ตัวเลือกการลองใหม่</dt>
																		<dd>โปรแกรมส่วนลดรีเซ็ตเพื่อเข้าร่วม Challenge ใหม่ในต้นทุนที่ต่ำกว่า</dd>',
											'zh_CN' => '<dt>重试选项</dt>
																		<dd>提供重置折扣计划，以更低成本重新参加挑战阶段</dd>',
											'tr_TR' => '<dt>Tekrar Deneme Seçeneği</dt>
																		<dd>Challenge aşamasını daha düşük maliyetle tekrar almak için reset indirim programı</dd>',
											'fr_FR' => '<dt>Option de nouvelle tentative</dt>
																		<dd>Programme de remise pour réinitialiser et reprendre la phase Challenge à moindre coût</dd>',
											'es_PE' => '<dt>Opción de Reintento</dt>
																		<dd>Programa de descuento Reset para repetir la fase challenge a menor costo</dd>',
											'es_ES' => '<dt>Opción de reintento</dt>
																		<dd>N/A</dd>',
											'es_ES' => '<dt>Opción de reintento</dt>
																		<dd>Programa de descuento para reiniciar y repetir la fase Challenge a menor costo</dd>',
											'ru_RU' => '<dt>Опция повторной попытки</dt>
																		<dd>Программа скидки для сброса и повторного прохождения этапа Challenge по более низкой стоимости</dd>',
											'ja' => '<dt>再挑戦オプション</dt>
																		<dd>30%割引でチャレンジフェーズを再受験可能</dd>',
											'ko_KR' => '<dt>재도전 옵션</dt>
																		<dd>더 낮은 비용으로 챌린지 단계를 다시 시도할 수 있는 리셋 할인 프로그램</dd>',
											'km' => '<dt>ជម្រើសសាកល្បងម្ដងទៀត</dt>
																		<dd>កម្មវិធីបញ្ចុះតម្លៃសម្រាប់កំណត់ឡើងវិញ ដើម្បីចូលរួម Challenge ម្ដងទៀតក្នុងតម្លៃទាប</dd>',
											'bn_BD' => '<dt>পুনরায় চেষ্টা করার অপশন</dt>
																		<dd>কম খরচে Challenge পর্যায় পুনরায় নেওয়ার জন্য রিসেট ডিসকাউন্ট প্রোগ্রাম</dd>',
											'hk' => '<dt>重試選項</dt>
																		<dd>提供重置折扣計劃，以更低成本重新參加挑戰階段</dd>',
											'ir' => '<dt>گزینه تلاش مجدد</dt>
																		<dd>برنامه تخفیف برای ریست و شرکت مجدد در مرحله چالش با هزینه کمتر</dd>',
																		'ur' => '<dt>دوبارہ کوشش کا آپشن</dt><dd>کم لاگت پر چیلنج مرحلہ دوبارہ لینے کے لیے ری سیٹ ڈسکاؤنٹ پروگرام</dd>',
											'id' => '<dt>Opsi Coba Lagi</dt>
																		<dd>Program diskon reset untuk mengikuti kembali fase challenge dengan biaya lebih rendah</dd>',
											'pt_BR' => '<dt>Opção de nova tentativa</dt>
																		<dd>Programa de desconto para reiniciar e refazer a fase Challenge com menor custo</dd>',
										];
										$locale = cc_block_locale($texts);echo $texts[$locale] ?? '<dt>Retry Option</dt>
																		<dd>Reset discount program for retake the challenge phase at a lower cost</dd>';
									?>
								</dl>
								<dl>
									<?php
										
										$texts = [
											'th' => '<dt>ตัวเลือกที่เหมาะที่สุดสำหรับ</dt>
																		<dd>ผู้เริ่มต้น เพื่อทำความคุ้นเคยและพัฒนาทักษะการเทรดด้วยต้นทุนต่ำที่สุด</dd>',
											'zh_CN' => '<dt>最佳选择</dt>
																		<dd>适合初学者，以最低成本熟悉并提升交易技能</dd>',
											'tr_TR' => '<dt>En Uygun Seçenek</dt>
																		<dd>Yeni başlayanlar için, en düşük maliyetle trading becerilerini öğrenmek ve geliştirmek</dd>',
											'fr_FR' => '<dt>Meilleure option pour</dt>
																		<dd>Les débutants, pour se familiariser et développer leurs compétences de trading à moindre coût</dd>',
											'es_PE' => '<dt>Mejor Opción Para</dt>
																		<dd>Principiantes que buscan desarrollar habilidades al menor costo</dd>',
											'es_ES' => '<dt>Mejor opción para</dt>
																		<dd>Traders experimentados que buscan flexibilidad y rentabilidad rápida</dd>',
											'es_ES' => '<dt>Mejor opción para</dt>
																		<dd>Principiantes, para familiarizarse y desarrollar habilidades de trading al menor costo</dd>',
											'ru_RU' => '<dt>Лучший вариант для</dt>
																		<dd>Новичков, чтобы познакомиться и развить навыки торговли с минимальными затратами</dd>',
											'ja' => '<dt>おすすめ対象</dt>
																		<dd>最低コストでスキルを磨きたい初心者のプロップトレーダー</dd>',
											'ko_KR' => '<dt>추천 대상</dt>
																		<dd>초보자에게 적합, 가장 낮은 비용으로 거래에 익숙해지고 실력을 향상</dd>',
											'km' => '<dt>ជម្រើសល្អបំផុតសម្រាប់</dt>
																		<dd>អ្នកចាប់ផ្តើម ដើម្បីស្គាល់ និងអភិវឌ្ឍជំនាញជួញដូរដោយចំណាយទាបបំផុត</dd>',
											'bn_BD' => '<dt>সবচেয়ে উপযুক্ত</dt>
																		<dd>নতুনদের জন্য, কম খরচে ট্রেডিং দক্ষতা শেখা ও উন্নয়নের জন্য</dd>',
											'hk' => '<dt>最佳選擇</dt>
																		<dd>適合初學者，以最低成本熟悉並提升交易技能</dd>',
																		'ur' => '<dt>بہترین انتخاب</dt><dd>ابتدائی افراد کے لیے، کم ترین لاگت پر سیکھنے اور ٹریڈنگ مہارتیں ترقی دینے کے لیے</dd>',
											'ir' => '<dt>بهترین گزینه برای</dt>
																		<dd>مبتدیان برای آشنایی و توسعه مهارت‌های معامله با کمترین هزینه</dd>',
											'id' => '<dt>Pilihan Terbaik Untuk</dt>
																		<dd>Pemula, untuk mengenal dan mengembangkan keterampilan trading dengan biaya terendah</dd>',
											'pt_BR' => '<dt>Melhor opção para</dt>
																		<dd>Iniciantes, para se familiarizar e desenvolver habilidades de trading com o menor custo</dd>',
										];
										$locale = cc_block_locale($texts);echo $texts[$locale] ?? '<dt>Best Option For</dt>
																		<dd>Beginners, to get familiar and develop trading skills at the lowest cost</dd>';
									?>
								</dl>
							</div>
						</div>
						<div class="item" data-tab-content="features2" data-tab-group="2">
							<div class="row">
								<dl>
									<?php
										
										$texts = [
											'th' => '<dt>กลุ่มเป้าหมาย</dt>
																		<dd>เทรดเดอร์ที่มีประสบการณ์และกำลังมองหาโซลูชันที่รวดเร็ว</dd>',
											'zh_CN' => '<dt>目标受众</dt>
																		<dd>寻求快速解决方案的经验交易者</dd>',
											'tr_TR' => '<dt>Hedef Kitle</dt>
																		<dd>Hızlı bir çözüm arayan deneyimli traderlar</dd>',
											'fr_FR' => '<dt>Public cible</dt>
																		<dd>Traders expérimentés recherchant une solution rapide</dd>',
											'es_PE' => '<dt>Público Objetivo</dt>
																		<dd>Traders experimentados que buscan una solución rápida</dd>',
											'ru_RU' => '<dt>Целевая аудитория</dt>
																		<dd>Опытные трейдеры, ищущие быстрое решение</dd>',
											'ja' => '<dt>対象ユーザー</dt>
																		<dd>迅速なソリューションを求める経験豊富なプロップトレーダー</dd>',
											'ko_KR' => '<dt>대상 사용자</dt>
																		<dd>빠른 솔루션을 찾는 경험 많은 트레이더</dd>',
																		'ur' => '<dt>ہدفی صارفین</dt><dd>تجربہ کار ٹریڈرز جو فوری حل کی تلاش میں ہیں</dd>',
											'km' => '<dt>ក្រុមគោលដៅ</dt>
																		<dd>អ្នកជួញដូរដែលមានបទពិសោធន៍ និងកំពុងស្វែងរកដំណោះស្រាយលឿន</dd>',
											'bn_BD' => '<dt>লক্ষ্য গ্রাহক</dt>
																		<dd>দ্রুত সমাধান খুঁজছেন এমন অভিজ্ঞ ট্রেডার</dd>',
											'hk' => '<dt>目標受眾</dt>
																		<dd>尋求快速方案的資深交易者</dd>',
											'ir' => '<dt>گروه هدف</dt>
																		<dd>معامله‌گران باتجربه که به دنبال راه‌حل سریع هستند</dd>',
											'id' => '<dt>Target Audiens</dt>
																		<dd>Trader berpengalaman yang mencari solusi cepat</dd>',
											'pt_BR' => '<dt>Público-alvo</dt>
																		<dd>Traders experientes procurando uma solução rápida</dd>',
										];
										$locale = cc_block_locale($texts);echo $texts[$locale] ?? '<dt>Target Audience</dt>
																		<dd>Experienced traders looking for a quick solution</dd>';
									?>
								</dl>
								<dl>
									<?php
										
										$texts = [
											'th' => '<dt>โครงสร้างค่าธรรมเนียม</dt>
																		<dd>ค่าธรรมเนียมสมเหตุสมผล เหมาะสำหรับเทรดเดอร์มืออาชีพ</dd>',
											'zh_CN' => '<dt>费用结构</dt>
																		<dd>合理费用，适合专业交易者</dd>',
											'tr_TR' => '<dt>Ücret Yapısı</dt>
																		<dd>Makul ücretler, profesyonel traderlar için uygun</dd>',
											'fr_FR' => '<dt>Structure des frais</dt>
																		<dd>Frais raisonnables, adaptés aux traders professionnels</dd>',
											'es_PE' => '<dt>Estructura de Fees</dt>
																		<dd>Fees razonables, pensados para traders profesionales</dd>',
											'ru_RU' => '<dt>Структура комиссий</dt>
																		<dd>Разумные комиссии, подходят для профессиональных трейдеров</dd>',
											'ja' => '<dt>料金体系</dt>
																		<dd>合理的な料金で、プロのプロップトレーダー向け</dd>',
											'ko_KR' => '<dt>수수료 구조</dt>
																		<dd>합리적인 수수료로 전문 트레이더에게 적합</dd>',
											'km' => '<dt>រចនាសម្ព័ន្ធថ្លៃសេវា</dt>
																		<dd>ថ្លៃសេវាសមរម្យ សាកសមសម្រាប់អ្នកជួញដូរអាជីព</dd>',
											'bn_BD' => '<dt>ফি কাঠামো</dt>
																		<dd>যৌক্তিক ফি, পেশাদার ট্রেডারদের জন্য উপযুক্ত</dd>',
											'hk' => '<dt>費用結構</dt>
																		<dd>合理費用，適合專業交易者</dd>',
											'ir' => '<dt>ساختار کارمزد</dt>
																		<dd>کارمزد معقول، مناسب برای معامله‌گران حرفه‌ای</dd>',
																		'ur' => '<dt>فیس کا ڈھانچہ</dt><dd>مناسب فیسیں، پیشہ ور ٹریڈرز کے لیے موزوں</dd>',
											'id' => '<dt>Struktur Biaya</dt>
																		<dd>Biaya wajar, cocok untuk trader profesional</dd>',
											'pt_BR' => '<dt>Estrutura de taxas</dt>
																		<dd>Taxas razoáveis, adequadas para traders profissionais</dd>',
										];
										$locale = cc_block_locale($texts);echo $texts[$locale] ?? '<dt>Fee Structure</dt>
																		<dd>Reasonable fees, suitable for professional traders</dd>';
									?>
								</dl>
								<dl>
									<?php
										$texts = [
											'zh_CN' => '<dt>流程</dt><dd>即时提供资金，无需挑战阶段</dd>',
											'tr_TR' => '<dt>Süreç</dt><dd>Anında fonlama, challenge aşamasına gerek yok</dd>',
											'fr_FR' => '<dt>Processus</dt><dd>Financement immédiat, sans phase de challenge</dd>',
											'es_ES' => '<dt>Proceso</dt><dd>Financiación inmediata, sin fase de desafío</dd>',
											'th'    => '<dt>กระบวนการ</dt><dd>รับเงินทุนทันที ไม่ต้องมีช่วง Challenge</dd>',
											'ru_RU' => '<dt>Процесс</dt><dd>Мгновенное финансирование, без этапа Challenge</dd>',
											'ja'    => '<dt>プロセス</dt><dd>チャレンジフェーズ不要、即時ファンデッドアカウント</dd>',
											'ko_KR' => '<dt>프로세스</dt><dd>즉시 자금 제공, 챌린지 단계 없음</dd>',
											'km'    => '<dt>ដំណើរការ</dt><dd>ផ្តល់ទុនភ្លាមៗ មិនចាំបាច់មានវគ្គ Challenge</dd>',
											'bn_BD' => '<dt>প্রক্রিয়া</dt><dd>তাৎক্ষণিক ফান্ডিং, কোনো চ্যালেঞ্জ ধাপ নেই</dd>',
											'ur'    => '<dt>عملی طریقہ</dt><dd>فوری فنڈنگ، چیلنج مرحلے کی ضرورت نہیں</dd>',
											'hk'    => '<dt>流程</dt><dd>即時提供資金，無需挑戰階段</dd>',
											'ir'    => '<dt>فرآیند</dt><dd>تأمین سرمایه فوری، بدون نیاز به مرحله چالش</dd>',
											'pt_BR' => '<dt>Processo</dt><dd>Financiamento imediato, sem necessidade de fase de desafio</dd>',
										];
										$locale = cc_block_locale($texts);
										echo $texts[$locale] ?? '<dt>Process</dt><dd>Immediate funding, no need for challenge phase</dd>';
									?>
								</dl>
								<dl>
									<?php
										$texts = [
											'zh_CN' => '<dt>账户类型</dt><dd>专注于单一资产类型，以优化绩效奖励</dd>',
											'tr_TR' => '<dt>Hesap Türü</dt><dd>Performansa dayalı ödülleri optimize etmek için tek bir varlık türüne odaklanır</dd>',
											'fr_FR' => '<dt>Type de Compte</dt><dd>Axé sur un seul type d’actif afin d’optimiser les récompenses basées sur la performance</dd>',
											'es_ES' => '<dt>Tipo de Cuenta</dt><dd>Enfocado en un solo tipo de activo para optimizar las recompensas basadas en el rendimiento</dd>',
											'th'    => '<dt>ประเภทบัญชี</dt><dd>มุ่งเน้นสินทรัพย์ประเภทเดียวเพื่อเพิ่มประสิทธิภาพผลตอบแทนตามผลงาน</dd>',
											'ru_RU' => '<dt>Тип Счёта</dt><dd>Сосредоточен на одном типе актива для оптимизации вознаграждений, основанных на результатах</dd>',
											'ja'    => '<dt>アカウントタイプ</dt><dd>特定資産に特化したアカウント</dd>',
											'ko_KR' => '<dt>계정 유형</dt><dd>성과 기반 리워드를 최적화하기 위해 특정 자산 유형에 집중합니다</dd>',
											'km'    => '<dt>ប្រភេទគណនី</dt><dd>ផ្តោតលើប្រភេទទ្រព្យសម្បត្តិមួយ ដើម្បីបង្កើនប្រសិទ្ធភាពរង្វាន់ផ្អែកលើលទ្ធផល</dd>',
											'bn_BD' => '<dt>অ্যাকাউন্টের ধরন</dt><dd>পারফরম্যান্স-ভিত্তিক রিওয়ার্ড অপ্টিমাইজ করার জন্য একটি নির্দিষ্ট অ্যাসেট টাইপে ফোকাস করা হয়</dd>',
											'ur'    => '<dt>اکاؤنٹ کی قسم</dt><dd>کارکردگی پر مبنی انعام کو بہتر بنانے کے لیے ایک مخصوص اثاثہ کی قسم پر توجہ دی جاتی ہے</dd>',
											'hk'    => '<dt>帳戶類型</dt><dd>專注於單一資產類型，以優化績效獎勵</dd>',
											'ir'    => '<dt>نوع حساب</dt><dd>متمرکز بر یک نوع دارایی خاص برای بهینه‌سازی پاداش مبتنی بر عملکرد</dd>',
											'pt_BR' => '<dt>Tipo de Conta</dt><dd>Focado em um tipo específico de ativo para otimizar recompensas baseadas em desempenho</dd>',
										];
										$locale = cc_block_locale($texts);
										echo $texts[$locale] ?? '<dt>Account Type</dt><dd>Focused on one specific asset type to optimize performance-based rewards</dd>';
									?>
								</dl>
								<dl>
									<?php
										
										$texts = [
											'th' => '<dt>ความยืดหยุ่นในการเทรด</dt>
																		<dd>ไม่มีข้อจำกัดสำหรับการเทรดข่าว สวิง หรือสแคลป์ และไม่มีข้อจำกัดขนาดสัญญา</dd>',
											'zh_CN' => '<dt>交易灵活性</dt>
																		<dd>新闻交易、波段交易或剥头皮交易均无限制，也没有合约规模限制</dd>',
											'tr_TR' => '<dt>İşlem Esnekliği</dt>
																		<dd>Haber, swing veya scalp işlemlerinde sınır yok, kontrat büyüklüğü limiti yok</dd>',
											'fr_FR' => '<dt>Flexibilité de trading</dt>
																		<dd>Aucune limite pour le trading sur news, swing ou scalp, aucune limite de taille de contrat</dd>',
											'es_PE' => '<dt>Flexibilidad de Trading</dt>
																		<dd>Sin límites en news, swing o scalp trading, sin restricciones de tamaño de contrato</dd>',
											'ru_RU' => '<dt>Гибкость торговли</dt>
																		<dd>Без ограничений на торговлю по новостям, свинг или скальпинг, без ограничений размера контракта</dd>',
											'ja' => '<dt>取引の柔軟性</dt>
																		<dd>ニュース・スイング・スキャルプ取引無制限、ロットサイズ制限なし</dd>',
											'ko_KR' => '<dt>거래 유연성</dt>
																		<dd>뉴스, 스윙, 스캘핑 거래에 제한 없음, 계약 규모 제한 없음</dd>',
											'km' => '<dt>ភាពបត់បែនក្នុងការជួញដូរ</dt>
																		<dd>គ្មានដែនកំណត់សម្រាប់ការជួញដូរព័ត៌មាន Swing ឬ Scalp និងគ្មានដែនកំណត់ទំហំកុងត្រា</dd>',
											'bn_BD' => '<dt>ট্রেডিং নমনীয়তা</dt>
																		<dd>নিউজ, সুইং বা স্ক্যাল্প ট্রেডিংয়ে কোনো সীমা নেই, কন্ট্রাক্ট সাইজেরও সীমা নেই</dd>',
											'hk' => '<dt>交易靈活性</dt>
																		<dd>新聞交易、波段或剝頭皮交易均無限制，也沒有合約規模限制</dd>',
											'ir' => '<dt>انعطاف‌پذیری در معامله</dt>
																		<dd>بدون محدودیت برای معامله در اخبار، سوئینگ یا اسکالپ و بدون محدودیت اندازه قرارداد</dd>',
											'id' => '<dt>Fleksibilitas Trading</dt>
																		<dd>Tidak ada batasan untuk trading news, swing, atau scalp, tanpa batas ukuran kontrak</dd>',
											'pt_BR' => '<dt>Flexibilidade de trading</dt>
																		<dd>Sem limite para trading de notícias, swing ou scalp, sem limite de tamanho de contrato</dd>',
											'ur' => '<dt>ٹریڈنگ میں لچک</dt><dd>نیوز، سوئنگ یا اسکیلپ ٹریڈنگ پر کوئی پابندی نہیں، کنٹریکٹ سائز کی کوئی حد نہیں</dd>',
										];
										$locale = cc_block_locale($texts);echo $texts[$locale] ?? '<dt>Trading Flexibility</dt>
																		<dd>No limit on news, swing, or scalp trading, no contract size limits</dd>';
									?>
								</dl>
								<dl>
									<?php
										$texts = [
											'zh_CN' => '<dt>绩效奖励分成</dt><dd>账户满足条件后即可获得最高 90% 的奖励分成</dd>',
											'tr_TR' => '<dt>Performansa Dayalı Ödül Paylaşımı</dt><dd>Koşullar sağlandığında hemen %90\'a kadar ödül paylaşımı</dd>',
											'fr_FR' => '<dt>Partage de Récompenses Basées sur la Performance</dt><dd>Jusqu’à 90 % de partage dès que les conditions sont remplies</dd>',
											'es_ES' => '<dt>Reparto de Recompensas basadas en el Rendimiento</dt><dd>Hasta un 90% de reparto en cuanto se cumplan las condiciones</dd>',
											'th'    => '<dt>การแบ่งผลตอบแทนตามผลงาน</dt><dd>สามารถรับผลตอบแทนสูงสุดถึง 90% ทันทีเมื่อครบเงื่อนไข</dd>',
											'ru_RU' => '<dt>Распределение вознаграждений по результатам</dt><dd>До 90% распределения сразу после выполнения условий</dd>',
											'ja'    => '<dt>報酬シェア</dt><dd>条件達成後すぐに最大90%の報酬シェア</dd>',
											'ko_KR' => '<dt>성과 기반 리워드 분배</dt><dd>조건 충족 시 즉시 최대 90%까지 분배</dd>',
											'km'    => '<dt>ការចែករំលែករង្វាន់ផ្អែកលើលទ្ធផល</dt><dd>អាចទទួលបានរហូតដល់ 90% ភ្លាមៗនៅពេលបំពេញលក្ខខណ្ឌ</dd>',
											'bn_BD' => '<dt>পারফরম্যান্স-ভিত্তিক রিওয়ার্ড শেয়ারিং</dt><dd>শর্ত পূরণ হলেই সর্বোচ্চ ৯০% রিওয়ার্ড শেয়ারিং</dd>',
											'ur'    => '<dt>کارکردگی پر مبنی انعام کی تقسیم</dt><dd>شرائط پوری ہوتے ہی فوری طور پر 90% تک انعام کی تقسیم</dd>',
											'hk'    => '<dt>績效獎勵分成</dt><dd>達成條件後即可獲得最高90%的獎勵分成</dd>',
											'ir'    => '<dt>تقسیم پاداش مبتنی بر عملکرد</dt><dd>با تحقق شرایط، تا ۹۰٪ پاداش قابل دریافت است</dd>',
											'pt_BR' => '<dt>Compartilhamento de Recompensas Baseadas em Desempenho</dt><dd>Até 90% de compartilhamento assim que as condições forem atendidas</dd>',
										];
										$locale = cc_block_locale($texts);
										echo $texts[$locale] ?? '<dt>Performance-based Rewards Sharing</dt><dd>Reward sharing up to 90% as soon as the account meets conditions</dd>';
									?>
								</dl>
								<dl>
									<?php
										
										$texts = [
											'th' => '<dt>ตัวเลือกการลองใหม่</dt>
																		<dd>N/A</dd>',
											'zh_CN' => '<dt>重试选项</dt>
																		<dd>N/A</dd>',
											'tr_TR' => '<dt>Tekrar Deneme Seçeneği</dt>
																		<dd>N/A</dd>',
											'fr_FR' => '<dt>Option de nouvelle tentative</dt>
																		<dd>N/A</dd>',
											'es_PE' => '<dt>Opción de Reintento</dt>
																		<dd>N/A</dd>',
											'ru_RU' => '<dt>Опция повторной попытки</dt>
																		<dd>N/A</dd>',
											'ja' => '<dt>再挑戦オプション</dt>
																		<dd>N/A</dd>',
											'ko_KR' => '<dt>재도전 옵션</dt>
																		<dd>N/A</dd>',
											'km' => '<dt>ជម្រើសសាកល្បងម្ដងទៀត</dt>
																		<dd>N/A</dd>',
											'bn_BD' => '<dt>পুনরায় চেষ্টা করার অপশন</dt>
																		<dd>N/A</dd>',
											'hk' => '<dt>重試選項</dt>
																		<dd>N/A</dd>',
											'ir' => '<dt>گزینه تلاش مجدد</dt>
																		<dd>N/A</dd>',
											'id' => '<dt>Opsi Coba Lagi</dt>
																		<dd>N/A</dd>',
											'pt_BR' => '<dt>Opção de nova tentativa</dt>
																		<dd>N/A</dd>',
											'ur' => '<dt>دوبارہ کوشش کا آپشن</dt><dd>لاگو نہیں</dd>',
										];
										$locale = cc_block_locale($texts);echo $texts[$locale] ?? '<dt>Retry Option</dt>
																		<dd>N/A</dd>';
									?>
								</dl>
								<dl>
									<?php
										$texts = [
											'zh_CN' => '<dt>适合人群</dt><dd>寻求灵活性和绩效奖励的资深交易者</dd>',
											'tr_TR' => '<dt>En Uygun Seçenek</dt><dd>Esneklik ve performansa dayalı ödüller arayan deneyimli traderlar için</dd>',
											'fr_FR' => '<dt>Idéal Pour</dt><dd>Traders expérimentés recherchant flexibilité et récompenses basées sur la performance</dd>',
											'es_ES' => '<dt>Mejor Opción Para</dt><dd>Traders experimentados que buscan flexibilidad y recompensas basadas en el rendimiento</dd>',
											'th'    => '<dt>เหมาะสำหรับ</dt><dd>เทรดเดอร์ที่มีประสบการณ์ที่ต้องการความยืดหยุ่นและผลตอบแทนตามผลงาน</dd>',
											'ru_RU' => '<dt>Лучший вариант для</dt><dd>Опытных трейдеров, ищущих гибкость и вознаграждение на основе результатов</dd>',
											'ja'    => '<dt>おすすめ対象</dt><dd>即時資金提供と柔軟性を求める経験豊富なトレーダー</dd>',
											'ko_KR' => '<dt>추천 대상</dt><dd>유연성과 성과 기반 리워드를 원하는 경험 많은 트레이더</dd>',
											'km'    => '<dt>ជម្រើសល្អបំផុតសម្រាប់</dt><dd>អ្នកជួញដូរដែលមានបទពិសោធន៍ ស្វែងរកភាពបត់បែន និងរង្វាន់ផ្អែកលើលទ្ធផល</dd>',
											'bn_BD' => '<dt>সর্বোত্তম জন্য</dt><dd>অভিজ্ঞ ট্রেডার যারা নমনীয়তা এবং পারফরম্যান্স-ভিত্তিক রিওয়ার্ড খুঁজছেন</dd>',
											'ur'    => '<dt>بہترین انتخاب برائے</dt><dd>تجربہ کار ٹریڈرز جو لچک اور کارکردگی پر مبنی انعام چاہتے ہیں</dd>',
											'hk'    => '<dt>最適合</dt><dd>尋求靈活性和績效獎勵的資深交易者</dd>',
											'ir'    => '<dt>بهترین گزینه برای</dt><dd>معامله‌گران باتجربه که به دنبال انعطاف‌پذیری و پاداش مبتنی بر عملکرد هستند</dd>',
											'pt_BR' => '<dt>Melhor Para</dt><dd>Traders experientes que buscam flexibilidade e recompensas baseadas em desempenho</dd>',
										];
										$locale = cc_block_locale($texts);
										echo $texts[$locale] ?? '<dt>Best Option For</dt><dd>Experienced traders seeking flexibility and performance-based rewards</dd>';
									?>
								</dl>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="btn center">
				<p><a href="<?php echo pll_home_url(); ?>instant/"><span>
					<?php
						
						$texts = [
							'th' => 'สำรวจ Instant Package',
							'zh_CN' => '探索 Instant 套餐',
							'tr_TR' => 'Instant Paketini Keşfet',
							'fr_FR' => 'Découvrir le package Instant',
							'es_PE' => 'Conocer el Fondeo Instantáneo',
							'es_ES' => 'Explorar el paquete Instant',
							'ru_RU' => 'Изучить пакет Instant',
							'ja' => 'Instant Packageを見る',
							'ko_KR' => 'Instant 패키지 살펴보기',
							'km' => 'ស្វែងយល់ពី Instant Package',
							'bn_BD' => 'Instant প্যাকেজ অন্বেষণ করুন',
							'hk' => '探索 Instant 套餐',
							'ir' => 'بررسی بسته Instant',
							'ur' => 'انسٹنٹ پیکیج کو دریافت کریں',
							'id' => 'Jelajahi Paket Instant',
							'pt_BR' => 'Explorar o pacote Instant',
						];
						$locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Explore Instant Package';
					?>
				</span></a></p>
			</div>
		</div>
	</section>
	<!-- End Features -->