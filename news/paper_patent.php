<?php
include_once('./_common.php');

if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
	include_once(G5_THEME_MOBILE_PATH.'/index.php');
	return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
	<div id="sub_top04">
		<div class="sub_tit">
			<img src="/images/sub/img_subtop0404tit.png" alt="Inquiry">
		</div>
	</div>
	<div class="bread">
		<div class="home">
			<span class="ls0">HOME</span> <span>&gt;</span> 뉴스센터 <span>&gt;</span> <span class="bold">더마프로 학술활동</span>
		</div>
	</div>
	
	<ul class="sub_top_menu four">
		<li><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=news">더마프로 뉴스</a></li>
		<li class="on"><a href="/news/paper_patent.php">더마프로 학술활동</a></li>
		<?php if ($config['cf_1']) { ?>
			<li><a href="<?php echo G5_DATA_URL; ?>/file/config/<?php echo $config['cf_1']; ?>" target="_blank">E-브로셔</a></li>
		<?php } ?>
		<li><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=agency">관련기관</a></li>
	</ul>
	<div id="container">
		<div class="con">
			<div class="tit_bg">
				<h3>더마프로 학술활동</h3>
			</div>
			<div class="paper">
				<div class="comm-desc">
					<p class="ti-tit">
						<span class="bar"></span>
						연구 논문</p>
					<p class="ti-desc">
						<span class="num">1.</span>
						Twelve-point scale grading system of scanning electron 						microscopic examination to investigate subtle changes in damaged hair surface. Lee SY, Choi AR, Baek JH, Kim HO, Shin MK, Koh JS. <span class="italic">Skin Research and Technology</span> 22(4):406-411. Nov. 2016.
					</p>
					<p class="ti-desc">
						<span class="num">2.</span>
						Impact of chemical peeling combined with negative pressure on human skin. Kim SJ, Kang IJ, Shin MK, Jeong KH, Baek JH, Koh JS, Lee SJ. <span class="italic">International Journal of Cosmetic Science</span> 38(5):440-443. Oct. 2016
					</p>
					<p class="ti-desc">
					<span class="num">3.</span>	A proposal of a standardized protocol to evaluate waterproof effect of eyeliner and mascara. Kim MJ, Seo YK, Boo YC, Koh JS. <span class="italic">International Journal of Cosmetic Science.</span> 38(3):266-271. Jun. 2016. 
					</p>
					<p class="ti-desc">
					<span class="num">4.</span>	Facial skin physiology recovery kinetics during 180 min post-washing with a cleanser. Eo J, Seo YK, Baek JH, Choi AR, Shin MK and Koh JS. <span class="italic">Skin Research and Technology.</span> 22(2) 148–151. May 2016.
					</p>
					<p class="ti-desc">
					<span class="num">5.</span>	Analysis of comedone, sebum and porphyrin on the face and body for comedogenicity assay. Baek JH, An SM, Choi KM, Jung MK, Shin MK, Koh JS. <span class="italic">Skin Research and Technology.</span> 22(2):164-169. May 2016. 
					</p>
					<p class="ti-desc">
					<span class="num">6.</span>	Safety and Efficacy Assessment for Cosmetics in Human skin. Baek JH, An SM, Koh JS. <span class="italic">Fragnance Jounal of Korea.</span> Mar. 2016.
					</p>
					<p class="ti-desc">
					<span class="num">7.</span>	How much related to skin wrinkles between facial and body site? Age-related changes in skin wrinkle on the knee assessed by skin bioengineering technique. Yoo MA, Seo YK, Shin MK and Koh JS. <span class="italic">Skin Research and Technology.</span> 22(1) 69-74. Feb. 2016.
					</p>
					<p class="ti-desc">
					<span class="num">8.</span>	Itching sensation and neuronal sensitivity of the skin. Ham H, An SM, Lee EJ, Lee E, Kim HO, Koh JS. <span class="italic">Skin Research and Technology.</span> 22(1):104-107. Feb. 2016. 
					</p>
					<p class="ti-desc">
					<span class="num">9.</span>	The Atopic Dermatitis Antecubital Severity score: validity, reliability, and sensitivity to change in patients with atopic dermatitis. Baek JH, Park CW, Choi KM, Yang YS, Lee SY, Koh JS, Chung BY, Kim HO, Park GH. <span class="italic">International Journal of Dermatology.</span> 54(12):1382-1389. Dec. 2015. 
					</p>
					<p class="ti-desc">
						<span class="num">10.</span> The effect of physically applied alpha hydroxyl acids on the skin pore and comedone. Kim SJ, Baek JH, Koh JS, Bae MI, Lee SJ and Shin MK. <span class="italic">International Journal of Cosmetic Science.</span> 37(5): 519–525, Oct. 2015.  
					</p>
					<p class="ti-desc">
						<span class="num">11.</span> A study of the human skin-whitening effects of resveratryl triacetate. Ryu JH, Seok JK, An SM, Baek JH, Koh JS, Boo YC. <span class="italic">Archives of Dermatological Research.</span> 307(3):239-247. Apr. 2015. 
					</p>
					<p class="ti-desc">
						<span class="num">12.</span> Dermal matrix affects translucency of incident light on the skin. Kim HJ, Baek JH, Eo JE, Choi KM, Shin MK, Koh JS. <span class="italic">Skin Research and Technology.</span> 21(1):41-46. Feb. 2015. 
					</p>
					<p class="ti-desc">
						<span class="num">13.</span> The seasonal variation in skin hydration, sebum, scaliness, brightness and elasticity in Korean females. Nam GW, Baek JH, Koh JS, Hwang JK. <span class="italic">Skin Research and Technology.</span> 21(1):1-8. Feb. 2015.
					</p>
					<p class="ti-desc">
						<span class="num">14.</span> Pore volume is most highly correlated with the visual assessment of skin pores. Kim SJ, Shin MK, Back JH, Koh JS. <span class="italic">Skin Research and Technology.</span> 20(4):429-434. Nov. 2014. 
					</p>
					<p class="ti-desc">
						<span class="num">15.</span> The quantitative analysis of spreadability, coverage, and adhesion effect after application of the base make-up product. Lee SY, Baek JH, Shin MK, Koh JS. <span class="italic">Skin Research and Technology.</span> 20(3):341-346. Aug. 2014.
					</p>
					<p class="ti-desc">
						<span class="num">16.</span> Bioengineering methods and instrumentation of the skin color. Baek JH, Shin MK, Koh JS. <span class="italic">Korean Journal of Cosmetic Dermatology.</span> 11:9-13. Jun. 2014.
					</p>
					<p class="ti-desc">
						<span class="num">17.</span> A quantitative evaluation method of skin texture affected by skin ageing using replica images of the cheek. Ryu JH, Seo YK, Boo YC, Chang MY, Kwak TJ, Koh JS. International Journal of Cosmetic Science. 36(3):247-252. Jun. 2014.
					</p>
					<p class="ti-desc">
						<span class="num">18.</span> KHG26792 Inhibits Melanin Synthesis in Mel-Ab Cells and a Skin Equivalent Model. Li HL, Kim JD, Hahn HG, Yun J, Jeong HS, Yun HY, Baek KJ, Kwon NS, in YS, Park KC, Kim DS. <span class="italic">Korean J Physiol Pharmacol.</span> 18: 249-254, Jun. 2014.
					</p>
					<p class="ti-desc">
						<span class="num">19.</span> A validation study to find highly correlated parameters with visual assessment for clinical evaluation of cosmetic anti-cellulite products. Yoo MA, Seo YK, Ryu JH, Back JH, Koh JS. <span class="italic">Skin Research and Technology.</span> 20(2):200-207. May 2014. 
					</p>
					<p class="ti-desc">
						<span class="num">20.</span> Screening for anti-inflammatory activities in extracts from Korean herb medicines. An SM, Kim HG, Choi EJ, Hwang HH, Lee E, Baek JH, Boo YC, Koh JS. <span class="italic">Journal of the Society of Cosmetic Scientists of Korea.</span> 40(1):95-108 Mar. 2014. 
					</p>
					<p class="ti-desc">
						<span class="num">21.</span> Primary irritation index and safety zone of cosmetics: retrospective analysis of skin patch tests in 7440 Korean women during 12 years. An SM, Ham H, Choi EJ, Shin MK, An SS, Kim HO and Koh JS. <span class="italic">International Journal of Cosmetic Science.</span> 36(1): 62-67. Feb. 2014.
					</p>
					<p class="ti-desc">
						<span class="num">22.</span> The 31-kDa caspase-generated cleavage product of p130Cas antagonizes the action of MyoD during myogenesis. Jeong DE, Lee EK, Song WK, Kim W. <span class="italic">Biochemical and Biophysical Research Communications.</span> 21;444(4):509-513. Feb. 2014. 
					</p>
					<p class="ti-desc">
						<span class="num">23.</span> New pressure-activated compartmented oxygen indicator for intelligent food packaging. Jang NY, Won KH. <span class="italic">International Journal of Food Science and Technology.</span> 49:650-654, 2014. 
					</p>
					<p class="ti-desc">
						<span class="num">24.</span> Biological evaluation of novel derivatives of the orange pigments from Monascus sp. as inhibitors of melanogenesis. Jo DJ, Choe DK, Nam KH, Shin CS. <span class="italic">Biotechnol Lett.</span> 36:1605-1613, 2014. 
					</p>
					<p class="ti-desc">
						<span class="num">25.</span> Immunomodulatory Effects of ZYM-201 on LPS-stimulated B Cells. Lee YE, Kim SC, Jung WJ, Lee HS, Kim MY. <span class="italic">Immune Network.</span> 14(5):260-264, 2014. 
					</p>
					<p class="ti-desc">
						<span class="num">26.</span> Myriocin, a serine palmitoyltransferase inhibitor, increases melanin synthesis in Mel-Ab cells and a skin equivalent model. Li HL, Yun HY, Baek KJ, Kwon NS, Park KC, Kim DS. <span class="italic">Pharmazie.</span> 69: 187-191, 2014. 
					</p>
					<p class="ti-desc">
						<span class="num">27.</span> Characterization of microthermal zones induced by fractional radiofrequency using reflectance confocal microscopy: A preliminary study. Shin MK, Park JM, Lim HK, Choi JH, Baek JH, Kim HJ, Koh JS, Lee MH. <span class="italic">Lasers in Surgery and Medicine.</span> 45(9):503-508. Oct. 2013
					</p>
					<p class="ti-desc">
						<span class="num">28.</span> Investigation of the Study Plan and Statistical Method of Functional Cosmetics on Human Skin. Seo YK, Koh JS. Lee WC. <span class="italic">Journal of the Society of Cosmetic Scientists of Korea.</span> 39(2):105-115. Jun. 2013.
					</p>
					<p class="ti-desc">
						<span class="num">29.</span> Acute Modulations in Stratum Corneum Permeability Barrier Function Affect Claudin Expression and Epidermal Tight Junction Function via Changes of Epidermal Calcium Gradient. Baek JH, Lee SE, Choi KJ, Choi EH, Lee SH. <span class="italic">Yonsei Medical Journal.</span> 1;54(2):523-528. Mar. 2013. 
					</p>
					<p class="ti-desc">
						<span class="num">30.</span> Analysis of the temporal change in biophysical parameters after fractional laser treatments using reflectance confocal microscopy. Shin MK, Kim MJ, Baek JH, Yoo MA, Koh JS, Lee SJ, Lee MH. <span class="italic">Skin Research and Technology.</span> 19(1):515-520. Feb. 2013. 
					</p>
					<p class="ti-desc">
						<span class="num">31.</span> Assessment of the Breast-Firmming Effects of a Cosmetic Preparation with Moiré Tophography in Combination with 2D and 3D Digital Image Analyses. Seo YK, Yoo MA, Ryu JH, Kim SJ, Cho SA, Nam GW, Cho JC, Boo YC, Koh JS. <span class="italic">Journal of the Society of Cosmetic Scientists of Korea.</span> 38(4):289-296. Dec. 2012. 
					</p>
					<p class="ti-desc">
						<span class="num">32.</span> Reduction of facial wrinkles depth by sleeping on copper oxide-containing pillowcases: a double blind, placebo controlled, parallel, randomized. Baek JH, Yoo MA, Koh JS, Borkow G. <span class="italic">Journal of Cosmetic Dermatology.</span> 11(3):193-200. Sep. 2012. 
					</p>
					<p class="ti-desc">
						<span class="num">33.</span> Cosmetic efficacy evaluation of an anti-acne cream using the 3D image analysis system. Choi KM, Kim SJ, Baek JH, Kang SJ, Boo YC, Koh JS. <span class="italic">Skin Research and Technology.</span> 18(2):192-198. Sep. 2012. 
					</p>
					<p class="ti-desc">
						<span class="num">34.</span> Effects of Dermal Cell Combination on the Formation of Basement membrane and Epidermis in Skin Equivalents. Li HL, Jeong HS, Kim JD, Yun HY, Baek KJ, Kwon NS, Min YS, Park KC, Kim DS. <span class="italic">Journal of the Society of Cosmetic Scientists of Korea.</span> 38(3):219-224 Sep. 2012.
					</p>
					<p class="ti-desc">
						<span class="num">35.</span> Instrumental Assessments of Sub-clinical Skin Reactions induced by Cosmetic Ingredients. An SM, Lee MY, Baek JH, Ham H, Boo YC, Koh JS. <span class="italic">Journal of the Society of Cosmetic Scientists of Korea.</span> 38(1):43-50. Mar. 2012.
					</p>
					<p class="ti-desc">
						<span class="num">36.</span> Inhibition of melanogenesis by Xanthium strumarium L. Li HL, Min YS, Park KC, Kim DS. <span class="italic">Biosci. Biotechnol. Biochem.</span> 76(4), 767-771, 2012. 
					</p>
					<p class="ti-desc">
						<span class="num">37.</span> Effects of a new mild shampoo for preventing hair loss in Asian by a simple hand-held phototrichogram technique. Baek JH, Lee SY, Yoo M, Park WS, Lee SJ, Boo YC, Koh JS. <span class="italic">International Journal of Cosmetic Science.</span> 33(6):491-496. Dec. 2011. 
					</p>
					<p class="ti-desc">
						<span class="num">38.</span> Phosphatidylcholine induces apoptosis of 3T3-L1 adipocytes. Li HL, Lee JH, Kim SY, Yun HY, Baek KJ, Kwon KS, Yoon KS, Jeong JH, Kim DS. <span class="italic">Journal of Biomedical Science.</span> 7:18:91, Dec. 2011. 
					</p>
					<p class="ti-desc">
						<span class="num">39.</span> Comparison of the antimelanogenic effects of p-coumaric acid and its methyl ester and their skin permeabilities. Song K, An SM, Kim M, Koh JS, Boo YC. Journal of Dermatological Science. 63(1):17-22. Jul. 2011. 
					</p>
					<p class="ti-desc">
						<span class="num">40.</span> Relationship between clinical features of facial dry skin and biophysical parameters in Asians. Baek JH, Lee MY, Koh JS. <span class="italic">International Journal of Cosmetic Science.</span> 33(3):222-227. Jun. 2011.
					</p>
					<p class="ti-desc">
						<span class="num">41.</span> Antioxidative Activities and Antiaging Effects of Geum aleppicum Jacq. Extracts. Kim MJ, Yang HG, Park SN. <span class="italic">Journal of the Society of Cosmetic Scientists of Korea.</span> 37(2):191-198. Jun. 2011. 
					</p>
					<p class="ti-desc">
						<span class="num">42.</span> Effects of p-coumaric acid on erythema and pigmentation of human skin exposed to ultraviolet radiation. Seo YK, Kim SJ, Boo YC, Baek JH, Lee SH, Koh JS. <span class="italic">Clinical and Experimental Dermatology.</span> 36(3):260-266. Apr. 2011. 
					</p>
					<p class="ti-desc">
						<span class="num">43.</span> Complementary and Alternative Medicine - Botanical Cosmeceuticals. Chapter 2. Safety testing of cosmetics. Koh JS. Transworld Research Network. 23-47. 2011. 
					</p>
					<p class="ti-desc">
						<span class="num">44.</span> Effects of plant extract-containing creams on UVB radiation-induced inflammatory responses in mice. An SM, Lee SJ, Koh J-S, Park KM, Boo YC. <span class="italic">Journal of the Society of Cosmetic Scientists of Korea.</span> 36(4):271-280. 2010. 
					</p>
					<p class="ti-desc">
						<span class="num">45.</span> p-Coumaric acid not only inhibits human tyrosinase activity in vitro but also melanogenesis in cells exposed to UVB. An SM, Koh J-S, Boo YC. <span class="italic">Phytotherqpy Research.</span> 24:1175-1180. 2010. 
					</p>
					<p class="ti-desc">
						<span class="num">46.</span> Inhibition of melanogenesis by tyrosinase siRNA in human melanocytes. An SM, Koh J-S Boo YC. BMB <span class="italic">reports.</span>31;42(3):178-183. Mar. 2009. 
					</p>
					<p class="ti-desc">
						<span class="num">47.</span> Flavonoids, taxifolin and luteolin attenuate cellular melanogenesis despite increasing tyrosinase protein levels. An SM, Kim HJ, Kim JE, Boo YC. <span class="italic">Phytotherapy Research.</span> 22(9):1200-1207. Sep. 2008. 
					</p>
					<p class="ti-desc">
						<span class="num">48.</span> p-Coumaric acid, a constituent of Sasa quelpaertensis Nakai, inhibits cellular melanogenesis stimulated by alpha-melanocyte stimulating hormone. An SM, Lee SI, Choi SW, Moon SW, Boo YC. <span class="italic">British Journal of Dermatology.</span> 159(2):292-299. Aug. 2008. 
					</p>
					<p class="ti-desc">
						<span class="num">49.</span> Comparision between ultrasonography (Dermascan C version 3) and transparency profilometry (Skin Visiometer SV600). Lee HK, Seo YK, Baek JH, Koh JS. <span class="italic">Skin Research and Technology.</span> 14(1):8-12. Feb. 2008. 
					</p>
					<p class="ti-desc">
						<span class="num">50.</span> A dual mechanism of 4-hydroxy-5-methyl-3[2H]-furanone inhibiting cellular melanogenesis. An SM, Kim HJ, Boo YC. <span class="italic">Journal of Cosmetic Science.</span>59(2):117-125. 2008.
					</p>
					<p class="ti-desc">
						<span class="num">51.</span> Electrical assessments of skin moisturization. Baek JH, Koh JS. <span class="italic">Korean Journal of Aesthetics and Cosmetics. 4(1):147-154. 2006. 
					</p>
					<p class="ti-desc">
						<span class="num">52.</span> Correlation between skin roughness and dermal density of skin wrinkle evaluation. Lee HK, Baek JH, Koh JS, Park DH, Lee JS, Jung ES. <span class="italic">Journal of the Society of Cosmetic Scientists of Korea.</span> 32(2):123-127. Jun. 2006. 
					</p>
					<p class="ti-desc">
						<span class="num">53.</span> Safety evaluation of cosmetics on human. Koh JS. <span class="italic">Korean Journal of Cosmetic Dermatology.</span> 2(1):56-66. 2005. 
					</p>
					<p class="ti-desc">
						<span class="num">54.</span> Evaluation of age-dependent crow's feet in korean women. Lee MY, Kim EJ, Lee HK, Seo YK, Lee MS, Koh JS. <span class="italic">Journal of the Society of Cosmetic Scientists of Korea.</span> 30(1):85-91. May 2004. 
					</p>
					<p class="ti-desc">
						<span class="num">55.</span> Cigarette smoking associated with premature facial wrinkling: image analysis of facial skin replicas. Koh JS, Kang H, Choi SW, Kim HO. <span class="italic">International Journal of Dermatology.</span> 41(1):21-27. Jan. 2002. 
					</p>
					<p class="ti-desc">
						<span class="num">56.</span> Skin characteristics of normal korean subjects according to sex and site using non-invasive bioengineering methods. Koh JS, Chae KS, Kim HO. <span class="italic">Korean journal of dermatology.</span> 36(5):855-864. 1998. 
					</p>
					<p class="ti-desc">
						<span class="num">57.</span> In vitro test using chorioallantoic membrane vascular assay to assess the irritancy potential of surfactants. Koh JS, An SS, Park JH. <span class="italic">Journal of the Society of Cosmetic Scientists of Korea.</span> 21(1):67-83. 1995.  
					</p>
					<p class="ti-desc">
						<span class="num">58.</span> Observation of sebum, moisture content and microtopography of different aged skin for classification of facial skin types. Koh JS. <span class="italic">Journal of the Society of Cosmetic Scientists of Korea</span> 15(1):63-70, 1989. 
					</p>
				</div>
				<div class="comm-desc mt40">
					<p class="ti-tit">
						<span class="bar"></span>
						공동 연구 논문
					</p>
					<p class="ti-desc">
						<span class="num">1.</span>	Scutellaria radix Extract as a Natural UV Protectant for Human Skin. Seok JK, Kwak JY, Choi GW, An SM, Kwak JH, Seo HH, Suh HJ, Boo YC. <span class="italic">Phytotherapy Research.</span> 30(3):374-9. Mar. 2016. 
					</p>
					<p class="ti-desc">
						<span class="num">2.</span>	4-n-butylresorcinol dissolving microneedle patch for skin depigmentation: a randomized, double-blind, placebo-controlled trial. Kim S, Yang H, Kim M, Baek JH, Kim SJ, An SM, Koh JS, Seo R, Jung H. <span class="italic">Journal of Cosmetic Dermatology.</span> 15(1):16-23. Mar. 2016. 
					</p>
					<p class="ti-desc">
						<span class="num">3.</span>	Evaluation of the anti-wrinkle effect of an ascorbic acid-loaded dissolving microneedle patch via a double-blind, placebo-controlled clinical Study. Lee C, Yang H, Kim S, Kim M, Kang H, Kim N, An S, Koh J, Jung H. <span class="italic">International Journal of Cosmetic Science.</span> 38(4):375-81. Aug. 2016. 
					</p>
					<p class="ti-desc">
						<span class="num">4.</span>	Clinical evidence of effects of Lactobacillus plantarum HY7714 on skin aging: a randomized, double blind, placebo-controlled study. Lee DE, Huh CS, Ra J, Choi ID, Jeong JW, Kim SH, Ryu JH, Seo YK, Koh JS, Lee JH, Sim JH, Ahn YT. <span class="italic">Journal of Microbiology and Biotechnology.</span> 28;25(12):2160-8. Dec. 2015. 
					</p>
					<p class="ti-desc">
						<span class="num">5.</span>	Identification of a possible susceptibility locus for UVB-induced skin tanning phenotype in Korean females using genomewide association study. Kwak TJ, Chang YH, Shin YA, Shin JM, Kim JH, Lim SK, Lee SH, Lee MG, Yoon TJ, Kim CD, Lee JH, Koh JS, Seo YK, Chang MY, Lee Y. <span class="italic">Experimental Dermatology.</span> 24(12):942-6. Dec. 2015. 
					</p>
					<p class="ti-desc">
						<span class="num">6.</span>	Cross-linked aggregation of glutamate decarboxylase to extend its activity range toward alkaline Ph. Thu Huong Dinh,Jang YN, Karen A McDonaldb, Won WH. J <span class="italic">Chem Technol Biotechnol.</span> 90: 2100-2105. 2015. 
					</p>
					<p class="ti-desc">
						<span class="num">7.</span>	Pseudoceramide stimulates peroxisome proliferator-activated receptor-α expression in a murine model of atopic dermatitis: molecular basis underlying the anti-inflammatory effect and the preventive effect against steroid-induced barrier impairment. Lee SE, Jeong MK, Oh SJ, Jeong SK, Lee SH. <span class="italic">Arch Dermatol Res.</span> 307:781-792. 2015. 
					</p>
					<p class="ti-desc">
						<span class="num">8.</span>	Effects of resveratrol, oxyresveratrol, and their acetylated derivatives on cellular melanogenesis. Park J, Park JH, Suh HJ, Lee IC, Koh J, Boo YC. <span class="italic">Archives of Dermatological Research.</span> 306(5):475-87. Jul 2014. 
					</p>
					<p class="ti-desc">
						<span class="num">9.</span>	Inhibitory effect of corn silk on skin pigmentation. Choi SY, Lee YM, Kim SS, Ju HM, Baek JH, Park CS and Lee DK. Molecules. 19(3), 2808-2818. Mar. 2014. 
					</p>
					<p class="ti-desc">
						10.	Fucoidan Promotes the Reconstruction of Skin Equivalents. Song YS, Li HL, Marie Carmel Balcos, Yun HY,  Baek KJ, Kwon NS, Choi HR, Park KC, Kim DS. <span class="italic">Korean J Physiol Pharmacol.</span> 18: 327-331, Aug. 2014. 
					</p>
					<p class="ti-desc">
						<span class="num">11.</span> Protective effects of skin permeable epidermal and fibroblast growth factor against ultraviolet-induced skin damage and human skin wrinkles. An JJ, Eum WS, Kwon HS, Koh JS, Lee SY, Baek JH, Cho YJ, Kim DW, Han KH, Park J, Jang SH, Choi SY. <span class="italic">Journal of Cosmetic Dermatology.</span> 12(4):287-95. Dec. 2013. 
					</p>
					<p class="ti-desc">
						<span class="num">12.</span> Characteristic features of aging in Korean women's hair and scalp. Kim SN, Lee SY, Choi MH, Joo KM, Kim SH, Koh JS, Park WS. <span class="italic">The British Journal of Dermatology.</span> 168(6):1215-23. Jun. 2013. 
					</p>
					<p class="ti-desc">
						<span class="num">13.</span> p130Cas controls the susceptibility of cancer cells to TGF-β-induced growth inhibition. Kang YS, Jeong DE, Lee EK, Song WK, Kim W. <span class="italic">Biochemical and Biophysical Research Communications.</span> 438:116-121. 2013. 
					</p>
					<p class="ti-desc">
						<span class="num">14.</span> 11b-hydroxysteroid dehydrogenase type 1 is expressed in human sebaceous glands and regulates glucocorticoid-induced lipid synthesis and toll-like receptor 2 expression in SZ95 sebocytes. Lee SE, Kim JM, Jeong MK, C.C. Zouboulis, Lee SH. <span class="italic">British Association of Dermatologists.</span> 2013 168, 47-55. 
					</p>
					<p class="ti-desc">
						<span class="num">15.</span> Effects of Cervi cornus Colla (deer antler glue) in the reconstruction of a skin equivalent model. Kim JD, Jeong HS, Li HL, Baek KJ, Kwon NS, Yun HY, Choi HR, Park KC, Kim DS. <span class="italic">Arch Dermatol Res.</span> 305:85-89. 2013. 
					</p>
					<p class="ti-desc">
						<span class="num">16.</span> Increased Lymphocyte Infiltration in Rheumatoid Arthritis Is Correlated with an Increase in LTi-like Cells in Synovial Fluid. Koo JH, Kim SC, Jung WJ, Lee YE, Song GG, Kim KS, Kim MY. <span class="italic">Immune Network.</span> 13(6):240-248. 2013. 
					</p>
					<p class="ti-desc">
						<span class="num">17.</span> Assessment of Skin Toxicity Using Skin Equivalents Containing Cervi cornus Colla. Kim JD, Li HL, Jeong HS, Yun HY, Baek KJ, Kwon NS, Choi HR, Park KC, Kim DS. <span class="italic">J. Soc. Cosmet. Scientists Korea.</span> 39(1): 31-38, March 2013. 
					</p>
					<p class="ti-desc">
						<span class="num">18.</span> Evaluation of the clinical efficacy of fractional radiofrequency microneedle treatment in acne scars and large facial pores. Cho SI, Chung BY, Choi MG, Baek JH, Cho HJ, Park CW, Lee CH, Kim HO. <span class="italic">Dermatologic Surgery.</span> 38(7 Pt 1):1017-1024. Jul. 2012. 
					</p>
					<p class="ti-desc">
						<span class="num">19.</span> Screening of plant extracts for human tyrosinase inhibiting effects. Kim M, Park J, Song K, Kim HG, Koh JS, Boo YC. <span class="italic">International Journal of Cosmetic Science.</span> 34(2):202-8. Apr. 2012. 
					</p>
					<p class="ti-desc">
						<span class="num">20.</span> Physical Characteristic and In vitro Trandermal Delivery of PCL-b-PEG Micelles Containing Quercetin and Rutin. Lim SN, Kim SY, Kim MJ and Park SN. <span class="italic">Polymer(Korea).</span> 36(4):420-426, 2012. 
					</p>
					<p class="ti-desc">
						<span class="num">21.</span> Use of non-melanocytic HEK293 cells stably expressing human tyrosinase for the screening of anti-melanogenic agents. Kim M, An SM, Koh JS, Jang DI, Boo YC. <span class="italic">Journal of cosmetic science.</span> 62(5):515-23. Sep-Oct. 2011. 
					</p>
					<p class="ti-desc">
						<span class="num">22.</span> Retinyl retinoate, a novel hybrid vitamin derivative, improves photoaged skin: a double-blind, randomized-controlled trial. Kim H, Koh J, Baek J, Seo Y, Kim B, Kim J, Lee J, Ryoo H, Jung H. <span class="italic">Skin Research and technology.</span> 17(3):380-385. Aug. 2011. 
					</p>
					<p class="ti-desc">
						<span class="num">23.</span> Antibacterial, Antioxidative and Antiaging Effects of Allium cepa Peel Extracts. Kim JE, Kim AR, Kim MJ and Park SN. <span class="italic">Appl. Chem. Eng.</span>22(2):178-184. April 2011. 
					</p>
					<p class="ti-desc">
						<span class="num">24.</span> Indole-3-carbinol Inhibits Prostate Cancer Cell Migration via Degradation of β-Catenin. Jeong YM, Li HL, Kim SY, Yun HY, Baek KJ,Kwon NS, Myung SC, Kim DS. <span class="italic">Oncology Research,</span> 19:237-243. 2011. 
					</p>
					<p class="ti-desc">
						<span class="num">25.</span> Photo-activated 5-hydroxyindole-3-acetic acid induces apoptosis of prostate and bladder cancer cells. Jeong YM, Li HL, Kim SY, Park WJ, Yun HY, Baek KJ, Kwon NS, Jeong JH, Myung SC, Kim DS. <span class="italic">Journal of Photochemistry and Photobiology B: Biology.</span> 103:50-56. 2011. 
					</p>
					<p class="ti-desc">
						<span class="num">26.</span> Antibacterial, Antioxidative Activity and Component Analysis of Pinus koraiensis Leaf Extracts. Kim JE, Kim WY, Kim WK, Park HS, Lee SH, Lee SY, Kim MJ and Park SN. <span class="italic">J. Soc. Cosmet. Scientists Korea.</span> 36(4):303-314. Dec. 2010. 
					</p>
					<p class="ti-desc">
						<span class="num">27.</span> Quercus glauca extract and rutin inhibit the UVB-induced expression of matrix metalloproteinase-1 in human dermal fibroblasts. Lee SJ, Koh JS, Ha BJ, Boo YC. <span class="italic">Journal of the Korean Society for Applied Biological Chemistry.</span> 53(6):677-684. 2010. 
					</p>
					<p class="ti-desc">
						<span class="num">28.</span> Inhibitory Effects of Neo Muscat Grape Vine Extracts on Melanin Biosynthesis. Choi SY, Kong YH, Lee Y, Baek JH, Lee SH, Lee P. <span class="italic">Journal of Applied Biological Chemistry.</span> 53(5):566-569. 2010. 
					</p>
					<p class="ti-desc">
						<span class="num">29.</span> Acanthopanax koreanum Fruit Waste Inhibits Lipopolysaccharide-Induced Production of Nitric Oxide and Prostaglandin E2 in RAW264.7Macrophages. Yang EJ, Moon JY, Lee JS, Koh JS, Lee NH, Hyun CG. <span class="italic">Journal of Biomedicine and Biotechnology.</span> doi: 10.1155/2010/715739. Mar. 2010. 
					</p>
					<p class="ti-desc">
						<span class="num">30.</span> Imidazole inhibits B16 melanoma cell migration via degradation of b-catenin. Jeong YM, Li HL, Kim SY, Yun HY, Baek KJ, Kwon NS, Kim DS. Journal of Pharmacy and Pharmacology. 62: 491–496. 2010. 
					</p>
					<p class="ti-desc">
						<span class="num">31.</span> Indole-3-acetic acid/horseradish peroxidase induces apoptosis in TCCSUP human urinary bladder carcinoma cells. Jeong YM, Oh MH, Kim SY, Li HL, Yun HY, Baek KJ, Kwon NS, Kim WY, Kim DS. <span class="italic">Pharmazie.</span> 65: 122-126. 2010. 
					</p>
					<p class="ti-desc">
						<span class="num">32.</span> Protease-activated receptor-2 mediates the expression of inXammatory cytokines, antimicrobial peptides, and matrix metalloproteinases in keratinocytes in response to Propionibacterium acnes. Lee SE, Kim JM, Jeong SK, Jeon JE, Yoon HJ, Jeong MK, Lee SH. <span class="italic">Arch Dermatol Res.</span> 302:745-756. 2010. 
					</p>
					<p class="ti-desc">
						<span class="num">33.</span> UVB-Activated Indole-3-Acetic Acid Induces Apoptosis of PC-3 Prostate Cancer Cells. Kim SY,  Ryu SJ, Li HL, Park WJ, Yun HY, Baek KJ, Kwon NS, Sohn UD, Kim DS. <span class="italic">ANTICANCER RESEARCH.</span> 30: 4607-4612. 2010. 
					</p>
					<p class="ti-desc">
						<span class="num">34.</span> Evidence for the association of peroxidases with the antioxidant effect of p-coumaric acid in endothelial cells exposed to high glucose plus arachidonic acid. Lee SJ, Mun GI, An SM, Boo YC. <span class="italic">BMB Reports.</span> 42(9):561-567. Sep. 2009. 
					</p>
					<p class="ti-desc">
						<span class="num">35.</span> Differential gene expression in young and senescent endothelial cells under static and laminar shear stress conditions. Mun GI, Lee SJ, An SM, Kim IK, Boo YC. <span class="italic">Free Radical Biology and Medicine.</span> 47(3):291-299. 2009. 
					</p>
					<p class="ti-desc">
						<span class="num">36.</span> Oenothera laciniata inhibits lipopolysaccharide induced production of nitric oxide, prostaglandin E2, and proinflammatory cytokines in RAW264.7 macrophages. Yoon WJ, Ham YM, Yoo BS, Moon JY, Koh JS, Hyun CG. <span class="italic">Journal of Bioscience and Bioengineering.</span> 107( 4), 429-438, 2009. 
					</p>
					<p class="ti-desc">
						<span class="num">37.</span> Laminar shear stress inhibits lipid peroxidation induced by high glucose plus arachidonic acid in endothelial cells. Mun GI, An SM, Park H, Jo H, Boo YC. American Journal of Physiology. <span class="italic">Heart and Circulatory Physiology.</span> 295(5):H1966-1973. 2008. 
					</p>
					<p class="ti-desc">
						<span class="num">38.</span> Protective Effect of Sasa Quelpaertensis and p-Coumaric Acid on Ethanol-induced Hepatotoxicity in Mice. Lee SI, An SM, Mun GI, Lee SJ, Park KM, Park SH, Boo YC. <span class="italic">Journal of the Korean Society for Applied Biological Chemistry.</span> 51(4):148-154. 2008. 
					</p>
					<p class="ti-desc">
						<span class="num">39.</span> Evaluating the Nickel Content in Metal Alloys and the Threshold for Nickel Induced Allergic Contact Dermatitis. Kim YY, Kim MY, Park YM, Kim HO, Koh JS, Lee HK. <span class="italic">Journal of Korean Medical Science.</span> 23(2):315-319. Apr. 2008. 
					</p>
					<p class="ti-desc">
						<span class="num">40.</span> Evaluation of the effects of a preparation containing asiaticoside on periocular wrinkles of human volunteers. Lee J, Jung E, Lee H, Seo Y, Koh J, Park D. <span class="italic">International Journal of Cosmetic Science.</span> 30, 167-173. Feb. 2008. 
					</p>
					<p class="ti-desc">
						<span class="num">41.</span> Effect of Camellia japonica oil on human type I procollagen production and skin barrier function. Jung E, Lee J, Baek J, Jung K, Lee J, Huh S, Koh J, Park D. <span class="italic">Journal of ethnophamacology.</span> 112(1):127-131. May, 2007. 
					</p>
					<p class="ti-desc">
						<span class="num">42.</span> Herbal extracts as a NF-kappa B. Lee JS, Jung ES, Hyun CG, Lee JY, Koh JS, Lee HK, Baek JH, Yoo BS, Moon JY, Kim JH and Park DH. <span class="italic">Journal of the Society of Cosmetic Scientists of Korea.</span> 32(3):135-140. 2006.  
					</p>
					<p class="ti-desc">
						<span class="num">43.</span> Preliminary screening of some jeju island native plants for whitening and antioxidant activity. Moon JY, Kim JH, Hyun JW, Kang KG, Koh JS, Seo YK, Baek JH, Park DH, Lee JS, Jung ES, Yoo BS. <span class="italic">Journal of the Society of Cosmetic Scientists of Korea.</span> 32(3):161-171. Sep. 2006. 
					</p>
					<p class="ti-desc">
						<span class="num">44.</span> The measurement of SPF in water-resistant sunscreen. Yoon TJ, Park SY, Koh JS. <span class="italic">Korean journal of inbestigative dermatology</span> 13(4):105-110. 2006. 
					</p>
					<p class="ti-desc">
						<span class="num">45.</span> Effects of oriental herbs on human skin with non-invasive methods. Park SK, Nam GW, Lee HK, Ahn SY, Kim EJ, Lee SI, Kim YJ, Koh JS, Moon SJ, Chang IS. <span class="italic">The Korean Journal of Herbology.</span> 19(3):91-97. 2004. 
					</p>
					<p class="ti-desc">
						<span class="num">46.</span> Physiological effects of Jaeum-Dan essence on human skin. Park SK, Nam GW, Lee HK, Bae JH, Kim JH, Kim YJ, Koh JS, Kang SJ, Moon SJ, Chang IS. <span class="italic">Korean Journal of Oriental Physiology and Pathology.</span> 18(3):729-733. 2004. 
					</p>
					<p class="ti-desc">
						<span class="num">47.</span> A comparison of the sebum excretion rate and the density of propionibacterium acnes between adult acne and adolescent acne. Park HJ, Choi SW, Che KO, Koh JS, Kim HO, Park YJ. <span class="italic">Korean journal of dermatology.</span> 38(9):1199-1204. 2000. 
					</p>
					<p class="ti-desc">
						<span class="num">48.</span> A comparative study on the erythema response of several surfactants measured by visual scoring and noninvasive bioengineering methods. Park HJ, Choi SW, Koh JS, Kang HA, Kim HO. <span class="italic">Korean journal of investigative dermatology.</span> 6(3):153-160. 1999. 
					</p>
					<p class="ti-desc">
						<span class="num">49.</span> In vitro cell recovery method as an alternative to human damaged skin recovery test. An SS, Nam KT, Park JH, Koh JS. <span class="italic">Korean Journal of Cosmetic Dermatology.</span> 23(3):97-100. 1997. 
					</p>
					<p class="ti-desc">
						<span class="num">50.</span> Melanogenesis inhibitor from Paper Mulberry. Jang DI, Lee BG, Jeon CO, Jo NS, Park JH, Cho SY, Lee H, Koh JS. Cosmetics &amp; Toiletries. 112:59-62. Mar. 1997. 
					</p>
					<p class="ti-desc">
						<span class="num">51.</span> 임상시험을 통한 3-Amino Propane Phosphoric Acid (3-APPA)의 노화 억제 효과 확인 (제1보). 하재현, 김종일, 강학희, 김영택, 고재숙, 변영훈, 이진선, 이옥섭. <span class="italic">Korean Journal of Cosmetic Dermatology.</span> 22(1):60-69. 1996. 
					</p>
					<p class="ti-desc">
						<span class="num">52.</span> In vitro alternatives to photosensitization test. Lee H, Taek NK, Koh JS, Park WJ. <span class="italic">Korean Journal of Cosmetic Dermatology.</span> 22-1, 1996. 
					</p>
					<p class="ti-desc">
						<span class="num">53.</span> In vitro alternatives to skin irritation tests. Shin DS, Kim DB, Ryu SR, Lee SH, Kim PY, Koh JS, Park WJ. <span class="italic">Cosmetics &amp; Toiletries.</span> 111:61-64. Nov.1996. 
					</p>
					<p class="ti-desc">
						<span class="num">54.</span> Safety study of hypoallergenic mascara for human eyes. Kim JC, Park HS, Kim SM, Joo CK, Kim JH, Koh JS, Lee H, Cho SY, Park WJ. <span class="italic">J korean Ophthalmol.</span> 36(12):2074-2080. Dec. 1995. 
					</p>
					<p class="ti-desc">
						<span class="num">55.</span> In vitro alternatives to skin irritation test. Shin DS, Kim DB, Ryu SR, Lee SH, Koh JS, Park WS, Kim PY. <span class="italic">The Journal of Applied Pharmacology.</span> 3(3):242-244. 1995. 
					</p>
					<p class="ti-desc">
						<span class="num">56.</span> A study on a comparison between in vivo and in vitro phototoxicity test. Lee H, Koh JS, Park WJ. <span class="italic">Korean Journal of Cosmetic Dermatology.</span> 19(1):57-76. 1993. 
					</p>
					<p class="ti-desc">
						<span class="num">57.</span> SPF evaluation and safety of sunscreen products. Kim JI, Lee BG, Koh JS. <span class="italic">Korean Journal of Cosmetic Dermatology.</span> 5-26, Sep. 1992.
					</p>
				</div>
				<div class="comm-desc mt40">
					<p class="ti-tit">
						<span class="bar"></span>
						포스터
					</p>
					<p class="ti-desc">
						<span class="num">1.</span>	In vivo analysis of melanolysis by reflectance confocal microscopy after Alexandrite laser and Q switched Nd:YAG laser. Jo DJ, Gwak MJ, Baek JH, Lee MH, Koh JS, Shin MK. ISBS 2016.
					</p>
					<p class="ti-desc">
						<span class="num">2.</span>	How much related to skin wrinkles between facial and body site? Age-related changes in skin wrinkle on the knee assessed by skin bioengineering techniques. Seo YK, Yoo M, Koh JS. <span class="italic">IFSCC /피부기능식품연구회</span> 2015  
					</p>
					<p class="ti-desc">
						<span class="num">3.</span>	Safety Evaluation of the Extract of Camellia japonica Flowers on Human Skin. An SM, Ham H, Lee EJ, Lee E, Shin MK, Kim HO, Lee JA, Choi JH, Park D, Koh JS. <span class="italic">피부기능식품연구회</span> 2015
					</p>
					<p class="ti-desc">
						<span class="num">4.</span>	Correlation of Fitzpatrick skin type, ITA value, MED and MPPDD in Korean. Choi GW, Kim HJ, Yoon DH, Baek JH, Koh JS. <span class="italic">피부기능식품연구회</span> 2015
					</p>
					<p class="ti-desc">
						<span class="num">5.</span>	Twelve-point scale grading system of scanning electron microscopic examination to investigate subtle changes in damaged hair surface. Lee SY, Choi AR, Baek JH, Kim HO, Koh JS. <span class="italic">8th World Congress for Hair Research</span> 2014
					</p>
					<p class="ti-desc">
						<span class="num">6.</span>	A quantitative evauation method of skin texture affected by skin aging using replica images of the face. Lee SY, Ryu JH, Koh JS <span class="italic">IFSCC</span> 43803 2014.
					</p>
					<p class="ti-desc">
						<span class="num">7.</span>	A new method to evaluate waterproof effect of make up products. Seo YK, Kim MJ, Koh JS. <span class="italic">IFSCC</span> 48258 2014
					</p>
					<p class="ti-desc">
						<span class="num">8.</span>	Safety evaluation of Ecklonia cava extract on human skin. An SM, Ham H, Choi EJ, Lee E, Kim HO, Shin MK, Kim JH, Kim SH, Koh JS. <span class="italic">12th Congress of The European Society of Contact Dermatitis.</span> 2014
					</p>
					<p class="ti-desc">
						<span class="num">9.</span>	Characterization of Microthermal Zones Induced by Fractional Radiofrequency Using Reflectance Confocal Microscopy: A Preliminary Study. Shin MK, Park JM, Lim HK, Choi JH, Baek JH, Kim HJ, Koh JS, Lee MH. <span class="italic">International Society for Biophysics and Imaging of the Skin</span> 2013 
					</p>
					<p class="ti-desc">
						<span class="num">10.</span> Dermal matrix affects transparency and sub-surface reflection of incident light on the skin. Kim HJ, Baek JH, Shin MK, Koh JS. <span class="italic">International Society for Biophysics and Imaging of the Skin</span> 2013
					</p>
					<p class="ti-desc">
						<span class="num">11.</span> Low-frequency sonophoresis alters the structure and expression of tight junction proteins and barrier function in mouse skin: implications in ultrasound-mediated transdermal drug delivery. Lee SE, Baek JH, Choi KJ, Lee SH. <span class="italic">International Investigative Dermatology </span>2013 (공동연구)
					</p>
					<p class="ti-desc">
						<span class="num">12.</span> Restrospective analysis of patch test with cosmetic products in Korea. An SM, Ham H, Lee E, Koh JS. <span class="italic">11th Congress of The European Society of Contact Dermatitis.</span> P33. 2012
					</p>
					<p class="ti-desc">
						<span class="num">13.</span> The sensitivity and specificity of nickel allergy in Korean women. An SM, Ham H, Lee E, Koh JS. <span class="italic">11th Congress of The European Society of Contact Dermatitis.</span> P42. 2012
					</p>
					<p class="ti-desc">
						<span class="num">14.</span> Quantative evaluation of subtle changes on acne skin by the 3D image analysis sysment. Choi KM, Kim SJ, Baek JH, Koh JS. <span class="italic">IFSCC P206 / 대한화장품학회</span> P24 2012.
					</p>
					<p class="ti-desc">
						<span class="num">15.</span> A new method to evaluate slimming/anti-cellulite effect using three dimensional image anases. Yoo M, Seo YK, Koh JS. <span class="italic">IFSCC / 대한화장품학회</span> P49 P293 2012.
					</p>
					<p class="ti-desc">
						<span class="num">16.</span> Effects of p-coumaric acid on erythema and pigmentation in human skin exposed to ultraviolet. Seo YK, Kim SJ, Koh JS. <span class="italic">IFSCC</span> P294 2012.
					</p>
					<p class="ti-desc">
						<span class="num">17.</span> Quantative evaluation of adhesion and coverage effect of facial base makeup. Lee SY, Choi AR, Baek JH, Lee DK, Koh JS <span class="italic">International Society for Biophysics and Imaging of the Skin</span> FP36 2012.
					</p>
					<p class="ti-desc">
						<span class="num">18.</span> Characteristic aging features in Korean women’s hair. Kim S, Kim A, Lee SY, Park WS. <span class="italic">9th Meeting of The Korean Hair Research Society / 16th Annual Meeting of the European Hair Research Society</span> P043 2012 (공동연구)
					</p>
					<p class="ti-desc">
						<span class="num">19.</span> A split-face study of the effect of botulinum toxin typeB on erythema index. Lee SJ, Koh JS, Shin MK. <span class="italic">22nd World Congress of Dermatology.</span> P0518. 2011 (공동연구)
					</p>
					<p class="ti-desc">
						<span class="num">20.</span> Analysis of the Temporal Changes in Biophysical Parameters after Fractional Laser Treatments by using Confocal Laser Scanning Microscope. Shin MK, Kim MJ, Koh JS, Lee SJ, Lee MH. <span class="italic">22nd World Congress of Dermatology.</span> P1860. 2011 (공동연구)
					</p>
					<p class="ti-desc">
						<span class="num">21.</span> Evaluation of the Clinical Efficacy using the Fractional Radiofrequency Microneedles (FRM): Intracel. Cho SI, Chung BY, Ahn IS, Lee HB, Kim SJ, Baek JH, Koh JS, Kim HO, Park CW, Lee CH. <span class="italic">22nd World Congress of Dermatology.</span> P1833. 2011 (공동연구)
					</p>
					<p class="ti-desc">
						<span class="num">22.</span> A new approach to objective visualized assessment of firming effects in breast using photo-analysis. 26th IFSCC Congress, Poster presentation, 09.20~09.23, 2010. (공동연구)
					</p>
					<p class="ti-desc">
						<span class="num">23.</span> A Statistical Method for Analyzing Data Collected by the Testing of Cosmetics on Human Skin. Seo YK, Lee HK, Koh JS. <span class="italic">생물공학회.</span> 2007 
					</p>
					<p class="ti-desc">
						<span class="num">24.</span> Comparative Measurement of Irritation of Several Surfactants in Korean Women of Various Ages. Lee MY, Baek JH, Lee HK, Seo YK, Koh JS. <span class="italic">생물공학회.</span> 2007  
					</p>
					<p class="ti-desc">
						<span class="num">25.</span> A comparison between ultrasonography and transparency profilometry. Lee HK, Seo YK, Baek JH, Koh JS. <span class="italic">생물공학회.</span> 2007
					</p>
					<p class="ti-desc">
						<span class="num">26.</span> 금속 제품에서 침출되는 니켈의 양과 니켈로 유발되는 알레르기성 접촉 피부염의 역치. 김윤영, 김미연, 박영민, 김형옥, 고재숙, 이해광. <span class="italic">대한 피부 과학회.</span> 44(2s):148. 2006 (공동연구)
					</p>
					<p class="ti-desc">
						<span class="num">27.</span> 기능성 화장품의 인체시험 설계 및 통계적용 방법에 대한 고찰. 이상준, 고재숙, 서영경, 이원철. <span class="italic">대한피부과학회.</span> 44(2s):181. 2006 (공동연구)
					</p>
					<p class="ti-desc">
						<span class="num">28.</span> The quantitative evaluation of comedones on female facial skin using an image analyzing system. Koh JS, Seo YK, Lee HK, Baek JH, An SS, Moon SJ. <span class="italic">Contact Dermatitis.</span> Poster Presentations, 55:31-60, Issue s1, Oct. 2006 
					</p>
					<p class="ti-desc">
						<span class="num">29.</span> The quantitative evaluation of comedones on female facial skin using an image analyzing system. <span class="italic">Congress of The European Society of Contact Dermatitis.</span> Koh JS, Seo YK, Lee HK, Baek JH, An SS, Moon SJ. 
					</p>
					<p class="ti-desc">
						<span class="num">30.</span> Stinging materials의 기제에 따른 자극감(subjective irritation) 유발정도 비교. 김대호, 고재숙, 노기영, 양정은, 박현정, 이준영, 김형옥. <span class="italic">한국피부장벽학회지.</span> 1(1):73. Sep. 1999 (공동연구)
					</p>
					<p class="ti-desc">
						<span class="num">31.</span> 수종 계면활성제 첩포에 의해 유발된 홍반반응의 육안적 관찰 및 비침습 기기적 측정간의 비교분석. 양정은, 박종갑, 이하린, 고재숙, 최성우, 김형옥, 김정원. <span class="italic">대한피부과학회지.</span> 36(2s):126. Oct. 1998. (공동연구)
					</p>
					<p class="ti-desc">
						<span class="num">32.</span> Skin color of normal subjects of Korean to sites and sex with two different colorimeters. Kim HO, Koh JS, Chae KS, Lee JY. <span class="italic">European Society of Contact Dermatitis(ESCD).</span> Jul. 5th, 1998. 
					</p>
					<p class="ti-desc">
						<span class="num">33.</span> 수종의 계면활성제 첩포에 의해 유발된 피부독성도의 육안적 관찰 및 비침습 기기적 측정간의 비교 분석. 박종갑, 채구석, 고재숙, 최성우, 이준영, 김형옥, <span class="italic">제 16회 접촉피부염 및 피부알레르기 심포지엄.</span> May. 1998 (공동연구)
					</p>
					<p class="ti-desc">
						<span class="num">34.</span> 수입화장품의 안전성 평가에 관한 연구(1):Human patch test에 의한 피부자극도 조사. 한기영, 신수용, 이정숙, 이명숙, 박양순, 홍윤정, 김화순, 최병현, 채영주, 김명희, 윤원용, 고재숙. <span class="italic">서울특별시 보건환경연구원보.</span> 33;105-113. 1997 (공동연구)
					</p>
					<p class="ti-desc">
						<span class="num">35.</span> Patch test reactions of Koreans to European Standard Series. Koh J-S, Park J-H, An S-S, Kim J-I, Kim G-J, Lee E-S, Kang W-H. <span class="italic">International Society Contact Dermatitis(ISCD).</span> Jun.11th-13th.1997.
					</p>
					<p class="ti-desc">
						<span class="num">36.</span> The expression of transglutaminase 1 in normal human fibroblasts after treatment of irritant. An S-S, Koh J-S, Yang J-M, Park J-H, Park W-J, Jung S-W, Kim S-Y. <span class="italic">대한생화학분자 생물학회.</span> Oct. 30th.- Nov. 1st. 1996. (공동연구)
					</p>
					<p class="ti-desc">
						<span class="num">37.</span> Transglutaminase 1 is increased in allergic and irritant contact dermatitis. Park J-H, Koh J-S, An S-S, Park W-J, Kim S-Y. <span class="italic">한국분자생물학회.</span> Oct. 24th - 26th, 1996. (공동연구)
					</p>
					<p class="ti-desc">
						<span class="num">38.</span> 접촉성 알레르겐 진단법인 Murine Lymph Node Assay에 미치는 Mitogen의 영향. 박종호, 고재숙, 박원재. <span class="italic">제14회 접촉피부염 및 피부알레르기 심포지움,</span> May. 11th, 1996. (공동연구)
					</p>
					<p class="ti-desc">
						<span class="num">39.</span> 최근 개발된 수종의 국산 화장품 원료를 이용한 첩포 시험 성적. 이맹로, 최광성, 이은소, 강원형, 이성낙, 고재숙, 박원재. <span class="italic">제48차 대한피부과학회.</span> Oct. 25th-26th. 1996. (공동연구)
					</p>
					<p class="ti-desc">
						<span class="num">40.</span> 인체피부 첩포시험을 이용한 메이크업 화장품의 안전성 평가. 김계정, 박수홍, 고재숙, 박원재.<span class="italic"> 제48차 대한피부과학회.</span> Oct. 25th-26th. 1996. (공동연구)
					</p>
					<p class="ti-desc">
						<span class="num">41.</span> 알레르기성 및 원발성 접촉피부염이 유발된 마우스 피부에서 트란스글루 타미나제 1의 변화에 대한 고찰. 박종호, 양준모, 고재숙, 안수선, 박원재, 박원만, 김수열. <span class="italic">제48차 대한피부과학회.</span> Oct. 25th-26th. 1996. (공동연구)
					</p>
					<p class="ti-desc">
						<span class="num">42.</span> 피부자극물질에 대한 Ceramides의 각질방어효과. 남기택, 박종호, 안수선, 고재숙, 김덕희, 구명수. <span class="italic">피부각질층과 장벽연구회.</span> Aug. 31th. 1996. (공동연구)
					</p>
					<p class="ti-desc">
						<span class="num">43.</span> 정상 인체섬유아세포에 있어서 피부자극제(SLS)처리에 의한 트란스글루타미나 아제 1, 2의 발현 증가. 안수선, 고재숙, 양준모, 박종호, 박원재, 박원만, 정성원, 김수열. <span class="italic">제48차 대한피부과학회,</span> Oct. 25th.- 26th. 1996. (공동연구)
					</p>
					<p class="ti-desc">
						<span class="num">44.</span> Anti-Melanogenesis effect of 2,5-dimethyl-4-hydroxy-3[2H]-furanone. Jeon C-O, Oh J-Y, Koh J-S, Jung S-W, Kim J-Y. <span class="italic">19th IFSCC International Congress.</span> Oct.23th.-25th. 1996. (공동연구)
					</p>
					<p class="ti-desc">
						<span class="num">45.</span> The synthesis and safety of 3-Aminopropyl dihydrogen phosphate, a New Anti-Ageing Agent. Pyun YH, Koh JS, Cho YG, Cheon JM, Lee BS. <span class="italic">19th IFSCC International Congress.</span> Oct. 23th.-25th. 1996. (공동연구)
					</p>
					<p class="ti-desc">
						<span class="num">46.</span> Membrane-bound transglutaminase activity is increased by allergenic and irritant contact dermatitis in mouse skin. Park J-H, Yang J-M, Koh J-S, An S-S, Park W-J, Park W-M, Kim S-Y. <span class="italic">The International Union of Biochemistry and Molecular Biology(IUBMB).</span> Jun. 30th.- Jul. 4th. 1996. (공동연구)
					</p>
					<p class="ti-desc">
						<span class="num">47.</span> Treatment of mitogen in the murine local lymph node assay: ability to discriminate between allergens and irritants. Park J-H, Koh J-S, Yang K-M, Park W-J. <span class="italic">The Society for Investigative Dermatology Annual meeting(SID),</span> May 1st.- 5th. 1996. (공동연구)
					</p>
					<p class="ti-desc">
						<span class="num">48.</span> The expression of transglutaminase 1 and 1 are increased in normal human fibroblasts by SLS treatment. An S-S, Koh J-S, Yang JM, Park JH, Park WM, Jung SW, Kim SY. <span class="italic">The International Union of Biochemistry and Molecular Biology(IUBMB),</span> Jun. 30th.- Jul. 4th. 1996. (공동연구)
					</p>
					<p class="ti-desc">
						<span class="num">49.</span> Melanogenic Inhibitor from Paper–Mulberry. Jang D-I, Lee B-G, Jeon C-O, Jo N-S, Park J-H, Cho S-Y, Koh J-S. <span class="italic">2th Scientific conference of Asian Societies of Cosmetic Scientists (ASCS).</span> Jun. 7, 1995. (공동연구)
					</p>
					<p class="ti-desc">
						<span class="num">50.</span> <span class="italic">In vitro</span> Alternatives to skin Irritation Test. Shin DS, Ryu SR, Kim DB, Lee SH, Koh JS, Park WJ, Kim PY. <span class="italic">2th Scientific conference of Asian Societies of Cosmetic Scientists (ASCS).</span> Jun. 7, 1995. (공동연구)
					</p>
					<p class="ti-desc">
						<span class="num">51.</span> <span class="italic">In vitro</span> alternatives to skin irritation test. 신대섭, 김대병, 류승렬, 이선희, 고재숙, 박원재. <span class="italic">한국독성학회.</span> Nov. 23th, 1995. (공동연구)
					</p>
					<p class="ti-desc">
						<span class="num">52.</span> 사람 피부세포를 이용한 <span class="italic">In Vitro</span> 피부자극 시험법 개발연구. 신대섭, 김대병, 류승렬, 이선희, 고재숙, 박원재. <span class="italic">대한약학회.</span> Jun. 22th-24th, 1995. (공동연구)
					</p>
					<p class="ti-desc">
						<span class="num">53.</span> 치과재료의 안전성에 관한 연구 - 치과재료의 피부감작성에 관한 연구. 선우연, 김필선, 정승태, 최경백, 손경희, 김형수, 박종호, 고재숙, 한형미, 문화회, <span class="italic">국립보건안전연구원보.</span> 8:42-46. 1995 (공동연구)
					</p>
					<p class="ti-desc">
						<span class="num">54.</span> CAMVA(Chorioallantoic Membrane Vascular Assay)에 의한 피부자극 물질 검색에 관한 연구. 고재숙, 이호, 조수연, 박원재. <span class="italic">대한피부연구학회지.</span> Mar.18, 1995. 
					</p>
					<p class="ti-desc">
						<span class="num">55.</span> 수종의 화장품을 대상으로 가토에서의 면포유발 측정법들에 대한 비교 연구. 이호, 고재숙, 이해광, 김종일, 박원재. 대<span class="italic">한피부연구학회지.</span> Mar. 19, 1994. (공동연구)
					</p>
					<p class="ti-desc">
						<span class="num">56.</span> 세제원료에 의한 누적자극성 평가에 관한 연구. 문기찬, 고재숙, 김종일, <span class="italic">대한피부 과학회.</span> Oct.15, 1993. (공동연구)
					</p>
				</div>
			</div>
			
		</div>
	</div><!-- container -->
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>