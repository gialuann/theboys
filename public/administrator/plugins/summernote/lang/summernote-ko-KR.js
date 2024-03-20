e="Path"></data>
					</template>
					<template tid="ProcessContextPayload">
						<data inType="win:UInt32" name="Pid"></data>
						<data inType="win:UnicodeString" name="Reason"></data>
						<data inType="win:UInt32" name="Flags" outType="win:HexInt32"></data>
						<data inType="win:UInt32" name="ProcessFilterFlags" outType="win:HexInt32"></data>
						<data inType="win:UnicodeString" name="ProcessName"></data>
						<data inType="win:UInt64" name="VmHardenType" outType="win:HexInt64"></data>
						<data inType="win:UInt64" name="ExemptVmHardenedTypes" outType="win:HexInt64"></data>
					</template>
					<template tid="FileScanPayload">
						<data inType="win:UnicodeString" name="FileName" outType="xsd:string"></data>
						<data inType="win:UnicodeString" name="Reason" outType="xsd:string"></data>
						<data inType="win:UInt64" name="IoStatusBlockForNewFile" outType="win:HexInt64"></data>
					</template>
					<template tid="FileScanResultPayload">
						<data inType="win:UnicodeString" name="FileName" outType="xsd:string"></data>
						<data inType="win:UInt32" name="Reason"></data>
						<data inType="win:UInt32" name="ScanStatus" outType="win:HexInt32"></data>
						<data inType="win:UInt32" name="State"></data>
						<data inType="win:UInt32" name="ScanAttributes" outType="win:HexInt32"></data>
						<data inType="win:UInt64" name="FileId" outType="win:HexInt64"></data>
						<data inType="win:UInt64" name="USN" outType="win:HexInt64"></data>
					</template>
				</templates>
				<events>
					<event keywords="Cache" level="win:Informational" opcode="win:Info" symbol="AMFilter_CacheFlushEvent" task="AMFilter_CacheFlush" value="1" version="0"></event>
					<event keywords="Cache" level="win:Verbose" opcode="win:Info" symbol="AMFilter_CacheRemoveEvent" task="AMFilter_CacheRemove" template="FileIDPayload" value="2" version="0"></event>
					<event keywords="Cache" level="win:Verbose" opcode="win:Info" symbol="AMFilter_CacheHitEvent" task="AMFilter_CacheHit" template="FileIDPayload" value="3" version="0"></event>
					<event keywords="Cache" level="win:Verbose" opcode="win:Info" symbol="AMFilter_CacheMissEvent" task="AMFilter_CacheMiss" template="FileIDPayload" value="4" version="0"></event>
					<event keywords="Cache" level="win:Verbose" opcode="win:Info" symbol="AMFilter_CacheAddEvent" task="AMFilter_CacheAdd" template="FileIDPayload" value="5" version="0"></event>
					<event keywords="IoBehavior" level="win:Informational" opcode="win:Info" symbol="AMFilter_SeqReadFlagEvent" task="AMFilter_SeqReadFlag" value="6" version="0"></event>
					<event keywords="TrustedProcess" level="win:Informational" opcode="win:Info" symbol="AMFilter_TrustedProcessEvent" task="AMFilter_TrustedProcess" template="TrustedProcessPayload" value="7" version="0"></event>
					<event keywords="ProcessContext" level="win:Informational" opcode="win:Info" symbol="AMFilter_ProcessContextEvent" task="AMFilter_ProcessContext" template="ProcessContextPayload" value="8" version="0"></event>
					<event keywords="FileScan" level="win:Informational" opcode="win:Info" symbol="AMFilter_FileScanEvent" task="AMFilter_FileScan" template="FileScanPayload" value="9" version="0"></event>
					<event keywords="StreamContext" level="win:Verbose" opcode="win:Info" symbol="AMFilter_DeleteStreamContextEvent" task="AMFilter_DeleteStreamContext" template="FileIDPayload" value="10" version="0"></event>
					<event keywords="FileScan" level="win:Informational" opcode="win:Info" symbol="AMFilter_FileScanResultEvent" task="AMFilter_FileScanResult" template="FileScanResultPayload" value="11" version="0"></event>
				</events>
				<keywords>
					<keyword mask="0x1" name="FileScan" symbol="FileScanKeyword"></keyword>
					<keyword mask="0x2" name="ProcessContext" symbol="ProcessContextKeyword"></keyword>
					<keyword mask="0x4" name="Cache" symbol="CacheKeyword"></keyword>
					<keyword mask="0x8" name="TrustedProcess" symbol="TrustedProcessKeyword"></keyword>
					<keyword mask="0x10" name="IoBehavior" symbol="IoBehaviorKeyword"></keyword>
					<keyword mask="0x20" name="StreamContext" symbol="StreamContextKeyword"></keyword>
				</keywords>
			</provider>
		</events>
	</instrumentation>
	<localization>
		<resources culture="en-US">
			<stringTable>
				<string id="Microsoft-Antimalware-AMFilter.provider.name" value="Microsoft-Antimalware-AMFilter"></string>
			</stringTable>
		</resources>
	</localization>
	<trustInfo>
		<security>
			<accessControl>
				<securityDescriptorDefinitions>
					<securityDescriptorDefinition name="DefenderDriversSD" sddl="D:(A;;GA;;;S-1-5-80-956008885-3418522649-1831038044-1853292631-2271478464)(A;OICIIO;GA;;;S-1-5-80-956008885-3418522649-1831038044-1853292631-2271478464)(A;;CCLCSWRPWPDTLOCRRC;;;SY)(A;;CCDCLCSWRPWPDTLOCRRCWDWO;;;BA)(A;;CCLCSWRPLOCRRC;;;IU)(A;;CCLCSWRPLOCRRC;;;SU)S:(AU;FA;CCDCLCSWRPWPDTLOCRSDRCWDWO;;;WD)"></securityDescriptorDefinition>
				</securityDescriptorDefinitions>
			</accessControl>
		</security>
	</trustInfo>
	<cbb:debuggingInfo xmlns:cbb="urn:schemas-microsoft-com:asm.internal.v1">
		<cbb:sourceManifest sourcePath="%sdxmaproot%\amcore\antimalware\source\manifest\microsoft-antimalware-amfilter.man"></cbb:sourceManifest>
	</cbb:debuggingInfo>
</assembly>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    